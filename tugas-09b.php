<?php
echo "Bilangan Prima 0 sampai 200 :";
echo "<br><br>";
for ($i=1; $i <= 200 ; $i++) { 
	$a = 0;
	for ($j=1; $j <=$i ; $j++) { 
		if($i % $j == 0){
			$a++;
		}
	}
	if($a == 2){
		echo "$i, ";
	}
}
?>