<!--postResult.php-->

<?php
   session_start();
   header("Content-Type: text/html; charset=UTF-8");

   $name = $_POST['name'];
   $password = $_POST['pw'];

   include('db.php');
?>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<?php
   //DB 연결
   $link = mysql_connect($db['host'], $db['user'], $db['pw']);
   if (!$link) {
       die('Could not connect: ' . mysql_error());
   }

   //사용할 DB 선택
   mysql_select_db($db['db']);

   //SQL문 작성
   $sql = "select * from members where id='".$name."' and pwd=password('".$password."')";
   echo $sql;

   $result = mysql_query($sql);
   $users = mysql_fetch_assoc($result);
   echo "<pre>";
   print_r($users);
   echo "</pre>";

   exit();
   
   //DB 실행

   //DB 연결 해제
   mysql_close($link);

   if( ($name=="yewon" && $password=="1031") || ($name=="chaewon" && $password=="1030") ) {

      #setCookie('isLogin', '1');
      $_SESSION['isLogin'] = 1;
      $_SESSION['name'] = $name;
?>
      <h2>로그인 성공</h2>
      ID : <?=$name?><br>
      PASSWORD : <?=$password?><br>
      <a href="./postForm.php">로그인 페이지로 돌아가기</a>
<?php

   }else{

      $_SESSION['isLogin'] = 0;
      $_SESSION['name'] = '';
?>
      <h2>로그인 실패</h2>
      아이디 또는 패스워드가 일치하지 않습니다.<br>
      다시 시도해보세요.<br>
      <a href="./postForm.php">로그인 페이지로 돌아가기</a>
<?php

   }
?>
