<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once("koneksi.php");

        global $konek;
        $id = $_GET["id"];
        $hasilcari = mysqli_fetch_assoc(mysqli_query($konek, "SELECT * FROM karyawan WHERE id='$id' "));
    ?>
<div class="container pb-5 my-5 width-70">
  <div class="card text-center width-70 mx-auto">
  <div class="card-body">

  <form action="" method="post" name="form1" class="w-50 mx-auto mb-5">
    <input type="hidden" name="id" value="<?= $data["id"]; ?>">
    <div class="mb-3 mb-3">
        <label for="exampleInputEmail1" class="form-label label-2">Nomor kartu</label>
        <input type="text" name="nokartu" class="form-control" placeholder="Masukan Nomor Kartu" required value="<?= $hasilcari["nokartu"]; ?>">  
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label label-1">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required value="<?= $hasilcari["nama"]; ?>">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label label-1">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required value="<?= $hasilcari["alamat"]; ?>">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label label-1">Jenis kelamin</label>
        <input type="text" name="jeniskelamin" class="form-control" placeholder="Input Jenis Kelamin" required value="<?= $hasilcari["jeniskelamin"]; ?>">
    </div>

    <div class="gap-3">
         <button type="submit" class="btn btn-primary" name="Submit" value="add">Update Data!</button>
         <a class="btn btn-success" href="formlogin.php" role="button">Kembali</a>
        </div>

</form>
  </div>
</div>  
</div>   
    <?php
        
        // Check if form is submitted for user update, then redirect to homepage after update
        if(isset($_POST['Submit']))
        {	
            $id = $_POST['id'];
            
            $nokartu=$_POST['nokartu'];
            $nama=$_POST['nama'];
            $alamat=$_POST['alamat'];
            $jeniskelamin=$_POST['jeniskelamin'];

                
            // update user data
            $result = mysqli_query($mysqli, "UPDATE karyawan SET nokartu='$nokartu',nama='$nama',alamat='$alamat',jeniskelamin='$jeniskelamin' WHERE id=$id");
            
            // Redirect to homepage to display updated user in list
            header("Location: formdata2.php");
         }
    ?>
</body>
</html>