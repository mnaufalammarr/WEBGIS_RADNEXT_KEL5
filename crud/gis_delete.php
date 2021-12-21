<?php
include 'config.php';
$id = $_GET['id_point'];
$conn->query("DELETE FROM tb_point WHERE id_point='$id'");
echo "<script>alert('Data Berhasil terhapus');</script>";
echo "<script>location='?page=viewP';</script>";
?>