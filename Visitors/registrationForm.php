<?php

$first_Name= $_POST['fname'];
$last_name=$_POST['lname'];
$contact=$_POST['Contact'];
$reg_number= $_POST['reGnumber'];

include 'connection.php';


$sql= "INSERT INTO students_data (fName,sName,phoneContact,registration_number)  VALUES ('$first_Name','$last_name',$contact,'$reg_number')";
$query= mysqli_query ($connect,$sql);
if($query){
    echo 'inserted seccesfuly';
    // header('location:display.php');
}else{
    // echo 'eror while insertig try again';  
      echo 'faild to insert';             
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients Form</title>
    <link rel="stylesheet" href="registrationForm.css">
</head>
<body>
    <div class="main-div">
        <p>Clients enter in required information for verification </p><br><br>
<form method="POST" action="registration.php">
        <label> first Name*<br><input type="text" name="fname"></label><br><br>
        <label>last Name*<br><input type="text" name="lname"></label><br><br>
        <label>Contact*<br><input type="tel" required name="Contact"></label><br><br>
        <label>registration number*<br><input type="tel" required name="reGnumber"></label><br><br>

        
        <div class="parent">
            <div class="child-1">
                <button type="submit">Submit</button>
            </div>
            <div class="child-2">
                <button type="reset">Clear Form</button>
            </div>
        </div>

    </form>
    </div>
</body>
</html>