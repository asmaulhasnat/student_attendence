      <?php include "inc/header.php";?>
        <div class="panel panel-deafult">
            <div class="panel-heading">
                 <h2>
                     <a class="btn btn-success" href="viewstudent.php">view student</a>
                     <a class="btn btn-info pull-right" href="index.php">back</a>
                 </h2>
            </div>
            <?php if(isset($_POST['submit']) && $_POST['submit'] !=null){
              $name=$_POST['name'];
              $roll=$_POST['roll'];
              $insertresult=$stu->getinsertedstudent( $name,$roll);
              }?>
              <?php
              if (isset($insertresult)) {
              	echo $insertresult;
              }
              ?>

            <div class="panel-body">
                <form method="post" action="">
                  <div class="form-group">
                  	<label for="name">student name</label>
                  	<input class="form-control" type="text" name="name" id="name" required="">
                  </div>
                  <div class="form-group">
                  	<label for="roll">student roll</label>
                  	<input class="form-control" type="text" name="roll" id="roll" required="">
                  </div>
                  <div class="form-group">
                  	<input class="btn btn-primary" type="submit" name="submit" id="submit" value="add student" >
                  </div>
                  
                </form>
              
            </div>
      </div>

      <?php include "inc/footer.php";?>