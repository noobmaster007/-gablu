<?php

include("mydb.php");

$rollnum = '';
$name = '';
$userDept = '';
$year = '';
$bookname = '';
$author = '';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "SELECT * FROM addstd WHERE id=$id";
	$result = mysqli_query($connect,$query);
	if (mysqli_num_rows($result) == 1) {
		
		$row = mysqli_fetch_array($result);
		$rollnum = $row['roll_number'];
		$name = $row['name'];
		$userDept = $row['dept'];
		$year = $row['yr'];
		$bookname = $row['book_name'];
		$author = $row['book_author'];
	}
}

if (isset($_POST['update'])) {
	
	$id = $_GET['id'];
	$rollnum = $_POST['rollnum'];
	$name = $_POST['name'];
	$userDept = $_POST['userDept'];
	$year = $_POST['year'];
	$bookname = $_POST['bookname'];
	$author = $_POST['author'];

	$query = "UPDATE addstd SET roll_number = '$rollnum', name = '$name', dept = '$userDept', yr = '$year', book_name = '$bookname', book_author = '$author' WHERE id=$id";
  	mysqli_query($connect, $query);

  	$_SESSION['message'] = 'Task Updated Successfully';
  	$_SESSION['message_type'] = 'warning';
	header('Location: adminShow.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
  	<!-- update form -->
   <div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="stdedit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
        	<label for="exampleFormControlInput1">Enter Roll-Number:</label>
              <input type="text" name="rollnum" class="form-control" value="<?php echo $rollnum; ?>" required>
        </div>
        <div class="form-group">
        	<label for="exampleFormControlInput1">Enter Name:</label>
              <input type="text" name="name" class="form-control" value="<? echo $name; ?>" required>
            </div>
            <div class="form-group">
            	<label for="exampleFormControlInput1">Enter Department:</label>
               <input class="form-control" required name="userDept" value="<?php echo $userDept; ?>">
               
                </div>
              <div class="form-group">
              	<label for="exampleFormControlInput1">Enter Year of Addmission:</label>
          		<input class="form-control" required name="year" value="<?php echo $year ;?>">
                
                </div>
              <div class="form-group">
              	<label for="exampleFormControlInput1">Enter Book-Name:</label>
              <input type="text" name="bookname" class="form-control" required value="<?php echo $bookname; ?>">
            </div>
            <div class="form-group">
            	<label for="exampleFormControlInput1">Name of Author: </label>
              <input type="text" name="author" class="form-control" required value="<?php echo $author; ?>">
            </div>
        <button class="btn btn-primary btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
