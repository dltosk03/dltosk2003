<meta charset='UTF-8'>
<!DOCTYPE html>
<html>
<head>
  <title>가입 확인 중 </title>
</head>
<body>
  <h1>가입이 유효한지 확인했습니다.</h1>

  <?php
  session_start();
  $con = mysqli_connect("localhost", "root", "019539", "web_dbsena")or die('Not connected : Ah sh*t ' . mysqli_connect_error());
  $sql= "select * from member1";
  $num_result = mysqli_query($con, $sql);
  $number=mysqli_num_rows($num_result);
  $ins_query= "INSERT INTO member1(id,pw,email,name,sex) VALUES(
    '{$_POST['id']}','{$_POST['pw']}','{$_POST['email']}','{$_POST['name']}','{$_POST['sex']}' )";






  $sel_query="select * from member1 where id LIKE '{$_POST['id']}'";
  $sel_result=mysqli_query($con, $sel_query) or die("Query Error3");
  while ($record=mysqli_fetch_array($sel_result)) {
    print "당신의 정보를 확인하세요! <br> ";
    print "login ID : ".$record['id']."<br/>";
    print "login PW : ".$record['pw']."<br/>";
    print "login email is : ".$record['email']."<br/>";
    print "login sex is : ".$record['sex']."<br/>";
  }



  $_SESSION['is_register']=true;
  echo "<input type=\"button\" value=\"가입완료\" onClick=\"document.location = 'login.php'\">";
  ?>

  </body>
  </html>
