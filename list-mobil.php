<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mobil</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php include("navbar.php") ?>
<div class="container">
        <div class="card">
            <div class="card-header bg-dark">
                <h4 class="text-white text-center">
                    Daftar Mobil
                </h4>
                <a href="form-mobil.php">
                    <button class="btn btn-success form-control">
                        Tambah Mobil
                    </button>
                </a>
            </div>

            <div class="card-body">
                <form action="list-mobil.php" method ="get">
                    <input type="text" name="search" class="form-control mb-2"
                    placeholder="Masukkan Keyword Pencarian" />
                </form>

                <ul class="list-group">
                    <?php
                    include "connection.php";
                    if (isset($_GET["search"])) {
                        $search = $_GET["search"];
                        $sql = "select * from mobil 
                        where merk like '%$search%' 
                        or jenis like '%$search%' 
                        or warna like '%$search%'
                        or biaya_sewa_per_hari like '%$search%'";
                    }else {
                        $sql = "select * from mobil";
                    }
                    # eksekusi SQL
                    $hasil = mysqli_query($connect, $sql);
                    while ($mobil = mysqli_fetch_array($hasil)) {
                        ?>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-lg-4">
                                    <!-- untuk gambar -->
                                    <img src="image/<?=$mobil["image"]?>" width="300">
                                </div>
                                <div class="col-lg-6">
                                    <!-- untuk deskripsi mobil -->
                                    <h5><?=$mobil["merk"]?></h5>
                                    <h6>ID Mobil : <?=$mobil["id_mobil"]?></h6>
                                    <h6>Nomor Mobil : <?=$mobil["nomor_mobil"]?></h6>
                                    <h6>Jenis : <?=$mobil["jenis"]?></h6>
                                    <h6>Warna : <?=$mobil["warna"]?></h6>
                                    <h6>Tahun Pembuatan : <?=$mobil["tahun_pembuatan"]?></h6>
                                    <h6>Biaya Sewa : <?=$mobil["biaya_sewa_per_hari"]?></h6>
                                </div>
                                <div class="col-lg-2">
                                    <a href="form-mobil.php?id_mobil=<?=$mobil["id_mobil"]?>">
                                        <button class="btn btn-info btn-block">
                                         Edit
                                         </button>
                                    </a>

                                    <div class="card-footer">
                                      <a href="process-mobil.php?id_mobil=<?=$mobil["id_mobil"]?>"
                                         onclick="return confirm('Are you sure?')">
                                    </div>
                                        <button class="btn btn-danger btn-block">
                                          Hapus
                                        </button>
                                      </a>
                                </div>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>

        </div>
    </div>
</body>
</html>