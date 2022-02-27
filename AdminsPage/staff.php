
<?php include 'container/header.php'; 
      include 'container/navbar.php';
?>
     <div class="panel-header panel-header-sm">
     </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Staff Members List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                      <tr>
                      <td> ID Number </td>
                      <td> First Name </td>
                      <td> Last Name</td>
                      <td> Email  </td>
                      <td> Mobile Number</td>
                      <td> Home Address </td>
                      <td> Position </td>
                      </tr>  
                        <?php 
                          $DBname = "BloodBankDB";
                          $con = mysqli_connect("localhost","root","",$DBname);
                          if($con)
                          {
                            $select = "select *from staff";
                            $row = mysqli_query($con,$select);
                            
                            if($row)
                            {
                              while($values=mysqli_fetch_assoc($row))
                              {
                                echo "<tr><td>".$values["StaffID"]."</td> <td>".$values["firstname"]."</td><td>".$values["lastname"]."</td><td>"
                                .$values["email"]."</td><td>".$values["phone"]."</td><td>".$values["homeAddress"]."</td><td>".$values["position"]."</td></tr>";
                              }

                            }

                          }

                        ?>
                     
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php include 'container/footer.php'; ?>