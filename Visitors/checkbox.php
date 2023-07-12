<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkbox.css">
    <style>
        button{
    width: 200px;
    height: 30px;
    background-color: #7f8284;
    border:none;
    border-radius:20px;
    color:#fff;
    font-size:20px;

}
.container{
    border-radius:20px;
}
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        if(isset($_SESSION['status']))
        {
            
            unset($_SESSION['status']);

        }
        ?>

        <div class="header">
        <h1>select the course unit </h1>
        </div>
        <div class="courses">
            <form action="saveCourse.php" method="POST">
               <div class="name"><label for="firstName"> first name</label><input type="text" name="user_name" required> <br></div> 
           
            <?php
          include('connection.php');
          $course_query= "SELECT * FROM  courseunit";
            $query_run= mysqli_query($connect,$course_query ); 

            if(mysqli_num_rows( $query_run)>0){

                foreach( $query_run as $courseUnit){
                     ?> 
                     <div class="check"> <input  type="checkbox" name="courseList[]" value= " <?= $courseUnit['courseName']; ?>"/> <?= $courseUnit['courseName']; ?> </div> <br>
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