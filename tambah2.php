<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="tambah.css">
</head>
<body>
    <div class="content">
    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>No Kartu</td>   
                <td><input type="text" name="nokartu"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jeniskelamin"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    </div>    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nokartu = $_POST['nokartu'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jeniskelamin = $_POST['jeniskelamin'];
        
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($konek, "INSERT INTO karyawan(nokartu,nama,alamat,jeniskelamin) VALUES('$nokartu','$nama','$alamat','$jeniskelamin')");
        
        // Show message when user added
        // echo "User added successfully. <a href='gallery.php'>View Users</a>";
    }
    ?>
    
</body>
</html>