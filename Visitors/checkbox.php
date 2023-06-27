<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        if(isset($_SESSION['status']))
        {
            echo "h4".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);

        }
        ?>

        <div class="header">
        <h1>select the course unit please</h1>
        </div>
        <div class="courses">
            <form action="saveCourse.php" method="POST">
                 
           
            <?php
          include('connection.php');
          $course_query= "SELECT * FROM  courseunit";
            $query_run= mysqli_query($connect,$course_query ); 

            if(mysqli_num_rows( $query_run)>0){

                foreach( $query_run as $courseUnit){
                     ?> 
                      <input type="checkbox" name="courseList[]" value= " <?= $courseUnit['courseName']; ?>"/> <?= $courseUnit['courseName']; ?> <br>
                     <?php
                }

            }
            else{
                echo "no record found";
            }
            
            
            ?>
            <div class="submit">
                <button  name="save"> get started </button>
            </div>
             </form>
        </div>
    </div>
</body>
</html>