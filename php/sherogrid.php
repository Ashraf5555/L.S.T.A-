<?php




$nmr1 = $_POST["nmr1"];
$nmr2 = $_POST["nmr2"];
$operator = $_POST["operator"];
$result = 0;

if ($operator == "+") {
	# code...
		echo  "this is addition"  ;
	$result = $nmr1 + $nmr2;
}
elseif($operator == "*"){
	$result = $nmr1 * $nmr2;
}
elseif($operator == "-"){
	$result = $nmr1 - $nmr2;
}
elseif($operator == "/"){
	$result = $nmr1 / $nmr2;
}
else{
	echo  "this is not a good operator!"  ;

}


echo  "$nmr1 $operator $nmr2 = $result"  ;




 ?>