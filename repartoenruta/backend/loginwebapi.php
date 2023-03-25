<?php
sleep(1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require ('initcfg.php');
require('initvfunctioions.php');
//var_dump(sha1('12345'));
//die();
global $sqvrsalthash;

$sdvbbfparname = 'emailreqw';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$emailreqw = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato email es obligatorio"]';
    die();
}




$sdvbbfparname = 'passwordreqw';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$passwordreqw = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato password es obligatorio"]';
    die();
}




if(false) {
    $sqvrwrgnnamb = 'usuario_email';
    $sqvrcbninfo = '';
    if (isset($_REQUEST[$sqvrwrgnnamb])) {
        $sqvrcbninfo = $_REQUEST[$sqvrwrgnnamb];
    }
    $sqvrcbninfo = trim($sqvrcbninfo);
    if ($sqvrcbninfo != '') {
    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el  uemail es obligatorio"]';
        die();
    }
    $usuario_email = $sqvrcbninfo;


    $sqvrwrgnnamb = 'usuario_role_basico';
    $sqvrcbninfo = '';
    if (isset($_REQUEST[$sqvrwrgnnamb])) {
        $sqvrcbninfo = $_REQUEST[$sqvrwrgnnamb];
    }
    $sqvrcbninfo = trim($sqvrcbninfo);
    if ($sqvrcbninfo != '') {
    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el urole es obligatorio"]';
        die();
    }
    $usuario_role_basico = $sqvrcbninfo;


    $sqvrwrgnnamb = 'usuario_tokenapi';
    $sqvrcbninfo = '';
    if (isset($_REQUEST[$sqvrwrgnnamb])) {
        $sqvrcbninfo = $_REQUEST[$sqvrwrgnnamb];
    }
    $sqvrcbninfo = trim($sqvrcbninfo);
    if ($sqvrcbninfo != '') {
    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el utoken es obligatorio"]';
        die();
    }
    $usuario_tokenapi = $sqvrcbninfo;


    $sqvrwrgnnamb = 'usuario_id';
    $sqvrcbninfo = '';
    if (isset($_REQUEST[$sqvrwrgnnamb])) {
        $sqvrcbninfo = $_REQUEST[$sqvrwrgnnamb];
    }
    $sqvrcbninfo = trim($sqvrcbninfo);
    if ($sqvrcbninfo != '') {
    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato uid es obligatorio"]';
        die();
    }
    $usuario_id = $sqvrcbninfo;
}

$responsnstupla_rr = array();

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

$banderausuariosiesta=false;
$banderausuariopaswd=false;

