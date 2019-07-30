<?
include('mydb.php');

if (isset($_POST['submit'])) {
	$rollnumber = $_POST['rollnumber'];
	$name = $_POST['name'];
	$dept = $_POST['userDept'];
	$yr = $_POST['year'];
	$bookname = $_POST['bookname'];
	$author = $_POST['author'];

	$query = "INSERT INTO addstd(roll_number,name,dept,yr,book_name,book_author) VALUES('$rollnumber', '$name', '$dept','$yr','$bookname','$author')";

	$result = mysqli_query($connect, $query);

	if (!$result) {
		die("Query Failed.");
	}

	$_SESSION['message'] = 'STUDENT ADD SUCCESSFUL';
	$_SESSION['message_type'] = 'success';
	header('Location: admin.php');
}
?>