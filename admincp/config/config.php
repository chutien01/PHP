<?php
$mysqli = new mysqli("localhost","root","","php_mysqli");
mysqli_set_charset($mysqli,"utf8");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Kết nối MySQLi lỗi : " . $mysqli -> connect_error;
  exit();
}
?>