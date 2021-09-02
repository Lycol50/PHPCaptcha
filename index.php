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
