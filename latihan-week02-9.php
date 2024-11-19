<?php
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";

for($i=0; $i < count($barang); $i++){
    echo $barang[$i]."<br>";
}

foreach($barang as $isi){
    echo $isi."<br>";
}
    echo "<hr>";

$i = 0;
while($i < count($barang)){
    echo $barang[$i]."<br>";
    $i++;
}
?>