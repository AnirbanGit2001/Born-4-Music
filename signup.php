<?php 
    session_start();
    $massage='';
    if(isset($_SESSION['email_alart'])){
        $massage='Email ID Already Exists !! <br>  please try with another Email ';
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
        <link rel="stylesheet" href="signup.css">
        <script src="index.js"></script>
    </head>
    <body >
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

        <form action="index.php" method="POST">

            <div id="tableheading">
                <p>Sign up</p>
                
               
            </div>
            
            

            <table id="table"   align="center" height="350px"  style="border: solid; background-color: rgba(255, 255, 255, 0.116); color: rgb(255, 255, 255); border-color: rgba(158, 148, 148, 0.322);border-radius: 2% ;">
                <tr>
                    <th style="font-size: 150%;">First name : </th>
                    <th style="font-size: 200%;"><input type="text" placeholder="Enter first name" name="firstName" required ></th>
                </tr>
                <tr>
                    <th style="font-size: 150%;">
                        Last name :
                    </th>
                    <th style="font-size: 200%;">
                        <input type="text" placeholder="Enter last name" name="lastName" required>
                    </th>
                        
                </tr>
                <tr>
                     <th style="font-size: 150%;">
                        Email :
                    </th>
                    <th style="font-size: 200%;">
                        <input type="email" placeholder="Enter Email" name="email" required>
                    </th>
                </tr>
                <tr>
                    <th style="font-size: 150%;">
                        Password :
                    </th>
                    <th style="font-size: 200%;">
                        <input type="password" placeholder="Enter Password" name="password" required>
                    </th>
                </tr>
                 <tr align="center">
                    <td colspan="2" style="font-size: 120%;"> <b>Already a member ?</b>  <b> <a href="login.php" style= "color:lime;font-size:25px;text-decoration:none"> Log in </a> </b> <br> <h5 style="color: yellow";><?php echo $massage ?> </h5></td>
                </tr>
                
                    
                    
                <tr align="center">
                    <td colspan="2"><input type="submit"value="Sign up" style="background-color: rgb(247, 247, 247) ; width: 150px; border: solid; border-color: rgb(1, 9, 17); color: rgb(1, 9, 17);font-size: 20px; "></td>
                </tr>
                        
                        
            </table>
        </form> 
            <?php unset($_SESSION['email_alart']);?>



            <div style= "margin-top: 70px;">
			<h2 align="center" style="color:white;">&copy Born For Music </h2>
		</div>	
        
        
    </body>
</html>
