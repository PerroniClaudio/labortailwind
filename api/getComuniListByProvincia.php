<?php 

include("./config.php");

$response = [
    'id' => '',
    'errors' => 0,
    'error_type' => '',
    'error_message' => ''
];

try {

    $sql_check = "SELECT * FROM regioni_provincie WHERE provincia = :provincia";
    $statement_check = $db->prepare($sql_check);
    $statement_check->execute(array("provincia" => $_GET['provincia']));

    if($statement_check->rowCount() > 0) {

        $provincia = $statement_check->fetch();

        $sql_comuni = "SELECT * FROM italy_cities WHERE provincia = :provincia ";
        $statement_comuni = $db->prepare($sql_comuni);
        $statement_comuni->execute(array("provincia" => $provincia['sigla']));

        $comuni_list = [];

        while($comune = $statement_comuni->fetch()) {
            $comuni_list[] = $comune['comune'];
        }

        $response['comuni'] = $comuni_list;
        
        echo json_encode($response);


    } else {
        $response['error_type'] = "notfound";
        $response['error_message'] = "Nessun comune trovato per provincia {$_GET['provincia']}";
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
