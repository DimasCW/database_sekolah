<?php
    $home = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_sekolah';

   

    $conn = mysqli_connect($home, $user, $pass, $db);
    if($conn){
        //$query = mysqli_query($conn, "SELECT * FROM tb_siswa");
        
    }

    mysqli_select_db($conn, $db);
    



?>