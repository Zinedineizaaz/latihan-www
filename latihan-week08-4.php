<?php
$namafile = 'file-baru.txt';
$handle = fopen($namafile, 'a') or die('File tidak
bisa dibuka: ' . $namafile);
$data = 'data baru 1';
fwrite($handle, $data);
$new_data = "\n" . 'data baru 2';
fwrite($handle, $new_data);
?>