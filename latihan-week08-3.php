<?php
$namafile = 'file-baru.txt';
$handle = fopen($namafile, 'w') or die('File tidak
bisa dibuka: ' . $namafile);
$data = 'ditulis dengan script php';
fwrite($handle, $data);
?>