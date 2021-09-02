<?php
/* 
    This file is part of PHPCaptcha.

    PHPCaptcha is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    PHPCaptcha is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with PHPCaptcha.  If not, see <https://www.gnu.org/licenses/>.
*/

$captcha = substr(md5(mt_rand()), 0, 6);

$connect = new mysqli($ip, $user, $pass, $db, $port);
if ($connect->connection_error) {
  die("Connection Error, ask syadmin with this code: " . $conn->connect_error);
}

?>
