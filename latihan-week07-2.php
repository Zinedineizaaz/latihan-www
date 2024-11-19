<!DOCTYPE html>
<html>
<head>
<title>PHP Cookie Test</title>
</head>
<body>
<h1>Retrieving the test cookie</h1>
<?php
if (isset($_COOKIE['test1'])) {
$data = $_COOKIE['test1'];
echo "<p>The cookie was set: $data</p>
\n";
} else {
    echo "<p>Sorry, I couldn't find the cookie</p>
\n";
}
?>
</body>
</html>