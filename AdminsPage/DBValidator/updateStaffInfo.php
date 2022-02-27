

<?php
 $hostName = "localhost";
 $rootName = "root";
 $pass = "";
 $DBname = "BloodBankDB";
 $con = mysqli_connect($hostName,$rootName,$pass,$DBname);

 if($con)
{
     if($_SERVER["REQUEST_METHOD"]=="POST")
     {
         if(isset($_POST['update']))
         {
             $fName = $_POST['firstname'];
             $lName = $_POST['lastname'];
             $email = $_POST['email'];
             $mobile = $_POST['phone'];
             $address = $_POST['address'];
             $position = $_POST['position'];
             if(!empty($_POST['firstname']) || !empty($_POST['lastname']) || !empty($_POST['email'])|| !empty($_POST['phone'])||!empty($_POST['address']) || !empty($_POST['position']))
             {
                 if(filter_var($email,FILTER_VALIDATE_EMAIL))
                 {
                     $update= "UPDATE staff set firstname='$fName', lastname='$lName',phone='$mobile',homeAddress='$address', position='$position' where email='$email'";

                     $insert = mysqli_query($con,$update);
                     if($insert)
                     {
                         header("location:http://localhost/BloodBankSystem/AdminsPage/staff.php");
                     }
                     else{
                         header("location:assignStaff.php");
                     }
                 }
             }
         }
     }

}
else{
    die("Unable access the host");
}

mysqli_close($con);