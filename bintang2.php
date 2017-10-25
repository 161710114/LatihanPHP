<?php
 echo "<center>";
 for ($i=1; $i<=8; $i++){
 	for ($j=8; $j>=$i; $j--){
 		echo " ";
 	}
 	for ($k=1; $k<=$i; $k++){
 		echo ("* ");
 	}
 	echo ("<br>");
 }
 echo ("<br>");
 echo ("<br>");


 for ($i=8; $i>=1; $i--){
 	for ($j=8; $j>=$i; $j--){
 		echo " ";
 	}
 	for ($k=1; $k<=$i; $k++){
 		echo ("* ");
 	}
 	echo ("<br>");
 }

 ?>