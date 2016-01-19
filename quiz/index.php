<!--index.php-->

<?php
   header("Content-Type: text/html; charset=UTF-8");
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<img src=http://www.yejja.org/wp-content/uploads/2014/08/%EB%AC%BC%EC%9D%8C%ED%91%9C-1.jpg width=400px height=200px></img>
<h3 class="text-info"> 당신이 사랑받는 이유 & 미움받는 이유 </h3>
<h5> 당신이 사람들에게 사랑받는 이유와 미움받는 이유를 파헤쳐드립니다! </h5>
<h6> <?=$count?>명이 참여하였습니다. </h6>
<form method="post" action="index.php" class="navbar-form navbar-left">
   <div class="form-group">
      <input type="text" class="form-control" id="name" name="name"  placeholder="이름을 입력해주세요.">
   </div>
   <button type="button" class="btn btn-info">결과보기</button>
<h5> 당신이 사람들에게 사랑받는 이유와 미움받는 이유를 파헤쳐드립니다! </h5>
</form>
