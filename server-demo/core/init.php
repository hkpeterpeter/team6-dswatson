<?php
$db= mysqli_connect('127.0.0.1','root','','myDB');
if(mysqli_connect_errno()){

  echo 'Database Connection failed. Errors here> '.mysqli_connect_error();
  die();

}
?>
