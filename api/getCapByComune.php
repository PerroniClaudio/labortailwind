<?php 

include("./config.php");

$response = [
    'id' => '',
    'errors' => 0,
    'error_type' => '',
    'error_message' => ''
];

try {

    $sql_check = "SELECT * FROM italy_cities WHERE comune = :comune";
    $statement_check = $db->prepare($sql_check);
    $statement_check->execute(array("comune" => $_GET['comune']));

    if($statement_check->rowCount() > 0) {

        $comune = $statement_check->fetch();

        $istat = str_pad($comune['istat'], 6, '0', STR_PAD_LEFT);

        $sql_cap = "SELECT * FROM cap WHERE codice_istat_comune = :codice_istat_comune ";
        $statement_cap = $db->prepare($sql_cap);
        $statement_cap->execute(array("codice_istat_comune" => $istat));
        $cap = $statement_cap->fetch();

        $response['cap'] = $cap['cap'];
        $response['data'] = json_encode($comune);
        
        echo json_encode($response);


    } else {
        $response['error_type'] = "notfound";
        $response['error_message'] = "Nessun cap trovato per comune {$_GET['comune']}";
        $response['errors'] = 1;
    
        echo json_encode($response);
    
        exit();
    }
    

} catch(Exception $e) {
    $response['error_type'] = "generic";
    $response['error_message'] = $e->getMessage();
    $response['errors'] = 1;

    echo json_encode($response);

    exit();
}
