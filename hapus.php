<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
if( hapus($id) > 0){
    echo"
         <script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'formdata2.php';
         </script>
        ";
} else{
    echo"
    <script>
       alert('Data Gagal Dihapus');
       document.location.href = 'formdata2.php';
    </script>
   ";
}

?>