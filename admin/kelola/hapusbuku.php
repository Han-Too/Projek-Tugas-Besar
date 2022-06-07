<?php

require "function.php";

    $id = $_GET['id'];

    if( hapusbuku($id) > 0 ){
        echo " <script>
        alert ('data berhasil dihapus!');
        document.location.href = 'ebook.php';
        </script>";
    }else{
        echo " <script>
        alert ('data gagal dihapus!');
        document.location.href = 'ebook.php';
        </script>";
    }

?>