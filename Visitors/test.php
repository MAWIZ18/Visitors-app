<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <div class="form">
                 <form method="POST">
                     <input type="password" placeholder="confirm your password" name="search">
                         <button name="submit "> search</button> -->
                             <!-- <input type="submit" name="submit" value="search">

                    </form>
                
                    </div> --> 
   <?php
   
   include 'connection.php';
   $name='select fname from `teachers_data` where '
   $sql ="select theophile from `demo` where theophile != 'NULL'" ;
   $query= mysqli_query ($connect,$sql);
//    if($query){
//      while($row=mysqli_fetch_assoc($query)){
      
       
//        echo'
//        id:.$row=[
//        ';
     
//      }
     

//    }

if (mysqli_num_rows($query) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query)) {
      echo  " - Name: " . $row["theophile"]. "<br>";
    }
}

   
   ?> 

   
</body>
</html>