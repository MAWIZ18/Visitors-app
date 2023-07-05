<?php

$first_Name= $_POST['fname'];
$last_name=$_POST['lname'];
$contact=$_POST['Contact'];
$reg_number= $_POST['reGnumber'];
$code=$_POST['code'];
echo $codes;
include 'connection.php';
if(isset($_POST['generate'])){
   
}
if($code=$codes){
$sql= "INSERT INTO students_data (fName,sName,phoneContact,registration_number,code	) 
 VALUES ('$first_Name','$last_name',$contact,'$reg_number','$code')";
$query= mysqli_query ($connect,$sql);
if($query){
    echo 'inserted seccesfuly';
    header('location:dashboard.php');
}else{
    // echo 'eror while insertig try again';  
      echo 'faild to insert';             
}
}


?>