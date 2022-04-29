<meta charset='utf-8'>

<?php

	$num = $_GET["num"];

	$mode = $_GET["mode"];



	//$con = mysqli_connect("localhost", "memberadmin", "java301", "newhp");
  	//db 접속 정보 변경
 	// 2022-03-11일 dbconn.php로 통합함 khy
   	include "dbconn.php";


	$sql = "delete from message where num=$num";

	mysqli_query($con, $sql);



	mysqli_close($con);                // DB 연결 끊기



	if($mode == "send")

		$url = "message_box.php?mode=send";

	else

		$url = "message_box.php?mode=rv";



	echo "

	<script>

		location.href = '$url';
	</script>

	";

?>

  
