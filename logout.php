<meta charset='UTF-8'>
<!DOCTYPE html>

<html>
<head>
  <title>
    사이트에서 로그아웃합니다.
  </title>
</head>

<body>
  <br>
  <?php
  session_start();
  session_destory();
  header('Location: login.php')
   ?>

</body>
</html>
