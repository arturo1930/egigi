<?php

session_start();

require_once __DIR__ . '../../connection/Connection.php';
$connection = new Connection();
$query = "";


try {


    switch ($_REQUEST['op']) {
        case "contacto":
            $query = "SELECT * FROM contacto";
          
            $list = $connection->getAll($query);
                            
            echo json_encode($list);
            
            break;
        case "eliminarContacto":
            $query ="DELETE FROM contacto WHERE idContacto = {$_REQUEST['idContacto']}";
            if($connection->executeQuery($query)){
                echo json_encode(array("response"=>"ok"));
            } else {
                echo json_encode(array("response"=>"error"));
            }
            break;
        default:

            break;
    }
} catch (Exception $e) {
    echo json_encode(array("response" => $e->getMessage()));
}