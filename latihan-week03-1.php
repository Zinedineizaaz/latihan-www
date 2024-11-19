<?php

class mobil{
    public $roda;
    public function jalan(){
        echo 'Mobil Berjalan';
    }
}

$avanza = new mobil();
$avanza->roda = 4;

echo $avanza->jalan(); echo PHP_EOL;
echo $avanza->roda; echo PHP_EOL;
?>