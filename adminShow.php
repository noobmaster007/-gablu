<?php include("mydb.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>STUDENT DETAILS</title>
    <link rel="stylesheet" href=""/>
  </head>
  <body>
     <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
        <img src="css/Freesample.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          CompanyName
        </a>

             <div class="btn-group" role="group" aria-label="Basic example">
         <button type="button" class="btn btn-secondary" id="addStu">Add Student</button>
    </div>
</nav>
    
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-10">

          <h3 class="text-center text-dark mt-2">STUDENT DETAILS</h3>
          <hr>
          <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
             <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">R#</th>
      <th scope="col">Name</th>
      <th scope="col">Dept</th>
      <th scope="col">Year</th>
      <th scope="col">BookName</th>
      <th scope="col">BookAuthor</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM addstd";
    $result_table = mysqli_query($connect,$query);  
    
    while($row = mysqli_fetch_assoc($result_table)) { ?>
    <tr>
      <td><?php print $row['roll_number']; ?></td>
      <td><?php print $row['name']; ?></td>
      <td><?php print $row['dept']; ?></td>
      <td><?php print $row['yr']; ?></td>
      <td><?php print $row['book_name']; ?></td>
      <td><?php print $row['book_author']; ?></td>
      <td>
        <a href="stdedit.php?id=<?php print $row['id']; ?>" class="badge badge-success p-2">
          UPDATE
        </a> |
        <a href="stddlt.php?id=<?php print $row['id']; ?>" class="badge badge-danger p-2">
          DELETE
        </a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script type="text/javascript">
    document.getElementById("addStu").onclick = function(){
        location.href = "admin.php";
      };
  </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>