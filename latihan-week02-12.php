<?php
$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "penulis" => "petanikode",
    "view" => 128
];

echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>oleh:
".$artikel["penulis"]."</p>";
echo "<p>View: ".$artikel["view"]."</p>";
?>