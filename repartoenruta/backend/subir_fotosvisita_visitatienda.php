<?php

sleep(1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Turn off all error reporting
//error_reporting(0);

// Report all errors except E_NOTICE
//error_reporting(E_ALL & ~E_NOTICE);

//error_reporting(E_ALL  & ~E_NOTICE  & ~E_WARNING );

//error_reporting(E_ERROR | E_NOTICE | E_PARSE);




// Report all PHP errors
//error_reporting(E_ALL);

// Report all PHP errors
//error_reporting(-1);

// Same as error_reporting(E_ALL);
//ini_set('error_reporting', E_ALL);



error_reporting(E_ERROR | E_NOTICE | E_PARSE);



// header('Content-Type: application/json; charset=utf-8');

// header("HTTP/1.0 202 ErrorqServerq");
//400 -> 202
// header("HTTP/1.0 202 ErrorqServerq");
// echo '["Este email ya ha sido registrado"]';

// $eedff = file_get_contents('php://input');
// var_dump($eedff);
// $sqvr = json_decode($eedff,TRUE);

// var_dump($sqvr);

require('initcfg.php');
require('initvfunctioions.php');

date_default_timezone_set($sqvr_date_default_timezone_set_sq);
date_default_timezone_set($sqvr_date_default_timezone_set_sq);
date_default_timezone_set($sqvr_date_default_timezone_set_sq);















$sdvbbfparname = 'sqvr_req_act_doqaction';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$sqvr_req_act_doqaction = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato req_act_doqaction es obligatorio"]';
    die();
}


$sdvbbfparname = 'sqrow';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$sqrow = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato sqrow es obligatorio"]';
    die();
}


//var_dump($sqrow);
//var_dump(json_decode($sqrow));

$objsqrowreq = json_decode($sqrow);
if (false) {
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
}

if(false){

    $serverwicharchivos=fn_get_serverwicharchivos();

    $sqvrsfileqname='foto1';

    if(isset($_FILES[$sqvrsfileqname])){

        if(true) {
            $sqdvsqvbbbqbt = time();

//date("Y-m-d H:i:s",sqdvbbbt)

            $sqvr_anio = date("Y", $sqdvsqvbbbqbt);

            $sqvr_mes = date("m", $sqdvsqvbbbqbt);

            $sqvr_dia = date("d", $sqdvsqvbbbqbt);

            $sqvr_hora = date("H", $sqdvsqvbbbqbt);

            $sqvr_minuto = date("i", $sqdvsqvbbbqbt);

            $sqvr_segundo = date("s", $sqdvsqvbbbqbt);

//
//    https://riandamdb7.buysaleclub.com/rianda_md_apiv1b/
//    https://riandamdb7.buysaleclub.com/rianda_md_apiv1b/uploads/2022/09/18/

            $sqvrfoldqeruploads = 'uploads';
            $sqvr_sdcvvruta = $sqvr_anio . '/' . $sqvr_mes . '/' . $sqvr_dia . '/' . $sqvr_hora . '/' . $sqvr_minuto . '/' . $sqvr_segundo;

            if (file_exists($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta)) {

            } else {
                mkdir($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta, 0775, true);
            }
//    var_dump(microtime(true));
//    var_dump(microtime(false));





            $sqdfvvrqfilerutapath= $sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta . '/';

            for($sqwvbi=0;$sqwvbi <= 1000000;$sqwvbi++) {
                $sqdfvvrqqarchivo = time().'_'.rand(100,199).rand(200,299).rand(300,399).rand(400,499).rand(500,599).rand(600,699).rand(700,799).'.png';

                $sqdfvvrqfilerutanamearchivo = $sqdfvvrqfilerutapath . $sqdfvvrqqarchivo;

                if (file_exists($sqdfvvrqfilerutanamearchivo)) {

                } else {
                    break;
                }
            }

            file_put_contents($sqdfvvrqfilerutanamearchivo, 's');

            //var_dump($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta);

            //var_dump($sqdfvvrqfilerutanamearchivo);



//
//        $target_path = "uploads/";
//
//        $target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

            if(move_uploaded_file($_FILES[$sqvrsfileqname]['tmp_name'], $sqdfvvrqfilerutanamearchivo)) {
//            echo "The file ".  basename( $_FILES[$sqvrsfileqname]['name']).
//                " has been uploaded";
            } else{
                //echo "There was an error uploading the file, please try again!";
                $sqdfvvrqfilerutanamearchivo='';
            }


            $ruta_foto1=$sqdfvvrqfilerutanamearchivo;

        }
    }
    else{

        $ruta_foto1='';

    }
}

$sqvqeiedrr = array();

//var_dump(   strtotime('2022-10-21 21:43:37') );

$sqvr_existerowrequestbandera=false;

