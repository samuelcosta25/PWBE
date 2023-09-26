<?php

function lata18($m){
	$litros=$m/6;
	if ($m%18==0) {
		$precototal=($m/18)*80
	} else {
		$precototal=(($m/18)+($m%18))*80
	}	
return $precototal;
}
function lata36($m){
	if ($m%3,6==0) {
		$precototal=($m/3,6)*25
	} else {
		$precototal=(($m/3,6)+($m%3,6))*25
	}	
return $precototal;
}
function mistura($m){

}

?>