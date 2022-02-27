
<?php
$hostname = "localhost";
$rootname = "root";
$rootPass = "";
$DBname = "BloodBankDB";

$errorTeller = " ";

$con = mysqli_connect($hostname,$rootname,$rootPass,$DBname);

if($con)
{
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if(empty($name) || empty($email) || empty($subject) || empty($message))
        {
            $errorTeller = "Please fill all fileds!";
            header("location:http://localhost/BloodBankSystem/BloodBank/contact.php?contactUs=empty");
            exit();
        }
        else{
            if(!preg_match("/^[a-zA-Z]*$/",$_POST['name']) || !preg_match("/^[a-zA-Z]*$/",$_POST['subject']) )
            {

                header("location:http://localhost/BloodBankSystem/BloodBank/contact.php?");
                exit();
            }
            else{
                if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
                {
                    header("location:http://localhost/BloodBankSystem/BloodBank/contact.php");
                }
                else{
                    $contact = "INSERT INTO contact values('".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')";
                    $query = mysqli_query($con,$contact);

                    if($query)
                    {
                        header("location:http://localhost/BloodBankSystem/BloodBank/");
                    }
                    else{
                        header("location:http://localhost/BloodBankSystem/BloodBank/contact.php");
                        die("Unable to send message");
                    }
                }
            }
        }
    }
    else
    {
        die("You are not in correct access method!");
    }
 }
}
else{
    die("The host is unaccessible".mysqli_error($con));
}

mysqli_close($con);
?>