for ($sqi = 0; $sqi < 7; $sqi++) {
usleep(77);

$sqvr_id_rowrequestqtupla=trim($objsqrowreq->id);
    //$stmtq = $dbh->prepare('SELECT * FROM fotosvisita WHERE id = ?  LIMIT 1');
    $stmtq = $dbh->prepare('SELECT * FROM fotosvisita WHERE idhw = ?  ');
//        var_dump($stmtq);
//        var_dump($stmtq->execute(array($id)));
//        var_dump($stmtq);
    $stmtq->execute(array($sqvr_id_rowrequestqtupla));
    $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

//var_dump($qresultq);
    //$stmtq = $dbh->prepare('SELECT * FROM fotosvisita WHERE id = ?  LIMIT 1');
    $stmtq = $dbh->prepare('SELECT * FROM fotosvisita WHERE idhw = ?  ');
//        var_dump($stmtq);
//        var_dump($stmtq->execute(array($id)));
//        var_dump($stmtq);
    $stmtq->execute(array($sqvr_id_rowrequestqtupla));
    $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

//var_dump($qresultq);

    if (count($qresultq) >= 1) {

        $sqvr_existerowrequestbandera=true;
        break;
    } else {

    }

}



if (true) {

    $sqdfvvrqfilerutanamearchivo = '';

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
        sleep(1);

        $sqvrtqpobj = fn_generarlargoidvariable();

        //var_dump($sqvrtqpobj);

        $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

        $stmtq = $dbh->prepare('SELECT * FROM fotosvisita WHERE id = ?  LIMIT 3');
//        var_dump($stmtq);
//        var_dump($stmtq->execute(array($id)));
//        var_dump($stmtq);
        $stmtq->execute(array($id));
        $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

        //var_dump($qresultq);

        $stmtq = $dbh->prepare('SELECT * FROM fotosvisita WHERE id = ?  LIMIT 1');
//        var_dump($stmtq);
//        var_dump($stmtq->execute(array($id)));
//        var_dump($stmtq);
        $stmtq->execute(array($id));
        $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

        //var_dump($qresultq);

        $stmtq = $dbh->prepare('SELECT * FROM fotosvisita WHERE id = ?  LIMIT 1');
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

    if ('agregar' == $sqvr_req_act_doqaction) {

        $sqvqeiedrr = array();
        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'id';
        $sqvbjo->infociloq = $id;
        $sqvqeiedrr[] = $sqvbjo;

        if($sqvr_existerowrequestbandera){

        }
        else {

        }

    } else if ('modificar' == $sqvr_req_act_doqaction) {

        $sqvqeiedrr = array();
        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'id';
        $sqvbjo->infociloq = $id;
        $sqvqeiedrr[] = $sqvbjo;

    }



    if ('agregar' == $sqvr_req_act_doqaction) {

    } else if ('modificar' == $sqvr_req_act_doqaction) {

    }



//    if (isset($objsqrowreq->id)) {
//
//    } else {
//        header("HTTP/1.0 202 ErrorqServerq");
//        echo '["el dato id-row es obligatorio"]';
//        die();
//    }
//
//    $infociloq = trim($objsqrowreq->id);
//
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'idhw';
//    $sqvbjo->infociloq = $infociloq;
//    $sqvqeiedrr[] = $sqvbjo;

    if('agregar'==$sqvr_req_act_doqaction){

        if (isset($objsqrowreq->id)) {

        } else {
            header("HTTP/1.0 202 ErrorqServerq");
            echo '["el dato id-row es obligatorio"]';
            die();
        }

        $infociloq = trim($objsqrowreq->id);

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'idhw';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;

    }
    else if('modificar'==$sqvr_req_act_doqaction) {

        if (isset($objsqrowreq->id)) {

        } else {
            header("HTTP/1.0 202 ErrorqServerq");
            echo '["el dato id-row es obligatorio"]';
            die();
        }

        $infociloq = trim($objsqrowreq->id);

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'idhw';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;

    }





//    $infociloq = 0;
//
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'bajado';
//    $sqvbjo->infociloq = $infociloq;
//    $sqvqeiedrr[] = $sqvbjo;

    if (isset($objsqrowreq->bajado)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato bajado-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->bajado);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'bajado';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;


    if ('agregar' == $sqvr_req_act_doqaction) {

        $infociloq = 1;

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'subido';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;

    } else if ('modificar' == $sqvr_req_act_doqaction) {

        if (isset($objsqrowreq->subido)) {

        } else {
            header("HTTP/1.0 202 ErrorqServerq");
            echo '["el dato subido-row es obligatorio"]';
            die();
        }

        $infociloq = trim($objsqrowreq->subido);

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'subido';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;

    }

    if ('agregar' == $sqvr_req_act_doqaction) {

        if (isset($objsqrowreq->subidomodificado)) {

        } else {
            header("HTTP/1.0 202 ErrorqServerq");
            echo '["el dato subidomodificado-row es obligatorio"]';
            die();
        }

        $infociloq = trim($objsqrowreq->subidomodificado);

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'subidomodificado';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;

    } else if ('modificar' == $sqvr_req_act_doqaction) {
//
//        $infociloq = 1;
//
//        $sqvbjo = new \stdClass();
//        $sqvbjo->nameciloq = 'subidomodificado';
//        $sqvbjo->infociloq = $infociloq;
//        $sqvqeiedrr[] = $sqvbjo;

        if (isset($objsqrowreq->subidomodificado)) {

        } else {
            header("HTTP/1.0 202 ErrorqServerq");
            echo '["el dato subidomodificado-row es obligatorio"]';
            die();
        }

        $infociloq = trim($objsqrowreq->subidomodificado);

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'subidomodificado';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;

    }





    //$=$objsqrowreq['']

    if (isset($objsqrowreq->id_visitatienda)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato id_visitatienda -row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->id_visitatienda);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'id_visitatienda';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;




    if (isset($objsqrowreq->id_usuario)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato id_usuario-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->id_usuario);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'id_usuario';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;



    if (isset($objsqrowreq->tiporegistro)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato tiporegistro-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->tiporegistro);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'tiporegistro';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;





    if (isset($objsqrowreq->base64foto)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato base64foto-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->base64foto);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'base64foto';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;





    if (isset($objsqrowreq->heretakepathfoto)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato heretakepathfoto-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->heretakepathfoto);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'heretakepathfoto';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;





    if (isset($objsqrowreq->heresourcepathstoragefoto)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato heresourcepathstoragefoto-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->heresourcepathstoragefoto);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'heresourcepathstoragefoto';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;

    if($infociloq != ''){
        $sdvbbfparname = 'heresourcepathstoragefoto_base64foto';
        $sdvbbfparinfoq = '';
        if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
            $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
        }
        $heresourcepathstoragefoto_base64foto = $sdvbbfparinfoq;

        if (trim($sdvbbfparinfoq) != '') {

        } else {

            header("HTTP/1.0 202 ErrorqServerq");
            echo '["el dato heresourcepathstoragefoto_base64foto es obligatorio"]';
            die();
        }
        //trim($objsqrowreq->heresourcepathstoragefoto_base64foto);
        //heresourcepathstoragefoto_base64foto

        if('' !=  trim($heresourcepathstoragefoto_base64foto)){

            //uploads_folder_web

$serverwicharchivos=fn_get_serverwicharchivos();


if(true){

        $sqvrfoldqeruploads = getcwd().'/'.'uploads_folder_web';
		
        $sqvrfoldqeruploadsweb = 'uploads_folder_web';
		
// var_dump($sqvrfoldqeruploads);  
// var_dump('sqerorfolder.php');
// die();

		$sqdvsqvbbbqbt = time();

        $sqvr_anio = date("Y", $sqdvsqvbbbqbt);

        $sqvr_mes = date("m", $sqdvsqvbbbqbt);

        $sqvr_dia = date("d", $sqdvsqvbbbqbt);

        $sqvr_hora = date("H", $sqdvsqvbbbqbt);

        $sqvr_minuto = date("i", $sqdvsqvbbbqbt);

        $sqvr_segundo = date("s", $sqdvsqvbbbqbt);

        $sqvr_sdcvvruta = $sqvr_anio . '/' . $sqvr_mes . '/' . $sqvr_dia . '/' . $sqvr_hora . '/' . $sqvr_minuto . '/' . $sqvr_segundo;

        $sqdfvvrqfilerutapath= $sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta . '/';

        $sqdfvvrqfilerutapathweb= $sqvrfoldqeruploadsweb . '/' . $sqvr_sdcvvruta . '/';

                  try {

          mkdir($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta. '/', 0777, true);

                  } catch(Exception $e) {
				  }
				  
        if (file_exists($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta. '/')) {

        } else {
            if (file_exists($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta. '/')) {

            } else {
                  try {

          mkdir($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta. '/', 0777, true);

                  } catch(Exception $e) {
					  
var_dump('subir_fotosvisita_visitatienda-erorfolder.php');
// die();

                      var_dump($e);
					die();
                      var_dump($e);
                    var_dump($e->getTrace());
					die();
                }
            }
        }
		
		
		
          // mkdir($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta. '/', 0777, true);

		      try {

          mkdir($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta. '/', 0777, true);

                  } catch(Exception $e) {
					  
var_dump('subir_fotosvisita_visitatienda-erorfolderq.php');
// die();

                      // var_dump($e);
					// die();
                      // var_dump($e);
                    // var_dump($e->getTrace());
					// die();
                }
		
		
		
		
//    var_dump(microtime(true));
//    var_dump(microtime(false));

// var_dump('subir_fotosvisita_visitatienda.php');
// die();

// var_dump('subir_fotosvisita_visitatienda-okrfolder.php'.$sqdfvvrqfilerutapath);
// die();
}

    if(true) {
        $sqdvsqvbbbqbt = time();

//date("Y-m-d H:i:s",sqdvbbbt)

        $sqvr_anio = date("Y", $sqdvsqvbbbqbt);

        $sqvr_mes = date("m", $sqdvsqvbbbqbt);

        $sqvr_dia = date("d", $sqdvsqvbbbqbt);

        $sqvr_hora = date("H", $sqdvsqvbbbqbt);

        $sqvr_minuto = date("i", $sqdvsqvbbbqbt);

        $sqvr_segundo = date("s", $sqdvsqvbbbqbt);

// var_dump('subir_fotosvisita_visitatienda.php');
// die();

//
//    https://riandamdb7.buysaleclub.com/rianda_md_apiv1b/
//    https://riandamdb7.buysaleclub.com/rianda_md_apiv1b/uploads/2022/09/18/

        $sqvrfoldqeruploads = getcwd().'/'.'uploads_folder_web';
		
// var_dump($sqvrfoldqeruploads);  
// var_dump('sqerorfolder.php');
// die();


        $sqvr_sdcvvruta = $sqvr_anio . '/' . $sqvr_mes . '/' . $sqvr_dia . '/' . $sqvr_hora . '/' . $sqvr_minuto . '/' . $sqvr_segundo;

        $sqvr_sdcvvruta = $sqvr_anio . '/' . $sqvr_mes . '/' . $sqvr_dia . '/' . $sqvr_hora . '/' . $sqvr_minuto . '/' ;

        $sqvr_sdcvvruta = $sqvr_anio . '/' . $sqvr_mes . '/' . $sqvr_dia . '/' . $sqvr_hora . '/' . $sqvr_minuto . '/' . $sqvr_segundo;

        $sqdfvvrqfilerutapath= $sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta . '/';

        $sqdfvvrqfilerutapath= $sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta . '/';

        $sqdfvvrqfilerutapathweb= $sqvrfoldqeruploadsweb . '/' . $sqvr_sdcvvruta . '/';

                  try {

          mkdir($sqdfvvrqfilerutapath . '/' , 0777, true);

                  } catch(Exception $e) {
					  
                }
				
                  try {

          mkdir($sqdfvvrqfilerutapath . '/' , 0777, true);

                  } catch(Exception $e) {
					  
                }
				
        if (file_exists($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta. '/')) {

        } else {
            if (file_exists($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta. '/')) {

            } else {
                  try {

          mkdir($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta. '/', 0777, true);

                  } catch(Exception $e) {
					  
var_dump('subir_fotosvisita_visitatienda-erorfolder.php');
// die();

                      var_dump($e);
					die();
                      var_dump($e);
                    var_dump($e->getTrace());
					die();
                }
            }
        }
//    var_dump(microtime(true));
//    var_dump(microtime(false));

// var_dump('subir_fotosvisita_visitatienda.php');
// die();

// var_dump('subir_fotosvisita_visitatienda-okrfolder.php'.$sqdfvvrqfilerutapath);
// die();






        //$sqdfvvrqfilerutapath= $sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta . '/';

        for($sqwvbi=0;$sqwvbi <= 1000000;$sqwvbi++) {
            $sqdfvvrqqarchivo = time().'_'.rand(100,199).rand(200,299).rand(300,399).rand(400,499).rand(500,599).rand(600,699).rand(700,799).'.png';

            $sqdfvvrqfilerutanamearchivo = $sqdfvvrqfilerutapath . $sqdfvvrqqarchivo;

            $sqdfvvrqfilerutanamearchivoweb = $sqdfvvrqfilerutapathweb . $sqdfvvrqqarchivo;

        // $sqdfvvrqfilerutapath= $sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta . '/';

        // $sqdfvvrqfilerutapathweb= $sqvrfoldqeruploadsweb . '/' . $sqvr_sdcvvruta . '/';

            if (file_exists($sqdfvvrqfilerutanamearchivo)) {

            } else {
                break;
            }
        }

        file_put_contents($sqdfvvrqfilerutanamearchivo, '');

        //$ruta_foto1=$sqdfvvrqfilerutanamearchivo;

//
//        $objsqrowreq->wurlrutafoto
//        $objsqrowreq->weburlroutafoto
//            $objsqrowreq->wserverfoto
//



        //var_dump($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta);

        //var_dump($sqdfvvrqfilerutanamearchivo);



//
//        $target_path = "uploads/";
//
//        $target_path = $target_path . basename( $_FILES['uploadedfile']['name']);




// var_dump('subir_fotosvisita_visitatienda7ok.php');
// die();

            // open the output file for writing
            $ifp = fopen( $sqdfvvrqfilerutanamearchivo, 'wb' );

            // split the string on commas
            // $data[ 0 ] == "data:image/png;base64"
            // $data[ 1 ] == <actual base64 string>
            //$data = explode( ',', $base64_string );

            // we could add validation here with ensuring count( $data ) > 1
            //fwrite( $ifp, base64_decode( $data[ 1 ] ) );
            fwrite( $ifp, base64_decode( $heresourcepathstoragefoto_base64foto ) );


// var_dump('subir_fotosvisita_visitatienda7wokw.php');
// var_dump($sqdfvvrqfilerutanamearchivo);
// die();

// https://labbioindu.ml/backend/tessst/repartoenruta/backend//home/labbioindu/public_html/backend/tessst/repartoenruta/backend/uploads_folder_web/2023/01/31/22/29/08/1675204148_135280333400539684788.png

            // $sqdfvvrqfilerutanamearchivo = $sqdfvvrqfilerutapath . $sqdfvvrqqarchivo;

            // $sqdfvvrqfilerutanamearchivoweb = $sqdfvvrqfilerutapathweb . $sqdfvvrqqarchivo;

        // $objsqrowreq->wurlrutafoto=$sqdfvvrqfilerutanamearchivo;
        $objsqrowreq->wurlrutafoto=$sqdfvvrqfilerutanamearchivoweb;
        $objsqrowreq->weburlroutafoto=$heresourcepathstoragefoto_base64foto;
            $objsqrowreq->wserverfoto='';

            // clean up the file resource
            fclose( $ifp );
			

    }

        }
    }



    if (isset($objsqrowreq->wurlrutafoto)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato wurlrutafoto-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->wurlrutafoto);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'wurlrutafoto';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;




    if (isset($objsqrowreq->wserverfoto)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato wserverfoto-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->wserverfoto);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'wserverfoto';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;




    if (isset($objsqrowreq->weburlroutafoto)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato weburlroutafoto-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->weburlroutafoto);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'weburlroutafoto';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;



    if (isset($objsqrowreq->latitude)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato latitude-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->latitude);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'latitude';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;




    if (isset($objsqrowreq->longitude)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato longitude-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->longitude);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'longitude';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;


