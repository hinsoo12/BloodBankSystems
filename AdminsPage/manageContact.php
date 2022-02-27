

<?php 
      include 'DBValidator/deleteContactList.php';
      include 'container/header.php'; 
      include 'container/navbar.php';
?>
   <div class="panel-header panel-header-sm">
     </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Contact Queries List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">           
                      <tr>
                      <td> Name </td>
                      <td> Email </td>
                      <td> Subject</td>
                      <td> Message </td>
                      </tr>
                    
                  <?php 
                    $DBname = "BloodBankDB";
                    $con = mysqli_connect("localhost","root","",$DBname);
                    if($con)
                    {
                      $select = "select *from contact";
                      $row = mysqli_query($con,$select);
                      
                      if($row)
                      {
                        while($values=mysqli_fetch_assoc($row))
                        {
                          echo "<tr><td>".$values["name"]."</td><td>".$values["email"]."</td><td>".$values["subject"]."</td><td>".$values["message"]."</td></tr>";
                        }

                      }
                      else
                      {
                          echo "There is no one who send query";
                      }
                    }
                  ?>
                  </table>
                </div>
                <div class="card-body">
                <form action="manageContact.php" method="post">
                  <div class="row">
                    <div class="col-md-6 pl-1">
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
                        <input type="submit" class="form-control" name="deleteS" value="Delete Single Contact Query" style="background-color:red;">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <input type="submit" class="form-control" name="deleteA" value="Delete All Contact Query" style="background-color:red;">
                      </div>
                    </div>
                 </div>
                </form>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php include 'container/footer.php'; ?>