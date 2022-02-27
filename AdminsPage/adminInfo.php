


<?php 
      include('index.php');
      include 'container/header.php'; 
      include 'container/navbar.php';
?>
   <div class="panel-header panel-header-sm">
     </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> My Information</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                                  
                      <tr>
                      <td> Full Name </td>
                      <td> User Name </td>
                      <td> Email </td>
                      <td> Password </td>
                      </tr>
                    
                  <?php 
                    $DBname = "BloodBankDB";
                    $con = mysqli_connect("localhost","root","",$DBname);
                    if($con)
                    {
                      if(isset($_SESSION['User']))
                      {
                      $select = "SELECT *from admin where username='".$_SESSION['User']."'";
                      $row = mysqli_query($con,$select);
                      
                      if($row)
                      {
                        while($values=mysqli_fetch_assoc($row))
                        {
                          echo "<tr><td>".$values["name"]."</td><td>".$values["username"]."</td><td>".$values["email"]."</td></tr>";
                        }

                      }
                     }
                     else if(isset($_SESSION['Email']))
                     {
                      $select = "SELECT *from admin where email='".$_SESSION['Email']."'";
                      $row = mysqli_query($con,$select);
                      
                      if($row)
                      {
                        while($values=mysqli_fetch_assoc($row))
                        {
                          echo "<tr><td>".$values["name"]."</td><td>".$values["username"]."</td><td>".$values["email"]."</td></tr>";
                        }

                      }
                     }
                     else{
                       die("Unauthorized Access");
                       exit();
                     }

                    }

                  ?>
                    
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="img/default-avatar.png" alt="...">
                    <h5 class="title"><?php if(isset($_SESSION['User'])){echo $_SESSION['User']; } else if(isset($_SESSION['Email'])){echo $_SESSION['Email']; } else{ exit(); } ?></h5>
                  </a>
                  <p class="description">
                  </p>
                </div>
                <p class="description text-center">
                  "Blood Bank System@<br>
                  Harar Blood Bank Management System
                   <br>
                  Harar"
                </p>
              </div>
              <hr>
              
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
