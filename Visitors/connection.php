<?php
$connect = new mysqli('localhost','root','','attendance');

if($connect){
    echo"connection sucessful";
}else{
    die(mysqli_error($connect));
}
?>