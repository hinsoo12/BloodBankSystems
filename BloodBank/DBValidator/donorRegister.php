
<?php
$nameError = $ageError = $cityError = $emailError = $mobileError = $bloodError = "";

$hostName = "localhost";
$userName = "root";
$dbName = "BloodBankDB";

$connection = mysqli_connect($hostName,$userName,"",$dbName);

if($connection)
{
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_POST['donate']))
{

    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['mobile']))
    {

        if(preg_match("/^[a-zA-Z]*$/",$_POST['firstname']) &&preg_match("/^[a-zA-Z]*$/",$_POST['lastname']) && preg_match("/^[0-9]*$/",$_POST['age']) && preg_match("/^[a-zA-Z]*$/",$_POST['city']) 
        && preg_match("/^[0-9]*$/",$_POST['mobile']) && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $city = $_POST['city'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $bloodType = $_POST['blood'];
            
            $query = "INSERT INTO donor(firstname,lastname,Gender,Age,City,Email,Mobile,Blood_Type) values('$firstname','$lastname','$gender','$age','$city','$email','$mobile','$bloodType')";

            $row = mysqli_query($connection,$query);
            if($row)
            {
                echo "Thank you for joining for us. Will we send u notification on your phone and email!";
                header("location:http://localhost/BloodBankSystem/BloodBank/index.php");
            }
            else
            {
                echo "Please enter valid information";
                header("location:http://localhost/BloodBankSystem/BloodBank/donate.php");
            }
        }

    }
    else
    {
        echo "Please check all needed information!";
    }
                                
}
}

}
else
{
die("Please check your connection".mysqli_error($connection));
}

?>