<?php

$sqsddvvbbggtime=time();

$segiuioundo=date("s",$sqsddvvbbggtime);

$miniuto=date("i",$sqsddvvbbggtime);

$hororoia=date("H",$sqsddvvbbggtime);

$diaiaia=date("d",$sqsddvvbbggtime);
$meies=date("m",$sqsddvvbbggtime);
$anioioio=date("Y",$sqsddvvbbggtime);


$sqdvbmicro_date = microtime(false);
$sqdvvdate_array = explode(" ",$sqdvbmicro_date);
$sqwscvdate = date("Y-m-d H:i:s",$sqdvvdate_array[1]);
//echo "Date: $date:" . $sqdvvdate_array[0]."<br>";

//string(21) "0.93050300 1663515763"

//var_dump($sqdvbmicro_date);

$milisiesiecons=$sqdvvdate_array[0];


// $updatedAt = $anioioio.'-'.$meies.'-'.$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';

$mystring = $sqdvbmicro_date;
$findme   = '.';
$pos = strpos($mystring, $findme);

// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
// porque la posición de 'a' está en el 1° (primer) caracter.
if ($pos === false) {

}
else {

    $sqdvbmicro_date=substr($sqdvbmicro_date,$pos,strlen($sqdvbmicro_date)-$pos);
    $sqdvbmicro_date=str_ireplace('.','',$sqdvbmicro_date);
}


//var_dump($sqdvbmicro_date);


$sqdvbmicro_date=str_ireplace(' ','',$sqdvbmicro_date);

//var_dump($sqdvbmicro_date);


$sqvrsqdcqcvb=substr($sqdvbmicro_date,0,3);

//var_dump($sqvrsqdcqcvb);
