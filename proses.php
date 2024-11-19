<?php

if (isset($_GET['nama']) AND isset($_GET['email']))
{
    echo $_GET['nama'];
    echo $_GET['email'];
}
else 
{
    echo "Maaf, anda harus mengakses halaman ini dari form.html";
}
?>