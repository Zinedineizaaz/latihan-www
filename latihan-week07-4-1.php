<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Testing Session Cookies</title>
</head>
<body>
<h1>Setting a session cookie</h1>
<?php
$_SESSION['test2'] = "Second test cookie";
?>
<a href="latihan-week07-4-2.php">Click to continue</a>
</body>
</html>