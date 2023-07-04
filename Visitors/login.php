<?php
include 'connection.php';
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
</head>
    
<body>
    <div class="main-div">
       <centre> <h1>LOGIN</h1></centre>
   
        <form method="POST">
            <label>Name<br><input type="text" name="fname"></label><br><br>
            <label>Password<br><input type="password" name="password"></label><br><br>
            <a href="recoveryPage.html" class="center">Forgot Password?</a><br><br>
            <button type="submit" class="sign-in">Login</button><br><hr><br>

            <p>Don't have an account yet?<a class="w3-btn" href="signup.php">Sign up</a> </p>
<!-- <div class = "para">Don't have account<button type="submit" class="">Sign up</button> -->
            </div
        </form>
    </div>
</body>
</html>
