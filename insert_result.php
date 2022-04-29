<?php
	//$con = mysqli_connect("localhost", "memberadmin", "java301", "newhp");
  	//db 접속 정보 변경
 	// 2022-03-11일 dbconn.php로 통합함 khy
   	include "dbconn.php";
	or die("mysqlDB 접속실패");
		$userid = $_POST["userid"];
		$name = $_POST["name"];
		$birthday = $_POST["birthyear"];
		$addr = $_POST["addr"];
		$mobile1 = $_POST["mobile1"];
		$mobile2 = $_POST["mobiled2"];
		$height = $_POST["height"];
		$mdate = date("Y-m-j");

		$sql = "insert into usertbl values('".$userid."', '".$name."', '".$birthyear."', '".$addr."',
			'".$mobile1."' , '".$mobile2."', '".$height."', '".$madate."')";

		$ret = mysqli_query($con, $sql);

		echo "<h1> 신규 회원 입력 결과 </h1>";
		if ($ret) {echo "데이터가 성공적으로 입력되었습니다.";}
		else { echo "데이터 입력실패 !!<br>";
		        echo "실패 원인 : ".mysqli_error($con); }
		mysqli_close($con);
		echo "<br> <a href='main.html'> <----초기화면</a>";
?>
	