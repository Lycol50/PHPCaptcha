<?php
$captcha = substr(md5(mt_rand()), 0, 6);

$connect = new mysqli($ip, $user, $pass, $db, $port);
if ($connect->connection_error) {
  die("Connection Error, ask syadmin with this code: " . $conn->connect_error);
}

?>