if (count($qresultq) >= 1) {
    //var_dump('siencontrado');
    //var_dump($qresultq);

        for($sqwrweqi=0; $sqwrweqi < count($qresultq); $sqwrweqi++){

            //$resqponseqtsqtupla = new \stdClass();
            $sqvrqresqponseqtsqtupla = $qresultq[$sqwrweqi];

            $sqvqrow_usuario=$sqvrqresqponseqtsqtupla;

//$resqponseqtsqtupla->id = $id_presupuesto;
//$resqponseqtsqtupla->_id = $id_presupuesto;

            //$responsnstupla_rr[] = $resqponseqtsqtupla;

            //$responsnstupla_rr[] =
//
//            if(strtolower(trim($sqvrqresqponseqtsqtupla['email']))==strtolower(trim($emailreqw))){
//                $banderausuariosiesta=true;
//                if($sqvrqresqponseqtsqtupla['password']==sha1(strtolower(trim($passwordreqw)))){
//                    $banderausuariopaswd=true;
//                    break;
//                }
//            }
            if(strtolower(trim($sqvrqresqponseqtsqtupla['email']))==strtolower(trim($emailreqw))){
                $banderausuariosiesta=true;
				
                //if($sqvrqresqponseqtsqtupla['password']==sha1(strtolower(trim($passwordreqw)))){
                    //if($sqvrqresqponseqtsqtupla['password']==$passwordreqw){
               // if($sqvrqresqponseqtsqtupla['password']==sha1($sqvrsalthash.trim($passwordreqw))){
					 if($sqvrqresqponseqtsqtupla['password']==sha1(strtolower(trim($passwordreqw)))){
				
                    $banderausuariopaswd=true;

                        $sqvr_cCfglocal=new \StdClass();
                        $sqvr_cCfglocal->usuario_email=$sqvrqresqponseqtsqtupla['email'];
                        $sqvr_cCfglocal->usuario_id=$sqvrqresqponseqtsqtupla['id'];
                        $sqvr_cCfglocal->usuario_tokenapi=base64_encode($sqvrqresqponseqtsqtupla['id']);
                        $sqvr_cCfglocal->usuario_role_basico=$sqvrqresqponseqtsqtupla['tipousuariogrupo'];
                        $sqvr_cCfglocal->usuario_nombretituloapp=$sqvrqresqponseqtsqtupla['nombrecompleto'];
                        $sqvr_cCfglocal->usuario_perfilfoto1='';
                        $sqvr_cCfglocal->usuario_perfilestacompletado='';
                        $sqvr_cCfglocal->usuario_perfilverified='';
                        $sqvr_cCfglocal->pharmacyRegister='';
                        $sqvr_cCfglocal->dosetusuariouser='';

                        $responsnstupla_rr[] = $sqvr_cCfglocal;
                        break;
                }
            }







//
//
//            usuario_email: json["usuario_email"]
//        ,usuario_id: json["usuario_id"]
//        ,usuario_tokenapi: json["usuario_tokenapi"]
//        ,usuario_role_basico: json["usuario_role_basico"]
//        ,usuario_nombretituloapp: json["usuario_nombretituloapp"]
//        ,usuario_perfilfoto1: json["usuario_perfilfoto1"]
//        ,usuario_perfilestacompletado: json["usuario_perfilestacompletado"]
//        ,usuario_perfilverified: json["usuario_perfilverified"]
//        ,pharmacyRegister: json["pharmacyRegister"]
//        ,dosetusuariouser: json["dosetusuariouser"]












//            $responsnstupla_rr[] =  "INSERT INTO `tienda` (`id`, `email`, `bajado`, `subido`, `nombretienda`, `direccion`, `telefono`, `latitude`, `longitude`, `fechahoranumeritime_hwa`, `fechahora_hwa`, `fecha_hwa`, `hora_hwa`, `timezonename_hwa`, `timezoneoffset_hwa`, `datetimetoiso8601string_hwa`) VALUES
//            ('".$resqponseqtsqtupla['id']."'
//            ,'".$resqponseqtsqtupla['email']."'
//            ,'".$resqponseqtsqtupla['bajado']."'
//            ,'".$resqponseqtsqtupla['subido']."'
//            ,'".$resqponseqtsqtupla['nombretienda']."'
//            ,'".$resqponseqtsqtupla['direccion']."'
//            ,'".$resqponseqtsqtupla['telefono']."'
//            ,'".$resqponseqtsqtupla['latitude']."'
//            ,'".$resqponseqtsqtupla['longitude']."'
//            ,'".$resqponseqtsqtupla['fechahoranumeritime_hwa']."'
//            ,'".$resqponseqtsqtupla['fechahora_hwa']."'
//            ,'".$resqponseqtsqtupla['fecha_hwa']."'
//            ,'".$resqponseqtsqtupla['hora_hwa']."'
//            ,'".$resqponseqtsqtupla['timezonename_hwa']."'
//            ,'".$resqponseqtsqtupla['timezoneoffset_hwa']."'
//            ,'".$resqponseqtsqtupla['datetimetoiso8601string_hwa']."'
//            )";



        }

        if($banderausuariosiesta){
            if($banderausuariopaswd){

            }
            else{
                header("HTTP/1.0 202 ErrorqServerq");
                echo '["intenta otra vez, la contraseña no coincide"]';
                die();
            }
        }
        else{
            header("HTTP/1.0 202 ErrorqServerq");
            echo '["intenta otra vez, No encuentra este email"]';
            die();
        }

} else {
    header("HTTP/1.0 202 ErrorqServerq");
    echo '["intenta otra vez, el servidor no lee ningun dato"]';
    die();
}





////$stmtq = $dbh->prepare('SELECT * FROM tienda WHERE id = ?  LIMIT 1');
////        var_dump($stmtq);
////        var_dump($stmtq->execute(array($id)));
////        var_dump($stmtq);
////$stmtq->execute(array($id));
//$stmtq = $dbh->prepare('SELECT * FROM usuario ');
//$stmtq->execute(array());
////$qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);
//$qresultq = $stmtq->fetchAll(PDO::FETCH_ASSOC);
//
////var_dump($qresultq);
//
//if (count($qresultq) >= 1) {
//    //var_dump('siencontrado');
//    //var_dump($qresultq);
//
//    for($sqwrweqi=0; $sqwrweqi < count($qresultq); $sqwrweqi++){
//        $sqvqrow_tienda=$qresultq[$sqwrweqi];
//
//        //$resqponseqtsqtupla = new \stdClass();
//        $resqponseqtsqtupla = $sqvqrow_tienda;
//
////$resqponseqtsqtupla->id = $id_presupuesto;
////$resqponseqtsqtupla->_id = $id_presupuesto;
//
//        //$responsnstupla_rr[] = $resqponseqtsqtupla;
//
//
//        $responsnstupla_rr[] =  "INSERT INTO `usuario` (`id`, `email`, `password`, `tipousuariogrupo`, `bajado`, `subido`, `nombrecompleto`, `direccion`, `telefono`, `latitude`, `longitude`, `fechahoranumeritime_hwa`, `fechahora_hwa`, `fecha_hwa`, `hora_hwa`, `timezonename_hwa`, `timezoneoffset_hwa`, `datetimetoiso8601string_hwa`) VALUES
//            ('".$resqponseqtsqtupla['id']."'
//            ,'".$resqponseqtsqtupla['email']."'
//            ,'".$resqponseqtsqtupla['password']."'
//            ,'".$resqponseqtsqtupla['tipousuariogrupo']."'
//            ,'".$resqponseqtsqtupla['bajado']."'
//            ,'".$resqponseqtsqtupla['subido']."'
//            ,'".$resqponseqtsqtupla['nombrecompleto']."'
//            ,'".$resqponseqtsqtupla['direccion']."'
//            ,'".$resqponseqtsqtupla['telefono']."'
//            ,'".$resqponseqtsqtupla['latitude']."'
//            ,'".$resqponseqtsqtupla['longitude']."'
//            ,'".$resqponseqtsqtupla['fechahoranumeritime_hwa']."'
//            ,'".$resqponseqtsqtupla['fechahora_hwa']."'
//            ,'".$resqponseqtsqtupla['fecha_hwa']."'
//            ,'".$resqponseqtsqtupla['hora_hwa']."'
//            ,'".$resqponseqtsqtupla['timezonename_hwa']."'
//            ,'".$resqponseqtsqtupla['timezoneoffset_hwa']."'
//            ,'".$resqponseqtsqtupla['datetimetoiso8601string_hwa']."'
//            )";
//
//
//
//    }
//
//} else {
//
//}

