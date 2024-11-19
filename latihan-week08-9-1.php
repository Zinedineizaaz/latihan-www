<?php
if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
        // Koneksi ke database
        $koneksi = mysqli_connect("localhost", "root", "", "db_belajar");
        if (!$koneksi) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        $datagambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
        $propertiesgambar = getimagesize($_FILES['gambar']['tmp_name']);
        
        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($propertiesgambar['mime'], $allowedMimeTypes)) {
            die("Hanya file gambar yang diperbolehkan!");
        }

        $sql = "INSERT INTO tb_images (tipeimage, dataimage) VALUES ('" . $propertiesgambar['mime'] . "', '" . $datagambar . "')";
        if (!mysqli_query($koneksi, $sql)) {
            die("Query Error: " . mysqli_error($koneksi));
        }

        $lastrecord = "SELECT id FROM tb_images ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($koneksi, $lastrecord);
        if (!$result) {
            die("Query Error: " . mysqli_error($koneksi));
        }

        $getid = mysqli_fetch_array($result);
        if (isset($getid["id"])) {
            $notif = 'Gambar berhasil disimpan, silakan lihat di <a target="_blank" href="view.php?id=' . htmlspecialchars($getid["id"]) . '">sini</a>';
        }
        mysqli_close($koneksi);
    }
}
?>

<html lang="id">
<head>
    <title>Menyimpan Gambar di MySQL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    if (isset($notif)) {
        echo $notif;
    }
    ?>
    <form name="formupload" enctype="multipart/form-data" action="" method="post">
        <label>Upload Gambar:</label><br />
        <input name="gambar" type="file" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>
