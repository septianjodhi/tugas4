
<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'',"sertifikasi");
    
    // production
    $kon = mysqli_connect("localhost", "id9071362_akademik	",'12345678',"id9071362_akademik");
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>