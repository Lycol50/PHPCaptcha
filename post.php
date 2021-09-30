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

// random core and identifier
include('core.php');
$dn = $_POST['dn'];
$dt = $_POST['dt'];
$dis = $dn . "#" . $dt;

$exists = "SELECT users discord FROM Database";
if ($connect->query($exists) === $dis) {
    //echo "Name already exists on this database!";
    header("deny.php");
    return false;
}

$sqlRecord = "INSERT INTO users (discord, code) VALUES ($dis, $captcha)";
if ($connect->query($sqlRecord) === FALSE) {
    echo "Error on query: " . $conn->error;
} else {
    return true;
}

# discord webhook

$webhookurl = ""; # Insert Webhook URL
$timestamp = date("c", strtotime("now"));
$json_data = json_encode([
    "content" => "New Notification",
    "username" => "PHPCaptcha",
    "avatar_url" => "https://pngimg.com/uploads/php/php_PNG5.png",
    "tts" => false,
    "embeds" => [
        [
            "title" => "New Registration",
            "type" => "rich",
            "description" => $dn . "#" . $dt . " is registered with code: **<?php echo $captcha; ?>**",
            "timestamp" => $timestamp,
            "color" => hexdec("91ffff"),
            "footer" => [
                "text" => "PHPCaptcha created by princepines",
                "icon_url" => "https://pngimg.com/uploads/php/php_PNG5.png"
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);


$ch = curl_init($webhookurl);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
curl_close($ch);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHPCaptcha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="main.css" rel="stylesheet">
    <script type='text/javascript' src="restrict.js"></script>
</head>
<body oncopy="return false" onpaste="return false" oncut="return false">
<h2>Hi! <?php echo $dis; ?></h2>
<h3>This is your captcha code is : <b><?php echo $captcha; ?></b></h3>
<hr>
<?php include('version.php'); ?>
</body>
</html>
