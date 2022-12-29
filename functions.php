<?php
        //koneksi ke database
        $conn = mysqli_connect("localhost", "mhs1", "rahasia", "mhs1");

        //fungsi untuk mengambil data dari database
        function query($query){
            global $conn;
            $data = mysqli_query($conn, $query);
            $karyawan1 = [];
            while( $karyawan = mysqli_fetch_assoc($data) ) {
                $karyawan1[] = $karyawan;
            }
            return $karyawan1;
        }

        function tambah($data){
            global $conn;

            
            $nama = $data["name"];
            $email = $data["email"];
            $address = $data["address"];
            $gender = $data["gender"];
            $position = $data["position"];
            $status = $data["status"];

            $query = " INSERT INTO datakuu
                    VALUES
                    ('', '$nama', '$email', '$address','$gender','$position','$status')
                ";
            //menggunakan query untuk menambah data yaitu memerlukan parameter penghubung database dan query sql
            mysqli_query($conn, $query);
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }

        function hapus($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM datakuu WHERE id = $id");
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }
        
        function ubah($data){
            global $conn;

            $id = $data;
            $nama = $data["name"];
            $email = $data["email"];
            $address = $data["address"];
            $gender = $data["gender"];
            $position = $data["position"];
            $status = $data["status"];

            $query = " UPDATE datakuu SET 
                        nama1 = '$nama',
                        email1 = '$email',
                        address1 = '$address',
                        gender1 = '$gender',
                        position1 = '$position',
                        status1 = '$status'
                    WHERE id = $id
                ";
            mysqli_query($conn, $query);
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }

?>