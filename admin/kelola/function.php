<?php

$conn = mysqli_connect("localhost","root","","projek");

    function query ($query){
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while ($row = mysqli_fetch_array($result) ){
            $rows[] = $row;
        }
        return $rows;
    }

    function nambah($data){

        global $conn;

       $nama = htmlspecialchars($data["nama"]);
       $username = htmlspecialchars($data["username"]);
       $password = htmlspecialchars($data["password"]);
       $role = htmlspecialchars($data["role"]);

       
       $query = "INSERT INTO users VALUES 
       ('','$nama','$username','$password','$role')";
       
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }




    function hapus($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM users WHERE id=$id");
        return mysqli_affected_rows($conn);
    }


    function ubah($data){
        global $conn;

        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $username = htmlspecialchars($data["username"]);
        $password = htmlspecialchars($data["password"]);
        $role = $data["role"];

        $query = "UPDATE users SET 
        nama = '$nama',
        username = '$username',
        password = '$password',
        role = '$role'
        WHERE id = $id ";
        
         mysqli_query($conn, $query);
         return mysqli_affected_rows($conn);
        }

        function cariadmin($data){
            global $conn;
            $query = "SELECT*FROM users WHERE role='admin' AND nama LIKE '%$data%' OR username LIKE '%$data%'";

            return query($query);
        }

        function cariuser($data){
            global $conn;
            $query = "SELECT*FROM users WHERE role='user' AND nama LIKE '%$data%' OR username LIKE '%$data%'";

            return query($query);
        }

        function nambahbuku($data){

            global $conn;
    
            $namabuku = htmlspecialchars($data["nama_buku"]);
            $pengarang = htmlspecialchars($data["pengarang"]);
            $penerbit = htmlspecialchars($data["penerbit"]);
     
            $file = upload();
    
           if(!$file){
               return false;
           } else {}
    
           
           $query = "INSERT INTO buku VALUES 
           ('','$namabuku','$pengarang','$penerbit','$file')";
           
            mysqli_query($conn, $query);
            return mysqli_affected_rows($conn);
        }


        function upload(){
            $namaFile = $_FILES["file"]["name"];
            $ukuranFile = $_FILES["file"]["size"];
            $error = $_FILES["file"]["error"];
            $tmpFile = $_FILES["file"]["tmp_name"];

            if($error === 4){
                echo " <script>
                alert('Masukan File Terlebih Dahulu')
                </script>";
                return false;
        }

        $ekstensiValid = ['pdf','docx'];
        $ekstensiFile = explode('.',$namaFile);
        $ekstensiFile = strtolower(end($ekstensiFile));
         
        if(!in_array($ekstensiFile,$ekstensiValid)){
            echo " <script>
            alert('Masukan Dokumen yang Sesuai')
            </script>";
            return false;
        }

        if($ukuranFile > 10000000){
            echo " <script>
            alert('Ukuran terlalu Besar')
            </script>";
            return false;
        }

        $namaFileNew = uniqid();
        $namaFileNew .= '.';
        $namaFileNew .= $ekstensiFile;

        move_uploaded_file($tmpFile,'../assets/file/'.$namaFileNew);
        return $namaFileNew;
    }

    function caribuku($data){
        global $conn;
        $query = "SELECT*FROM buku WHERE nama_buku LIKE '%$data%' OR pengarang LIKE '%$data%' OR penerbit LIKE '%$data%'";

        return query($query);
    }

    function hapusbuku($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM buku WHERE id=$id");
        return mysqli_affected_rows($conn);
    }


    function ubahbuku($data){
        global $conn;

            $id = $data['id'];
            $namabuku = htmlspecialchars($data["nama_buku"]);
            $pengarang = htmlspecialchars($data["pengarang"]);
            $penerbit = htmlspecialchars($data["penerbit"]);
     
            $file = upload();
    
           if(!$file){
               return false;
           } else {}
    
           
           $query = "UPDATE buku SET 
           nama_buku = '$namabuku',
           pengarang = '$pengarang',
           penerbit = '$penerbit',
           file = '$file'
           WHERE id = $id ";

            mysqli_query($conn, $query);
            return mysqli_affected_rows($conn);
        }



?>