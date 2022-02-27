
<?php

$hostName = "localhost";
$userName = "root";
$dbName = "BloodBankDB";

$con = mysqli_connect($hostName,$userName,"",$dbName);

if($con)
{


if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(isset($_POST['request']))
{
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $city = $_POST['city'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $bloodType = $_POST['blood'];
            $message = $_POST['message'];


    if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($mobile))
    {

        if(preg_match("/^[a-zA-Z]*$/",$firstname) &&preg_match("/^[a-zA-Z]*$/",$lastname) && preg_match("/^[0-9]*$/",$age) && preg_match("/^[a-zA-Z]*$/",$city) 
        && preg_match("/^[0-9]*$/",$mobile) && filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $query = "INSERT INTO request(firstname,lastname,Gender,Age,City,Email,Mobile,Blood_Type,message) values('$firstname','$lastname','$gender','$age','$city','$email','$mobile','$bloodType','$message')";

            $row = mysqli_query($con,$query);
            if($row)
            {
                header("location:http://localhost/BloodBankSystem/BloodBank/");
            }
            else
            {
                header("location:http://localhost/BloodBankSystem/BloodBank/request.php");
                exit();
            }
        }
        else{
            echo "Un correct input is entered!";
            header("location:http://localhost/BloodBankSystem/BloodBank/request.php");
                exit();
        }
    }
    else{
        echo "Fields should not be empty";
        header("location:http://localhost/BloodBankSystem/BloodBank/request.php");
                exit();
    }
    
                                
}
else{
    die("You are not in correct access method!");
}
}

}
else
{
die("Please check your connection".mysqli_error($connection));
}
mysqli_close($con);
?>