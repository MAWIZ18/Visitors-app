<?php  session_start();
//  $codes=rand(1000,10000);  $_SESSION['number']=$codes;
//  echo $codes; 
if(isset($_POST['submit'])){
$class=$_POST['course'];
$first_Name= $_POST['fname'];
$last_name=$_POST['lname'];
$contact=$_POST['Contact'];
$reg_number= $_POST['reGnumber'];
 $lecturer=$_POST['lect'];
include 'connection.php';
// if($code==$_SESSION['number']){
$sql= "INSERT INTO students_data (fName,sName,phoneContact,registration_number,lecturer_name,course_unit	) 
 VALUES ('$first_Name','$last_name',$contact,'$reg_number','$lecturer','$class')";
$query= mysqli_query ($connect,$sql);
if($query){
    echo 'inserted seccesfuly';
    
}else{
    // echo 'eror while insertig try again';  
      echo 'faild to insert';             
}}
// }
// else{    echo'cannot insert';
// }
// session_abort();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients Form</title>
    <link rel="stylesheet" href="registrationForm.css">
    <style>
        body{
            background: #0077b6
        }
    </style>
</head>
<body>
    <div class="main-div">
        <p>Clients enter in required information for verification </p><br><br>
<form method="POST">
        <label> first Name*<br><input type="text" name="fname"></label><br><br>
        <label>last Name*<br><input type="text" name="lname"></label><br><br>
        <label>Contact*<br><input type="tel" required name="Contact"></label><br><br>
        <label>registration number*<br><input type="tel" required name="reGnumber"></label><br><br>
        <label>lecturer name*<br><input type="text" required name="lect"></label><br><br>
        <label>course unit*<br><input type="text" required name="course"></label><br><br>
        <div class="parent">
            <div class="child-1">
                <button type="submit" name="submit">Submit</button>
            </div>
            <div class="child-2">
                <button type="reset">Clear Form</button>
            </div>
        </div>

    </form>
    </div>
</body>
</html>