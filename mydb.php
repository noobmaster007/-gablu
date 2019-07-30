<?php
session_start();

$connect = mysqli_connect(

	'localhost',

	'root',

	'',

	'library'
) or die(mysqli_erro($mysqli));

?>