<?php
include "koneksi.php";

                    $no = 1;
                    $tampil = mysqli_query($connection,"SELECT * FROM siswa ORDER BY id_siswa DESC"); 
                    while($data = mysqli_fetch_array($tampil)) :
?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
 </head>
<body>
    
        <div class="container">
            <div class="card" style="margin-top: 3rem;">
                <div class="row m-4">
                    <div class="col-sm-7">
                        <h3>Edit Siswa</h3>
                        <form action="add.php" method="post">
                        <input type="hidden" name="id_siswa" value="<?= $data['id_siswa'] ?>" class="form-control" required>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NIS</label>
                            <input type="text" name="nis" value="<?= $data['nis'] ?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="<?= $data['tempat_lahir'] ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                            <input type="text" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" value="<?= $data['jenis_kelamin'] ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Agama</label>
                            <input type="text" name="agama" value="<?= $data['agama'] ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="<?= $data['alamat'] ?>" class="form-control">
                        </div>
                        <button name="bedit" type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>