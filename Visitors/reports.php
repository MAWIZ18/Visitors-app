<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/d2d527518d.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="reports.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="#" class="logo">
                        <h1>
                            visitors app
                        </h1>
                        <span class="nav-items">
                            admin
                        </span>
                    </a>
                </li>
              

                <li>
                    <a href="#">
                        <i class="fa fa-memorah"></i>
                        <span class="nav-item">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <i class="fas fa-message"></i>
                        <span class="nav-item">Attendance</span>
                    </a>
                </li>

                <li>
                    <a href="reports.php">
                        <i class="fas fa-database"></i>
                        <span class="nav-item">Reports</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <span class="nav-item">Setings</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="logout">
                        <i class="fas sing-out-alt"></i>
                        <span class="nav-item">log out</span>
                    </a>
                </li>

            </ul>
        </nav>
        <section class="main">
            <div class="main-top">
                <div class="title">
                <h1>Reports</h1>
                </div>
                    <div class="form">
                 <form method="POST">
                     <input type="text" placeholder="search data" name="search">
                        <!-- <button name="submit "> search</button> -->
                             <input type="submit" name="submit" value="search">

                    </form>
                
                    </div>

                
            </div>
            <section class="attendance">
                <div class="attendance-list">
                    <h1>Attendance-list</h1>
                    <table class="table">
                        <div class="attendance-table">
                            <table >
                            <?php
              
              if(isset($_POST['submit'])){
                $search=$_POST['search'];

                include 'connection.php';
                $sql =" SELECT * from students_data where attendance_date= '$search' " ;
                $query= mysqli_query ($connect,$sql);
                if($query){
                    if(mysqli_num_rows($query)>0 ){
                      echo'
                      <thead>
                      <tr>
                      <th>id</th>
                      <th>first name</th>
                      <th>last name </th>
                      <th>registration_number</th>
                      <th>contacts</th>
                      <th> date </th>
                      </tr>
                      
                      </thead>';
                     $row=mysqli_fetch_assoc($query);
                     echo'
                     <tbody>
                     <tr>
                     <td>'. $row['id'].'</td>
                     <td> '.$row ['fName'].'</td>
                     <td> '.$row ['sName'].'</td>
                     <td> '.$row ['phoneContact'].'</td>
                     <td> '.$row['registration_number'].'</td>
                     <td> ' .$row ['attendance_date'].'</td>
                     
                     </tr>
                      </tbody>';

                } 
                 else{
                   echo'<h2> data not found</h2>';
                 }

            }
            }
              
              
              
              
              ?>
                            </table>
                        </div>
                    </table>
                </div>
            </section>
            
        
        </section>
    </div>
</body>
</html>