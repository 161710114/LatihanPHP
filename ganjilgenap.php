<html>
<title>Contoh Sederhana</title>
<body bgcolor="deepskyblue">

<center><h2>
<?php

echo "Ganjil";
echo "<br>";
 for ($p=1; $p<=10; $p++){
 	if ($p%2==1)
 		echo "$p"."<br>";
 }

echo "<br>";
echo "<br>";

echo "Genap";
echo "<br>";
 for ($p=1; $p<=10; $p++){
 	if ($p%2==0){
 		echo "$p"."<br>";
 	}
 }


?>
</center></h2>
</body>
</html>

