<?php 
      session_start();
      include 'DBValidator/addStaff.php';
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
                <h5 class="title">Add Staffs</h5>
              </div>
              <div class="card-body">
                <form action="assignStaff.php" method="post">
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" class="form-control" name="phone" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Home Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Home Address">
                      </div>
                    </div>
                    <br><br>
                    <div class="col-md-6 pl-1">
                       <div class="form-group">
                        <label>Position</label>
                             <select class="form-control" name="position" style="width: 100%;padding: 10px;border: none;border-radius: 10px;background-color: #f1f1f1;color:black;">
                                <option value="Blood Collector" name="position">Blood Collector</option>
                                <option value="Laboratory Technician" name="position">Laboratory Technician</option>
                                <option value="Advisor" name="position">Advisor</option>
                                <option value="Nurse" name="position">Nurse</option>
                                <option value="Driver" name="position">Driver</option>
                             </select>
                      </div>
                      </div>
                  </div>
                  <br><br>
                  <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <input type="submit" name="assign" class="form-control" value="Add Staff" style="background-color:red;">
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