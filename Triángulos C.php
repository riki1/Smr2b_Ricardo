<?php
function SEGÚN_lados($a,$b,$c){
	$r='escaleno';
	if($a==$b or $b==$c or $a==$c)
		$r='isóceles';
	if($a==$b and $b==$c)
		$r='equilatero';
	return $r;
}
function SEGÚN_angulos($A,$B,$C){
	$r='acutángulo';
	
	if($A==90 or $B==90 or $C==90)
		$r='rectángulo';
	
	if ($A>90 or $B>90 or $C>90)
		$r='obtusángulo';
	
	return $r;
}
function triángulos ($a,$b,$c,$A,$B,$C){
	$r1=SEGÚN_lados($a,$b,$c);
	$r2=SEGÚN_angulos($A,$B,$C);
	
	return $r1.' - '.$r2;
}
echo triángulos (1,1,30,30,60,30).' acutángulo equilatero <br>';
echo triángulos (2,1,2,50,50,100).' isóceles rectángulo <br>';
echo triángulos (1,3,2,125,55,55).' obtusángulo escaleno <br>';
echo triángulos (1,2,2,30,60,30).' isóceles rectangulo <br>';
echo triángulos (2,1,3,45,90,45).' escaleno obtusángulo <br>';