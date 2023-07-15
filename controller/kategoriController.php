<?php
require_once ('../config/config.php');

function getKategori()
{
    // fetch from db
    $query = "SELECT * from kategori";
    $conn = getConnection();
    $statement = $conn->prepare($query);
    $statement->execute();
    $result = $statement->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);

    // set response for the client
    $response = [
        'message' => 'success',
        'data' => $data
    ];

    header('Content-Type: application/json'); // kalau kita bikin rest api, bagusnya pakai ini
    echo json_encode($response); // untuk menampilkan json dari $response
}

function getKategoriById($id)
{
    $conn = getConnection();
    $statement = $conn->prepare('SELECT * FROM kategori WHERE id = ?');
    $statement->bind_param('s', $id);
    $statement->execute();
    $result = $statement->get_result();
    $data = $result->fetch_assoc();

    // Set response for the client
    if ($data) {
        $response = [
            'message' => 'success',
            'data' => $data
        ];
    } else {
        $response = [
            'message' => 'Kategori tidak ditemukan'
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

function createKategori()
{
    $conn = getConnection();
    $query = 'INSERT INTO `kategori` (`id`, `nama`) VALUES (NULL, ?)';
    $statement = $conn->prepare($query);
    $statement->bind_param('s', $_GET['nama']);
    $statement->execute();

    if (!$statement->get_result())
    {
        header('Content-Type: application/json'); // kalau kita bikin rest api, bagusnya pakai ini
        echo json_encode([
            'message' => 'data berhasil di tambahkan'
        ]); // untuk menampilkan json dari $response
    }
}

function updateKategori()
{
    $conn = getConnection();
    $query = 'UPDATE `kategori` SET `nama` = ? WHERE `kategori`.`id` = ?';
    $statement = $conn->prepare($query);
    $statement->bind_param('ss', $_GET['nama'], $_GET['id']);
    $statement->execute();

    if (!$statement->get_result())
    {
        header('Content-Type: application/json'); // kalau kita bikin rest api, bagusnya pakai ini
        echo json_encode([
            'message' => 'data berhasil di ubah'
        ]); // untuk menampilkan json dari $response
    }
}

function deleteKategori()
{
    // how to get data from request body
    // $request = file_get_contents('php://input');
    // $id = $request['id'];

    // how to get data from url param
    $id = $_GET['id'];

    $conn = getConnection();
    $statement = $conn->prepare('DELETE FROM `kategori` WHERE `kategori`.`id` = ?');
    $statement->bind_param('s', $_GET['id']);
    $statement->execute();

    // set response for the client
    $response = [
        'message' => 'success',
    ];

    header('Content-Type: application/json'); // kalau kita bikin rest api, bagusnya pakai ini
    echo json_encode($response); // untuk menampilkan json dari $response
}
