<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form mobil</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-dark">
                <h4 class="text-white">
                    Form mobil
                </h4>
            </div>

            <div class="card-body">
                <?php
                if (isset($_GET["id_mobil"])) {
                    # form utk edit
                    $id_mobil = $_GET["id_mobil"];
                    $sql = "select * from mobil where id_mobil= '$id_mobil'";

                    include "connection.php";
                    # eksekusi SQL
                    $hasil = mysqli_query($connect, $sql);

                    # konversi ke array
                    $mobil = mysqli_fetch_array($hasil);
                    ?>
                    <form action="process-mobil.php" method="post"
                enctype="multipart/form-data">
                    id_mobil
                    <input type="number" name="id_mobil"
                    class="form-control mb-2" required
                    value="<?=$mobil["id_mobil"]?>" readonly>

                    nomor mobil
                    <input type="text" name="nomor_mobil"
                    class="form-control mb-2" required
                    value="<?=$mobil["nomor_mobil"]?>">

                    jenis
                    <input type="text" name="jenis"
                    class="form-control mb-2" required
                    value="<?=$mobil["jenis"]?>">

                    tahun pembuatan
                    <input type="number" name="tahun_pembuatan"
                    class="form-control mb-2" required
                    value="<?=$mobil["tahun_pembuatan"]?>">

                    biaya sewa per hari
                    <input type="number" name=" biaya_sewa_per_hari"
                    class="form-control mb-2" required
                    value="<?=$mobil[" biaya_sewa_per_hari"]?>">

                    merk mobil
                    <select name="merk" class="form-control b-2"
                    required>
                        <option value="<?=$mobil["merk"]?>" selected>
                            <?=$mobil["merk"]?>
                        </option>
                        <option value="avanza">avanza</option>
                        <option value="ertiga">ertiga</option>
                        <option value="brio">brio</option>
                    </select>

                    image </br>
                    <img src="image/<?=$mobil["image"]?>" width="300" />
                    <input type="file" name="image"
                    class="form-control mb-2">

                    <button type="submit" 
                    class="btn btn-info btn-block"
                    name="update_mobil">
                    Simpan
                    </button>
                </form>
                    <?php
                } else {
                    # form utk insert
                    ?>
                    <form action="process-mobil.php" method="post"
                enctype="multipart/form-data">
                    id_mobil
                    <input type="number" name="id_mobil"
                    class="form-control mb-2" required>

                    nomor mobil
                    <input type="text" name="nomor_mobil"
                    class="form-control mb-2" required>

                    jenis
                    <input type="text" name="jenis"
                    class="form-control mb-2" required>

                    tahun_pembuatan
                    <input type="number" name="tahun_pembuatan"
                    class="form-control mb-2" required>

                    biaya sewa per hari
                    <input type="number" name=" biaya_sewa_per_hari"
                    class="form-control mb-2" required>

                    merk mobil
                    <select name="merk" class="form-control b-2"
                    required>
                    <option value="avanza">avanza</option>
                    <option value="ertiga">ertiga</option>
                    <option value="brio">brio</option>
                    </select>

                    image mobil
                    <input type="file" name="image"
                    class="form-control mb-2" required>

                    <button type="submit" 
                    class="btn btn-info btn-block"
                    name="simpan_mobil">
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