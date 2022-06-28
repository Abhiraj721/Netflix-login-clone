<?php
     
    $server="localhost";
    $username="root";
    $password="";
$con=mysqli_connect($server,   $username,$password);

    if(!$con){
        die ("connectio failed".myspli_connect_error());
      
    }
    
        // echo "connected to database";
        $name=$_POST['name'];
        // $phone=$_POST['phone'];
        $email=$_POST['email'];
        // $age=$_POST['age'];
        // $year=$_POST['year'];


        $sql="INSERT INTO `trip`.`trip2` (`name`, `email`) VALUES
         ('$name','$email');";
    // echo $sql;
    if($con->query($sql) == true){
        // echo "data inserted";
    }
    else{
        echo "error";
    }
    $con->close();
    // <!-- <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>php</title>
// </head>
// <style>
//     *{
//         text-align: centers;

//     }
//     input{
//         width:80%;
//         padding:19px 20px;
  
        

//     }
// </style>
// <body>
//     <h1>nice</h1>
//     <form action="index.php" method="post">
//         <input type="text" name="name" placeholder="Enter your name">
//         <input type="phone" name="phone" placeholder="Enter your phone">
//         <input type="email" name="email" placeholder="Enter your email">
//         <input type="age" name="age" placeholder="Enter your age">
//         <input type="year" name="year" placeholder="Enter your year">
//         <br>
//         <button>submit</button>
//     </form>
    
// </body>
// </html> -->
    ?>
    

<!-- <!DOCTYPE html>

</html> -->
