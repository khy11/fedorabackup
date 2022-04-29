<?php
   $id = $_POST["id"];
   $pass = $_POST["pass"];
   $name = $_POST["name"];
   $email1 = $_POST["email1"];
   $email2 = $_POST["email2"];
   $email = $email1."@".$email2;
   
   $regist_day = date("Y-m-d (H:i)"); // 현재의 '년-월-일-시-분'을 저장

	//$con = mysqli_connect("localhost", "memberadmin", "java301", "newhp");
  	//db 접속 정보 변경
 	// 2022-03-11일 dbconn.php로 통합함 khy
   	include "dbconn.php";

   $sql = "insert into members(id, pass, name, email, regist_day, level, point) ";
   $sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)";

   mysqli_query($con, $sql); //$sql에 저장된 명령 실행
   mysqli_close($con);
 
   echo "
		<script>
			location.href = 'index.php';
		</script>
	";
?>
