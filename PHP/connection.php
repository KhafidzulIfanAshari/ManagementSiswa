<?php

$server="localhost";
$user="root";
$password="";
$db="managemen_siswa";

$connect=mysqli_connect($server,$user,$password,$db);
    
    if(!$connect){
        echo "<script>alert('Connection failed');</script>";
    }

?>