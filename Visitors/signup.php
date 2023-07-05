<?php
include 'connection.php';
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
</head>
<body>
    <div class="main-div">
        <centre><h1>SIGN UP</h1><centre>
   

        <div class="form">
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
    </div>
</body>
</html>
