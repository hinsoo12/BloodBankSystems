
<?php

include 'index.php';

if(isset($_SESSION['User']))
{    
    
    session_unset();
    session_destroy();
    ob_start();
    header("location:index.php");
    ob_end_flush();
    include 'index.php';
    exit();
}
else if(isset($_SESSION['Email']))
{
    session_unset();
    session_destroy();
    ob_start();
    header("location:index.php");
    ob_end_flush();
    include 'index.php';
    exit();
}
else{
   // header('location:dashboard.php');
   
   session_unset();
   session_destroy();
   ob_start();
   header("location:index.php");
   ob_end_flush();
   include 'index.php';
   exit();
   
}
?>