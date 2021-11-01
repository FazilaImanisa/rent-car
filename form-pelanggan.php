<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form pelanggan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
    include("navbar.php");
?>
    <div class="container">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="text-white">Form pelanggan</h4>
            </div>

            <div class="card-body">
                <?php
                if(isset($_GET["id_pelanggan"])){
                    // memeriksa ketika load file ini,
                    // apakah membawa data GET dengan nama id_pelanggan
                    // jika ture, maka form anggota digunakan untuk edit

                    # mengakses data anggota dari id_anggota yg dikirim
                    include "connection.php";
                    $id_pelanggan = $_GET["id_pelanggan"];
                    $sql = "select * from pelanggan where id_pelanggan='$id_pelanggan'";
                    // eksekusiperintah SQL
                    $hasil = mysqli_query($connect, $sql);
                    # konversi hasil query ke bentuk array
                    $pelanggan = mysqli_fetch_array($hasil);
                    ?>
                    <form action="process-pelanggan.php" method="post">
                    ID pelanggan
                    <input type="text" name="id_pelanggan" 
                    class="form-control mb-2" required
                    value="<?=$pelanggan["id_pelanggan"];?>" readonly />

                    Nama pelanggan
                    <input type="text" name="nama_pelanggan" 
                    class="form-control mb-2" required
                    value="<?=$pelanggan["nama_pelanggan"];?>" />

                    Kontak
                    <input type="text" name="kontak" 
                    class="form-control mb-2" required
                    value="<?=$pelanggan["kontak"];?>" />

                    Alamat pelanggan
                    <input type="text" name="alamat_pelanggan" 
                    class="form-control mb-2" required
                    value="<?=$pelanggan["alamat_pelanggan"];?>" />
                    
                    <button type="submit" class="btn btn-success btn-block"
                    name="edit_pelanggan">
                        Simpan
                    </button>
                    </form>
                    <?php
                }else{
                    // jika false, maka form pelanggan digunakan untuk insert
                    ?>
                    <form action="process-pelanggan.php" method="post">

                    Nama pelanggan
                    <input type="text" name="nama_pelanggan" 
                    class="form-control mb-2" required />

                    Kontak
                    <input type="text" name="kontak" 
                    class="form-control mb-2" required />

                    Alamat pelanggan
                    <input type="text" name="alamat_pelanggan" 
                    class="form-control mb-2" required />

                    <button type="submit"
                    class="btn btn-success btn-block"
                    name="simpan_pelanggan">
                        Simpan
                    </button>
                    </form>
                    <?php
                }
                ?>
                
            </div>
        </div>
    </div>
</body>
</html>