$respontpsqa_rr = array();

$resqponseqtsqtupla = new \stdClass();

//$resqponseqtsqtupla->id = $id_presupuesto;
//$resqponseqtsqtupla->_id = $id_presupuesto;

$resqponseqtsqtupla->_id = '0';

$respontpsqa_rr[] = $resqponseqtsqtupla;

$sqvrwresposeout = new \stdClass();

$sqvrwresposeout->responsnstupla = $respontpsqa_rr;
$sqvrsqrsqexec_rr=array();

//$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS visitatienda';
//
//$sqvrsqrsqexec_rr[] = "
//CREATE TABLE IF NOT EXISTS visitatienda(
//bajado INT NOT NULL,
//subido INT NOT NULL,
//id VARCHAR(200) PRIMARY KEY UNIQUE NOT NULL,
//id_tienda TEXT NOT NULL,
//id_usuario TEXT NOT NULL,
//entrada_comentario TEXT NOT NULL,
//salida_comentario TEXT NOT NULL,
//fechahoranumeritime_hwa BIGINT UNSIGNED NOT NULL,
//fechahora_hwa DATETIME NOT NULL,
//fecha_hwa  DATE NOT NULL,
//hora_hwa  TIME NOT NULL,
//timezonename_hwa TEXT NOT NULL,
//timezoneoffset_hwa TEXT NNOT NULL,
//datetimetoiso8601string_hwa TEXT NOT NULL
//          )";


//
//$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS usuario';
//
//$sqvrsqrsqexec_rr[] = "
//          CREATE TABLE IF NOT EXISTS usuario(
//`id` varchar(200) NOT NULL,
//  `email` text NOT NULL,
//  `password` text NOT NULL,
//  `tipousuariogrupo` text NOT NULL,
//  `bajado` int(11) NOT NULL,
//  `subido` int(11) NOT NULL,
//  `nombrecompleto` text NOT NULL,
//  `direccion` text NOT NULL,
//  `telefono` text NOT NULL,
//  `latitude` decimal(39,20) NOT NULL,
//  `longitude` decimal(39,20) NOT NULL,
//  `fechahoranumeritime_hwa` bigint UNSIGNED NOT NULL,
//  `fechahora_hwa` datetime NOT NULL,
//  `fecha_hwa` date NOT NULL,
//  `hora_hwa` time NOT NULL,
//  `timezonename_hwa` text NOT NULL,
//  `timezoneoffset_hwa` text NOT NULL,
//  `datetimetoiso8601string_hwa` text NOT NULL
//          )";
//
//
//


//$sqvrsqrsqexec_rr[] = 'DROP TABLE IF  EXISTS tienda';
//$sqvrsqrsqexec_rr[] = "
//          CREATE TABLE IF NOT EXISTS tienda(
//            bajado INT NOT NULL,
//            subido INT NOT NULL,
//            id VARCHAR(200) PRIMARY KEY UNIQUE NOT NULL,
//            email TEXT NOT NULL,
//            direccion TEXT NOT NULL,
//            latitude decimal(39,20) NOT NULL,
//            longitude decimal(39,20) NOT NULL,
//            telefono TEXT NOT NULL,
//            nombretienda TEXT NOT NULL,
//            fechahoranumeritime_hwa BIGINT UNSIGNED NOT NULL,
//            fechahora_hwa DATETIME NOT NULL,
//            fecha_hwa  DATE NOT NULL,
//            hora_hwa  TIME NOT NULL,
//            timezonename_hwa TEXT NOT NULL,
//            timezoneoffset_hwa TEXT NNOT NULL,
//            datetimetoiso8601string_hwa TEXT NOT NULL
//          )";

$sqvrwresposeout->sqrsqexec = $sqvrsqrsqexec_rr;

$sqvrwresposeout->sqrdata = $responsnstupla_rr;

header('Content-Type: application/json; charset=utf-8');

//header("HTTP/1.0 201 ok");
header("HTTP/1.0 200 ok");

echo json_encode($sqvrwresposeout);
?>