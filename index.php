<?php
session_start();
$con = mysqli_connect("localhost", "root", "019539", "web_dbsena")or die('Not connected : Ah sh*t ' . mysqli_connect_error());

if (isset($_SESSION['is_login'])){ echo "<br>"; }
else{ Header('location: login.php');}
 ?>

 <meta charset='UTF-8'>
 <!DOCTYPE html>
 <html>
 <head>
   <title>
     인덱스 페이지
   </title>
</head>

<body>
  <h>
    index</h1>

<?php

$sel_query="select * from member1 where id LIKE '{$_POST['id']}'";
$sel_result=mysqli_query($con, $sel_query) or die("Query Error3");
while ($record=mysqli_fetch_array($sel_result)) {
  print .{$record['name']}."의 페이지입니다 <br> ";
  print "login ID : ".$record['id']."<br/>";
  print "login PW : ".$record['pw']."<br/>";
  print "login email is : ".$record['email']."<br/>";
  print "login sex is : ".$record['sex']."<br/>";
}
  ?>
</body>
</hrml>
