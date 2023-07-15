<?php

function getConnection()
{
    // parsing file .env nya ceritanya
    $config = parse_ini_file('../.env');

    // terus teh tampung semua data nya ke dalam masing masing variable
    $dbHost = $config['DB_HOST'];
    $dbDatabase = $config['DB_DATABASE'];
    $dbUsername = $config['DB_USERNAME'];
    $dbPassword = $config['DB_PASSWORD'];

    // membuat koneksi ke database
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase);

    if ($conn->connect_error) {
        die("koneksi ke database error");
    }

    return $conn;
}


function createDatabase()
{
    // parsing file .env nya ceritanya
    $config = parse_ini_file('../.env');

    // terus teh tampung semua data nya ke dalam masing masing variable
    $dbHost = $config['DB_HOST'];
    $dbDatabase = $config['DB_DATABASE'];
    $dbUsername = $config['DB_USERNAME'];
    $dbPassword = $config['DB_PASSWORD'];

    // membuat koneksi ke database
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword);

    $query = 'CREATE DATABASE '.$dbDatabase;


    try {
        $conn->query($query);
        schema();
        $status = urlencode('success');
        header('Location: ../index.php?' . http_build_query(['status' => $status, 'database' => $dbDatabase]));
        exit;
    } catch (Exception $e) {
        $status = urlencode('error');
        header('Location: ../index.php?' . http_build_query(['status' => $status, 'database' => $dbDatabase]));
        exit;
    }
}

function deleteDatabase()
{
    // parsing file .env nya ceritanya
    $config = parse_ini_file('../.env');

    // terus teh tampung semua data nya ke dalam masing masing variable
    $dbHost = $config['DB_HOST'];
    $dbDatabase = $config['DB_DATABASE'];
    $dbUsername = $config['DB_USERNAME'];
    $dbPassword = $config['DB_PASSWORD'];

    // membuat koneksi ke database
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword);

    $query = 'DROP DATABASE '.$dbDatabase;

    try {
        $conn->query($query);
        $status = urlencode('dropSuccess');
        header('Location: ../index.php?' . http_build_query(['status' => $status, 'database' => $dbDatabase]));
        exit;
    } catch (Exception $e) {
        $status = urlencode('dropError');
        header('Location: ../index.php?' . http_build_query(['status' => $status, 'database' => $dbDatabase]));
        exit;
    }
}

function schema()
{
    $conn = getConnection();
    $query = "CREATE TABLE kategori (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(10) NOT NULL
            )";
    $conn->query($query);
}