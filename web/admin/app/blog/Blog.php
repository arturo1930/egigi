<?php

session_start();

require_once __DIR__ . '../../connection/Connection.php';
$connection = new Connection();
$query = "";


try {


    switch ($_REQUEST['op']) {
        case "blog":
            $query = "SELECT b.*, u.nombre as usuario FROM blog b INNER JOIN usuario u ON b.idUsuario = u.idUsuario";

            $list = $connection->getAll($query);

            echo json_encode($list);

            break;
        case "addBlog":
            $query = "INSERT INTO blog(idUsuario, nombre, img, imgAlt, fecha, hora) VALUES "
                    . "({$_SESSION['idUsuario']}, '{$_REQUEST['nombre']}', '{$_REQUEST['img']}', '{$_REQUEST['imgAlt']}', CURDATE(), CURTIME()); ";

            if ($connection->executeQuery($query)) {
                echo json_encode(array("response" => "ok"));
            } else {
                echo json_encode(array("response" => "error"));
            }



            break;
        case "eliminarContacto":
            $query = "DELETE FROM contacto WHERE idContacto = {$_REQUEST['idContacto']}";
            if ($connection->executeQuery($query)) {
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