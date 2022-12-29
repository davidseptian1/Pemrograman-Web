<?php
    require 'functions.php';

    if(isset($_POST["submit"])) {
        if( isset($_POST["submit"])){
            //jika sudah ditekan dijalankan function tambah
            if(tambah($_POST) > 0) {
                echo "
                    <script>
                        alert('data berhasil ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('data gagal ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <h1>Tambah Data Karyawan</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="id">ID</label>
                <input type="text" name="id" id="id">
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="name" id="nama">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="address">Address</label>
                <input type="text" name="address" id="address">
            </li>
            <li>
                <label for="gender">Gender</label>
                <input type="radio" name="gender" id= "gender" value="laki-laki">Laki-Laki 
                <input type="radio" name="gender" value="perempuan">Perempuan
                
            </li>
            <li>
                <label for="position">Posisi</label>
                <input type="text" name="position" id="position">
            </li>
            <li>
                <label for="status">status</label>
                <input type="radio" name="status" value="parttime">Parttime <input type="radio"
                name="status" value="fulltime">Fulltime
            </li>

            </ul>
                <button type="submit" name="submit">Tambah Data</button>
            
        </ul>
    </form>
</body>
</html>