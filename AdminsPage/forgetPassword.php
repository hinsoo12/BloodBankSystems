<?php 
      
      include('DBValidator/forgetValidate.php');
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
  <meta charset="UTF-8">
  <title>Blood Bank - Management System</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
  <link rel="stylesheet" href="css/formstyle.css" media="screen" type="text/css" />

</head>
<body>
  <section >
    <div class="container" >

      <div id="login">

        <form action="forgetPassword.php" method="post">

          <fieldset class="clearfix">

          <p><span class="fontawesome-user"></span><input type="text"  name="email" placeholder="Email Address" required></p> 
          
          <p><input type="submit" name = "forget" value="Submit"></p>
            <h4><a href="index.php" style="color:#fff;">Sign in Here</a></h4>
          </fieldset>
        </form>
        <p>Not a member? <a href="AdminRegisteration.php">Sign up now</a><span class="fontawesome-arrow-right"></span></p>

      </div> <!-- end login -->

    </div>
  </section>
  </body>
</html>

</body>

</html>