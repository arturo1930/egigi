<?php

session_start();

require_once __DIR__ . '../../connection/Connection.php';
$connection = new Connection();
$query = "";


try {


    switch ($_REQUEST['op']) {
        case "login":
            $query = "SELECT * FROM usuario WHERE correo ='{$_REQUEST['principal']}' AND credencial = '{$_REQUEST['credencial']}'";
          
            $row = $connection->getRow($query);
            
            if ($row) {
                
                    $_SESSION['usuario'] = $row['correo'];
                    $_SESSION['nombreUsuario'] = $row['nombre'];
                    $_SESSION['idUsuario'] = $row['idUsuario'];
                
                echo json_encode(array("response" => "ok"));
            } else {
                echo json_encode(array("response" => "error"));
            }
            break;
        default:

            break;
    }
} catch (Exception $e) {
    echo json_encode(array("response" => $e->getMessage()));
}