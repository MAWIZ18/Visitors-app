<?php

include 'navi.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $department = $_POST['department'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    

    // Perform validation
    // Add your validation logic here

    // Check if passwords match
    if ($password !== $confirmPassword) {
        // Handle password mismatch error
        echo "Passwords do not match!";
        exit;
    }

    // Insert data into the database
    $sql = "INSERT INTO  teachers_data (id,fname, lname, email, contact, department, password) 
            VALUES ('$id','$firstName', '$lastName', '$email', '$phoneNumber', '$department', '$password')"; 
   
    // Execute the queries
    if (mysqli_query($connect, $sql)) {

        header("Location:checkbox.php");
       
        exit;
    } else {
        // Handle database insertion error
        echo "Error: " . mysqli_error($connect);
        exit;
    }
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>




   
<form method="POST">



<div class="first-div">

    <div class="flex-div">
    <label>First Name<span class="bg">*</span></label><input type="text">
    </div>
    <div class="flex-div">
    <label>Last Name<span class="bg">*</span></label><input type="text">
    </div>
</div>
<label>Email<span class="bg">*</span></label><br><input type="email" class="side"><br>
<label>Phone Number<span class="bg">*</span></label><br><input type="tel" class="side">
<label>Department<span class="bg">*</span></label><input type="text" class="side">
<div class="second-div">
    <div class="flex-div ace">
    <label>Password<span class="bg">*</span></label><input type="text" class="first">
    </div>
    <div class="flex-div ace">
    <label>Confirm Password<span class="bg">*</span></label><input type="text" class="first">
    </div>
</div>
<center><button type="submit" class="sign-up">SignUp</button><br><br><p class="first-p">Already have,
    an account. <a href="login.php">Login</a>
</p></center>
</form>

</body>
</html>
