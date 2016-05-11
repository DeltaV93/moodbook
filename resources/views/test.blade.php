<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<?php

function toColor($n){
	return("#".substr("000000".dechex($n),-6));
}


$nums = array(1, 0, 1,3,3,3,3,2,3,1,1,2,3);

$sum = array_sum($nums);
$big_num = pow($sum, 5.5);
echo $big_num;
echo '<br>';
echo '<br>';


$color1 = $big_num;
$color2 = 7018438302914791;
$color3 = 29403583233;

echo $color1;
echo $color1 = toColor($color1);
echo $color2 = toColor($color2);
echo $color3= toColor($color3);



echo '<body>';
echo '<div width=500px; height=500px; style="background-color:'.$color1.';">Hey</div>';
echo '<div width=500px; height=500px; style="background-color:'.$color2.';">Hey</div>';
echo '<div width=500px; height=500px; style="background-color:'.$color3.';">Hey</div>';
echo '</body>';



?>
<!-- echo '<body style="background-color: -webkit-linear-gradient(top, '.$color1.' 0%, '.$color2.' 25%'.$color3.'100%;"></body>'; -->
</html>