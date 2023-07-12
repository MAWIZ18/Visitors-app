<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="randomCode.css">
    <title>log out</title>
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

<form method="post" action="log.php">

    <h2>we hope to see you soon</h2>

 
    <label for="">put your first name</label><input type="text" name="user" class="user" >
    <input type="submit" name="logout" class="generator" value="log out here">
   


    </form>
</body>
</html>