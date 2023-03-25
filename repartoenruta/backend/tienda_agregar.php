<?php
sleep(1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// header('Content-Type: application/json; charset=utf-8');

// header("HTTP/1.0 202 ErrorqServerq");
//400 -> 202
// header("HTTP/1.0 202 ErrorqServerq");
// echo '["Este email ya ha sido registrado"]';

// $eedff = file_get_contents('php://input');
// var_dump($eedff);
// $sqvr = json_decode($eedff,TRUE);

// var_dump($sqvr);

require ('initcfg.php');
require('initvfunctioions.php');

date_default_timezone_set($sqvr_date_default_timezone_set_sq);
date_default_timezone_set($sqvr_date_default_timezone_set_sq);
date_default_timezone_set($sqvr_date_default_timezone_set_sq);




$sdvbbfparname = 'timezonename_hwa';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$timezonename_hwa = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

//    header("HTTP/1.0 202 ErrorqServerq");
//    echo '["el dato timezonename_hwa es obligatorio"]';
//    die();
}
$prsq_timezonename_hwa = $timezonename_hwa;



$sdvbbfparname = 'timezoneoffset_hwa';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$timezoneoffset_hwa = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato timezoneoffset_hwa es obligatorio"]';
    die();
}

$sqvr_timezone_offset_get_sq = $timezoneoffset_hwa;











$sdvbbfparname = 'prsq_email';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$prsq_email = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato email es obligatorio"]';
    die();
}







$sdvbbfparname = 'prsq_direccion';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$prsq_direccion = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato direccion es obligatorio"]';
    die();
}








$sdvbbfparname = 'prsq_latitude';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$prsq_latitude = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato latitude es obligatorio"]';
    die();
}








$sdvbbfparname = 'prsq_longitude';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$prsq_longitude = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato longitude es obligatorio"]';
    die();
}






$sdvbbfparname = 'prsq_telefono';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$prsq_telefono = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato telefono es obligatorio"]';
    die();
}




$sdvbbfparname = 'prsq_nombretienda';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$prsq_nombretienda = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato nombretienda es obligatorio"]';
    die();
}









    $sqvqeiedrr = array();

//var_dump(   strtotime('2022-10-21 21:43:37') );

