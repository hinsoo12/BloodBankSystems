

<?php 
session_start();

$success = "";

$serverName = "localhost";
$rootusername = "root";
$rootPassword = "";
$DBname = "BloodBankDB";

$connection  = mysqli_connect($serverName,$rootusername,$rootPassword,$DBname);

if($connection)
{

if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(isset($_POST['forget']))
{   
        $email = $_POST['email'];

        $result = mysqli_query($connection,"SELECT * FROM admin where email='$email'");

        $row = mysqli_fetch_assoc($result);

        $fetchEmail=$row['email'];
        
        $email_id=$row['email'];

        $password=$row['password'];

        if($email==$fetchEmail) 
        {
            $to = $email_id;
            $subject = "Password";

            $msg = "Your password is : $password.";
            
           // $headers = "From: password@studentstutorial.com" . "\r\n" .
           // "CC: somebodyelse@example.com";

            mail($to,$subject,$msg); //,$headers);
        }
        else{
            echo 'invalid Email';
        }
 }
} 
}
?>