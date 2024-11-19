<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Testing Session Cookies</title>
</head>
<body>
<h1>Retrieving the session cookie</h1>
<?php
if (isset($_SESSION['test2'])) {
$data = $_SESSION['test2'];
echo "<p>Session cookie: $data</p>\n";
} else {
echo "<p>Error accessing the session cookie</p>\n";
}
?>
<a href="latihan-week07-4-1.php">Go back to start</a>
</body>
</html>