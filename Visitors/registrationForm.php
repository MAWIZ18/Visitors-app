

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
   <!----------Nav----------------> 
<header>
<nav class="navbar-1">

<div class="nav-1">
<div class="image">

<img src="logo1.png" alt="logo" height="80px" length="80px" class="left">

</div>

<div class="menu">

<div class="nav-link"><a href="home.php" class="nav-a current-page">Home</a></div>

<div class="nav-link"><a href="aboutus.php" class="nav-a">about</a></div>

</div>
</div>
</div>



</nav>
</header>

<!----------Nav---------------->

<!-----MAIN BODY------->
    <div class="main-div">
        <p>Student enter in required information for attendance record </p><br><br>
        
        <form method="POST" action="registration.php">

                <label> first Name<span class="bg">*</span><br><input type="text" name="fname"></label><br><br>
                <label>last Name<span class="bg">*</span><br><input type="text" name="lname"></label><br><br>
                <label>Contact<span class="bg">*</span><br><input type="tel" required name="Contact"></label><br><br>
                <label>registration number<span class="bg">*</span><br><input type="tel" required name="reGnumber"></label><br><br>
                <label>Lecturer Name<span class="bg">*</span><br><input type="text" required name="lect"></label><br><br>
                <label>Course Unit<span class="bg">*</span><br><input type="text" required name="course"></label><br><br>
                <label>Code<span class="bg">*</span><br><input type="text" required name="code"></label><br><br>


                <div class="parent">
                <div class="child-1">
                <button type="submit" class="sign-in">Submit</button>
                </div>
                <div class="child-2">
                <button type="reset" class="sign-in">Clear Form</button>
                </div>
                </div>

        </form>
    </div>
    <!-----MAIN BODY------->
</body>
</html>