<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_guru WHERE nuptk = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Guru</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT GURU
            </div>
            <div class="card-body">
              <form action="update-guru.php" method="POST">
                
                <div class="form-group">
                  <label>NUPTK</label>
                  <input type="text" name="nuptk" value="<?php echo $row['nuptk'] ?>" placeholder="Masukkan NUPTK GURU" class="form-control" readonly>
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Guru" class="form-control">
                </div>

                <label>Golongan</label>
                <select class="form-check" name="golongan" aria-label="Default select example" <?php echo $row['golongan'] ?> class="form-control">
                <option disabled>Pilih Golongan</option>
                <option value="III/a"<?php if ($row['golongan'] == 'III/a') echo 'selected' ?>>III/a</option>
                <option value="III/b"<?php if ($row['golongan'] == 'III/b') echo 'selected' ?>>III/b</option>
                <option value="III/c"<?php if ($row['golongan'] == 'III/c') echo 'selected' ?>>III/c</option>
                <option value="III/d"<?php if ($row['golongan'] == 'III/d') echo 'selected' ?>>III/d</option>
                <option value="IV/a"<?php if ($row['golongan'] == 'IV/a') echo 'selected' ?>>IV/a</option>
                </select>
                <div class="form-group">
                  <label>Jenis Kelamin: </label><br>
                  <input type="radio" name="jenis_kelamin" value="L" id="l" <?php if ($row['jenis_kelamin'] == 'L') echo 'checked' ?>>
                    <label for="l">L</label><br>
                  <input type="radio" name="jenis_kelamin" value="P" id="p" <?php if ($row['jenis_kelamin'] == 'P') echo 'checked' ?>>
                    <label for="p">P</label>
                </div>
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>