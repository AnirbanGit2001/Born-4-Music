<?php 
    session_start();
    $massage='';
    if(isset($_SESSION['emailAndPass_alart'])){
        $massage='Invalid email or Password !!<br>  please try again ';
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo69.jpeg">
    <title>Born For Music </title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="logo">
        <img src="images/logo69.jpeg">

    </div>
    <div id="title">
        <p>Born 4 Music</p>
    </div>

    <div id="home">
            
            <p><a href="home page/home.html">Home</a> </p>
            
     </div>
   
   <hr>

   
   <form action="index1.php" method="POST">
    <div id="tableheading">
        <p>Login</p>
    </div>

    <table id="table" align="center" height="360px"  style="border: solid rgba(158, 148, 148, 0.322);  background-color: rgba(151, 139, 139, 0.144);color: rgb(255, 255, 255);border-radius: 2%;"  >
        <tr>
            <th style="font-size: 120%; " >Enter Email :</th>
            <th><input type="text" placeholder="Enter your email"  name="email" required> </th>
            
        </tr>
        <tr>
            <th style="font-size: 120%;">Enter Password : </th>
            <th><input type="password" placeholder="Enter Password "   name ="password" required></th>
        </tr >
        
        <tr align="center">
        <th colspan="2" style="font-size: 120%;">
            Don't have any Account please <br> <br> <a href="signup.php" style= "color:lime;font-size:25px;text-decoration:none"> sign up</a>
            <br>
           <h5 style="color:yellow;" ><?php echo $massage?></h5>
           
        </th>
        
        
           
        </tr>
        <tr align="center">
            <th colspan="2">  <input type="submit" value="Log in" style="background-color: rgb(248, 241, 241)404); color: rgba(15, 1, 1, 0.932); font-size: 20px; border: solid; border-color: rgb(1, 10, 19); width: 150px;"></th>
        </tr>
    </table>
</form>
    <?php unset($_SESSION['emailAndPass_alart']);?>


<div style= "margin-top: 70px;">
    <h2 align="center" style="color:white;">&copy Born For Music </h2>
</div>

</body>
</html>