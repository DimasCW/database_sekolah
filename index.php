<?php
  require "koneksi.php";

  $query= "SELECT * FROM tb_siswa";
  $sql = mysqli_query($conn, $query);

  
  $no = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            CRUD - BS5
          </a>
        </div>
      </nav>

      <!-- judul -->
      <div class="container">
        <h1 class="mt-4">Data Siswa</h1>
        <figure>
          <blockquote class="blockquote">
              <p>Berisi data yang telah disimpan di database</p>
          </blockquote>
          <figcaption class="blockquote-footer">
            CRUD <cite title="Source Title">Create Read Update dan Delete</cite>
          </figcaption>
        </figure>  
        <a href="kelola.php" type="button" class="btn btn-primary mb-3">
          <i class="fa fa-plus"> </i>
          Tambah Data
        </a>
            <div class="table-responsive">
                <table class="table align-middle table-bordered  table-hover">
                    <thead>
                        <tr>
                        <th><center>No.</center></th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Foto Siswa</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                      while($result=mysqli_fetch_assoc($sql)){
                    ?>
                        <tr>
                            <td><?php echo ++$no;?></td>
                            <td><?php echo $result ['nisn']; ?></td>
                            <td><?php echo $result ['nama_siswa'];?></td>
                            <td><?php echo $result ['jenis_kelamin'];?></td>
                            <td>
                                <img src="img/<?php echo $result ['foto_siswa']; ?>" alt="img 1" style="width: 150px;">
                            </td>
                            <td><?php echo $result ['alamat'];?></td>
                            <td>
                                <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm mb-3">
                                  <i class="fa fa-pencil"></i>Ubah
                              </a>
                                <a href="proses.php?hapus=1" type="button" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i>
                                Hapus
                              </a>
                            </td>
                        </tr>
                        <?php
                      }
                        ?>
                    </tbody>
                </table>
            </div>
      </div>
      <script src="https://kit.fontawesome.com/4cb4ec9d02.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>