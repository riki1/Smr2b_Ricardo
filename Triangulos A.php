
<?php
function SEGÚN_lados($a,$b,$c){
	$r='escaleno';
	if($a==$b or $b==$c or $a==$c)
		$r='isoceles';
	if($a==$b and $b==$c)
		$r='equilatero';
	return $r;
}
echo SEGÚN_lados(1,1,2).' equilátero<br>';
echo SEGÚN_lados(2,1,1).' isósceles<br>';
echo SEGÚN_lados(3,1,2).' escaleno<br>';
echo SEGÚN_lados(1,3,2).' isósceles<br>';
echo SEGÚN_lados(3,1,1).' isósceles<br>';
echo SEGÚN_lados(2,1,3).' escaleno<br>';
echo SEGÚN_lados(1,2,3).' escaleno<br>';
echo SEGÚN_lados(3,2,1).' escaleno<br>';
echo SEGÚN_lados(1,2,1).' isósceles<br>';
echo SEGÚN_lados(1,3,1).' isósceles<br>';