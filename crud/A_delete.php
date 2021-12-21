<?php
include 'config.php';
$id = $_GET['id'];
$conn->query("DELETE FROM tb_admin WHERE id_adm='$id'");
echo "<script>alert('Data Berhasil terhapus');</script>";
echo "<script>location='?page=viewA';</script>";
?>