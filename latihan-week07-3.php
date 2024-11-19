<?php
if (!isset($_COOKIE['test1'])) {
setcookie("test1", "This is a test cookie", time() + 600);
} else {
setcookie("test1", "", time() - 1);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Deleting a Cookie</title>
</head>
<body>
<h1>Cookie status:</h1>
<?php
if (isset($_COOKIE['test1'])) {
$data = $_COOKIE['test1'];
echo "<p>Cookie set: $data<p>\n";
} else {
echo "<p>Cookie not set</p>\n";
}
?>
<a href="cookietest03.php">Click to try again</a>
</body>
</html>