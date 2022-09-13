<?php

session_start();
//error_reporting(0);
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    

    //data base connection
    $conn = new mysqli('localhost','root','','college_project');
    if($conn->connect_error){

        die('Connection Failed : '.$conn->connect_error);
    }
    else{

            $sql ="SELECT * from signup where email='$email'";
            $result =mysqli_query($conn,$sql);
            $present=mysqli_num_rows($result);
            if($present>0){
                $_SESSION['email_alart']='1';
                header("location:signup.php");
            }
            
            else{




                $stmt = $conn->prepare("insert into signup(firstName, lastName, email, password) values( ?, ?, ?, ?)");
                $stmt->bind_param("ssss",$firstName,$lastName,$email,$password);
                $stmt->execute();
                    
                 echo"<script>
                    alert('Sign up Successfully !');
                    window.location.assign('login.php');
                    
                    </script>";

                    redirect_to('login.php');



                    //echo "Registration Successfully ...... !!";
                    $stmt->close();
                    $conn->close();

        
            }

    }



?>