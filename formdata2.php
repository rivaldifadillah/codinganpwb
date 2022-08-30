<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <img src="neskar.jpg" width="100%" height="250px" alt="">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index2.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="formdata.php">Data Karyawan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Gallery</a>
        </li>
      </ul>
      <a class="nav-link text-light" href="#">Logout</a> 
</nav>
<div class="container pb-5 my-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">No Kartu</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <div class="pb-3">
      <a class="btn btn-success" href="tambah.php" role="button">Tambah</a>
      </div>
      <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($konek, 'SELECT * FROM karyawan');
        while ($data = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nokartu'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['jeniskelamin'] ?></td>
                <td>
                  <a href="edit.php?id=<?= $data["id"]; ?>">Edit</a>
                  <a href="hapus.php?id=<?= $data["id"]; ?>" onclick="return confirm('yakin');">Hapus</a>
                </td>
            </tr>
        <?php } ?>
      </tbody>
    </table>

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
</html>