//    $infociloq = $prsq_nombretienda;
//
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'nombretienda';
//    $sqvbjo->infociloq = $infociloq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//
//    $infociloq = $prsq_direccion;
//
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'direccion';
//    $sqvbjo->infociloq = $infociloq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//    $infociloq = $prsq_latitude;
//
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'latitude';
//    $sqvbjo->infociloq = $infociloq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//    $infociloq = $prsq_longitude;
//
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'longitude';
//    $sqvbjo->infociloq = $infociloq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//    $infociloq = $prsq_telefono;
//
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'telefono';
//    $sqvbjo->infociloq = $infociloq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//    $infociloq = $prsq_nombretienda;
//
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'nombretienda';
//    $sqvbjo->infociloq = $infociloq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//
//    $sqvqeiedrr = array();
//
//    $sqvrevrinfoeq = '' . $token;
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'token';
//    $sqvbjo->infociloq = $sqvrevrinfoeq;
//    $sqvqeiedrr[] = $sqvbjo;
//
////$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;
//
//
//    $sqvqeiedrr = array();
//
//    $sqdfvv = $birdatetexto;
//
//    $sqdfvv = strtolower($sqdfvv);
//    $sqsqsdsqxcvvdfvv = explode('t', $sqdfvv);
//
//    $birthdatefecha = $sqsqsdsqxcvvdfvv[0];
//
//
//    $sqvrevrinfoeq = '' . $birthdatefecha;
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'birthdatefecha';
//    $sqvbjo->infociloq = $sqvrevrinfoeq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;
//
//
//    $birthdate = $birdatetexto;
//
//    $sqvrevrinfoeq = '' . $birthdate;
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'birthdate';
//    $sqvbjo->infociloq = $sqvrevrinfoeq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;
//
//
//    $name = $nametextow;
//
//    $sqvrevrinfoeq = '' . $name;
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'name';
//    $sqvbjo->infociloq = $sqvrevrinfoeq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;
//
//
//    $sqvrevrinfoeq = '' . '+52';
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'dial_code';
//    $sqvbjo->infociloq = $sqvrevrinfoeq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;
//
//
//    $phone = $telefonowhole;
//
//    $sqvrevrinfoeq = '' . $phone;
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'phone';
//    $sqvbjo->infociloq = $sqvrevrinfoeq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;
//
//
//    if ($ruta_foto1 != '') {
//
//        $sqvrevrinfoeq = '' . trim($ruta_foto1);
//        $sqvbjo = new \stdClass();
//        $sqvbjo->nameciloq = 'rutafoto1';
//        $sqvbjo->infociloq = $sqvrevrinfoeq;
//        $sqvqeiedrr[] = $sqvbjo;
//
//        //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;
//
//    }


