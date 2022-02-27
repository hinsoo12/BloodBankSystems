
<?php 
      session_start();
      include'DBValidator/deleteDonorsInfo.php';
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
                <h5 class="title">Remove Donors From the list</h5>
              </div>
              <div class="card-body">
                <form action="deleteDonors.php" method="post">
                  <div class="row">
                    <div class="col-md-12">
                    <label>Donor Email address</label>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                      </div>
                    </div>
                 </div>
                 <br><br>
                 <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <input type="submit" class="form-control" name="deleteSingleD" value="Delete Single Donor" style="background-color:red;">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <input type="submit" class="form-control" name="deleteAllD" value="Delete All Donors" style="background-color:red;">
                      </div>
                    </div>
                 </div>
                </form>
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
                    <h5 class="title"><?php if(isset($_SESSION['User'])){echo $_SESSION['User']; } else if(isset($_SESSION['Email'])){echo $_SESSION['Email']; } else{ exit(); }?></h5>
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
      <?php include 'container/footer.php'; ?>