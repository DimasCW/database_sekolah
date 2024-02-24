

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

    <div class="container">
        <form method="POST" action="proses.php">
            <div class="mb-3 row">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nisn" placeholder="Ex: 1214">
                </div>
              </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" placeholder="Dimas">
                </div>
              </div>

            <div class="mb-3 row">
                <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select id="jkel" class="form-select" aria-label="Default select example">
                        <option selected>jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>        
                </div>
              </div>

              <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="foto">
                    </div>
              </div>

              <div class="mb-3 row">
                  <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="Alamat" rows="3"></textarea>
                </div>
              </div>
        

          <div class="mb-3 row mt-4">
              <div class="col">
                <?php
                  if(isset($_GET['ubah'])){
                ?>
                  <button type="submit" name="aksi" value="edit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                      Simpan Perubahan
                  </button>
                <?php
                  } else{
                ?>
                    <button type="submit" name="aksi" value="add" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                      Tambah
                    </button>
                <?php
                  }
                  ?>
                  <a href="index.php" type="button" class="btn btn-danger"><i class="fa fa-step-backward" aria-hidden="true"></i>
                      Batal
                  </a>
              </div>
          </div>

        </form>
    </div> 

      <script src="https://kit.fontawesome.com/4cb4ec9d02.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>