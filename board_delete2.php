<?php

    $num   = $_GET["num"];
    $page   = $_GET["page"];

	//$con = mysqli_connect("localhost", "memberadmin", "java301", "newhp");
  	//db 접속 정보 변경
 	// 2022-03-11일 dbconn.php로 통합함 khy
   	include "dbconn.php";
    $sql = "select * from board2 where num = $num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $copied_name = $row["file_copied"];

	if ($copied_name)
	{
		$file_path = "./data/".$copied_name;
		unlink($file_path);
    }

    $sql = "delete from board2 where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'board_list2.php?page=$page';
	     </script>
	   ";
?>

