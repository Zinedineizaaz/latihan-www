<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">
<title>Upload File</title>
</head>
<body>
<h1>Belajar Upload File</h1>
<form action="latihan-week08-7-2.php"
method="POST" enctype="multipart/form-data">
<div>
<label>Foto</label> <br>
<input type="file" name="foto">
</div>
<div style="margin-top: 1rem">
<button>Upload</button>
</div>
<div style="margin-top: 1rem">
<label>Berkas KTP</label> <br>
<input type="file" name="ktp">
</div>
</form>
</body>
</html>