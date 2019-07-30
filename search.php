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

    <title>SEARCH_BOX</title>
    <link rel="stylesheet" type="text/css" href="css/search.css">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
        <img src="css/Freesample.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          LibraryName
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="     #navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

  
</nav>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <h3 class="text-center text-dark mt-2">SEARCH BOOK</h3>
          <hr>
        </div>
      </div>
    </div>

    <form class="form-group" method="GET">
      <div class="input-group">
        <label>Enter Book Name</label>
        <input type="text" name="bookname" placeholder="Book Name" required>
      </div>
      <div class="input-group">
        <button type="submit" class="btn btn-primary md-2">SEARCH</button>
      </div>

    </form>


  <table class="table table-bordered table-hover">
      <thead>
          <tr>
              <th scope="col">R#</th>
              <th scope="col">Book Name</th>
              <th scope="col">Book Author</th>
          </tr>
      </thead>
  <tbody>
    <?php
    $book = $_GET['bookname'];
    $query = "SELECT * FROM addstd WHERE book_name = '$book'";
    $result_table = mysqli_query($connect,$query);
            while($row = mysqli_fetch_assoc($result_table)) {?>
          <tr>
              <td><?php print $row['roll_number']; ?></td>
              <td><?php print $row['book_name']; ?></td>
              <td><?php print $row['book_author']; ?></td>
          </tr>
           <?php }?>
  </tbody>
</table>

    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>