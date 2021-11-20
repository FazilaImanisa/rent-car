<?php
include("connection.php");
if (isset($_POST["simpan_pelanggan"])) {
    // tampung data input pelanggan dari user
    
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $alamat_pelanggan = $_POST["alamat_pelanggan"];
    $kontak = $_POST["kontak"];

    //membuat perintah sql untuk insert data ke table pelanggan
    $sql = "insert into pelanggan values
    ('','$nama_pelanggan','$alamat_pelanggan','$kontak')";

    //eksekusi perintah sql
    $tambah = mysqli_query($connect, $sql);

    //direct ke halaman list-pelanggan
    if ($tambah) {
        header("location:list-pelanggan.php");
    } else {
        printf('Gagal'.mysqli_error($connect));
        exit();
    }

# untuk update

}else if(isset($_POST["edit_pelanggan"])){
        # menampung dulu data yang akan di update
        $id_pelanggan = $_POST["id_pelanggan"];
        $nama_pelanggan = $_POST["nama_pelanggan"];
        $alamat_pelanggan = $_POST["alamat_pelanggan"];
        $kontak = $_POST["kontak"];

        $sql = "update pelanggan set nama_pelanggan='$nama_pelanggan', alamat_pelanggan='$alamat_pelanggan',
        kontak='$kontak' where id_pelanggan='$id_pelanggan'";
        
        $edit = mysqli_query($connect, $sql);
        
        if ($edit) {
            header('location:list-pelanggan.php');
        } else {
            printf('Gagal'.mysqli_error($connect));
            exit();
        }
        
}elseif (isset($_GET["id_pelanggan"])) {
    $id_pelanggan = $_GET["id_pelanggan"];
    
    # hapus data yg ada di tabel pelanggan
    $sql = "delete from pelanggan where id_pelanggan='$id_pelanggan'";
    if (mysqli_query($connect, $sql)) {
        header("location:list-pelanggan.php");
    } else {
        echo mysqli_error($connect);
    }
}
?>