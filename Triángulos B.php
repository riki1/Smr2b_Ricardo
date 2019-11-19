
<?php
function SEGÚN_angulos($a,$b,$c){
$r='acutángulo';
if($b==90 or $a==90 or $c==90)
	$r='rectángulo';
if($a>90 or $b>90 or $c>90)
	$r='obtusángulo';
return $r;
}
echo SEGÚN_angulos(60,90,30).' = rectángulo<br/>';
echo SEGÚN_angulos(80,40,30).' = acutángulo<br/>';
echo SEGÚN_angulos(100,60,40).' = obtusángulo<br/>';
echo SEGÚN_angulos(80,20,60).' = acutángulo<br/>';
echo SEGÚN_angulos(120,90,60).' = rectángulo<br/>';
echo SEGÚN_angulos(60,130,80).' = obtusángulo<br/>';
echo SEGÚN_angulos(80,50,30).' = acutángulo<br/>';
echo SEGÚN_angulos(30,60,110).' = rectángulo<br/>';