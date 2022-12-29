<?php

require 'functions.php';

//mengambil data dari url
$id = 1;
$id = $_GET["id"];
//mengambil data berdasarkan id
$mhs = query("SELECT * FROM datakuu WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
    
    //cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}
?>