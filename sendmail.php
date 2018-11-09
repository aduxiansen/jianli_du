<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$link = mysqli_connect("127.0.0.1", "root", "duxinhao", "jianli");
	$sql = "insert into jianli values(null,'$name','$email','$message');";
	$query = mysqli_query($link, $sql);
?>