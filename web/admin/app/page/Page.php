<?php

session_start();

require_once __DIR__ . '../../connection/Connection.php';
$connection = new Connection();
$query = "";


try {


    switch ($_REQUEST['op']) {
        case "infoProvider":
            $query = "SELECT * FROM PROVEEDOR WHERE idProveedor = {$_REQUEST['idProvider']}";
            $queryInfo = "SELECT * FROM parrafo_proveedor WHERE idProveedor = {$_REQUEST['idProvider']} ORDER BY idParrafoProveedor";
            $provider = $connection->getRow($query);
            $providerInfo = $connection->getAll($queryInfo);
            
            $response['provider']  = $provider;
            $response['providerInfo']  = $providerInfo;
            
            echo json_encode($response);

            break;
        case "infoBlog":
            $query = "SELECT * FROM BLOG WHERE idBlog = {$_REQUEST['idBlog']}";
            $queryInfo = "SELECT * FROM PARRAFO WHERE idBlog = {$_REQUEST['idBlog']} ORDER BY idParrafo";
            $provider = $connection->getRow($query);
            $providerInfo = $connection->getAll($queryInfo);
            
            $response['blog']  = $provider;
            $response['blogInfo']  = $providerInfo;
            
            echo json_encode($response);
            break;
        default:

            break;
    }
} catch (Exception $e) {
    echo json_encode(array("response" => $e->getMessage()));
}