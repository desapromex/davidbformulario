<?php

sleep(1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require ('initcfg.php');
require('initvfunctioions.php');


$responsnstupla_rr = array();

//$stmtq = $dbh->prepare('SELECT * FROM tienda WHERE id = ?  LIMIT 1');
//        var_dump($stmtq);
//        var_dump($stmtq->execute(array($id)));
//        var_dump($stmtq);
//$stmtq->execute(array($id));
$stmtq = $dbh->prepare('SELECT * FROM tienda ');
$stmtq->execute(array());
//$qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);
$qresultq = $stmtq->fetchAll(PDO::FETCH_ASSOC);

//var_dump($qresultq);

if (count($qresultq) >= 1) {
    //var_dump('siencontrado');
    //var_dump($qresultq);

        for($sqwrweqi=0; $sqwrweqi < count($qresultq); $sqwrweqi++){
            $sqvqrow_tienda=$qresultq[$sqwrweqi];

            //$resqponseqtsqtupla = new \stdClass();
            $resqponseqtsqtupla = $sqvqrow_tienda;

//$resqponseqtsqtupla->id = $id_presupuesto;
//$resqponseqtsqtupla->_id = $id_presupuesto;

            //$responsnstupla_rr[] = $resqponseqtsqtupla;


            $responsnstupla_rr[] =  "INSERT INTO `tienda` (`id`, `email`, `bajado`, `subido`,idhw,subidomodificado, `nombretienda`, `direccion`, `telefono`, `latitude`, `longitude`, `fechahoranumeritime_hwa`, `fechahora_hwa`, `fecha_hwa`, `hora_hwa`, `timezonename_hwa`, `timezoneoffset_hwa`, `datetimetoiso8601string_hwa`) VALUES
            ('".$resqponseqtsqtupla['id']."'
            ,'".$resqponseqtsqtupla['email']."'
            ,'".$resqponseqtsqtupla['bajado']."'
            ,'".$resqponseqtsqtupla['subido']."'
            ,'".$resqponseqtsqtupla['idhw']."'
            ,'".$resqponseqtsqtupla['subidomodificado']."'
            ,'".$resqponseqtsqtupla['nombretienda']."'
            ,'".$resqponseqtsqtupla['direccion']."'
            ,'".$resqponseqtsqtupla['telefono']."'
            ,'".$resqponseqtsqtupla['latitude']."'
            ,'".$resqponseqtsqtupla['longitude']."'
            ,'".$resqponseqtsqtupla['fechahoranumeritime_hwa']."'
            ,'".$resqponseqtsqtupla['fechahora_hwa']."'
            ,'".$resqponseqtsqtupla['fecha_hwa']."'
            ,'".$resqponseqtsqtupla['hora_hwa']."'
            ,'".$resqponseqtsqtupla['timezonename_hwa']."'
            ,'".$resqponseqtsqtupla['timezoneoffset_hwa']."'
            ,'".$resqponseqtsqtupla['datetimetoiso8601string_hwa']."'
            )";



        }

} else {

}





//$stmtq = $dbh->prepare('SELECT * FROM tienda WHERE id = ?  LIMIT 1');
//        var_dump($stmtq);
//        var_dump($stmtq->execute(array($id)));
//        var_dump($stmtq);
//$stmtq->execute(array($id));
$stmtq = $dbh->prepare('SELECT * FROM usuario ');
$stmtq->execute(array());
//$qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);
$qresultq = $stmtq->fetchAll(PDO::FETCH_ASSOC);

//var_dump($qresultq);

if (count($qresultq) >= 1) {
    //var_dump('siencontrado');
    //var_dump($qresultq);

    for($sqwrweqi=0; $sqwrweqi < count($qresultq); $sqwrweqi++){
        $sqvqrow_tienda=$qresultq[$sqwrweqi];

        //$resqponseqtsqtupla = new \stdClass();
        $resqponseqtsqtupla = $sqvqrow_tienda;

//$resqponseqtsqtupla->id = $id_presupuesto;
//$resqponseqtsqtupla->_id = $id_presupuesto;

        //$responsnstupla_rr[] = $resqponseqtsqtupla;



        $responsnstupla_rr[] =  "INSERT INTO `usuario` (`id`, `email`,idhw,subidomodificado, `password`, `tipousuariogrupo`, `bajado`, `subido`, `nombrecompleto`, `direccion`, `telefono`, `latitude`, `longitude`, `fechahoranumeritime_hwa`, `fechahora_hwa`, `fecha_hwa`, `hora_hwa`, `timezonename_hwa`, `timezoneoffset_hwa`, `datetimetoiso8601string_hwa`) VALUES
            ('".$resqponseqtsqtupla['id']."'
            ,'".$resqponseqtsqtupla['email']."'
            ,'".$resqponseqtsqtupla['idhw']."'
            ,'".$resqponseqtsqtupla['subidomodificado']."'
            ,'".$resqponseqtsqtupla['password']."'
            ,'".$resqponseqtsqtupla['tipousuariogrupo']."'
            ,'".$resqponseqtsqtupla['bajado']."'
            ,'".$resqponseqtsqtupla['subido']."'
            ,'".$resqponseqtsqtupla['nombrecompleto']."'
            ,'".$resqponseqtsqtupla['direccion']."'
            ,'".$resqponseqtsqtupla['telefono']."'
            ,'".$resqponseqtsqtupla['latitude']."'
            ,'".$resqponseqtsqtupla['longitude']."'
            ,'".$resqponseqtsqtupla['fechahoranumeritime_hwa']."'
            ,'".$resqponseqtsqtupla['fechahora_hwa']."'
            ,'".$resqponseqtsqtupla['fecha_hwa']."'
            ,'".$resqponseqtsqtupla['hora_hwa']."'
            ,'".$resqponseqtsqtupla['timezonename_hwa']."'
            ,'".$resqponseqtsqtupla['timezoneoffset_hwa']."'
            ,'".$resqponseqtsqtupla['datetimetoiso8601string_hwa']."'
            )";



    }

} else {

}

$respontpsqa_rr = array();

$resqponseqtsqtupla = new \stdClass();

//$resqponseqtsqtupla->id = $id_presupuesto;
//$resqponseqtsqtupla->_id = $id_presupuesto;

$resqponseqtsqtupla->_id = '0';

$respontpsqa_rr[] = $resqponseqtsqtupla;

$sqvrwresposeout = new \stdClass();

$sqvrwresposeout->responsnstupla = $respontpsqa_rr;
$sqvrsqrsqexec_rr=array();



if(false){

$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS visitatienda';


$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS fotosvisita';


$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS usuario';

$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS tienda';




$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS herstatusbanderachecarecoidorutaentradasalida';


// $sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS recorridorutaentradasalida';

// $sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS recorridorutaentradasalidafotos';

}



if(false){

// $sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS visitatienda';


// $sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS fotosvisita';


// $sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS usuario';

// $sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS tienda';




// $sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS herstatusbanderachecarecoidorutaentradasalida';


$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS recorridorutaentradasalida';

$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS recorridorutaentradasalidafotos';

}



















// $sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS visitatienda';

$sqvrsqrsqexec_rr[] = "
CREATE TABLE IF NOT EXISTS visitatienda(
bajado INT NOT NULL,
subido INT NOT NULL,
subidomodificado INT NOT NULL,
id VARCHAR(207) PRIMARY KEY UNIQUE NOT NULL,
idhw TEXT NOT NULL,
id_tienda TEXT NOT NULL,
id_usuario TEXT NOT NULL,
entrada_comentario TEXT NOT NULL,
salida_comentario TEXT NOT NULL,
caducidad_comentario TEXT NOT NULL,
incidencia_comentario TEXT NOT NULL,
  `latitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
  `longitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
  `id_tienda_latitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
  `id_tienda_longitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
  `entrada_comentario_latitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
  `entrada_comentario_longitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
  `salida_comentario_latitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
  `salida_comentario_longitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
  `caducidad_comentario_latitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
  `caducidad_comentario_longitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
  `incidencia_comentario_latitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
  `incidencia_comentario_longitude` decimal(39,20) NOT NULL DEFAULT '0.00000000000000000000',
fechahoranumeritime_hwa BIGINT UNSIGNED NOT NULL,  
fechahora_hwa DATETIME NOT NULL,
fecha_hwa  DATE NOT NULL,
hora_hwa  TIME NOT NULL,
timezonename_hwa TEXT NOT NULL,
timezoneoffset_hwa TEXT NOT NULL,
datetimetoiso8601string_hwa TEXT NOT NULL
          )";

// $sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS fotosvisita';

$sqvrsqrsqexec_rr[] = "
CREATE TABLE IF NOT EXISTS fotosvisita(
bajado INT NOT NULL,
subido INT NOT NULL,
subidomodificado INT NOT NULL,
id VARCHAR(200) PRIMARY KEY UNIQUE NOT NULL,
idhw TEXT NOT NULL,
id_usuario TEXT NOT NULL,
id_visitatienda TEXT NOT NULL,
tiporegistro TEXT NOT NULL,
base64foto TEXT NOT NULL,
heretakepathfoto TEXT NOT NULL,
heresourcepathstoragefoto TEXT NOT NULL,
latitude  decimal(39,20)  NOT NULL DEFAULT '0.00000000000000000000',
longitude  decimal(39,20)   NOT NULL DEFAULT '0.00000000000000000000',
wurlrutafoto TEXT NOT NULL,
wserverfoto TEXT NOT NULL,
weburlroutafoto TEXT NOT NULL,
fechahoranumeritime_hwa BIGINT UNSIGNED NOT NULL,  
fechahora_hwa DATETIME NOT NULL,
fecha_hwa  DATE NOT NULL,
hora_hwa  TIME NOT NULL,
timezonename_hwa TEXT NOT NULL,
timezoneoffset_hwa TEXT NOT NULL,
datetimetoiso8601string_hwa TEXT NOT NULL
          )";

$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS usuario';

$sqvrsqrsqexec_rr[] = "
          CREATE TABLE IF NOT EXISTS usuario(
`id` varchar(200) NOT NULL,
idhw TEXT NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `tipousuariogrupo` text NOT NULL,
  `bajado` int(11) NOT NULL,
  `subido` int(11) NOT NULL,
subidomodificado INT NOT NULL,
  `nombrecompleto` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` text NOT NULL,
  `latitude` decimal(39,20) NOT NULL,
  `longitude` decimal(39,20) NOT NULL,
  `fechahoranumeritime_hwa` bigint UNSIGNED NOT NULL,
  `fechahora_hwa` datetime NOT NULL,
  `fecha_hwa` date NOT NULL,
  `hora_hwa` time NOT NULL,
  `timezonename_hwa` text NOT NULL,
  `timezoneoffset_hwa` text NOT NULL,
  `datetimetoiso8601string_hwa` text NOT NULL
          )";

$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS tienda';
$sqvrsqrsqexec_rr[] = "
          CREATE TABLE IF NOT EXISTS tienda(
            bajado INT NOT NULL,
            subido INT NOT NULL,
subidomodificado INT NOT NULL,
            id VARCHAR(200) PRIMARY KEY UNIQUE NOT NULL,
idhw TEXT NOT NULL,
            email TEXT NOT NULL,
            direccion TEXT NOT NULL,
            latitude decimal(39,20) NOT NULL,
            longitude decimal(39,20) NOT NULL,
            telefono TEXT NOT NULL,
            nombretienda TEXT NOT NULL,
            fechahoranumeritime_hwa BIGINT UNSIGNED NOT NULL, 
            fechahora_hwa DATETIME NOT NULL,
            fecha_hwa  DATE NOT NULL,
            hora_hwa  TIME NOT NULL,
            timezonename_hwa TEXT NOT NULL,
            timezoneoffset_hwa TEXT NOT NULL,
            datetimetoiso8601string_hwa TEXT NOT NULL
          )";


$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS herstatusbanderachecarecoidorutaentradasalida';

$sqvrsqrsqexec_rr[] = "
CREATE TABLE IF NOT EXISTS herstatusbanderachecarecoidorutaentradasalida(
infovarcadena TEXT NOT NULL
)";


// $sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS recorridorutaentradasalida';

$sqvrsqrsqexec_rr[] = "
CREATE TABLE  IF NOT EXISTS `recorridorutaentradasalida` (
`bajado` int(11) NOT NULL,
`subido` int(11) NOT NULL,
`id` varchar(207) NOT NULL,
`idhw` varchar(200) NOT NULL,
subidomodificado INT NOT NULL,
`id_usuario` text NOT NULL, 
kilometrajetablero text NOT NULL,
gasolinanivel text NOT NULL,
tiporegistrotipe text NOT NULL,
termina_id_recorridorutaentradasalida text NOT NULL,
latitude  decimal(39,20)  NOT NULL DEFAULT '0.00000000000000000000',
longitude  decimal(39,20)   NOT NULL DEFAULT '0.00000000000000000000',
fechahoranumeritime_hwa BIGINT UNSIGNED NOT NULL,  
`fechahora_hwa` datetime NOT NULL,
`fecha_hwa` date NOT NULL,
`hora_hwa` time NOT NULL,
`timezonename_hwa` text NOT NULL,
`timezoneoffset_hwa` text NOT NULL,
`datetimetoiso8601string_hwa` text NOT NULL
) ";

// $sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS recorridorutaentradasalidafotos';

$sqvrsqrsqexec_rr[] = "
CREATE TABLE  IF NOT EXISTS `recorridorutaentradasalidafotos` (
bajado INT NOT NULL,
subido INT NOT NULL,
subidomodificado INT NOT NULL,
id VARCHAR(200) PRIMARY KEY UNIQUE NOT NULL,
idhw TEXT NOT NULL,
id_usuario TEXT NOT NULL,
id_recorridorutaentradasalida TEXT NOT NULL,
tiporegistrotipe TEXT NOT NULL,
base64foto TEXT NOT NULL,
heretakepathfoto TEXT NOT NULL,
heresourcepathstoragefoto TEXT NOT NULL,
latitude  decimal(39,20)  NOT NULL DEFAULT '0.00000000000000000000',
longitude  decimal(39,20)   NOT NULL DEFAULT '0.00000000000000000000',
wurlrutafoto TEXT NOT NULL,
wserverfoto TEXT NOT NULL,
weburlroutafoto TEXT NOT NULL,
fechahoranumeritime_hwa BIGINT UNSIGNED NOT NULL,  
fechahora_hwa DATETIME NOT NULL,
fecha_hwa  DATE NOT NULL,
hora_hwa  TIME NOT NULL,
timezonename_hwa TEXT NOT NULL,
timezoneoffset_hwa TEXT NOT NULL,
datetimetoiso8601string_hwa TEXT NOT NULL                                     
) ";

$sqvrwresposeout->sqrsqexec = $sqvrsqrsqexec_rr;

$sqvrwresposeout->sqrdata = $responsnstupla_rr;

header('Content-Type: application/json; charset=utf-8');

//header("HTTP/1.0 201 ok");
header("HTTP/1.0 200 ok");

echo json_encode($sqvrwresposeout);
?>