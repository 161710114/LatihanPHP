<html>
<head>
<title>Contoh Sederhana</title>
<body bgcolor="deepskyblue">

<form action="#" method="post">

Nama : <input type="text" name="nama">
<br>
<br>
Kelas : <input type="text" name="kelas">
<br>
<input type="submit" name="simpan" value="submit"></input>
</form>
</body>
</head>
</html>

<?php
if (isset ($_POST['simpan']))
{
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
echo "Nama : ".$nama."";
echo "Kelas : ".$kelas."";
}

?>


