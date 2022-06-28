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
    

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <title>Netflix</title>
    <style>
        body{
   
    
   /* top, transparent black, faked with gradient */ 
   background: rgba(22, 19, 19, 0.65) url('https://assets.nflxext.com/ffe/siteui/vlv3/c732cb00-be61-4d64-b8c3-99f022e7a123/eceef24d-4920-430f-988b-d2f48f8ad060/IN-en-20220620-popsignuptwoweeks-perspective_alpha_website_large.jpg');
   background-blend-mode: darken;
   background-repeat: no-repeat;
   background-size: cover;
   margin: 0px;
   position: sticky;
    height: 900px;
   /* background-attachment: fixed; */
   background-position: center center;
   color: white;
   /* align-items: center;
   text-align: center; */


   
}
.head{
   color: rgb(255, 255, 255);
   font-size: 32px;
   font-weight: 700;
   margin-bottom: 28px;
   opacity: 8;
}
.icon{
   position:absolute;
   margin: 0px;
   bottom: 789px;
   padding: 12 34px;
   left:12px;

}

.formbox{
   height: 515px;
   width: 360px;
   background-color: black;
   opacity: 0.5;
   position: relative;

  
   
}
.captions{
   height: 190px;
   width: 400px;
   background-color:transparent;
   position: relative;
   bottom: 160px;
   right: 2px;
}
.trans{
   position: absolute;
   height: 100px;
   width: 211px;
   right: 50%;
   bottom: 628px;
   align-items: center;
   align-content: center;
   text-align: center;
}
.enteremail{
   color: black;
   height: 50px;
   line-height: 50px;
   border-radius: 4px;
   width: 300px;
   border-width: 0px;
   border-style: initial;
   border-color: initial;
   border-image: initial;
   position: relative;
   left: 31%;
   padding: 16px 20px 0px;
}
.givecenter{
   position: relative;
   left:6%;

}
.g{
   position: relative;
   left:92%;
}
.captions p{
   
       position: relative;
       left:11%;
   
   
}
.rememfont{
   color: gray;
}
.help{
   text-decoration: none;
   color: grey;
   font-size: 15px;
}
.needhelp{
   position: relative;
   left:98%;
   bottom: 24px;
   text-decoration: none;
   

}
.foottext{
   color: gray;
   text-decoration: none;
}
.check{
   position: relative;
   left: -19px;
}
.non{
visibility: hidden;
}
.btn{
    color:white;
   width: 300px;
   position: relative;
   left: 31%;
   text-align: center;
   background-color: red;
   font-size: 16px;
   font-weight: 700;
   border-radius: 4px;
   margin: 24px 0px 12px;
}
.footer{
   background-color: black;
   height: 150px;
   width: 100%;
}
.mainfooter{
  width: 900px;
  align-items: center;
}
    </style>
</head>

<body>
    <div class="container">
    <img class="icon" src="https://cdn-icons-png.flaticon.com/128/5977/5977590.png" height="145px" width="145px" alt="">
 
        <br><br><br><br><br><br><br>
    <div class="container formbox">
    
    </div>
    <div class="container trans">
        <center> 
        
        <h1 class="head givecenter">Sign In</h1>
        <form action="index.php" method="post">
        <input class="enteremail" type="email" name="email" placeholder="Enter your email">
        <br><br><br>
        <input name="name" type="password" class="enteremail" placeholder="Password">
        <br><br>
        <button class="btn btn-outline-primary">submit</button>
      </form>
         <span class="non">sxcaxa</span> <input type="checkbox"> <span class="givecenter rememfont">Remember me</span>
         <span class="needhelp"><a href="#" class="help"><span class="non">brbrbrbrbrbr</span>Need Help?</a></span> 
         <br>
   
        
</center>
    </div>
    <div class="container captions">
        <p class="g" style="color:gray">New to Netflix? <a href="#" style="text-decoration: none;color: white;">Sign up now</a>.</p>
   <p style="font-size: small; color:gray;"> This page is protected by Google reCAPTCHA to 
            </p>
          <p style="font-size: small; color:gray;"">you're not a bot. <a href="#" style="text-decoration: none;">Learn more.</a></p>
    </div>
    <!-- <div class="container-fluid footer">
        <div class="container mainfooter">
            <h5 style="color: gray;">Questions? Call 000-800-040-1843</h5>
            <br><br>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="foottext" href="#">FAQ</a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="foottext" href="#">Help center</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="foottext" href="#">Terms of Use</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="foottext" href="#">Privacy</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="foottext" href="#">Cookie Preferences</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="foottext" href="#">Corporate Information</a>
            </div>
        
        </div>
    </div>
    </div> -->
</div>
</body>
</html>