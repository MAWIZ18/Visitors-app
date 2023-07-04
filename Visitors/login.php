<?php
include 'navi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fname = $_POST['fname'];
    $password = $_POST['password'];

    // Prepare the SQL statement with placeholders
    $sql = "SELECT * FROM `teachers_data` WHERE fname=? AND password=?";
    $statement = mysqli_prepare($connect, $sql);
    
    if ($statement) {
        // Bind the parameters to the placeholders
        mysqli_stmt_bind_param($statement, "ss", $fname, $password);

        // Execute the prepared statement
        mysqli_stmt_execute($statement);

        // Get the result
        $result = mysqli_stmt_get_result($statement);

        if (mysqli_num_rows($result) > 0) {
            // Authentication successful
            $users = mysqli_fetch_assoc($result);
            
            header("Location: dashboard.php");
            exit;
        } else {
            // Authentication failed
            echo "Invalid name or password!";
        }
    } else {
        // Error preparing the statement
        echo "Error: " . mysqli_error($connect);
    }
}
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
    
<body>




<form method="POST">

 <h1><center>LOGIN</center></h1><br><br>
<label>Name<br><input type="text"></label><br><br>
<label>Password<br><input type="password"></label><br><br>
<center><a href="recoveryPage.html" class="center">
    Forgot Password?</a></center><br><center><button type="submit"
     class="sign-in">Login</button></center><br><hr><br><br>


<p>Don't have an account yet?<a class="w3-btn" href="signup.php"> Sign up</a> </p>

</form>


    


</body>
</html>
