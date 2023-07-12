<?php  session_start();
$number =rand(1000,10000);
$_SESSION['stored_code'] = $number;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="randomCode.css">
</head>
<body>
<header>
    <nav class="navbar">
        <div class="navbar-toggle" onclick="toggleMenu()">
           
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          
        </div>
        <div class="navi">
        <div class="image">
          <img src="logo1.png" alt="logo" height="80px" length="80px" class="left">
          </div>

        
          <div class="navbar-menu" id="navbarMenu">
          
          <div class="font"><a href="home.php">Home</a></div>
          
          <div class="font"><a href="aboutus.php">about us</a></div>
        </div>
      </div>
        <!-- Dropdown Menu -->
        <div class="dropdown-menu" id="dropdownMenu"></div>
      </nav>
</header>

    <form method="post">

    <h2>Attendance Code Below </h2>

    <?php   
        echo '<h1>'.$number.'</h1>'; 
          
    ?>
    <input type="submit" name="generator" class="generator" value="generate a code here">
   


    </form>
</body>
</html>