<?php include("mydb.php");
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>user page</title>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="css/Freesample.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    LibraryName
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>
      </br>
</br>

     
        <font size="7" face="verdana" color="blue">
          <center>HELLO STUDENT</center></font>
        
        </div>
      </br>



      <font size="3" face="italic"  >
          <center>This is a detail of Books you have borrowed from the libary .</center></font>
        </br>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">RollNumber</th>
              <th scope="col">NAME</th>
              <th scope="col">BOOK NAME</th>
              <th scope="col">AUTHOR</th>
              <th scope="col">ISSUE DATE</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $roll = $_GET['search'];
            $query = "SELECT * FROM addstd WHERE roll_number = $roll";
            $result_table = mysqli_query($connect,$query);
            while($row = mysqli_fetch_assoc($result_table)) {?>
            <tr>
              <td><?php print $row['roll_number']; ?></td>
              <td><?php print $row['name'];?></td> 
              <td><?php print $row['book_name'];?></td> 
              <td><?php print $row['book_author'];?></td>
              <td><?php print $row['created_at']; ?></td> 
            </tr>

              <?php }?>

           </tbody>
          
        </table>



    <!-- Optional JavaScript -->
   <script>
      function goBack() {
        window.history.back();
      }
</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>