//    $sqvrevrinfoeq = '' . trim($serverwicharchivos);
//    $sqvbjo = new \stdClass();
//    $sqvbjo->nameciloq = 'serverwicharchivos';
//    $sqvbjo->infociloq = $sqvrevrinfoeq;
//    $sqvqeiedrr[] = $sqvbjo;
//
//    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;

//
//
//    $sqvrsqrsqexec_rr[] = "
//


    if (false) {
        //$infociloq = time();
        $infociloq = date_create()->format('Uv');

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'fechahoranumeritime_hwa';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;

        $infociloq = date("Y-m-d H:i:s");

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'fechahora_hwa';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;

        $infociloq = date("Y-m-d");

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'fecha_hwa';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;

        $infociloq = date("H:i:s");

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'hora_hwa';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;
    }



//
//    bajado INT NOT NULL,
//subido INT NOT NULL,
//subidomodificado INT NOT NULL,
//id VARCHAR(200) PRIMARY KEY UNIQUE NOT NULL,
//idhw TEXT NOT NULL,
//id_usuario TEXT NOT NULL,
//id_visitatienda TEXT NOT NULL,
//tiporegistro TEXT NOT NULL,
//base64foto TEXT NOT NULL,
//heretakepathfoto TEXT NOT NULL,
//heresourcepathstoragefoto TEXT NOT NULL,
//wurlrutafoto TEXT NOT NULL,
//wserverfoto TEXT NOT NULL,
//weburlroutafoto TEXT NOT NULL,
//
//fechahoranumeritime_hwa BIGINT UNSIGNED NOT NULL,
//fechahora_hwa DATETIME NOT NULL,
//fecha_hwa  DATE NOT NULL,
//hora_hwa  TIME NOT NULL,
//timezonename_hwa TEXT NOT NULL,
//timezoneoffset_hwa TEXT NOT NULL,
//datetimetoiso8601string_hwa TEXT NOT NULL
//



    if (isset($objsqrowreq->fechahoranumeritime_hwa)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato fechahoranumeritime_hwa-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->fechahoranumeritime_hwa);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'fechahoranumeritime_hwa';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;


    if (isset($objsqrowreq->fechahora_hwa)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato fechahora_hwa-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->fechahora_hwa);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'fechahora_hwa';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;


    if (isset($objsqrowreq->fecha_hwa)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato fecha_hwa-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->fecha_hwa);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'fecha_hwa';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;


    if (isset($objsqrowreq->hora_hwa)) {

    } else {
        header("HTTP/1.0 202 ErrorqServerq");
        echo '["el dato hora_hwa-row es obligatorio"]';
        die();
    }

    $infociloq = trim($objsqrowreq->hora_hwa);

    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'hora_hwa';
    $sqvbjo->infociloq = $infociloq;
    $sqvqeiedrr[] = $sqvbjo;


