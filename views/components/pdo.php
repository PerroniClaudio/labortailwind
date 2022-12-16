<?php 

$DB_HOST = "35.240.126.126";
$DB_USER = "admin_labormed";
$DB_PASS = "eDfqc0IhxLIKdrb99";
$DB_NAME = "labormedicaladmin";
try {
    $db = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS, array(PDO::ATTR_PERSISTENT => true));
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
$db->exec("SET time_zone='Europe/Rome';");

?>