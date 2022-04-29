<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>글 쓰기 페이지</title>
  </head>
  <body>
    <?php
 	//$con = mysqli_connect("localhost", "memberadmin", "java301", "newhp");
  	//db 접속 정보 변경
 	// 2022-03-11일 dbconn.php로 통합함 khy
   	include "dbconn.php";
    ?>

    <br />
 <center>
   <form action="insert.php" method="post">
      <table border=1 width=600>
        <tr>
          <td>이름</td><td><input type="text" name="name"></td>
          <td>비밀번호</td><td><input type="password" name="pass"></td>
        </tr>
        <tr>
          <td  colspan=4>
            <textarea placeholder="내용을 입력하세요" name="content" rows="8" cols="80">
</textarea>
          </td>
        </tr>
        <tr>
         <td colspan=4 align=right><input type="submit" value="확인"></td>
        </tr>
      </table>
    </form>
  </center>
  </body>
</html>

