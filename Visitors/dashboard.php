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
                <h1>Attendance</h1>
                <i class="fas fa-user-cog"></i>
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
                include 'connection.php';
                $sql =" select * from students_data";
                $query= mysqli_query ($connect,$sql);
                if($query){
                  while($row=mysqli_fetch_assoc($query)){
                    $Id=$row['id'];
                    $first_Name= $row['fName'];
                    $contact=$row['phoneContact'];
                    $reg_number= $row['registration_number'];
                    $date=$row['attendance_date'];
                    
                    echo' <tr>
                    <td>'.  $Id.'</td>
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
</body>
</html>