//
//    $sqvrsqrsqexec_rr[] = "
//          )";


    $sqvr_req_act_doqaction_sqvr_existerowrequestbandera=$sqvr_req_act_doqaction;
    if($sqvr_existerowrequestbandera){
        $sqvr_req_act_doqaction_sqvr_existerowrequestbandera='modificar';
    }
    else{

    }



    if ('agregar' == $sqvr_req_act_doqaction_sqvr_existerowrequestbandera) {



        if (isset($objsqrowreq->datetimetoiso8601string_hwa)) {

        } else {
            header("HTTP/1.0 202 ErrorqServerq");
            echo '["el dato datetimetoiso8601string_hwa-row es obligatorio"]';
            die();
        }

        $infociloq = trim($objsqrowreq->datetimetoiso8601string_hwa);

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'datetimetoiso8601string_hwa';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;


        if (isset($objsqrowreq->timezonename_hwa)) {

        } else {
            header("HTTP/1.0 202 ErrorqServerq");
            echo '["el dato timezonename_hwa-row es obligatorio"]';
            die();
        }

        $infociloq = trim($objsqrowreq->timezonename_hwa);

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'timezonename_hwa';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;


        if (isset($objsqrowreq->timezoneoffset_hwa)) {

        } else {
            header("HTTP/1.0 202 ErrorqServerq");
            echo '["el dato timezoneoffset_hwa-row es obligatorio"]';
            die();
        }

        $infociloq = trim($objsqrowreq->timezoneoffset_hwa);

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'timezoneoffset_hwa';
        $sqvbjo->infociloq = $infociloq;
        $sqvqeiedrr[] = $sqvbjo;


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

//        $sqvrevrinfoeq = ''.trim($serverwicharchivos);
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'serverwicharchivos'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;
//
//        //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


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

            if (is_bool($sqvqeiedrr[$sqwqwi]->infociloq)) {
                $sqvrsqdpdpqpspinqfo[] = intval($sqvqeiedrr[$sqwqwi]->infociloq);
            } else {
                $sqvrsqdpdpqpspinqfo[] = $sqvqeiedrr[$sqwqwi]->infociloq;
            }
        }

        //var_dump($sqvrsqdpdpqpspinqfo);


        $stmt = $dbh->prepare("INSERT INTO fotosvisita (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

        //var_dump($stmt);

        $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

        //var_dump($reqscsult);

        date_default_timezone_set($sqvr_date_default_timezone_set_sq);
        date_default_timezone_set($sqvr_date_default_timezone_set_sq);
        date_default_timezone_set($sqvr_date_default_timezone_set_sq);

        //var_dump($reqscsult);
        //var_dump('-----------------------insertado-------');
        //var_dump('-----------------------insertadoq---------------' . $id);
        //var_dump('-----------------------end]--------------------------------------------------------------------------');
    }
    else if ('modificar' == $sqvr_req_act_doqaction_sqvr_existerowrequestbandera) {


        if (false) {
            if (isset($objsqrowreq->datetimetoiso8601string_hwa)) {

            } else {
                header("HTTP/1.0 202 ErrorqServerq");
                echo '["el dato datetimetoiso8601string_hwa-row es obligatorio"]';
                die();
            }

            $infociloq = trim($objsqrowreq->datetimetoiso8601string_hwa);

            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'datetimetoiso8601string_hwa';
            $sqvbjo->infociloq = $infociloq;
            $sqvqeiedrr[] = $sqvbjo;


            if (isset($objsqrowreq->timezonename_hwa)) {

            } else {
                header("HTTP/1.0 202 ErrorqServerq");
                echo '["el dato timezonename_hwa-row es obligatorio"]';
                die();
            }

            $infociloq = trim($objsqrowreq->timezonename_hwa);

            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'timezonename_hwa';
            $sqvbjo->infociloq = $infociloq;
            $sqvqeiedrr[] = $sqvbjo;


            if (isset($objsqrowreq->timezoneoffset_hwa)) {

            } else {
                header("HTTP/1.0 202 ErrorqServerq");
                echo '["el dato timezoneoffset_hwa-row es obligatorio"]';
                die();
            }

            $infociloq = trim($objsqrowreq->timezoneoffset_hwa);

            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'timezoneoffset_hwa';
            $sqvbjo->infociloq = $infociloq;
            $sqvqeiedrr[] = $sqvbjo;

        }


        $sqvrsqdvbsdqsvvs = '';
        for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
            $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . '=?' . ',';
        }
        $sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

        //var_dump($sqvrsqdvbsdqsvvs);

        // $sqvrsqdpdpqpsp = '';
        // for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
        // $sqvrsqdpdpqpsp .= '?' . ',';
        // }
        // $sqvrsqdpdpqpsp = substr($sqvrsqdpdpqpsp, 0, strlen($sqvrsqdpdpqpsp) - 1);

        //var_dump($sqvrsqdpdpqpsp);

