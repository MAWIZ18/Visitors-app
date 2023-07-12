



<?php  session_start();

include 'connection.php';
$users= $_GET['users']; $cou= $_GET['course'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/d2d527518d.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="dasboard.css">
    <style>
        
 table thead tr{

color:#fff;
background: #023550;
text-align: left;
font-weight: bold;

}
nav{
    width:280px;
}
    </style>
</head>
<body>
    
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="home.php" class="logo">
                        
                            <img src="logo1.png" alt="" width="80px" height="80px">
                         
                        <br>
                        <br>
                        <span class="nav-items">
                           <?php echo "$users" ; ?>
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
                    <a href="logout.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="nav-item">log out</span>
                    </a>
                </li>

              

            </ul>
        </nav>
        <section class="main">
            <div class="main-top">
                <h1>Attendance</h1>
                <div class="forme"><a href="randomCode.php"> generate an attendance</a></div>
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
    </div>

    <div class="courses">


    <form method="POST">
        <input type="text" name ="ide"> <label for="">confirm your id</label>
        <input type="submit" value="submit">
    </form>
 

    </div>
</body>
</html>