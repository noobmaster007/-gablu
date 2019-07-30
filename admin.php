<?php include("mydb.php"); ?>
<!doctype html>
<html lang="en">                                <!--DONE BY PRATIP SARKAR -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>WELCOME ADMIN</title>
    <link rel="stylesheet" href="css/admin1.css"/>
  </head>
  <body>

    
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
    <img src="css/Freesample.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    CompanyName
  </a>
    <form>
      <div class="btn-group" role="group" aria-label="Basic example">
        <button  type="button" class="btn btn-secondary" id="showRec">Show Record</button>
      </div>
    </form>
</nav>
<!-- Alert Message-->
<div class="container-fluid">
<div class="row justify-content-center">
  <div class="col-md-4">
    <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
      <?= $_SESSION['message']?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
     <?php session_unset(); } ?>    
  </div>
</div>
</div>
<!--Form -->
  <div id="logreg-forms">
      <form class="form-signin" action="add_std.php" method="POST">
          <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Add Student</h1>
              <div>
                <div class="form-group">
                  <input type="text" class="form-control" id="rollnumber" placeholder="Enter Roll Number" name="rollnumber" required>
                      <div class="invalid-feedback">
                            Please provide roll number. It's required.
                      </div>
                </div>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                        <div class="invalid-feedback">
                            Please provide name. It's required.
                        </div>
                        <br>
                          <div class="form-group">
                           
                                <input type="text" class="form-control" id="userDept" required name="userDept" placeholder="Enter Department">
                                 </div>
                                  <div class="invalid-feedback">
                                      Please select your department. It's required.
                          
                          </div>
                            <div class="form-group">              
                            
                                  <input type="text" class="form-control" id="year" name="year" placeholder="Enter Year" required>
                            
                                 </div>
                                  <div class="invalid-feedback">
                                    Please select your year. It's required.
                                  </div>
                              
                            </div> 
                              <div class="form-group">  
                                <input type="text" class="form-control" id="bookname" placeholder="Enter Book Name" name="bookname" required>
                                    <div class="invalid-feedback">
                                        Please provide Book Name. It's required.
                                    </div>
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="author" placeholder="Enter Author" name="author" required>
                                  <div class="invalid-feedback">
                                    Please provide Author. It's required.
                                  </div>
                              </div>
                              <div class="form-group" align="center">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                              </div>
              </div>
      </form>
  </div>
  
    

    <script type="text/javascript">
      document.getElementById("showRec").onclick = function(){
        location.href = "adminShow.php";
      };
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>