//$sqvrsqdvbsdqsvvs = '';
//for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
//    $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
//}
//$sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

        //var_dump($sqvrsqdvbsdqsvvs);

        $sqvrsqdpdpqpspinqfo = array();

        for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {

            if (is_bool($sqvqeiedrr[$sqwqwi]->infociloq)) {
                $sqvrsqdpdpqpspinqfo[] = intval($sqvqeiedrr[$sqwqwi]->infociloq);
            } else {
                $sqvrsqdpdpqpspinqfo[] = $sqvqeiedrr[$sqwqwi]->infociloq;
            }
        }

        //var_dump($sqvrsqdpdpqpspinqfo);


        // var_dump("UPDATE  usuario SET " . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

// $stmt = $dbh->prepare("UPDATE  usuario SET " . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");


        //var_dump("UPDATE  usuario SET " . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");
//
//        $sqfscvdfrowusuario['id'];
//        $objsqrowreq
//
//        $stmt = $dbh->prepare("UPDATE  usuario SET " . $sqvrsqdvbsdqsvvs
//            . "  WHERE id=?" );
//
//        $stmt = $dbh->prepare("UPDATE  fotosvisita SET " . $sqvrsqdvbsdqsvvs
//            . "  WHERE idhw=?" );

        $stmt = $dbh->prepare("UPDATE  fotosvisita SET " . $sqvrsqdvbsdqsvvs
            . "  WHERE idhw=?");

        $sqvrsqdpdpqpspinqfo[] = trim($objsqrowreq->id);

        $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

        //var_dump($reqscsult);

        //
        // $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

