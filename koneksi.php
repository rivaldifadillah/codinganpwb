<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'crudid';
$databaseUsername = 'root';
$databasePassword = '';
 
$konek = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

function tambah($data){
    global $konek;
        $nokartu = htmlspecialchars($data['nokartu']);
        $nama = htmlspecialchars($data['nama']);
        $alamat = htmlspecialchars($data['alamat']);
        $jeniskelamin = htmlspecialchars($data['jeniskelamin']);

        $data = mysqli_query($konek, "INSERT INTO karyawan(nokartu,nama,alamat,jeniskelamin) VALUES('$nokartu','$nama','$alamat','$jeniskelamin')");

        return mysqli_affected_rows($konek);
}

function hapus($id){
    global $konek;
    mysqli_query($konek, "DELETE FROM karyawan WHERE id = $id");

    return mysqli_affected_rows($konek);
}

function edit($data){
    global $konek;
        $id = $data["id"];
        $nokartu = htmlspecialchars($data['nokartu']);
        $nama = htmlspecialchars($data['nama']);
        $alamat = htmlspecialchars($data['alamat']);
        $jeniskelamin = htmlspecialchars($data['jeniskelamin']);

        $query = "UPDATE karyawan SET 
                    nokartu = '$nokartu',
                    nama = '$nama',
                    alamat = '$alamat',
                    jeniskelamin = '$jeniskelamin'";

                    mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
}

?>
