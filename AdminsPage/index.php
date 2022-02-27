<?php 
      
      include('DBValidator/loginValidate.php');
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
  <meta charset="UTF-8">
  <title>Blood Bank - Management</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
  <link rel="stylesheet" href="css/formstyle.css" media="screen" type="text/css" />

  <script type="text/javascript">   // to disable back button after logout
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()",0);
  window.onunload=function() {null};

  </script>


</head>
<body>
  <section >
    <div class="container" >

      <div id="login">

        <form action="index.php" method="post">
        
          <fieldset class="clearfix">
            <p><span class="fontawesome-user"></span><input type="text"  name="username" placeholder="Username" required></p> 
            <p><span class="fontawesome-lock"></span><input type="password" name="password"  placeholder="Password" required></p> 
            <p><input type="submit" name = "login" value="Sign In"></p>
            <?php include 'DBValidator/errorTeller.php'; ?>
            
            <h4><a href="forgetPassword.php" style="color:#fff;">I forget my Password</a></h4>
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


