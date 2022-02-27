<?php 
      session_start();
      include 'container/header.php';
      include 'container/navbar.php';
?> 

<script type="text/javascript">   // to disable back button after logout
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()",0);
  window.onunload=function() {null};
  window.alert("After logout the page is back button is disabled!");
</script>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Welcome To Admin Dashboard </h5>
              </div>
            <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="places-buttons">
                  <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                      <h4 class="card-title">
                        <p class="category">What are you going to do? </p>
                      </h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block">Assign Staffs</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block">Manage Overall Activities</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block">Manage Blood Bank Branches</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block">Manage Donors Info</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block">Manage Receipst Info</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block">Update News</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
      <?php include 'container/footer.php'; ?>