<?php
include("connection.php");

$id_pelanggan=$_GET["id_pelanggan"];

$sql = "delete from pelanggan where id_pelanggan= '".$id_pelanggan."'";

$result = mysqli_query($connect, $sql);

if ($result) {
    header("location:list-pelanggan.php");
} else {
    printf('Gagal Menghapus Data'.mysqli_error($connect));
    exit();
}
?>