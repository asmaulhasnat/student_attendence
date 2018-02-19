      <?php include "inc/header.php";?>
        <div class="panel panel-deafult">
            <div class="panel-heading">
                 <h2>
                     <a class="btn btn-success" href="attendenceview.php">back</a>
                     <a class="btn btn-info pull-right" href="index.php">add attendence</a>
                 </h2>
            </div>
            <?php if(isset($_GET['dat']) && $_GET['dat'] !=null){
             $current_date=$_GET['dat'];
              $selectattenbydate=$stu->getattendencebydate( $current_date);
              }?>

              <?php if(isset($_POST['submit']) && $_POST['submit'] !=null){
              $attend=$_POST['atten'];
              $dat=$_POST['dat'];
              $updateresult=$stu->getupdateattendence($attend,$dat);
              }?>
              <?php
              if (isset($updateresult)) {
                echo $updateresult;
              }
              ?>
            <div class="panel-body">
              <div class="well text-center"  style="font-size: 20px;">
                <strong>
                  Date : <?php echo $current_date;
                 ?>
                </strong>
              </div>

                <form method="post" action="">
                  <table class="table table-striped">
                    <tr>
                      <th width="25%">serial</th>
                      <th width="25%">student name</th>
                      <th width="25%">student roll</th>
                      <th width="25%">attendence</th>
                      
                    </tr>
                    
                    <?php
                    if($selectattenbydate){$i=0;
                    while($row=$selectattenbydate->fetch_assoc()){$i++;?>
                    
                    <tr>
                        <td><input type="hidden" name="dat" value="<?php echo$row['attendencetime'];?>">
                        <?php echo $i;?></td>
                        <td><?php echo $row['stname'];?></td>
                        <td><?php echo $row['satroll'];?></td>
                        <td><input <?php if ($row['attendence']=='present') {
                          echo 'checked';
                        }?> type="radio" name="atten[<?php echo $row['satroll'];?>]" value="present">P
                            <input <?php if ($row['attendence']=='absent') {
                          echo 'checked';
                        }?> type="radio" name="atten[<?php echo $row['satroll'];?>]" value="absent">A</td>
                    </tr>
                   <?php }
                    }?>
                     <tr>
                      <td><input class="btn btn-primary" type="submit" name="submit" value="update"></td>
                    </tr>
                  </table>
                </form>
              
            </div>
      </div>

      <?php include "inc/footer.php";?>