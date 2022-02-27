
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
                <h4 class="card-title"> Blood Donors List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                                  
                      <tr>
                      <td> Donor ID </td>
                      <td> First Name </td>
                      <td> Last Name</td>
                      <td> Gender </td>
                      <td> Age </td>
                      <td> City </td>
                      <td> Email </td>
                      <td> Mobile </td>
                      <td> Blood Type </td>
                      </tr>
                    
                  <?php 
                    $DBname = "BloodBankDB";
                    $con = mysqli_connect("localhost","root","",$DBname);
                    if($con)
                    {
                      $select = "select *from donor";
                      $row = mysqli_query($con,$select);
                      
                      if($row)
                      {
                        while($values=mysqli_fetch_assoc($row))
                        {
                          echo "<tr><td>".$values["DonorID"]."</td> <td>".$values["firstname"]."</td><td>".$values["lastName"]."</td><td>".$values["Gender"]."</td><td>"
                          .$values["Age"]."</td><td>".$values["City"]."</td><td>".$values["Email"]."</td><td>".$values["Mobile"]."</td><td>".$values["Blood_Type"]."</td></tr>";
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