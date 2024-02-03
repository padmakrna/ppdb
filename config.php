<?php
$server = 'localhost';
$userdb = 'root';
$passdb = '';
$namadb = 'pesat10_ppdb';
$db = mysqli_connect('localhost','root','','pesat10_ppdb');

if (!$db) {
    die('gagal terhubung ke database;' . mysqli_connect_error());
};