<?php
include("connection.php");
if (isset($_POST["simpan_pelanggan"])) {
    # proses insert new data
    // tampung data input anggota dari user
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $kontak = $_POST["kontak"];
    $alamat = $_POST["alamat_pelanggan"];
    
    // membuat perintah SQL utk insert data ke tabel pelanggan
    $sql = "insert into pelanggan values ('',
    '$nama_pelanggan','$kontak','$alamat')";

    // eksekusi perintah / menjalankan perintah SQL
    if (mysqli_query($connect, $sql)) {
        header("location:list-pelanggan.php");
    }else {
        echo mysqli_error($connect);
    }
}

if (isset($_POST["edit_pelanggan"])) {
    # tampung data yg akan diupdate
    $id_pelanggan = $_POST["id_pelanggan"];
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $kontak = $_POST["kontak"];
    $alamat_pelanggan = $_POST["alamat_pelanggan"];
    

    if (empty($_POST["password"])) {
        # password tidak ikut teredit
        $sql = "update pelanggan set nama_pelanggan ='$nama_pelanggan',
        kontak='$kontak',alamat_pelanggan='$alamat_pelanggan', 
        where id_pelanggan='$id_pelanggan'";
    } else {
        # password ikut ter edit
        $password = sha1($_POST['password']);
        $sql = "update pelanggan set nama_pelanggan ='$nama_pelanggan',
        kontak='$kontak',alamat_pelanggan='$alamat_pelanggan' 
        where id_pelanggan='$id_pelanggan'";
    }
    
    # eksekusi perintah SQL
    if (mysqli_query($connect, $sql)) {
        header("location:list-pelanggan.php");
    }else {
        echo mysqli_error($connect);
    }

    # direct / dikembalikan ke halaman list anggota
    header("location:list-pelanggan.php");
}
elseif (isset($_GET["id_pelanggan"])) {
    $id_pelanggan = $_GET["id_pelanggan"];
    
    # hapus data yg ada di tabel buku
    $sql = "delete from pelanggan where id_pelanggan='$id_pelanggan'";
    if (mysqli_query($connect, $sql)) {
        header("location:list-pelanggan.php");
    } else {
        echo mysqli_error($connect);
    }
}
?>