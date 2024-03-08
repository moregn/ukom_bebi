<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa | Bebi Andika</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
        <div class="container" style="margin-top: 5rem;">
        <div class="container">
        <div class="row" style="margin-top: 1rem;">
      <h2>Data Siswa</h2>
      <a href="editsiswa.php" class="btn btn-secondary text-white">+ Tambah Data</a>
      <div class="col">
      <table class="table my-2">
        <thead class="table table-success">
            <!-- <tr>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Alamat</th>
            </tr> -->
        </thead>
        <?php 
                    include "koneksi.php";

                    $no = 1;
                    $tampil = mysqli_query($connection,"SELECT * FROM siswa ORDER BY id_siswa DESC"); 
                    while($data = mysqli_fetch_array($tampil)) :
                    ?>
        <tbody>
            <tr>
            <td><?php echo $data['nis'];?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['tempat_lahir'];?></td>
            <td><?php echo $data['tgl_lahir'];?></td>
            <td><?php echo $data['jenis_kelamin'];?></td>
            <td><?php echo $data['agama'];?></td>
            <td><?php echo $data['alamat'];?></td>
            <td>
                <a href="editsiswa.php" class="btn btn-warning text-white">Edit</a>
                <a href="delete.php?id_siswa=<?php echo $data['id_siswa']; ?>" class="btn btn-danger text-white">Hapus</a>
              </td>
            </tr>
        </tbody>
        
                    <?php endwhile; ?>
        </table>
      </div>
  </div>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>