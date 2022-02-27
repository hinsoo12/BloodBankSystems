<?php

session_start();

 $hostName = "localhost";
 $rootName = "root";
 $pass = "";
 $DBname = "BloodBankDB";
 $con = mysqli_connect($hostName,$rootName,$pass,$DBname);

$name = "";
$username = "";
$email = "";

$errors = array();

if(isset($_POST['register']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password1 = mysqli_real_escape_string($con,$_POST['password']);
    $password2 = mysqli_real_escape_string($con,$_POST['repass']);

    if(empty($_POST['name']))
    {
        array_push($errors,"Please enter your name!");
    }
    
    if(empty($_POST['email']))
    {
        array_push($errors,"* Email is required!");
    }
    else 
    {
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
            array_push($errors,"You enter invalid email!");
        }
        else 
        {
            $email = mysqli_real_escape_string($con,$_POST['email']);
        }
    }
   
    if(empty($username))
    {
        array_push($errors,"* Username is required!");
    }

    if(empty($password1))
    {
        array_push($errors,"* Password is required!");
    }
    
    // checking for existing email and username

    $checker = "SELECT *from admin where username='$username' or email='$email' LIMIT 1";
    $checkerTake = mysqli_query($con,$checker);

    $valid = mysqli_fetch_assoc($checkerTake);
    
    if($valid)
    {
        if($valid['username']){array_push($errors,"Username is exist!");}
        if($valid['email']){array_push($errors,"Email is exist!");}
        
    }

    if(count($errors)==0)
    {
        if($password1 == $password2)
        {
            $password = md5($password1); // for encrpting the password

            $register = "INSERT into admin values('$name','$username','$email','$password')";
    
            $query = mysqli_query($con,$register);
    
            if($query)
            {
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
               // $_SESSION['password'] = $password;
                
               header("location:http://localhost/BloodBankSystem/AdminsPage/");
            }
            else {
                header("location:http://localhost/BloodBankSystem/AdminsPage/AdminRegisteration.php");
            }
        }
        else{
            array_push($errors,"Password you enter is not match");
        }
       
    }
}


mysqli_close($con);
 
?>