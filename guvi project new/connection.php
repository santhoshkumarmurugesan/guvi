<?php
$con= mysqli_connect('localhost','root','','guvi databse');
if(!$con){
    die('Connection error:'.mysqli_connect_error());
}
echo'Connection success'
?>