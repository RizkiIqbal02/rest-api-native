<?php

require_once '../controller/kategoriController.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];


switch ($requestMethod) {
    case 'GET':
        if (isset($_GET['id'])) {
            getKategoriById($_GET['id']);
        } else {
            getKategori();
        }
        break;
    case 'DELETE':
        deleteKategori();
        break;
    case 'POST':
        createKategori();
        break;
    case 'PUT':
        updateKategori();
        break;
    default:
        # code...
        break;
}