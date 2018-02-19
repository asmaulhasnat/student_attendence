      <?php include "inc/header.php";?>
      <script type="text/javascript">
        $(document).ready(function() {
          $("form").submit(function () {
            var roll=true;
            $(':radio').each(function () {
              name=$(this).attr('name');
              if(roll && !$(':radio').length){


              }

            })
          })
          return roll;
        })
      </script>
        <div class="panel panel-deafult">
            <div class="panel-heading">
                 <h2>
                     <a class="btn btn-success" href="addstudent.php">add student</a>
                     <a class="btn btn-info pull-right" href="attendenceview.php">view all</a>
                 </h2>
            </div>
            <?php if(isset($_POST['submit']) && $_POST['submit'] !=null){
              $attend=$_POST['atten'];
             $current_date= date('Y-m-d|h');
              $insertresult=$stu->getinsertattendence( $current_date,$attend);
              }?>
              <?php
              if (isset($insertresult)) {
                echo $insertresult;
              }
              ?>

            <div class="panel-body">
              <div class="well text-center"  style="font-size: 20px;">
                <strong>
                  Date : <?php echo $currentdate= date('Y-m-d|h');
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
                    
                    <?php $getstudent=$stu->getallstudent();
                    if($getstudent){$i=0;
                    while($row=$getstudent->fetch_assoc()){$i++;?>
                    
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['stname'];?></td>
                        <td><?php echo $row['stroll'];?></td>
                        <td><input type="radio" name="atten[<?php echo $row['stroll'];?>]" value="present">P
                            <input type="radio" name="atten[<?php echo $row['stroll'];?>]" value="absent">A
                        </td>
                    </tr>
                   <?php }
                    }?>
                    <tr>
                      <td><input class="btn btn-primary" type="submit" name="submit" value="submit"></td>
                    </tr>
                  </table>
                  
                </form>
              
            </div>
      </div>

      <?php include "inc/footer.php";?>