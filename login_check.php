<?php
session_start();


$con = mysqli_connect("localhost", "root", "019539", "web_dbsena")or die('Not connected : Ah sh*t ' . mysqli_connect_error());
$sel_sql= "select * from member1";


$sel_query="select * from member1 WHERE id LIKE '{$_POST['id']}'";
$sel_result=mysqli_query($con, $sel_query) or die("Query Error!");



$count=mysqli_num_rows($sel_result);

  if($count==0)
  {
    echo "<input type=\"button\" value=\"가입하기\" onClick=\"document.location = 'register(2-1).html'\">";
  }
  else
  {
    if($_POST['pw'] == $sel_query['pw'])
    {
      $_SESSION['id']= true;
      header('Location: index.php');
    }
    else
    {
      echo '<a href="login.php">로그인으로 돌아가기</a>';
    }
  }
 ?>
