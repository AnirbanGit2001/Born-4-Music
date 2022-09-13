<?php
session_start();
 //error_reporting(0);
 
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    //data base connection
    $con = new mysqli('localhost','root','','college_project');
    if($con ->connect_error){
        die("connection Faield :".$con->connect_error);
    }else{
        $stmt =$con->prepare("select * from signup where email  = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){

            $data = $stmt_result -> fetch_assoc();

            if($data ['password'] === $password)
            {
               

                echo"<script>
                alert('login Successfully !');
                window.location.assign('music player/index.html');
                
                </script>";
        
            }
            else
            {
                // echo "<script>
                
                // alert('Invalid email or Password');
                // window.location.assign('login.html');
                // </script>";

                $_SESSION['emailAndPass_alart']='1';
                header("location:login.php");
            }

        }
        else
        {
            // echo "<script>
            //     alert('Invalid email or Password');
            //     window.location.assign('login.html');
            //     </script>";
            $_SESSION['emailAndPass_alart']='1';
            header("location:login.php");
        }
    }


 ?>