//    var_dump($reqscsult);
//
//
//    var_dump('-----------------------insertado-------');
//    var_dump('-----------------------insertadoq---------------' . $id);
//
//
//    var_dump('-----------------------end]--------------------------------------------------------------------------');


// var_dump($reqscsult);


    } else {

    }

}


//
//// "diagnosis":"ddddddddddd"
//// "prescription_text":"rrrrrrrrrrrrrrrrrrrr"
//// "evolution":"eeeeeeeeeeeeeeeeee"
//// "createdAt":"2022-08-30T20:57:51.322Z"
//// "updatedAt":"2022-08-30T20:57:51.322Z"
//
//$resqponseqtsqtupla->diagnosis = '';
//$resqponseqtsqtupla->prescription_text = '';
//$resqponseqtsqtupla->evolution = '';
//$resqponseqtsqtupla->createdAt = '2022-08-30T20:57:51.322Z';
//$resqponseqtsqtupla->updatedAt = '2022-08-30T20:57:51.322Z';

//
//$responsnstupla_rr = array();
//
//$responsnstupla_rr[] = $resqponseqtsqtupla;

//$token = base64_encode(sfn_get_random_sfgmkdvb()) ;

//$token = base64_encode('123') ;
//
//$sqvrwresposeout = new \stdClass();
//
//$sqvrwresposeout->responsnstupla = $responsnstupla_rr;
//
//header('Content-Type: application/json; charset=utf-8');
//
//header("HTTP/1.0 201 ok");