if(true) {
    //var_dump('-----------------------begin[--------------------------------------------------------------------------');

    date_default_timezone_set('UTC');
    date_default_timezone_set('UTC');
    date_default_timezone_set('UTC');
    date_default_timezone_set('UTC');
    date_default_timezone_set('UTC');
    date_default_timezone_set('UTC');
    date_default_timezone_set('UTC');

    $id = '';
    for ($sqi = 0; $sqi < 1000; $sqi++) {

        $sqvrtqpobj = fn_generarlargoidvariable();

        //var_dump($sqvrtqpobj);

        $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

        $stmtq = $dbh->prepare('SELECT * FROM tienda WHERE id = ?  LIMIT 1');
//        var_dump($stmtq);
//        var_dump($stmtq->execute(array($id)));
//        var_dump($stmtq);
        $stmtq->execute(array($id));
        $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

        //var_dump($qresultq);

        if (count($qresultq) >= 1) {
            //var_dump('siencontrado');
        } else {
            break;
        }
    }

    //var_dump('-----------------------selec-------');
    //var_dump('-----------------------selec-------');
    //var_dump('-----------------------selec-------');

    $sqvqeiedrr = array();

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'id';
    $sqvbjo->infociloq = $id;
    $sqvqeiedrr[] = $sqvbjo;

    $infociloq = 0;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'bajado'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

    $infociloq = 0;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'subido'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

    $infociloq = $prsq_email;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'email'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

    $infociloq =  $prsq_direccion;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'direccion'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

    $infociloq = $prsq_latitude;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'latitude'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

    $infociloq = $prsq_longitude;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'longitude'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

    $infociloq = $prsq_telefono;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'telefono'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

    $infociloq = $prsq_nombretienda;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'nombretienda'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

    //$infociloq = time();
    $infociloq = date_create()->format('Uv');

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechahoranumeritime_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

$infociloq = date("Y-m-d H:i:s");

$sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechahora_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

$infociloq = date("Y-m-d");

$sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

$infociloq = date("H:i:s");

$sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

$infociloq = $sqvr_timezone_offset_get_sq;

$sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'timezoneoffset_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

if(intval($sqvr_timezone_offset_get_sq)==0){
        //utc

    $infociloq = 'UTC';

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'timezonename_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

        require('fninc_fn_gen_curdateicrovarinfo.php');

          //  $infociloq = ''.$anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';

       if(strlen($sqvrsqdcqcvb) >=6) {

           $sqddfv_sqvrsqdcqcvb = substr($sqvrsqdcqcvb ,0,6). '';
           //qddfv_sqvrsqdcqcvb = $sqvrsqdcqcvb . 'Z';
       }
        else if(strlen($sqvrsqdcqcvb) >=3) {
             //$sqddfv_sqvrsqdcqcvb = $sqvrsqdcqcvb . 'Z';
            $sqddfv_sqvrsqdcqcvb =   str_pad($sqvrsqdcqcvb, 6, "0", STR_PAD_RIGHT) . '';

        }
       else{

           $sqddfv_sqvrsqdcqcvb =   str_pad($sqvrsqdcqcvb, 6, "0", STR_PAD_RIGHT) . '';
       }

        $sqddfv_sqvrsqdcqcvb = $sqddfv_sqvrsqdcqcvb .'Z';

        $infociloq = ''.$anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' .$sqddfv_sqvrsqdcqcvb;

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'datetimetoiso8601string_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

    }
    else{

        $infociloq = $prsq_timezonename_hwa;

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'timezonename_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

//        require('fninc_fn_gen_curdateicrovarinfo.php');

    //$infociloq = ''.$anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'000';
//
//        $sqvrsqdcqcvb.'000';
//
//        $sqddfv_sqvrsqdcqcvb
//
//        $infociloq = ''.$anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' .$sqddfv_sqvrsqdcqcvb;
//
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'datetimetoiso8601string_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

        require('fninc_fn_gen_curdateicrovarinfo.php');

        require('fninc_fn_gen_curdateicrovarinfo.php');

          //  $infociloq = ''.$anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';

       if(strlen($sqvrsqdcqcvb) >=6) {

           $sqddfv_sqvrsqdcqcvb = substr($sqvrsqdcqcvb ,0,6). '';
           //qddfv_sqvrsqdcqcvb = $sqvrsqdcqcvb . 'Z';
       }
       else if(strlen($sqvrsqdcqcvb) >=3) {
           //$sqddfv_sqvrsqdcqcvb = $sqvrsqdcqcvb . 'Z';
           $sqddfv_sqvrsqdcqcvb =   str_pad($sqvrsqdcqcvb, 6, "0", STR_PAD_RIGHT) . '';

       }
       else{

           $sqddfv_sqvrsqdcqcvb =   str_pad($sqvrsqdcqcvb, 6, "0", STR_PAD_RIGHT) . '';
       }

        $infociloq = ''.$anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' .$sqddfv_sqvrsqdcqcvb;

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'datetimetoiso8601string_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

    }

//    fechahoranumeritime_hwa BIGINT UNSIGNED NOT NULL,
//            fechahora_hwa DATETIME NOT NULL,
//            fecha_hwa  DATE NOT NULL,
//            hora_hwa  TIME NOT NULL,
//            timezonename_hwa TEXT NOT NULL,
//            timezoneoffset_hwa TEXT NNOT NULL,
//            datetimetoiso8601string_hwa TEXT NOT NULL

//            fechahoranumeritime_hwa BIGINT UNSIGNED NOT NULL,
//            fechahora_hwa DATETIME NOT NULL,

//    $infociloq = '';
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechahoranumeritime_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;
//
//    $infociloq = '';
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechahora_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;
//
////fecha_hwa  DATE NOT NULL,
////            hora_hwa  TIME NOT NULL,
//
//    $infociloq = '';
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;
//
//    $infociloq = '';
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;
//
//
//
//
//
//    $infociloq = '';
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'timezonename_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;
//
//    $infociloq = '';
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'timezoneoffset_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;
//
//    $infociloq = '';
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'datetimetoiso8601string_hwa'; $sqvbjo->infociloq = $infociloq; $sqvqeiedrr[] = $sqvbjo;

//
// fechahoranumeritime_hwa: 1666392827618, fechahora_hwa: 2022-10-21 22:53:47, fecha_hwa: 2022-1021, hora_hwa: 22:53:47, timezonename_hwa: CDT, timezoneoffset_hwa: -18000, datetimetoiso8601string_hwa: 2022-10-21T17:53:47.618838

//
//
//            fechahoranumeritime_hwa BIGINT UNSIGNED NOT NULL,
//            fechahora_hwa DATETIME NOT NULL,
//            fecha_hwa  DATE NOT NULL,
//            hora_hwa  TIME NOT NULL,
//            timezonename_hwa TEXT NOT NULL,
//            timezoneoffset_hwa TEXT NNOT NULL,
//            datetimetoiso8601string_hwa TEXT NOT NULL


//
//    DateTime sqvr_datetimesvsqvscvbn = DateTime.now();
//    print(sqvr_datetimesvsqvscvbn.timeZoneName);
//    String sqvr_datetimesvsqvscvbn_timeZoneName=sqvr_datetimesvsqvscvbn.timeZoneName;
//    print(sqvr_datetimesvsqvscvbn.timeZoneOffset);
//    String sqvr_datetimesvsqvscvbn_timeZoneOffset=sqvr_datetimesvsqvscvbn.timeZoneOffset.inSeconds.toString();
//    String sqvr_datetimesvsqvscvbn_toIso8601String=sqvr_datetimesvsqvscvbn.toIso8601String();
//    sqvr_datetimesvsqvscvbn =sqvr_datetimesvsqvscvbn.toUtc();



























//    require('fninc_fn_gen_curdateicrovarinfo.php');
//
//    $createdAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';
//
//
//    require('fninc_fn_gen_curdateicrovarinfo.php');
//
//    $updatedAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';
//
//    var_dump($sqvr_timezone_offset_get_sq);
//    var_dump($updatedAt);
//    var_dump($updatedAt);
//    var_dump($updatedAt);
//
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'createdAt'; $sqvbjo->infociloq = $createdAt; $sqvqeiedrr[] = $sqvbjo;
//
////$sqvrsvsqnamerr[]= 'createdAt'; $sqvrsvbinfqorr[]= $createdAt;
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'updatedAt'; $sqvbjo->infociloq = $updatedAt; $sqvqeiedrr[] = $sqvbjo;
//
////$sqvrsvsqnamerr[]= 'updatedAt'; $sqvrsvbinfqorr[]= $updatedAt;



//
//int(-18000)
//{bajado: 0, subido: 0, id: 2022_10_22_1_2_55_26_822_1666400575026822_1666400575026_3_822_741_498, email: 1email, direccion: 1direccion, latitude: 1.001, longitude: 1.00000001, telefono: 1telefono, nombretienda: 1nombretienda, fechahoranumeritime_hwa: 1666400575032, fechahora_hwa: 2022-10-21 20:02:55, fecha_hwa: 2022-10-21, hora_hwa: 20:02:55, timezonename_hwa: CDT, timezoneoffset_hwa: -18000, datetimetoiso8601string_hwa: 2022-10-21T20:02:55.032167}






//
//
//    if($ruta_foto1 != ''){
//
//        $sqvrevrinfoeq = ''.trim($ruta_foto1);
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'prescription_picrutafoto1'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;
//
//        //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;
//
//    }
//
//
//    $sqvrevrinfoeq = ''.trim($serverwicharchivos);
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'serverwicharchivos'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;
//
//    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;
















////
////    $esbotoncillobottom = false;
////    //   $esbotoncillobottom = 0;
////
////    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'esbotoncillobottom'; $sqvbjo->infociloq = $esbotoncillobottom; $sqvqeiedrr[] = $sqvbjo;
////
////    //  $sqvrsvsqnamerr[]= 'esbotoncillobottom'; $sqvrsvbinfqorr[]= $esbotoncillobottom;
//
//
//
////,fecha_created  DATE NOT NULL
////,hora_created  TIME NOT NULL
////,fechaqora_created  TIMESTAMP NOT NULL
//
//    $fecha_created = date("Y-m-d");
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_created'; $sqvbjo->infociloq = $fecha_created; $sqvqeiedrr[] = $sqvbjo;
//
//    //$sqvrsvsqnamerr[]= 'fecha_created'; $sqvrsvbinfqorr[]= $fecha_created;
//
//    $hora_created = date("H:i:s");
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_created'; $sqvbjo->infociloq = $hora_created; $sqvqeiedrr[] = $sqvbjo;
//
//    // $sqvrsvsqnamerr[]= 'hora_created'; $sqvrsvbinfqorr[]= $hora_created;
//
//    $fechaqora_created = date("Y-m-d H:i:s");
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_created'; $sqvbjo->infociloq = $fechaqora_created; $sqvqeiedrr[] = $sqvbjo;
//
//    //$sqvrsvsqnamerr[]= 'fechaqora_created'; $sqvrsvbinfqorr[]= $fechaqora_created;
//
//
//    require('fninc_fn_gen_curdateicrovarinfo.php');
//
//    $fechaqoraicrotieime_created =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_created'; $sqvbjo->infociloq = $fechaqoraicrotieime_created; $sqvqeiedrr[] = $sqvbjo;
//
//    //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_created'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_created;
//
//    //,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL


//
////,fecha_updated  DATE NOT NULL
////,hora_updated   TIME NOT NULL
////,fechaqora_updated  TIMESTAMP NOT NULL
//
//
//    $fecha_updated =date("Y-m-d");
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_updated'; $sqvbjo->infociloq = $fecha_updated; $sqvqeiedrr[] = $sqvbjo;
//
//    //   $sqvrsvsqnamerr[]= 'fecha_updated'; $sqvrsvbinfqorr[]= $fecha_updated;
//
//    $hora_updated =date("H:i:s");
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_updated'; $sqvbjo->infociloq = $hora_updated; $sqvqeiedrr[] = $sqvbjo;
//
//    // $sqvrsvsqnamerr[]= 'hora_updated'; $sqvrsvbinfqorr[]= $hora_updated;
//
//
//    $fechaqora_updated = date("Y-m-d H:i:s");
//
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_updated'; $sqvbjo->infociloq = $fechaqora_updated; $sqvqeiedrr[] = $sqvbjo;
//
//// $sqvrsvsqnamerr[]= 'fechaqora_updated'; $sqvrsvbinfqorr[]= $fechaqora_updated;

//
//    require('fninc_fn_gen_curdateicrovarinfo.php');
//
//    $fechaqoraicrotieime_updated =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_updated'; $sqvbjo->infociloq = $fechaqoraicrotieime_updated; $sqvqeiedrr[] = $sqvbjo;
//
//    //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_updated'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_updated;
//
//
//    // ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL



//
////,tisfingepirnrt TIMESTAMP,
////,tistzfingepirnrtz TIMESTAMPTZ
//
//    $tisfingepirnrt =date("Y-m-d H:i:s");
//
//    $tistzfingepirnrtz =date("Y-m-d H:i:s");
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tisfingepirnrt'; $sqvbjo->infociloq = $tisfingepirnrt; $sqvqeiedrr[] = $sqvbjo;
//
//    // $sqvrsvsqnamerr[]= 'tisfingepirnrt'; $sqvrsvbinfqorr[]= $tisfingepirnrt;
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tistzfingepirnrtz'; $sqvbjo->infociloq = $tistzfingepirnrtz; $sqvqeiedrr[] = $sqvbjo;
//
////$sqvrsvsqnamerr[]= 'tistzfingepirnrtz'; $sqvrsvbinfqorr[]= $tistzfingepirnrtz;











//$updatedAt = $anioioio.'-'.$meies.'-'$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';



//date("Y-m-d H:i:s")

    //	,"createdAt":"2022-08-30T20:57:51.284Z"
    //	,"updatedAt":"2022-08-30T20:57:51.284Z"
//
//$createdAt = ;
//
//$updatedAt = ;
//
//    require('fninc_fn_gen_curdateicrovarinfo.php');
//
//    $createdAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';
//
//
//    require('fninc_fn_gen_curdateicrovarinfo.php');
//
//    $updatedAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';
//
//    var_dump($updatedAt);
//    var_dump($updatedAt);
//    var_dump($updatedAt);
//
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'createdAt'; $sqvbjo->infociloq = $createdAt; $sqvqeiedrr[] = $sqvbjo;
//
////$sqvrsvsqnamerr[]= 'createdAt'; $sqvrsvbinfqorr[]= $createdAt;
//
//    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'updatedAt'; $sqvbjo->infociloq = $updatedAt; $sqvqeiedrr[] = $sqvbjo;
//
////$sqvrsvsqnamerr[]= 'updatedAt'; $sqvrsvbinfqorr[]= $updatedAt;
//
//int(-18000)
// {bajado: 0, subido: 0, id: 2022_10_22_1_2_55_26_822_1666400575026822_1666400575026_3_822_741_498, email: 1email, direccion: 1direccion, latitude: 1.001, longitude: 1.00000001, telefono: 1telefono, nombretienda: 1nombretienda, fechahoranumeritime_hwa: 1666400575032, fechahora_hwa: 2022-10-21 20:02:55, fecha_hwa: 2022-10-21, hora_hwa: 20:02:55, timezonename_hwa: CDT, timezoneoffset_hwa: -18000, datetimetoiso8601string_hwa: 2022-10-21T20:02:55.032167}

    $sqvrsqdvbsdqsvvs = '';
    for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
        $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
    }
    $sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

    //var_dump($sqvrsqdvbsdqsvvs);

    $sqvrsqdpdpqpsp = '';
    for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
        $sqvrsqdpdpqpsp .= '?' . ',';
    }
    $sqvrsqdpdpqpsp = substr($sqvrsqdpdpqpsp, 0, strlen($sqvrsqdpdpqpsp) - 1);

    //var_dump($sqvrsqdpdpqpsp);

//$sqvrsqdvbsdqsvvs = '';
//for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
//    $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
//}
//$sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

    //var_dump($sqvrsqdvbsdqsvvs);

    $sqvrsqdpdpqpspinqfo = array();

    for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {

        if(is_bool($sqvqeiedrr[$sqwqwi]->infociloq)){
            $sqvrsqdpdpqpspinqfo[] = intval($sqvqeiedrr[$sqwqwi]->infociloq);
        }
        else {
            $sqvrsqdpdpqpspinqfo[] = $sqvqeiedrr[$sqwqwi]->infociloq;
        }
    }

    var_dump($sqvrsqdpdpqpspinqfo);





    $stmt = $dbh->prepare("INSERT INTO sqtienda (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

    //var_dump($stmt);

    $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

    //var_dump($reqscsult);

    date_default_timezone_set($sqvr_date_default_timezone_set_sq);
    date_default_timezone_set($sqvr_date_default_timezone_set_sq);
    date_default_timezone_set($sqvr_date_default_timezone_set_sq);

    var_dump($reqscsult);
    var_dump('-----------------------insertado-------');
    var_dump('-----------------------insertadoq---------------' . $id);
    var_dump('-----------------------end]--------------------------------------------------------------------------');

}










?>