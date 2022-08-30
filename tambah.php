<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container pb-5 my-5 width-70">
  <div class="card text-center width-70 mx-auto">
  <div class="card-body">

  <form action="tambah.php" method="post" name="form1" class="w-50 mx-auto mb-5">
    <div class="mb-3 mb-3">
        <label for="exampleInputEmail1" class="form-label label-2">Nomor kartu</label>
        <input type="text" name="nokartu" class="form-control" placeholder="Masukan Nomor Kartu" >  
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label label-1">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label label-1">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label label-1">Jenis kelamin</label>
        <input type="text" name="jeniskelamin" class="form-control" placeholder="Input Jenis Kelamin">
    </div>

    <div class="gap-3">
         <button type="submit" class="btn btn-primary" name="Submit" value="add">Submit</button>
         <a class="btn btn-success" href="formlogin.php" role="button">Kembali</a>
        </div>

</form>
  </div>
</div>  
</div>   
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        
        // include database connection file
        include_once("koneksi.php");

        if( tambah($_POST) > 0){
            echo"
                <script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'formdata2.php';
                </script>
            ";
        } else {
            echo"
                <script>
                    alert('Data Gagal Ditambahkan!');
                    document.location.href = 'tambah.php';
                </script>
            ";
        }
                   
       
        // echo "User added successfully. <a >View Users</a>";
    }
    ?>
    
</body>
</html>