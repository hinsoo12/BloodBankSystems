

<?php

$con = mysqli_connect("localhost","root","","BloodBankDB");
if($con)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['deleteS']))
        {
            $email = $_POST['email'];
            
            if(!empty($_POST['email']))
            {
                if(filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                $query1 =  "delete from contact where email='$email' ";
                $deleteS = mysqli_query($con,$query1);
                if($deleteS)
                {
                    header("location:http://localhost/BloodBankSystem/AdminsPage/dashboard.php");
                }
                else
                {
                    header("location:manageContact.php");
                    echo "Unable to Delete";
                }
               }
            }
        }
        else if(isset($_POST['deleteA']))
        {
            $query2 = "delete from contact";
            $deleteA = mysqli_query($con,$query2);
            {
                if($deleteA)
                {
                    header("location:http://localhost/BloodBankSystem/AdminsPage/dashboard.php");
                }
                else{
                    header("location:deleteDonor.php");
                    echo "Unable to Delete";
                }
            }
         }
        else
        {
            header("location:http://localhost/BloodBankSystem/AdminsPage/donorList.php");
            echo "Not checking conditions";
        }
    }
}
else{
    die("Unable access the host".mysqli_error($con));
}
mysqli_close($con);
?>