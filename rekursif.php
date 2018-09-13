<?php
$i=5;
function rekursif($j, $k){
	if ($j>0){
		if ($k>0) {
			echo("* ");
			$k--;
			rekursif($j, $k);
		}
		else {
			echo("<br>");
			$j--;
			rekursif($j, $j);
		}
	}
}

rekursif($i, $i);

echo "----------";

$n=5;
function rekursif2($m, $l, $n){
	if ($m<=$n){
		if ($l<=$m) {
			echo ($l);
			$l++;
			rekursif2($m, $l, $n);
		}
		else {
			echo "<br>";
			$m++;
			rekursif2($m, 1, $n);
		}
	}
}

rekursif2(1, 1, $n);


?>
