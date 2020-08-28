<?php 
    $conn = mysqli_connect('localhost','root','','sshopdb',);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }
?>