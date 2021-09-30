<!-- 
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
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHPCaptcha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="main.css" rel="stylesheet">
    <script type='text/javascript' src="restrict.js"></script>
</head>
<body oncopy="return false" onpaste="return false" oncut="return false">
<form method="post" action="result.php">
    <p>Note: Eveything is Case, Space and Number Sensitive</p>
        <label>What is your Discord Name and Tag?*</label><br>
        <input type="text" name="dn" placeholder="princepines" required>
        <input type="number" name="dt" placeholder="5041" required min="0001" max="9999">
    </div>
    <p><i>* required</i></p>
    <input type="submit" value="Get Captcha">
</form>
<hr>
<?php include('version.php'); ?>
</body>
</html>
