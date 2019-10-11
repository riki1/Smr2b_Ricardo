<?php
function meses($n){
$meses=[
'Enero',
'Febrero',
'Marzo',
'Abril',
'Mayo',
'Junio',
'Julio',
'Agosto',
'Septiembre',
'Octubre',
'Noviembre',
'Diciembre',
];
return $meses[$n-1];
}
//echo mes ($);
for($si=1;$i<13;$i++) {
	echo mes ($i).' - '
echo meses (3);
}
