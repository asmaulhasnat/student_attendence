      <?php include "inc/header.php";?>
        <div class="panel panel-deafult">
            <div class="panel-heading">
                 <h2>
                     <a class="btn btn-success" href="addstudent.php">add student</a>
                     <a class="btn btn-info pull-right" href="index.php">add attendence</a>
                 </h2>
            </div>
            <?php if(isset($_POST['submit']) && $_POST['submit'] !=null){
             
              }?>

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
                      <th width="50%">attendence date</th>
                      <th width="25%">action</th>
                    </tr>
                    
                    <?php $getallattendence=$stu->allattendence();
                    if($getallattendence){$i=0;
                    while($row=$getallattendence->fetch_assoc()){$i++;?>
                    
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['attendencetime'];?></td>
                        <td><a  class="btn btn-info text-center" href="view_student_attendence.php?dat=<?php echo $row['attendencetime'];?>">view</a></td>
                    </tr>
                   <?php }
                    }?>
                  </table>
                  
                </form>
              
            </div>
      </div>

      <?php include "inc/footer.php";?>