<?php 

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'projek');
}

 function query($query)
    {
        $konek = koneksi();
        $result = mysqli_query($konek, $query);
        $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
     $rows[]= $row;
    }
    return $rows;
    }


?>