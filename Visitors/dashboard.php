

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d2d527518d.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="dasboard.css">
    <style>
        
 table thead tr{

color:#fff;
background: #0077b6;
text-align: left;
font-weight: bold;

}
nav{
    width:280px;
}
    </style>
</head>
<?php include ('navi.php');?>
<body>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="#" class="logo">
                    
                        <img src="logo1.png" class="img">
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
                <h1>Attendance</h1>
                <div class="forme"><a href="registrationForm.php"> generate an attendance</a></div>
            </div>
            <section class="attendance">
                <div class="attendance-list">
                    <h1>Attendance-list</h1>
                    <table class="table">
                        <div class="attendance-table">
                            <table >
                                <thead>
                                    <th>id</th>
                                    <th>student name</th>
                                    <th>registration_number</th>
                                    <th>contacts</th>
                                    <th> date </th>
                                    
                                </thead>
                                <tbody>
                                    
                                <?php
                                session_start();
                include 'connection.php';
                $users= $_GET['users']; $cou= $_GET['course'];
                $sql ="select * from `students_data` where lecturer_name = '$users'";
               
                $query= mysqli_query ($connect,$sql);
                 if($query){
                   while($row=mysqli_fetch_assoc($query)){
                    $id=$row['id'];
                    $first_Name= $row['fName'];
                    $contact=$row['phoneContact'];
                    $reg_number= $row['registration_number'];
                    $date=$row['attendance_date'];
                    // echo '<h2>'.$user.'</h2> ';
                    echo' <tr>
                    <td>'.  $id.'</td>
                    <td> '. $first_Name.'</td>
                    <td> '.$reg_number.'</td>
                    <td> '.$contact.'</td>
                    <td> '.$date.'</td>

                </tr>';
                  
                  }
                  

                 }

                ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </table>
                </div>
            </section>
            
        
        </section>
   
</body>
</html>