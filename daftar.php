<?php include "koneksi.php"; 

if (isset($_POST['btnSimpan']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	// $alamat=$_POST['alamat'];

	$simpan=mysqli_query($konek,"insert into admin(username,password)values('$username','$password')");

	
	if($simpan)
	{
		echo "
			<script>
				alert('Tersimpan');
				location.replace('formlogin.php');
			</script>	
		";
		}
		else
		{
			echo "
			<script>
			alert('Gagal Tersimpan');
			location.replace('daftar.php');
			<script>
			";
		}
	}
?>

<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .width-70{
            width: 70%;
            margin-top: 50px;
            padding-top: 55px;
        }
        .label-1{
          margin-right: 220px;
        }
        .label-2{
          margin-right: 210px;
        }
    </style>
    <title>Hello, world!</title>
  </head>	
<body>
    <div class="container pb-5 my-5 width-70">
  <div class="card text-center width-70 mx-auto">
  <div class="card-body">
  <form method="POST" class="w-50 mx-auto mb-5    ">
    <div class="mb-3 mb-3">
        <label for="exampleInputEmail1" class="form-label label-2">Username :</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" >
        
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label label-1">Password :</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password min 8 Karakter">
    </div>

    <div class="gap-3">
         <button type="submit" class="btn btn-primary" name="btnSimpan" id="btn">Submit</button>
         <a class="btn btn-success" href="formlogin.php" role="button">Kembali</a>
        </div>

</form>
  </div>
</div>  
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
	
</body>
</html>