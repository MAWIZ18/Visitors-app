<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navi.css">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
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
          
          <div><a href="#">Home</a></div>
          <div><a href="#">About us</a></div>
          <div><a href="#">Dashboard</a></div>
        </div>
      </div>
        <!-- Dropdown Menu -->
        <div class="dropdown-menu" id="dropdownMenu"></div>
      </nav>
      <script>
        function toggleMenu() {
          var menu = document.getElementById("navbarMenu");
          var toggle = document.getElementsByClassName("navbar-toggle")[0];

          menu.classList.toggle("active");
          toggle.classList.toggle("active");

          // Dynamically generate the dropdown menu for small screens
          var dropdownMenu = document.getElementById("dropdownMenu");
          if (dropdownMenu.style.display === 'block') {
            dropdownMenu.style.display = 'none';
          } else {
            dropdownMenu.style.display = 'block';
            dropdownMenu.innerHTML = '';

            var navLinks = menu.querySelectorAll('li');
            for (var i = 0; i < navLinks.length; i++) {
              var link = navLinks[i].querySelector('a');
              var listItem = document.createElement('li');
              var anchor = document.createElement('a');
              anchor.href = link.href;
              anchor.textContent = link.textContent;
              listItem.appendChild(anchor);
              dropdownMenu.appendChild(listItem);
            }
          }
        }
      </script>
</body>
</html>

      
</body>
</html>