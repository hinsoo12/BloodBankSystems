

<?php 
session_start();

$success = "";

$serverName = "localhost";
$rootusername = "root";
$rootPassword = "";
$DBname = "BloodBankDB";


$errors = array();

$connection  = mysqli_connect($serverName,$rootusername,$rootPassword,$DBname);

if($connection)
{

if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(isset($_POST['login']))
{   $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($_POST['username']))
    {
        array_push($errors,"* Username is required!");
    }
    if(empty($_POST['password']))
    {
        array_push($errors,"* Password is required!");
    }
    
$select = "select *from admin where username = '$username' && password='".md5($password)."'";
$row = mysqli_query($connection,$select);

$result = mysqli_num_rows($row);

    if($result)
    {
        $_SESSION['User'] = $_POST['username'];
        header("location:http://localhost/BloodBankSystem/AdminsPage/dashboard.php");
    }
    
    else
    {
        array_push($errors,"* You enter Incorrect password!");
        array_push($errors,"* You enter incorrect username!");
        header("location:index.php");
    }

 } 
}
}
?>