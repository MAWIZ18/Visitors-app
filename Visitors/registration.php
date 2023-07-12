<?php  session_start();

$_SESSION['stored_code'];


$class=$_POST['course'];
$first_Name= $_POST['fname'];
$last_name=$_POST['lname'];
$contact=$_POST['Contact'];
$reg_number= $_POST['reGnumber'];
 $lecturer=$_POST['lect'];
 $code=$_POST['code'];
include 'connection.php';
 if($code == $_SESSION['stored_code']){
$sql= "INSERT INTO students_data (fName,sName,phoneContact,registration_number,lecturer_name,course_unit,code	) 
 VALUES ('$first_Name','$last_name',$contact,'$reg_number','$lecturer','$class','$code')";
$query= mysqli_query ($connect,$sql);

if($query){
    echo 'inserted seccesfuly';
    
}
// echo'invalid code';

}else{
    
    echo '<h1> Invalide code , <a href="registrationForm.php"> try again</a></h1>'; 
   
//     $sql= "INSERT INTO students_data (fName,sName,phoneContact,registration_number,lecturer_name,course_unit,code	) 
//  VALUES ('$first_Name','$last_name',$contact,'$reg_number','$lecturer','$class','$code')";
// $query= mysqli_query ($connect,$sql);

// if($query){
//     echo 'inserted seccesfuly';
    
// }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
