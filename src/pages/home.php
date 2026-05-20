<?php
// Test koneksi database
try {
    $db = getDB();
    $status = "Koneksi ke database <strong>ppw</strong> berhasil!";
} catch (Exception $e) {
    $status = "Koneksi gagal.";
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Praktikum Pemrograman Web 1</title>
</head>

<body>
    <h1>Praktikum Pemrograman Web</h1>
    <p><?= $status ?></p>
    <ul>
        <li><a href="/?page=users">Halaman Users</a></li>
        <li><a href="http://localhost:8081" target="_blank">Adminer (DB GUI)</a></li>
    </ul>
</body>

</html>