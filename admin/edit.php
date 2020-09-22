<?php
include('../config.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT detail Apps</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">CRUD List Apps</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collappse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Tambah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="importexport.php">Import/Export</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <form class="form-inline my-2 my-lg-0">
                        <a href="logout.php" class="btn btn-danger" role="button">Logout</a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top:20px">
        <h2>Edit Detail Apps</h2>

        <hr>

        <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $select = mysqli_query($koneksi, "SELECT * FROM apps WHERE id='$id'") or die(mysqli_error($koneksi));

            if(mysqli_num_rows($select) == 0){
                echo 'div class="alert alert-warning">ID tidak ada dalam database.</div>';
                exit();
            }
            else{
                $data = mysqli_fetch_assoc($select);
            }
        }
        ?>

        <?php
        if(isset($_POST['submit'])){
            $namaapps   = $_POST['namaapps'];
            $alamat     = $_POST['alamat'];
            $unitkerja  = $_POST['unitkerja'];
            $departemen = $_POST['departemen'];

            $sql = mysqli_query($koneksi, "UPDATE apps SET namaapps='$namaapps', alamat='$alamat', unitkerja='$unitkerja', departemen='$departemen' WHERE id='$id'") or die(mysqli_error($koneksi));

            if(sql){
                echo '<script>alert("Berhasil menyimpan data."); document.location="edit.php?id='.$id.'";</script>';
            }
            else{
                echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
            }
        }
        ?>

        <form action="edit.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Aplikasi</label>
                <div class="col-sm-10">
                    <input type="text" name="namaapps" class="form-control" size="4" value="<?php echo $data['namaapps']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Unit Kerja</label>
                <div class="col-sm-10">
                    <input type="text" name="unitkerja" class="form-control" value="<?php echo $data['unitkerja']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Departemen</label>
                <div class="col-sm-10">
                    <input type="text" name="departemen" class="form-control" value="<?php echo $data['departemen']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                    <a href="index.php" class="btn btn-warning">KEMBALI</a>
                </div>
            </div>
        </form>
    
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>