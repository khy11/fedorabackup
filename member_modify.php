<?php
	$id = $_GET["id"];
	
	$pass = $_POST["pass"];
	$name = $_POST["name"];
	$email1 =$_POST["email1"];
	$email2 = $_POST["email2"];

	$email = $email1."@".$email2;

	//$con = mysqli_connect("localhost", "memberadmin", "java301", "newhp");
  	//db 접속 정보 변경
 	// 2022-03-11일 dbconn.php로 통합함 khy
   	include "dbconn.php";
	$sql = "update members set pass='$pass', name='$name', email='$email' where id='$id'";
	mysqli_query($con, $sql);

	mysqli_close($con);
	echo "
		<script>
		location.href = 'index.php';
		</script>
	       ";
?>