<?php
$conn = mysqli_connect("localhost", "root", 111111);
mysqli_select_db($conn, "opentutorials");
$sql="INSTER INTO topic(title, description, author, created) VALUES('".$_POST['title']."', '"$_POST['description']."','".$_POST['author']."',now())";
$result = mysqli_query($conn, $sql);
header('location: http://127.0.0.1:8080/index.php'); // redirection

// created의 자료형은 Datetime, now()는 MySQL이 제공하는 api.


 ?>
