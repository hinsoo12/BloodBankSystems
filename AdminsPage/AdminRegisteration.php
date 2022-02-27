
<?php 
      include 'DBValidator/server.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <title>Harar Blood Bank-Register</title>

    <link rel="stylesheet" href="css/formstyle.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
</head>
<body >

  <div class="container">
     <div id="login">
     <h2>Sign Up Page</h2>
		   <h4></h4>
        <form action="AdminRegisteration.php" method="post">
        
          <fieldset class="clearfix">
		        <p><span class="fontawesome-user"></span><input type="text"  name="name" placeholder="Full Name" required></p> 
            <p><span class="fontawesome-user"></span><input type="text"  name="username" placeholder="Username" required></p> 
			      <p><span class="fontawesome-user"></span><input type="text"  name="email" placeholder="Email Address" required></p>  
			      <p><span class="fontawesome-lock"></span><input type="password" name="password"  placeholder="Password" required></p> 
            <p><span class="fontawesome-lock"></span><input type="password" name="repass"  placeholder="Confirm Password" required></p> 
			      <p><input type="submit" name = "register" value="Sign Up"></p>
            <?php include 'DBValidator/errorTeller.php'; ?>
          </fieldset>
        </form>
        <p>I have Account? <a href="index.php">Sign In</a><span class="fontawesome-arrow-right"></span></p>

    </div> <!-- end login -->  
 </div>
</body>
</html>
