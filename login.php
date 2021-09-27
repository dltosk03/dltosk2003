<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> 로그  </title>
</head>
<body>
  <h3>회원가입</h3>
  <form method ="post">
    <br> 아이디 <input type="text" name="id"> </br>
    <br> 비밀번호 <input type ="password" name="pw"> </br>
    <br> <input type="submit" value="로그인" header('location: login_check.php') > </br>
      <a href="login_check.php">로그인</a>
     <br> <input type="button" value="회원가입" onClick="location.href='register(2-1).html'"> </br>
  </form>
</body>

</html>

<?php
session_start();
if(isset($_SESSION['id'])){
  header('Location: index.php');
}
 ?>