// echo json_encode($sqvrwresposeout);

// die();
// responsnstupla
// {"responsnstupla":[]}

// {"responsnstupla":[{}]}

// echo '{"responsnstupla":[{}]}';

//echo json_encode($sqvrwresposeout);


$respontpsqa_rr = array();

$resqponseqtsqtupla = new \stdClass();

//$resqponseqtsqtupla->id = $id_presupuesto;
//$resqponseqtsqtupla->_id = $id_presupuesto;

$resqponseqtsqtupla->_id = '0';

$respontpsqa_rr[] = $resqponseqtsqtupla;

$sqvrwresposeout = new \stdClass();

$sqvrwresposeout->responsnstupla = $respontpsqa_rr;

$sqvrsqrsqexec_rr = array();

$responsnstupla_rr = array();

$responsnstupla_rr = array();

$resqponseqtsqtupla = new \stdClass();

$resqponseqtsqtupla->id = '';
$resqponseqtsqtupla->_id = '';

$resqponseqtsqtupla->id = $objsqrowreq->id;
$resqponseqtsqtupla->_id = $objsqrowreq->id;
$resqponseqtsqtupla->idhw = $objsqrowreq->id;

$responsnstupla_rr[] = $resqponseqtsqtupla;
//
//if ('agregar' == $sqvr_req_act_doqaction) {
//
//    if($sqvr_existerowrequestbandera) {
//        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subido=1 WHERE id='" . $objsqrowreq->id . "'";
//        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subidomodificado=1 WHERE id='" . $objsqrowreq->id . "'";
//    }
//    else{
//        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subido=1 WHERE id='" . $objsqrowreq->id . "'";
//    }
//
//} else if ('modificar' == $sqvr_req_act_doqaction) {
//
//    if($sqvr_existerowrequestbandera) {
//        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subidomodificado=1 WHERE id='" . $objsqrowreq->id . "'";
//        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subido=1 WHERE id='" . $objsqrowreq->id . "'";
//    }
//    else{
//        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subidomodificado=1 WHERE id='" . $objsqrowreq->id . "'";
//    }
//}




if('agregar'==$sqvr_req_act_doqaction){

    //$sqvrsqrsqexec_rr[] = "UPDATE visitatienda SET subido=1 WHERE id='".$objsqrowreq->id."'";

    if($sqvr_existerowrequestbandera) {
        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subido=1 WHERE id='" . $objsqrowreq->id . "'";
        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subidomodificado=(subidomodificado - 1) WHERE id='" . $objsqrowreq->id . "'";
    }
    else{
        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subido=1 WHERE id='" . $objsqrowreq->id . "'";
    }

    $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subidomodificado=(subidomodificado - 1) WHERE id='" . $objsqrowreq->id . "'";

}
else if('modificar'==$sqvr_req_act_doqaction) {

    //$sqvrsqrsqexec_rr[] = "UPDATE visitatienda SET subidomodificado=1 WHERE id='".$objsqrowreq->id."'";

    if($sqvr_existerowrequestbandera) {
        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subidomodificado=(subidomodificado - 1) WHERE id='" . $objsqrowreq->id . "'";
        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subido=1 WHERE id='" . $objsqrowreq->id . "'";
    }
    else{
        $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subidomodificado=(subidomodificado - 1) WHERE id='" . $objsqrowreq->id . "'";
    }

    $sqvrsqrsqexec_rr[] = "UPDATE fotosvisita SET subido=1 WHERE id='" . $objsqrowreq->id . "'";

}





$sqvrwresposeout->sqrsqexec = $sqvrsqrsqexec_rr;

$sqvrwresposeout->sqrdata = $responsnstupla_rr;

header('Content-Type: application/json; charset=utf-8');

//header('Content-Type: application/json; charset=utf-8');

//header("HTTP/1.0 201 ok");
//header("HTTP/1.0 201 ok");

//header("HTTP/1.0 200 ok");

header("HTTP/1.0 201 ok");

echo json_encode($sqvrwresposeout);

// echo json_encode($sqvrwresposeout);

// die();
// responsnstupla
// {"responsnstupla":[]}

// {"responsnstupla":[{}]}

// echo '{"responsnstupla":[{}]}';

die();
die();
die();
die();
die();
die();
die();

