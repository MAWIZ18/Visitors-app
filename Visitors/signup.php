<?php
include 'connection.php';
// include 'navi.php';

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
    $sql = "INSERT INTO  teachers_data (fname, lname, email, contact, department, password) 
            VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$department', '$password')"; 
   
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
    <!-- <div class="main-div">
        <centre><h1>SIGN UP</h1><centre> -->
   

        <!-- <div class="form">
            <form method="POST">
                <div class="first-div">
                    <div class="first-first-div">
                        <label>First Name<span class="bg">*</span></label><br>
                        <input type="text" name="firstName"><br><br>
                    </div>
                    <div class="first-second-div">
                        <label>Last Name<span class="bg">*</span></label><br>
                        <input type="text" name="lastName"><br><br>
                    </div>
                </div>

                <label>Email<span class="bg">*</span> <br>
                    <input type="email" name="email" class="email">
                </label><br><br>
                <label>Phone Number<span class="bg">*</span> <br>
                    <input type="tel" name="phoneNumber" class="number" required>
                </label><br><br>
                <label>Department<span class="bg">*</span><br>
                    <input type="text" name="department" class="department">
                </label><br><br>
                <div class="second">
                    <div class="second-first">
                        <label> Password<span class="bg">*</span><br>
                            <input type="password" name="password" required>
                        </label><br><br>
                    </div>
                    <div class="second-second">
                        <label> Confirm Password<span class="bg">*</span><br>
                            <input type="password" name="confirmPassword" required>
                        </label><br><br>
                        
                    </div>
                </div>
                <button type="submit">Sign Up</button>

            </form>
        </div>
    </div> -->
    <header>
<nav class="navbar-1">

<div class="nav-1">
<div class="image">

<img src="logo1.png" alt="logo" height="80px" length="80px" class="left">

</div>

<div class="menu">

<div class="nav-link"><a href="home.php" class="nav-a current-page">Home</a></div>

<div class="nav-link"><a href="#" class="nav-a">About Us</a></div>

</div>
</div>
</div>



</nav>
</header>


   
<form method="POST">

<center><h4>Sign Up</h4></center>

<div class="first-div">

    <div class="flex-div">
    <label >First Name<span class="bg">*</span></label><input type="text" name="firstName" class="siden">
    </div>
    <div class="flex-div">
    <label class="siden">Last Name<span class="bg">*</span></label><input type="text" name="lastName" class="siden">
    </div>
</div>
<label>Email<span class="bg">*</span></label><br><input type="email" class="side" name="email"><br><br>
<label>Phone Number<span class="bg">*</span></label><br><input type="tel" class="side" name="phoneNumber"><br><br>
<label>Department<span class="bg">*</span></label><input type="text" class="side" name="department"><br><br>
<div class="second-div">
    <div class="flex-div ace">
    <label class="siden">Password<span class="bg">*</span></label><input type="password" class="first siden" name="password">
    </div>
    <div class="flex-div ace">
    <label class="siden">Confirm Password<span class="bg">*</span></label><input type="password" class="first siden" name="confirmPassword">
    </div>
</div>
<center><button type="submit" class="sign-in" onclick="openPopup()" class="ok">Sign Up</button><br><br><p class="first-p">Already have,

    an account. <a href="login.php">Login</a>
</p></center>
</form>

<div class="popup" id="popup">
        <img src="">
        <h2>Thank You</h2>
        <p class="pt">Your detail has been successfully submitted. Thanks!</p>
        <button type="button" onclick="closePopup()" class="bto"><a href="">OK</a></button>
    </div>
    <script>
let popup = document.getElementById("popup");

function openPopup(){
popup.classList.add("open-popup");
}
function closePopup(){
    popup.classList.remove("open-popup");
}

    </script>

</body>



</body>
</html>
