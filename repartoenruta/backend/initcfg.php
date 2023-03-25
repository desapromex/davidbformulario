<?php
// sleep(1);

//date_default_timezone_set('UTC');
//$sqvr_date_default_timezone_set_sq='UTC';
$sqvr_date_default_timezone_set_sq='America/Mexico_City';
date_default_timezone_set($sqvr_date_default_timezone_set_sq);
date_default_timezone_set($sqvr_date_default_timezone_set_sq);
date_default_timezone_set($sqvr_date_default_timezone_set_sq);

// Open the timezone of America/Chicago
//$timezone = timezone_open("America/Chicago");

$sqvr_timezone = timezone_open($sqvr_date_default_timezone_set_sq);

// Displaying the offset of America/Chicago and Europe/Amsterdam
//Europe/Amsterdam
$datetime_eur = date_create("now", timezone_open("UTC"));

$sqvr_timezone_offset_get_sq =timezone_offset_get($sqvr_timezone, $datetime_eur);
//var_dump($sqvr_timezone_offset_get_sq);//int(-18000)
//var_dump($datetime_eur);
//var_dump($sqvr_timezone_offset_get_sq);
//var_dump(date('Z'));
//var_dump(date('Z'));
//var_dump(date('P'));
$servidorfotografiasurlapi='https://riandamdb7.buysaleclub.com/rianda_md_apiv1b/';
function fn_get_serverwicharchivos(){
    //  $servidorfotografiasurlapi='https://riandamdb7.buysaleclub.com/rianda_md_apiv1b/';
    return 'https://riandamdb7.buysaleclub.com/rianda_md_apiv1b/';
}
global $sqvrsalthash;
$sqvrsalthash='salt79536wfh864wfh7547wfj7356';
try {
    $sqvqcharset='utf8';
    //"mysql:host=$host;dbname=$db;charset=utf8mb4"
    //$pdo = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', $user, $password);
    //PDO set_charset

//$dbh->exec("set names utf8mb4");
//$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//
//$dbh->exec('SET NAMES utf8');


    /*
    /* postgresql://desapromex:ENTER PASSWORD SECRET@free-tier.gcp-us-central1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301 */

    /*// "pgsql:host=".$shostpg.";port=26257;user='postgre'; password='123456'; options='--cluster=boring-rhino-6301';dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt"


    // "pgsql:host=".$shostpg.";port=26257;user='postgre'; password='123456'; options='--cluster=boring-rhino-6301';dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/sq7037984335677_root.key;sslcert=certs/sq7037984335677_root.crt"*/
    /*
    "pgsql:host=".$shostpg
    .";port=26257;user='".$svserpg
    ."'; password='Ed125kJjXkmJMXkC-NtWeQ'; options='--cluster=boring-rhino-6301'"
    .";dbname='".$sqvdbname."'"

    .";sslmode=require;sslrootcert=". 'certs/sq7037984335677_root.crt'
    .";sslkey=". 'certs/sq7037984335677_root.key'
    .";sslcert=". 'certs/sq7037984335677_root.crt'
    .""
    */
    /*
    // 'pgsql:host='.$shostpg.';port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt'
     */
//
//    $dbname='repartoenruta';
//    $host='localhost';
//    $port='3306';
//    $dbuser='root7';
//    $dbpasswd='00000000';
//	$sqvrbrsql_details = array(
//		'user' => $dbuser,
//		'pass' => $dbpasswd,
//		'db'   => $dbname,
//		'host' => $host,
//		'port' => $port
//	);

	// $dbname='repartoenruta';
    // $host='localhost';
    // $port='3306';
    // $dbuser='root7';
    // $dbpasswd='00000000';
    // $sqvrbrsql_details = array(
        // 'user' => $dbuser,
        // 'pass' => $dbpasswd,
        // 'db'   => $dbname,
        // 'host' => $host,
        // 'port' => $port
    // );

    // $dbname='site84457wdgbuys_repartoenruta';
    // $host='localhost';
    // $port='3306';
    // $dbuser='site84457wdgbuys_usuauno';
    // $dbpasswd='b7533rfgh867743wqdbn9763sgh85eaavbbn84rfnm8433dbmiiyghiohcw83f';
	// $sqvrbrsql_details = array(
		// 'user' => $dbuser,
		// 'pass' => $dbpasswd,
		// 'db'   => $dbname,
		// 'host' => $host,
		// 'port' => $port
	// );

    $dbname='tesoteo1b';
    $host='localhost';
    $port='3306';
    $dbuser='usorebroaudboot';
    $dbpasswd='tswdg703wedgj9egh854ty74wdfh86erfh865ghwdb7q';
	$sqvrbrsql_details = array(
		'user' => $dbuser,
		'pass' => $dbpasswd,
		'db'   => $dbname,
		'host' => $host,
		'port' => $port
	);

    $dbh = new PDO(
        'mysql:host='.$host.';port='.$port.';dbname='.$dbname.';charset='.$sqvqcharset, ''.$dbuser, ''.$dbpasswd,  array(
        PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => true,
        /*PDO::ATTR_PERSISTENT => true,*/
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_EMULATE_PREPARES => false,
    ));

    //$dbh = new PDO( array( PDO::ATTR_PERSISTENT => false));

    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->exec("set names ".$sqvqcharset);
    $dbh->exec("SET NAMES ".$sqvqcharset);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq ( id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL , nombre TEXT  NOT NULL )");

    // $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq ( id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL , nombre TEXT  NOT NULL )");

    // $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq ( id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL , nombre TEXT  NOT NULL )");

    // $dbh->exec("CREATE INDEX ON tableqwdsq (id);");

    // $dbh->exec('INSERT INTO accounts (id, nombre) VALUES (1, 'w1000'), (2, 'q250')');

    // $dbh->exec("INSERT INTO tableqwdsq ( id,nombre) VALUES ( 1,'w1000'), ( 2,'q250')");

    // $dbh->exec("INSERT INTO tableqwdsq ( id,nombre) VALUES ( '_1','w1000'), ( '2:','q250')");
// $dbh->exec("INSERT INTO tableqwdsq ( id,nombre) VALUES ( '_1','w1000')");
// $dbh->exec("INSERT INTO tableqwdsq ( id,nombre) VALUES ( '2-','w1000')");
// $dbh->exec("INSERT INTO tableqwdsq ( id,nombre) VALUES ( '".fn_generarlargoidvariable()."','w1000')");

// var_dump('sq7');

    // foreach ($dbh->query('SELECT id, nombre FROM tableqwdsq') as $row) {
    // print $row['id'] . ': ' . $row['nombre'] . "\r\n";
    // }

// var_dump( fn_generarlargoidvariable() );

    // $dbh->exec('INSERT INTO accounts (id, balance) VALUES (1, 1000), (2, 250)');

    // print "Account balances:\r\n";
    // foreach ($dbh->query('SELECT id, balance FROM accounts') as $row) {
    // print $row['id'] . ': ' . $row['balance'] . "\r\n";
    // }




//$sql = "SET time_zone = 'Europe/Helsinki'";
//$sql = "SET time_zone = 'UTC'";
//$qresultq = $dbh->query($sql);
//var_dump($qresultq);
//foreach ($qresultq as $row) {
//
//    var_dump($row);
//    print $row['name'] . "\t";
//    print $row['color'] . "\t";
//    print $row['calories'] . "\n";
//}

    $sql = "SET time_zone = '+00:00'";
    $qresultq = $dbh->query($sql);
    //var_dump($qresultq);
//    foreach ($qresultq as $row) {
//
//        var_dump($row);
//        print $row['name'] . "\t";
//        print $row['color'] . "\t";
//        print $row['calories'] . "\n";
//    }

    $sql = "SET @@session.time_zone = '+00:00'";
    $qresultq = $dbh->query($sql);
    //var_dump($qresultq);
//    foreach ($qresultq as $row) {
//
//        var_dump($row);
//        print $row['name'] . "\t";
//        print $row['color'] . "\t";
//        print $row['calories'] . "\n";
//    }

    $dbh->exec("SET time_zone = '+00:00'");
    $dbh->exec("SET @@session.time_zone = '+00:00'");

} catch (Exception $e) {
    print $e->getMessage() . "\r\n";
    sleep(1);
    exit(1);
    die(1);
}

//
//
//
//
//$sqsddvvbbggtime=time();
//
//$segiuioundo=date("s",$sqsddvvbbggtime);
//
//$miniuto=date("i",$sqsddvvbbggtime);
//
//$hororoia=date("H",$sqsddvvbbggtime);
//
//$diaiaia=date("d",$sqsddvvbbggtime);
//$meies=date("m",$sqsddvvbbggtime);
//$anioioio=date("Y",$sqsddvvbbggtime);
//
//
//$sqdvbmicro_date = microtime(false);
//$sqdvvdate_array = explode(" ",$sqdvbmicro_date);
//$date = date("Y-m-d H:i:s",$sqdvvdate_array[1]);
////echo "Date: $date:" . $sqdvvdate_array[0]."<br>";
//
////string(21) "0.93050300 1663515763"
//
//var_dump($sqdvbmicro_date);
//$milisiesiecons=$sqdvvdate_array[0];
//
//
//$updatedAt = $anioioio.'-'.$meies.'-'.$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';
//
//
//
//$mystring = $sqdvbmicro_date;
//$findme   = '.';
//$pos = strpos($mystring, $findme);
//
//// Nótese el uso de ===. Puesto que == simple no funcionará como se espera
//// porque la posición de 'a' está en el 1° (primer) caracter.
//if ($pos === false) {
//
//}
//else {
//
//    $sqdvbmicro_date=substr($sqdvbmicro_date,$pos,strlen($sqdvbmicro_date)-$pos);
//    $sqdvbmicro_date=str_ireplace('.','',$sqdvbmicro_date);
//}
//
//
//var_dump($sqdvbmicro_date);
//
//
//$sqdvbmicro_date=str_ireplace(' ','',$sqdvbmicro_date);
//
//var_dump($sqdvbmicro_date);
//
//
//$sqvrsqdcqcvb=substr($sqdvbmicro_date,0,3);
//
//var_dump($sqvrsqdcqcvb);
//
//die();
//


//
//UTC
//
//date_default_timezone_set('America/Los_Angeles');
//
//$script_tz = date_default_timezone_get();
//
//if (strcmp($script_tz, ini_get('date.timezone'))){
//    echo 'Script timezone differs from ini-set timezone.';
//} else {
//    echo 'Script timezone and ini-set timezone match.';
//}
//



//
////$script_tz = date_default_timezone_get();
////
////if (strcmp($script_tz, ini_get('date.timezone'))){
////    echo 'Script timezone differs from ini-set timezone.';
////} else {
////    echo 'Script timezone and ini-set timezone match.';
////}
//
//
//
//
////phpinfo();
//
////C:\xampp\htdocs\riandamdapi
//// desapromex
//// Ed125kJjXkmJMXkC-NtWeQ
//
//// postgresql://desapromex:ENTER PASSWORD SECRET@free-tier.gcp-us-central1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301
//// 'pgsql:host=localhost;port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt'
//
//// 'pgsql:host='.$shostpg.';port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt',
//// 'pgsql:host='.$shostpg.';port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt',
//
//// 'pgsql:host='.$shostpg.';port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt'
//
//// 'pgsql:host='.$shostpg.';port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt'
//
//// :26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301
//
//$sqvdbname='defaultdb';
//$svserpg='desapromex';
//$spwdpg='123';
//$shostpg='desapromex:'.$spwdpg.'@free-tier.gcp-us-central1.cockroachlabs.cloud';
//
//$shostpg='postgresql://desapromex:'.$spwdpg.'@free-tier.gcp-us-central1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301';
//
//$shostpg='desapromex:'.$spwdpg.'@free-tier.gcp-us-central1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301';
//
//$shostpg='free-tier.gcp-us-central1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301';
//
//$shostpg='free-tier.gcp-us-central1.cockroachlabs.cloud';
//
//$sqvqcharset='utf8';
//
//try {
//
//    //"mysql:host=$host;dbname=$db;charset=utf8mb4"
//    //$pdo = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', $user, $password);
//    //PDO set_charset
//
////$dbh->exec("set names utf8mb4");
////$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
////
////$dbh->exec('SET NAMES utf8');
//
//    $dbh = new PDO(
//    /* postgresql://desapromex:ENTER PASSWORD SECRET@free-tier.gcp-us-central1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301 */
//
//    /*// "pgsql:host=".$shostpg.";port=26257;user='postgre'; password='123456'; options='--cluster=boring-rhino-6301';dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt"
//
//
//    // "pgsql:host=".$shostpg.";port=26257;user='postgre'; password='123456'; options='--cluster=boring-rhino-6301';dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/sq7037984335677_root.key;sslcert=certs/sq7037984335677_root.crt"*/
//
//        "pgsql:host=".$shostpg
//        .";port=26257;user='".$svserpg
//        ."'; password='Ed125kJjXkmJMXkC-NtWeQ'; options='--cluster=boring-rhino-6301'"
//        .";dbname='".$sqvdbname."'"
//
//        .";sslmode=require;sslrootcert=". 'certs/sq7037984335677_root.crt'
//        .";sslkey=". 'certs/sq7037984335677_root.key'
//        .";sslcert=". 'certs/sq7037984335677_root.crt'
//        .""
//        /*
//        // 'pgsql:host='.$shostpg.';port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt'
//         */
//        ,$svserpg,'Ed125kJjXkmJMXkC-NtWeQ',  array(
//        PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_EMULATE_PREPARES => true,
//        PDO::ATTR_PERSISTENT => true,
//        PDO::ATTR_EMULATE_PREPARES => false,
//    ));
//    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//    $dbh->exec("set names ".$sqvqcharset);
//    $dbh->exec("SET NAMES ".$sqvqcharset);
//    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//
//    // $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq ( id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL , nombre TEXT  NOT NULL )");
//
//    // $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq ( id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL , nombre TEXT  NOT NULL )");
//
//    // $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq ( id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL , nombre TEXT  NOT NULL )");
//
//    // $dbh->exec("CREATE INDEX ON tableqwdsq (id);");
//
//    // $dbh->exec('INSERT INTO accounts (id, nombre) VALUES (1, 'w1000'), (2, 'q250')');
//
//    // $dbh->exec("INSERT INTO tableqwdsq ( id,nombre) VALUES ( 1,'w1000'), ( 2,'q250')");
//
//    // $dbh->exec("INSERT INTO tableqwdsq ( id,nombre) VALUES ( '_1','w1000'), ( '2:','q250')");
//// $dbh->exec("INSERT INTO tableqwdsq ( id,nombre) VALUES ( '_1','w1000')");
//// $dbh->exec("INSERT INTO tableqwdsq ( id,nombre) VALUES ( '2-','w1000')");
//// $dbh->exec("INSERT INTO tableqwdsq ( id,nombre) VALUES ( '".fn_generarlargoidvariable()."','w1000')");
//
//// var_dump('sq7');
//
//    // foreach ($dbh->query('SELECT id, nombre FROM tableqwdsq') as $row) {
//    // print $row['id'] . ': ' . $row['nombre'] . "\r\n";
//    // }
//
//// var_dump( fn_generarlargoidvariable() );
//
//    // $dbh->exec('INSERT INTO accounts (id, balance) VALUES (1, 1000), (2, 250)');
//
//    // print "Account balances:\r\n";
//    // foreach ($dbh->query('SELECT id, balance FROM accounts') as $row) {
//    // print $row['id'] . ': ' . $row['balance'] . "\r\n";
//    // }
//
//} catch (Exception $e) {
//    print $e->getMessage() . "\r\n";
//    sleep(1);
//    exit(1);
//    die(1);
//}













//phpinfo();

//C:\xampp\htdocs\riandamdapi
// desapromex
// Ed125kJjXkmJMXkC-NtWeQ

// postgresql://desapromex:ENTER PASSWORD SECRET@free-tier.gcp-us-central1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301
// 'pgsql:host=localhost;port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt'

// 'pgsql:host='.$shostpg.';port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt',
// 'pgsql:host='.$shostpg.';port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt',

// 'pgsql:host='.$shostpg.';port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt'

// 'pgsql:host='.$shostpg.';port=26257;dbname=bank;sslmode=require;sslrootcert=certs/ca.crt;sslkey=certs/client.maxroach.key;sslcert=certs/client.maxroach.crt'

// :26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301
//
//$sqvdbname='defaultdb';
//$svserpg='desapromex';
//$spwdpg='123';
//$shostpg='desapromex:'.$spwdpg.'@free-tier.gcp-us-central1.cockroachlabs.cloud';
//
//$shostpg='postgresql://desapromex:'.$spwdpg.'@free-tier.gcp-us-central1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301';
//
//$shostpg='desapromex:'.$spwdpg.'@free-tier.gcp-us-central1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301';
//
//$shostpg='free-tier.gcp-us-central1.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&options=--cluster%3Dboring-rhino-6301';
//
//$shostpg='free-tier.gcp-us-central1.cockroachlabs.cloud';
//
//$sqvqcharset='utf8';













function fn_generarlargoidvariable(){
    $nbjsdbnsvb = '';
    $sqvrcrotimev = microtime(false);
    $tvrwdhn =explode(" ", $sqvrcrotimev);

    $sqwqwsvvdcvb= new \stdClass();
    $sqwqwsvvdcvb->crotimeo = $sqvrcrotimev;
    $sqwqwsvvdcvb->crotimepartex = $tvrwdhn;

    //var_dump($tvrwdhn);
    for($w=0;$w <count($tvrwdhn);$w++){
        //var_dump($w);
        $nbjsdbnsvb=$tvrwdhn[$w] .'_'.$nbjsdbnsvb;
    }


    //var_dump($nbjsdbnsvb);

    //var_dump( date('m/d/Y H:i:s', $tvrwdhn[1]));


    $nbjsdbnsvbqv = '';
    $tvrwdhn =explode(".", $nbjsdbnsvb);
    for($w=0;$w <count($tvrwdhn);$w++){
        //var_dump($w);
        $nbjsdbnsvbqv=$nbjsdbnsvbqv .'_'. $tvrwdhn[$w] ;
    }

    //var_dump($nbjsdbnsvbqv);

    $sdfbwdfggdfgb = substr($nbjsdbnsvbqv,strlen($nbjsdbnsvbqv)-1,1);
    //var_dump($sdfbwdfggdfgb);
    if($sdfbwdfggdfgb != '_'){
    }
    else{
        //var_dump($sdfbwdfggdfgb);

        //var_dump($sdfbwdfggdfgb);

        $sdfbwdfggdfgb = substr($nbjsdbnsvbqv,0,strlen($nbjsdbnsvbqv)-1);
        //var_dump($sdfbwdfggdfgb);

    }
    //var_dump($sdfbwdfggdfgb);


    //var_dump(rand(48,57).'.'.rand(48,57).'_'.$sdfbwdfggdfgb);


    $sdfbwdfggdfgbq = substr($sdfbwdfggdfgb,0,1);

    if($sdfbwdfggdfgbq != '_'){
    }
    else{
        //var_dump($sdfbwdfggdfgbq);

        //var_dump($sdfbwdfggdfgbq);

        $sdfbwdfggdfgb = substr($sdfbwdfggdfgb,1,strlen($sdfbwdfggdfgb));
        //var_dump($sdfbwdfggdfgb);

    }




    //var_dump(rand(0,9));
// 48 57
// 65,90
// 65,93
// 28
// 10
    //var_dump(rand(48,57));

    //var_dump(rand(48,57));
// 10,578,455,953,408
// 14
// 123,123,123,123,123,123,1
// 123,123,123,123,123,123,123,123
// 123,123,123,123,123,123,123,123,123,123

//    var_dump(rand(48,57).'.'.rand(48,57).'_'.$nbjsdbnsvb);
//    var_dump(rand(48,57).'.'.rand(48,57).'_'.$nbjsdbnsvbqv);
//    var_dump(rand(48,57).'.'.rand(48,57).'_'.$sdfbwdfggdfgb);
//
//    var_dump(rand(48,57).'.'.rand(48,57).'_'.$sdfbwdfggdfgb);
//
//    var_dump(rand(48,57).'.'.rand(48,57).'_'.$sdfbwdfggdfgb);

    //var_dump(rand(48,57).'.'.rand(48,57).'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57));
// rand(48,57)

//	$nbjsdbnsvbqv = '';
    $tvrwdhnsqw =explode("_", $sdfbwdfggdfgb);
    $tvrwdhnsqw = $tvrwdhnsqw[0];

    $tvrwdhnsqw = substr($tvrwdhnsqw,0,strlen($tvrwdhnsqw)-(1+3));

    $tvrwdhnsqw = $tvrwdhnsqw.rand(11,50).rand(11,97);

// var_dump(rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57));

// var_dump(rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57));

// $sccbbnbdbb = rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);

// $sccbbnbdbb = chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);

// $sccbbnbdbb = '1'.chr(rand(65,93)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);
//
//$sccbbnbdbb = '1'.chr(rand(65,90)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);



    //$sccbbnbdbb = '1'.chr(rand(65,90)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);
//
//    $sccbbnbdbb = '1'.chr(rand(65,90)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99)
//        .    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57)
//        .'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);

//
//    $sccbbnbdbb = '1'.chr(rand(65,90)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99)
//        .    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb
//        .'_0_'
//        .rand(48,57).rand(48,57).rand(48,57)
//        //.rand(48,57)
//        .'_0_'.rand(48,57)
//        .rand(48,57).rand(48,57).rand(48,57);
//
//
//    $sccbbnbdbb = '1'.chr(rand(65,90)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99)
//        .    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb
//        .'_0_'
//        .rand(48,57).rand(48,57).rand(48,57)
//        //.rand(48,57)
//        .'_0_'.rand(48,57)
//        .rand(48,57).rand(48,57).rand(48,57);



//
//    $sccbbnbdbb = '1'.chr(rand(65,90)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);
//
//
//
//    $sccbbnbdbb = $sccbbnbdbb.'_0_';
//
//    $sccbbnbdbb = $sccbbnbdbb.;
//
//    $sccbbnbdbb = $sccbbnbdbb.'_0_'.rand(48,57);
//
//    $sccbbnbdbb = $sccbbnbdbb.rand(48,57).rand(48,57).rand(48,57);








//
//    $sccbbnbdbb = '1'
//$sccbbnbdbb = $sccbbnbdbb . chr(rand(65,90))
//$sccbbnbdbb = $sccbbnbdbb . '_'
//$sccbbnbdbb = $sccbbnbdbb .  rand(16,16)
//$sccbbnbdbb = $sccbbnbdbb . rand(61,61)
//$sccbbnbdbb = $sccbbnbdbb . rand(20,20)
//$sccbbnbdbb = $sccbbnbdbb . rand(54,59)
//$sccbbnbdbb = $sccbbnbdbb . rand(10,99)
//$sccbbnbdbb = $sccbbnbdbb .     '_'
//$sccbbnbdbb = $sccbbnbdbb . $tvrwdhnsqw
//$sccbbnbdbb = $sccbbnbdbb . '_'
//$sccbbnbdbb = $sccbbnbdbb . $sdfbwdfggdfgb
//$sccbbnbdbb = $sccbbnbdbb . '_0_'
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . '_0_'
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57);
//
//
//
//    $sccbbnbdbb = '1';
//$sccbbnbdbb = $sccbbnbdbb . chr(rand(65,90))
//$sccbbnbdbb = $sccbbnbdbb . '_'
//$sccbbnbdbb = $sccbbnbdbb .  rand(16,16)
//$sccbbnbdbb = $sccbbnbdbb . rand(61,61)
//$sccbbnbdbb = $sccbbnbdbb . rand(20,20)
//$sccbbnbdbb = $sccbbnbdbb . rand(54,59)
//$sccbbnbdbb = $sccbbnbdbb . rand(10,99)
//$sccbbnbdbb = $sccbbnbdbb .     '_'
//$sccbbnbdbb = $sccbbnbdbb . $tvrwdhnsqw
//$sccbbnbdbb = $sccbbnbdbb . '_'
//$sccbbnbdbb = $sccbbnbdbb . $sdfbwdfggdfgb
//$sccbbnbdbb = $sccbbnbdbb . '_0_'
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . '_0_'
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57)
//$sccbbnbdbb = $sccbbnbdbb . rand(48,57);

//1_2_1661205289_1663342823_1663341976_0_80639600_0_52574850_0_54494951
//1_7_1661202710_1663342363_1663342021_0_98537500_0_57504955_0_51525050
//object(stdClass)#4 (3) {
//["crotimeo"]=>
//string(21) "0.98537500 1663342021"
//["crotimepartex"]=>
//array(2) {
//    [0]=>
//string(10) "0.98537500"
//    [1]=>
//string(10) "1663342021"
//}
//["recgresao_fn_generarlargoidvariable"]=>
//string(69) "1_7_1661202710_1663342363_1663342021_0_98537500_0_57504955_0_51525050"
//}








    $sqwqwsvvdcvb->crotimeo = $sqvrcrotimev;
    $sqwqwsvvdcvb->crotimepartex = $tvrwdhn;


    $sqwsddvb = explode(' ',$sqwqwsvvdcvb->crotimeo);

    $sqwsddvb0 = $sqwsddvb[0];

    $sqwsddvb1 = $sqwsddvb[1];

    $sqvsqcvwvvvswdcvv0 = str_ireplace(' ','_',$sqwsddvb0);

    $sqvsqcvwvvvswdcvv0 = str_ireplace('.','_',$sqvsqcvwvvvswdcvv0);


    $sqvsqcvwvvvswdcvv1 = str_ireplace(' ','_',$sqwsddvb1);

    $sqvsqcvwvvvswdcvv1 = str_ireplace('.','_',$sqvsqcvwvvvswdcvv1);


    $sqvsqcvwvvvswdcvv2='';
    $sqvsqcvwvvvswdcvv3='';
    $sqwqwsvvdcvb->crotimesubparteq1=$sqvsqcvwvvvswdcvv1;
    $sqwqwsvvdcvb->crotimesubparteq0=$sqvsqcvwvvvswdcvv0;
    $sqwqwsvvdcvb->crotimesubparteq2=$sqvsqcvwvvvswdcvv2;
    $sqwqwsvvdcvb->crotimesubparteq3=$sqvsqcvwvvvswdcvv3;


    $sqvscbrnd='';
    $sqvscbrnd=$sqvscbrnd.rand(100,999);
    $sqvscbrnd=$sqvscbrnd.rand(100,999);
    $sqvscbrnd=$sqvscbrnd.rand(100,999);

    $sqwqwsvvdcvb->crotimesubparteqrndr=$sqvscbrnd;
    $sqwqwsvvdcvb->crotimesubparteqrndr=$sqvscbrnd;

    $sccbbnbdbb = '';
    $sccbbnbdbb = $sccbbnbdbb .str_replace('_','',$sqvsqcvwvvvswdcvv1).str_replace('_','',$sqvsqcvwvvvswdcvv0);
    $sccbbnbdbb = $sccbbnbdbb .$sqvscbrnd;
    $sccbbnbdbb = $sccbbnbdbb .'_';
    $sccbbnbdbb = $sccbbnbdbb . $sqvsqcvwvvvswdcvv1.'_'.$sqvsqcvwvvvswdcvv0;
    $sccbbnbdbb = $sccbbnbdbb .'_';//notocar
    $sccbbnbdbb = $sccbbnbdbb .'1';//notocar
    $sccbbnbdbb = $sccbbnbdbb .'_';//notocar
    $sccbbnbdbb = $sccbbnbdbb .$sqvscbrnd;
    $sccbbnbdbb = $sccbbnbdbb .'_';
    $sccbbnbdbb = $sccbbnbdbb .rand(1,9);
    $sccbbnbdbb = $sccbbnbdbb . '_';
    $sccbbnbdbb = $sccbbnbdbb .  rand(1,9);
    //$sccbbnbdbb = $sccbbnbdbb .     '_';
    //$sccbbnbdbb = $sccbbnbdbb . $tvrwdhnsqw;
    //$sccbbnbdbb = $sccbbnbdbb . '_';
    //$sccbbnbdbb = $sccbbnbdbb . $sdfbwdfggdfgb;
    $sccbbnbdbb = $sccbbnbdbb . '_0_';
    $sccbbnbdbb = $sccbbnbdbb . rand(1,9);
    $sccbbnbdbb = $sccbbnbdbb . '_0_';
    $sccbbnbdbb = $sccbbnbdbb . rand(100,999);
    $sccbbnbdbb = $sccbbnbdbb . '_';
    $sccbbnbdbb = $sccbbnbdbb . rand(100,999);
//    $sccbbnbdbb = $sccbbnbdbb . rand(10,19);
//    $sccbbnbdbb = $sccbbnbdbb . rand(20,29);
//    $sccbbnbdbb = $sccbbnbdbb . rand(30,39);
//    $sccbbnbdbb = $sccbbnbdbb . rand(40,49);
//    $sccbbnbdbb = $sccbbnbdbb . rand(50,59);
//    $sccbbnbdbb = $sccbbnbdbb . rand(60,69);
//    $sccbbnbdbb = $sccbbnbdbb . rand(70,79);
//    $sccbbnbdbb = $sccbbnbdbb . rand(48,57);
//    $sccbbnbdbb = $sccbbnbdbb . rand(48,57);
//    $sccbbnbdbb = $sccbbnbdbb . rand(48,57);
//    $sccbbnbdbb = $sccbbnbdbb . rand(48,57);



//
//    var_dump($sccbbnbdbb);
//
//
//    var_dump($sccbbnbdbb);
//
//    var_dump($sccbbnbdbb);


    $sqwqwsvvdcvb->recgresao_fn_generarlargoidvariable = $sccbbnbdbb;
    //return json_encode($sqwqwsvvdcvb);
    return $sqwqwsvvdcvb;
}






function fn_obj_recetaconsultamedica($sqvqrow){
    $resqponseqtsqtupla = new \stdClass();
	
// $sqvqrow['id']
// $sqvqrow['prescription_picrutafoto1']
// $sqvqrow['serverwicharchivos']

// id_usuario___doctor
// id_usuario___paciente
// requested_medications

// sqvqrow
// sqfscvdfrowusuario




    // $resqponseqtsqtupla->usuario_perfilfoto1 = '';
	// if(isset($sqfscvdfrowusuario['rutafoto1'])){
		// if($sqfscvdfrowusuario['rutafoto1'] != null){
		// $resqponseqtsqtupla->usuario_perfilfoto1 = $servidorfotografiasurlapi.''.$sqfscvdfrowusuario['rutafoto1'];
		// }
		// else{
		// }
	// }






//$resqponseqtsqtupla->id = "".'w'.$pagieina.'-'.time()."-_dfbb"."";
//
//$resqponseqtsqtupla->id = "".'w'.$pagieina.'-'.'time()'."-_dfbb"."";
//$resqponseqtsqtupla->_id = $resqponseqtsqtupla->id;


    // $resqponseqtsqtupla->id = "".'w'.$pagieina.'---'.$sdvboter.'-_---time()'."-_dfbb"."";
    // $resqponseqtsqtupla->_id = $resqponseqtsqtupla->id;

$resqponseqtsqtupla->id= $sqvqrow['id'];
$resqponseqtsqtupla->_id= $sqvqrow['id'];
// requested_medications

// 1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261
// {"crotimeo":"0.20378800 1663978520","crotimepartex":["1663978520_0","20378800_"],"crotimesubparteq1":"1663978520","crotimesubparteq0":"0_20378800","crotimesubparteq2":"","crotimesubparteq3":"","crotimesubparteqrndr":"600736709","recgresao_fn_generarlargoidvariable":"1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261"}
// idcrotimemocrosegs
// seudofolio=

    // this.seudofolio,
    // this.seudofecha,
    // this.seudohora,
	
	$idcrotimemocrosegs=json_decode($sqvqrow['idcrotimemocrosegs']);
	
	
	$sqssdvvdvv=explode('_',$idcrotimemocrosegs->crotimesubparteq0);
	$sqscvdv=$sqssdvvdvv[1];
	$sqscvdv=substr($sqscvdv,0,4);
	
	
 $resqponseqtsqtupla->seudofolio= $idcrotimemocrosegs->crotimesubparteq1.''.$sqscvdv;

$resqponseqtsqtupla->seudofecha= date('d/M/Y H:i',intval($idcrotimemocrosegs->crotimesubparteq1));
//$resqponseqtsqtupla->seudohora= $sqvqrow['id'];

$resqponseqtsqtupla->seudohora=date('H:i',intval($idcrotimemocrosegs->crotimesubparteq1));

$resqponseqtsqtupla->prescription_urlfoto1= $sqvqrow['serverwicharchivos'].'/'.$sqvqrow['prescription_picrutafoto1'];




  // http.get('https://www.gravatar.com/avatar/e944138e1114aefe4b08848a46465589').then((response) {
    // Uint8List bodyBytes = response.bodyBytes;
    // File('my_image.jpg').writeAsBytes(bodyBytes);
  // });
// d_o_c_t_o_r_sqscrenp_recetaspacientesmiospacientes_State_screeen_Secccion_editorcrud_consulta_SbScrenSb_State_Screen_imageSelected_foto1
// d_o_c_t_o_r_sqscrenp_recetaspacientesmiospacientes_State_screeen_Secccion_editorcrud_consulta_SbScrenSb_State_Screen_prescription_controler
// d_o_c_t_o_r_sqscrenp_recetaspacientesmiospacientes_State_screeen_Secccion_editorcrud_consulta_Fcntion_fn_get_reqest_read_consulta




// "diagnosis":"ddddddddddd"
// "prescription_text":"rrrrrrrrrrrrrrrrrrrr"
// "evolution":"eeeeeeeeeeeeeeeeee"
// "createdAt":"2022-08-30T20:57:51.322Z"
// "updatedAt":"2022-08-30T20:57:51.322Z"

    $resqponseqtsqtupla->diagnosis = $sqvqrow['diagnosis'];
    $resqponseqtsqtupla->prescription_text = $sqvqrow['prescription_text'];
    $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];



    $resqponseqtsqtupla->id_order = $sqvqrow['id_pedido'];

    // $resqponseqtsqtupla->createdAt = '2022-08-30T20:57:51.312Z';
    // $resqponseqtsqtupla->updatedAt = '2022-08-30T20:57:51.310Z';

    $resqponseqtsqtupla->createdAt = '2022-08-30T20:57:51.312Z';
    $resqponseqtsqtupla->updatedAt = '2022-08-30T20:57:51.310Z';


    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "269c1981-79c2-46ae-a4af-4f2e64a73213.webp";
    $sqvr_sqpicture->type = "image";

    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.584Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.587Z';


    $resqponseqtsqtupla->prescription_picture = $sqvr_sqpicture;

// "prescription_picture":{"_id":"630e79cfa7295547ccf005a0"
// "name":"269c1981-79c2-46ae-a4af-4f2e64a73213.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:57:51.284Z"
// "updatedAt":"2022-08-30T20:57:51.284Z"}



    $sqvr_sqv_patient = new \stdClass();
    $sqvr_sqv_patient->id = '';
    $sqvr_sqv_patient->_id = '';

// "_id":"630e782ca7295547ccf003dc"

    $sqvr_sqv_patient->accept_doc1 = true;
    $sqvr_sqv_patient->accept_doc2 = true;
    $sqvr_sqv_patient->accept_doc3 = true;
    $sqvr_sqv_patient->accept_doc4 = true;
    $sqvr_sqv_patient->accept_doc5 = true;
    $sqvr_sqv_patient->accept_doc6 = true;

// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true

// "name":"Pacienteeunooo"
// "email":"sdfandroid01@gmail.com"
// "createdAt":"2022-08-30T20:50:52.198Z"
// "updatedAt":"2022-08-30T20:57:48.287Z"

    $sqvr_sqv_patient->name = 'Pacienteeunooo';
    $sqvr_sqv_patient->email = 'sdfandroid01@gmail.com';
    $sqvr_sqv_patient->createdAt = '2022-08-30T20:50:52.654Z';
    $sqvr_sqv_patient->updatedAt = '2022-08-30T20:57:48.653Z';

// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"

// "enabled":"yes"
// "phone":"1111111111"
// "verified_doctor":"no"
// "platform_one_signal":"android"

    $sqvr_sqv_patient->birthdate = '1990-08-07T00:00:00.000Z';
    $sqvr_sqv_patient->dial_code = '+1';

    $sqvr_sqv_patient->enabled = 'yes';
    $sqvr_sqv_patient->phone = '1111111111';
    $sqvr_sqv_patient->verified_doctor = 'no';
    $sqvr_sqv_patient->platform_one_signal = 'android';


    $sqvr_sq_roles = array();

    $sqvr_sq_rolrool = new \stdClass();
    $sqvr_sq_rolrool->id = '';
    $sqvr_sq_rolrool->_id = '';

    $sqvr_sq_rolrool->name = 'client';

    $sqvr_sq_rolrool->createdAt = '2022-08-30T20:57:51.443Z';
    $sqvr_sq_rolrool->updatedAt = '2022-08-30T20:57:51.444Z';

    $sqvr_sq_roles[] = $sqvr_sq_rolrool;


    $sqvr_sqv_patient->roles = $sqvr_sq_roles;


    $sqvr_sq_location = new \stdClass();
// $sqvr_sq_location->id = '';
// $sqvr_sq_location->_id = '';

    $sqvr_sq_location->type = 'Point';

    $sqvr_sq_coordinatesrr = array();
    $sqvr_sq_coordinatesrr[] =-99.1317833;
    $sqvr_sq_coordinatesrr[] =19.4357167;

    $sqvr_sq_location->coordinates = $sqvr_sq_coordinatesrr;


    $sqvr_sqv_patient->location = $sqvr_sq_location;


// "patient":{
    // "location":{"type":"Point"
    // "coordinates":[-99.1317833
    // 19.4357167]}

    // "roles":[{"_id":"630e2f295b9b5330f043b13a"
    // "name":"client"
    // "createdAt":"2022-08-30T15:39:21.349Z"
    // "updatedAt":"2022-08-30T15:39:21.349Z"}]

    // "assigned_orders":[]

    // "picture":{"_id":"630e7927a7295547ccf00493"
    // "name":"3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp"
    // "type":"image"
    // "createdAt":"2022-08-30T20:55:03.045Z"
    // "updatedAt":"2022-08-30T20:55:03.045Z"}
// }


    $sqvr_sq_assigned_orders = array();

    $sqvr_sqv_patient->assigned_orders = $sqvr_sq_assigned_orders;


    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
	
	
//$resqponseqtsqtupla->prescription_urlfoto1= $sqvqrow['serverwicharchivos'].'/'.$sqvqrow['prescription_picrutafoto1'];

    $sqvr_sqpicture->name = $resqponseqtsqtupla->prescription_urlfoto1;
	
	
    $sqvr_sqpicture->type = "image";

    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.004Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.003Z';


    $sqvr_sqv_patient->picture = $sqvr_sqpicture;


    $resqponseqtsqtupla->patient = $sqvr_sqv_patient;
    $resqponseqtsqtupla->patient = $sqvr_sqv_patient;
    $resqponseqtsqtupla->patient = $sqvr_sqv_patient;

























    $sqvr_sqv_doctor = new \stdClass();
    $sqvr_sqv_doctor->id = '';
    $sqvr_sqv_doctor->_id = '';

// "_id":"630e782ca7295547ccf003dc"

    $sqvr_sqv_doctor->accept_doc1 = true;
    $sqvr_sqv_doctor->accept_doc2 = true;
    $sqvr_sqv_doctor->accept_doc3 = true;
    $sqvr_sqv_doctor->accept_doc4 = true;
    $sqvr_sqv_doctor->accept_doc5 = true;
    $sqvr_sqv_doctor->accept_doc6 = true;


    $sqvr_sq_assigned_orders = array();

    $sqvr_sqv_doctor->assigned_orders = $sqvr_sq_assigned_orders;

    $sqvr_sqv_doctor->name = 'Desaprome';
    $sqvr_sqv_doctor->email = 'desapromex@gmail.com';
    $sqvr_sqv_doctor->createdAt = '2022-08-30T20:50:52.223Z';
    $sqvr_sqv_doctor->updatedAt = '2022-08-30T20:57:48.222Z';


    $sqvr_sqv_doctor->birthdate = '1990-08-07T00:00:00.000Z';
    $sqvr_sqv_doctor->dial_code = '+1';

    $sqvr_sqv_doctor->enabled = 'yes';

    $sqvr_sqv_doctor->phone = '1111110010';

    $sqvr_sqv_doctor->professional_license = 'cedulunoooo';

    $sqvr_sqv_doctor->verified_doctor = 'yes';
    $sqvr_sqv_doctor->platform_one_signal = 'android';

// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true
// "assigned_orders":[]
// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"





// "roles":[{"_id":"630e2f295b9b5330f043b13c"
// "name":"doctor"
// "createdAt":"2022-08-30T15:39:21.349Z"
// "updatedAt":"2022-08-30T15:39:21.349Z"}]

    $sqvr_sq_roles = array();

    $sqvr_sq_rolrool = new \stdClass();
    $sqvr_sq_rolrool->id = '';
    $sqvr_sq_rolrool->_id = '';

    $sqvr_sq_rolrool->name = 'doctor';

    $sqvr_sq_rolrool->createdAt = '2022-08-30T20:57:51.116Z';
    $sqvr_sq_rolrool->updatedAt = '2022-08-30T20:57:51.117Z';

    $sqvr_sq_roles[] = $sqvr_sq_rolrool;


    $sqvr_sqv_doctor->roles = $sqvr_sq_roles;







    $sqvr_sq_location = new \stdClass();
// $sqvr_sq_location->id = '';
// $sqvr_sq_location->_id = '';

    $sqvr_sq_location->type = 'Point';

    $sqvr_sq_coordinatesrr = array();
    $sqvr_sq_coordinatesrr[] =-99.1317833;
    $sqvr_sq_coordinatesrr[] =19.4357167;

    $sqvr_sq_location->coordinates = $sqvr_sq_coordinatesrr;


    $sqvr_sqv_doctor->location = $sqvr_sq_location;



// "roles":[{"_id":"630e2f295b9b5330f043b13c"
// "name":"doctor"
// "createdAt":"2022-08-30T15:39:21.349Z"
// "updatedAt":"2022-08-30T15:39:21.349Z"}]
// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true
// "assigned_orders":[]
// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"

















// "doctor":{
    // "roles":[{"_id":"630e2f295b9b5330f043b13c"
    // "name":"doctor"
    // "createdAt":"2022-08-30T15:39:21.349Z"
    // "updatedAt":"2022-08-30T15:39:21.349Z"}]


// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true


// "assigned_orders":[]



// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"



// "picture":{"_id":"630e7321a7295547ccf001a9"
// "name":"634d84aa-39a0-48f1-bd8a-86853c3496c0.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:29:21.057Z"
// "updatedAt":"2022-08-30T20:29:21.057Z"}


// "doc_id_back":{"_id":"630e7351a7295547ccf001d4"
// "name":"164c37af-d40a-4d81-9d17-8f3e8735b346.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:09.109Z"
// "updatedAt":"2022-08-30T20:30:09.109Z"}


// "doc_id_front":{"_id":"630e7350a7295547ccf001d1"
// "name":"6ac2ff36-1ae6-4dc8-8123-2c0b53bae641.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:08.808Z"
// "updatedAt":"2022-08-30T20:30:08.808Z"}
// }
// 1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261
// {"crotimeo":"0.20378800 1663978520","crotimepartex":["1663978520_0","20378800_"],"crotimesubparteq1":"1663978520","crotimesubparteq0":"0_20378800","crotimesubparteq2":"","crotimesubparteq3":"","crotimesubparteqrndr":"600736709","recgresao_fn_generarlargoidvariable":"1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261"}
// idcrotimemocrosegs
// seudofolio=

    // this.seudofolio,
    // this.seudofecha,
    // this.seudohora,
 

    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
    $sqvr_sqpicture->type = "image";

//$resqponseqtsqtupla->prescription_urlfoto1= $sqvqrow['serverwicharchivos'].'/'.$sqvqrow['prescription_picrutafoto1'];

    $sqvr_sqpicture->name = $resqponseqtsqtupla->prescription_urlfoto1;
	
    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.778Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.779Z';


    $sqvr_sqv_doctor->picture = $sqvr_sqpicture;






    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
    $sqvr_sqpicture->type = "image";

    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.283Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.285Z';


    $sqvr_sqv_doctor->doc_id_back = $sqvr_sqpicture;





    $sqvr_sqpictureq = new \stdClass();
    $sqvr_sqpictureq->id = '';
    $sqvr_sqpictureq->_id = '';

    $sqvr_sqpictureq->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
    $sqvr_sqpictureq->type = "image";

    $sqvr_sqpictureq->createdAt = '2022-08-30T20:57:51.286Z';
    $sqvr_sqpictureq->updatedAt = '2022-08-30T20:57:51.287Z';


    $sqvr_sqv_doctor->doc_id_front = $sqvr_sqpictureq;




    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;
    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;
    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;




// "picture":{"_id":"630e7321a7295547ccf001a9"
// "name":"634d84aa-39a0-48f1-bd8a-86853c3496c0.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:29:21.057Z"
// "updatedAt":"2022-08-30T20:29:21.057Z"}


// "doc_id_back":{"_id":"630e7351a7295547ccf001d4"
// "name":"164c37af-d40a-4d81-9d17-8f3e8735b346.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:09.109Z"
// "updatedAt":"2022-08-30T20:30:09.109Z"}


// "doc_id_front":{"_id":"630e7350a7295547ccf001d1"
// "name":"6ac2ff36-1ae6-4dc8-8123-2c0b53bae641.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:08.808Z"
// "updatedAt":"2022-08-30T20:30:08.808Z"}








// "doctor":{"roles":[{"_id":"630e2f295b9b5330f043b13c"
// "name":"doctor"
// "createdAt":"2022-08-30T15:39:21.349Z"
// "updatedAt":"2022-08-30T15:39:21.349Z"}]
// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true
// "assigned_orders":[]
// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"
// "picture":{"_id":"630e7321a7295547ccf001a9"
// "name":"634d84aa-39a0-48f1-bd8a-86853c3496c0.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:29:21.057Z"
// "updatedAt":"2022-08-30T20:29:21.057Z"}
// "doc_id_back":{"_id":"630e7351a7295547ccf001d4"
// "name":"164c37af-d40a-4d81-9d17-8f3e8735b346.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:09.109Z"
// "updatedAt":"2022-08-30T20:30:09.109Z"}
// "doc_id_front":{"_id":"630e7350a7295547ccf001d1"
// "name":"6ac2ff36-1ae6-4dc8-8123-2c0b53bae641.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:08.808Z"
// "updatedAt":"2022-08-30T20:30:08.808Z"}}



    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;
	return $resqponseqtsqtupla;
}




function fn_get_row_recetaconsultamedica_byid($idtuplarqrow){
	 global $dbh;
	 
$rowresqponseqtsqtuplarow=null;

	$sqlsqlsql= 'SELECT * FROM recetaconsultamedica WHERE id = ?  LIMIT 3';
	$stmtq = $dbh->prepare($sqlsqlsql);
        $stmtq->execute(array($idtuplarqrow));




//        var_dump($stmtq);
//        var_dump($stmtq->execute(array($id)));
//        var_dump($stmtq);
        $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

        //var_dump($qresultq);
// var_dump($qresultq);
        if (count($qresultq) >= 1) {
            //var_dump('siencontrado');
			for($sqwrweqi=0; $sqwrweqi < count($qresultq); $sqwrweqi++){
				$sqvqrow=$qresultq[$sqwrweqi];
				
                            //$responsnstupla_rr[]  = $sqvqrow;
							
							//$resqponseqtsqtupla=fn_obj_recetaconsultamedica($sqvqrow);
							

			               //$responsnstupla_rr[]=$resqponseqtsqtupla;			
							
								$rowresqponseqtsqtuplarow=$sqvqrow;
								
								break;
							
							
							
							
				
			}
			return $rowresqponseqtsqtuplarow;
        } else {
			
			return null;
    // header("HTTP/1.0 202 ErrorqServerq");
    // echo '["no encuentra este registro "]';
    // die();
            
        }
}




function fn_obj_pedidoorder($sqvqrow){
    $resqponseqtsqtupla = new \stdClass();
	
// $sqvqrow['id']
// $sqvqrow['prescription_picrutafoto1']
// $sqvqrow['serverwicharchivos']

// id_usuario___doctor
// id_usuario___paciente
// requested_medications

// sqvqrow
// sqfscvdfrowusuario




    // $resqponseqtsqtupla->usuario_perfilfoto1 = '';
	// if(isset($sqfscvdfrowusuario['rutafoto1'])){
		// if($sqfscvdfrowusuario['rutafoto1'] != null){
		// $resqponseqtsqtupla->usuario_perfilfoto1 = $servidorfotografiasurlapi.''.$sqfscvdfrowusuario['rutafoto1'];
		// }
		// else{
		// }
	// }






//$resqponseqtsqtupla->id = "".'w'.$pagieina.'-'.time()."-_dfbb"."";
//
//$resqponseqtsqtupla->id = "".'w'.$pagieina.'-'.'time()'."-_dfbb"."";
//$resqponseqtsqtupla->_id = $resqponseqtsqtupla->id;


    // $resqponseqtsqtupla->id = "".'w'.$pagieina.'---'.$sdvboter.'-_---time()'."-_dfbb"."";
    // $resqponseqtsqtupla->_id = $resqponseqtsqtupla->id;

$resqponseqtsqtupla->id= $sqvqrow['id'];
$resqponseqtsqtupla->_id= $sqvqrow['id'];
// requested_medications

// 1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261
// {"crotimeo":"0.20378800 1663978520","crotimepartex":["1663978520_0","20378800_"],"crotimesubparteq1":"1663978520","crotimesubparteq0":"0_20378800","crotimesubparteq2":"","crotimesubparteq3":"","crotimesubparteqrndr":"600736709","recgresao_fn_generarlargoidvariable":"1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261"}
// idcrotimemocrosegs
// seudofolio=

    // this.seudofolio,
    // this.seudofecha,
    // this.seudohora,

	$idcrotimemocrosegs=json_decode($sqvqrow['idcrotimemocrosegs']);
	
	
	$sqssdvvdvv=explode('_',$idcrotimemocrosegs->crotimesubparteq0);
	$sqscvdv=$sqssdvvdvv[1];
	$sqscvdv=substr($sqscvdv,0,4);
	
	
 $resqponseqtsqtupla->seudofolio= $idcrotimemocrosegs->crotimesubparteq1.''.$sqscvdv;

$resqponseqtsqtupla->seudofecha= date('d/M/Y H:i',intval($idcrotimemocrosegs->crotimesubparteq1));
//$resqponseqtsqtupla->seudohora= $sqvqrow['id'];

$resqponseqtsqtupla->seudohora=date('H:i',intval($idcrotimemocrosegs->crotimesubparteq1));

	// SELECT id, idcrotimemocrosegs, nombrqvecitoliomberbre, id_pharmacyia___pharmacy, id_placelugar___place, id_recetaconsultamedica___prescription, id_presupuesto___budget_accepted, id_usuario___delivery_assigned, id_usuario___patient, id_solicitudpedido___solicitudpedido, id_usuario___paciente, id_usuario___doctor, lat, long, statuspedido, cost_delivery, cost_products, type_delivery, type_payment, comentario, date_send, esbotoncillobottom, fecha_created, hora_created, fechaqora_created, fechaqoraicrotieime_created, fechaqoraicrotieime_updated, fecha_updated, hora_updated, fechaqora_updated, tisfingepirnrt, tistzfingepirnrtz, createdat, updatedat
// FROM public.pedidoorder;


// $resqponseqtsqtupla->prescription_urlfoto1= $sqvqrow['serverwicharchivos'].'/'.$sqvqrow['prescription_picrutafoto1'];




  // http.get('https://www.gravatar.com/avatar/e944138e1114aefe4b08848a46465589').then((response) {
    // Uint8List bodyBytes = response.bodyBytes;
    // File('my_image.jpg').writeAsBytes(bodyBytes);
  // });
// d_o_c_t_o_r_sqscrenp_recetaspacientesmiospacientes_State_screeen_Secccion_editorcrud_consulta_SbScrenSb_State_Screen_imageSelected_foto1
// d_o_c_t_o_r_sqscrenp_recetaspacientesmiospacientes_State_screeen_Secccion_editorcrud_consulta_SbScrenSb_State_Screen_prescription_controler
// d_o_c_t_o_r_sqscrenp_recetaspacientesmiospacientes_State_screeen_Secccion_editorcrud_consulta_Fcntion_fn_get_reqest_read_consulta




// "diagnosis":"ddddddddddd"
// "prescription_text":"rrrrrrrrrrrrrrrrrrrr"
// "evolution":"eeeeeeeeeeeeeeeeee"
// "createdAt":"2022-08-30T20:57:51.322Z"
// "updatedAt":"2022-08-30T20:57:51.322Z"

    // $resqponseqtsqtupla->diagnosis = $sqvqrow['diagnosis'];
    // $resqponseqtsqtupla->prescription_text = $sqvqrow['prescription_text'];
    // $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];


    $resqponseqtsqtupla->id_solicitudpedido___solicitudpedido = $sqvqrow['id_solicitudpedido___solicitudpedido'];

	$resqponseqtsqtupla->id_pharmacyia___pharmacy = $sqvqrow['id_pharmacyia___pharmacy'];
	
	$resqponseqtsqtupla->id_placelugar___place = $sqvqrow['id_placelugar___place'];
	
	$resqponseqtsqtupla->id_usuario___delivery_assigned = $sqvqrow['id_usuario___delivery_assigned'];
	
	$resqponseqtsqtupla->id_presupuesto___budget_accepted = $sqvqrow['id_presupuesto___budget_accepted'];
	
	$resqponseqtsqtupla->id_recetaconsultamedica___prescription = $sqvqrow['id_recetaconsultamedica___prescription'];
	$idgetidtruplaid =  $sqvqrow ['id_recetaconsultamedica___prescription'];
	$resqponseqtsqtupla->prescription = null; 
		if(is_null($idgetidtruplaid)){
				
		}
	else{
			if(''==trim($idgetidtruplaid)){
			}
			else{
				$rowresultidgetidtruplaidroqw=fn_get_row_recetaconsultamedica_byid($idgetidtruplaid);
					//var_dump($rowresultidgetidtruplaidroqw);
					if(is_null($rowresultidgetidtruplaidroqw)){
						var_dump('null');
						die();
				}
				else{
	$resqponseqtsqtupla->prescription = fn_obj_recetaconsultamedica($rowresultidgetidtruplaidroqw); 
	//var_dump($resqponseqtsqtupla->prescription);
				}
			}
	}
		
	//var_dump($sqvqrow ['id_recetaconsultamedica___prescription']);
	 //var_dump(fn_get_row_recetaconsultamedica_byid($idgetidtruplaid)); 
				
	//$rowresultidgetidtruplaidroqw=fn_get_row_recetaconsultamedica_byid($idgetidtruplaid);
			
	 // var_dump(fn_obj_recetaconsultamedica($rowresultidgetidtruplaidroqw)); 
				
	 // var_dump(fn_obj_recetaconsultamedica($rowresultidgetidtruplaidroqw)); 
	//die();
	
	
	
	
	
	
	
	
	$resqponseqtsqtupla->id_usuario___patient = $sqvqrow['id_usuario___patient'];
	
	$resqponseqtsqtupla->id_usuario___paciente = $sqvqrow['id_usuario___paciente'];
	
	$resqponseqtsqtupla->id_usuario___doctor = $sqvqrow['id_usuario___doctor'];
	
	
	





    $resqponseqtsqtupla->lat = $sqvqrow['lat'];

    $resqponseqtsqtupla->long = $sqvqrow['long'];
$resqponseqtsqtupla->cost_delivery = $sqvqrow['cost_delivery'];
$resqponseqtsqtupla->cost_products = $sqvqrow['cost_products'];

$resqponseqtsqtupla->status = $sqvqrow['statuspedido'];
$resqponseqtsqtupla->statuspedido = $sqvqrow['statuspedido'];
$resqponseqtsqtupla->statuspedido = $sqvqrow['statuspedido'];

$resqponseqtsqtupla->type_delivery = $sqvqrow['type_delivery'];

$resqponseqtsqtupla->type_payment = $sqvqrow['type_payment'];

$resqponseqtsqtupla->comentario = $sqvqrow['comentario'];

$resqponseqtsqtupla->date_send = $sqvqrow['date_send'];

// esbotoncillobottom

$resqponseqtsqtupla->fechaqora_created = $sqvqrow['fechaqora_created'];

$resqponseqtsqtupla->fechaqoraicrotieime_created = $sqvqrow['fechaqoraicrotieime_created'];

$resqponseqtsqtupla->fechaqoraicrotieime_updated = $sqvqrow['fechaqoraicrotieime_updated'];



$resqponseqtsqtupla->fecha_created = $sqvqrow['fecha_created'];

$resqponseqtsqtupla->hora_created = $sqvqrow['hora_created'];

$resqponseqtsqtupla->fecha_updated = $sqvqrow['fecha_updated'];

$resqponseqtsqtupla->hora_updated = $sqvqrow['hora_updated'];

$resqponseqtsqtupla->fechaqora_updated = $sqvqrow['fechaqora_updated'];



$resqponseqtsqtupla->tisfingepirnrt = $sqvqrow['tisfingepirnrt'];

$resqponseqtsqtupla->tistzfingepirnrtz = $sqvqrow['tistzfingepirnrtz'];

    $resqponseqtsqtupla->createdAt = '2022-08-30T20:57:51.312Z';
    $resqponseqtsqtupla->updatedAt = '2022-08-30T20:57:51.310Z';




// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

	// SELECT , , , , , , , , , , , , , , , , , , , , , , , , , , , , , createdat, updatedat
// FROM public.pedidoorder;


// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

    // $resqponseqtsqtupla->createdAt = '2022-08-30T20:57:51.312Z';
    // $resqponseqtsqtupla->updatedAt = '2022-08-30T20:57:51.310Z';


    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "269c1981-79c2-46ae-a4af-4f2e64a73213.webp";
    $sqvr_sqpicture->type = "image";

    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.584Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.587Z';


    // $resqponseqtsqtupla->prescription_picture = $sqvr_sqpicture;




// "prescription_picture":{"_id":"630e79cfa7295547ccf005a0"
// "name":"269c1981-79c2-46ae-a4af-4f2e64a73213.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:57:51.284Z"
// "updatedAt":"2022-08-30T20:57:51.284Z"}



    $sqvr_sqv_patient = new \stdClass();
    $sqvr_sqv_patient->id = '';
    $sqvr_sqv_patient->_id = '';

// "_id":"630e782ca7295547ccf003dc"

    $sqvr_sqv_patient->accept_doc1 = true;
    $sqvr_sqv_patient->accept_doc2 = true;
    $sqvr_sqv_patient->accept_doc3 = true;
    $sqvr_sqv_patient->accept_doc4 = true;
    $sqvr_sqv_patient->accept_doc5 = true;
    $sqvr_sqv_patient->accept_doc6 = true;

// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true

// "name":"Pacienteeunooo"
// "email":"sdfandroid01@gmail.com"
// "createdAt":"2022-08-30T20:50:52.198Z"
// "updatedAt":"2022-08-30T20:57:48.287Z"

    $sqvr_sqv_patient->name = 'Pacienteeunooo';
    $sqvr_sqv_patient->email = 'sdfandroid01@gmail.com';
    $sqvr_sqv_patient->createdAt = '2022-08-30T20:50:52.654Z';
    $sqvr_sqv_patient->updatedAt = '2022-08-30T20:57:48.653Z';

// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"

// "enabled":"yes"
// "phone":"1111111111"
// "verified_doctor":"no"
// "platform_one_signal":"android"

    $sqvr_sqv_patient->birthdate = '1990-08-07T00:00:00.000Z';
    $sqvr_sqv_patient->dial_code = '+1';

    $sqvr_sqv_patient->enabled = 'yes';
    $sqvr_sqv_patient->phone = '1111111111';
    $sqvr_sqv_patient->verified_doctor = 'no';
    $sqvr_sqv_patient->platform_one_signal = 'android';


    $sqvr_sq_roles = array();

    $sqvr_sq_rolrool = new \stdClass();
    $sqvr_sq_rolrool->id = '';
    $sqvr_sq_rolrool->_id = '';

    $sqvr_sq_rolrool->name = 'client';

    $sqvr_sq_rolrool->createdAt = '2022-08-30T20:57:51.443Z';
    $sqvr_sq_rolrool->updatedAt = '2022-08-30T20:57:51.444Z';

    $sqvr_sq_roles[] = $sqvr_sq_rolrool;


    $sqvr_sqv_patient->roles = $sqvr_sq_roles;


    $sqvr_sq_location = new \stdClass();
// $sqvr_sq_location->id = '';
// $sqvr_sq_location->_id = '';

    $sqvr_sq_location->type = 'Point';

    $sqvr_sq_coordinatesrr = array();
    $sqvr_sq_coordinatesrr[] =-99.1317833;
    $sqvr_sq_coordinatesrr[] =19.4357167;

    $sqvr_sq_location->coordinates = $sqvr_sq_coordinatesrr;


    $sqvr_sqv_patient->location = $sqvr_sq_location;


// "patient":{
    // "location":{"type":"Point"
    // "coordinates":[-99.1317833
    // 19.4357167]}

    // "roles":[{"_id":"630e2f295b9b5330f043b13a"
    // "name":"client"
    // "createdAt":"2022-08-30T15:39:21.349Z"
    // "updatedAt":"2022-08-30T15:39:21.349Z"}]

    // "assigned_orders":[]

    // "picture":{"_id":"630e7927a7295547ccf00493"
    // "name":"3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp"
    // "type":"image"
    // "createdAt":"2022-08-30T20:55:03.045Z"
    // "updatedAt":"2022-08-30T20:55:03.045Z"}
// }


    $sqvr_sq_assigned_orders = array();

    $sqvr_sqv_patient->assigned_orders = $sqvr_sq_assigned_orders;


    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
	
	
//$resqponseqtsqtupla->prescription_urlfoto1= $sqvqrow['serverwicharchivos'].'/'.$sqvqrow['prescription_picrutafoto1'];

    //$sqvr_sqpicture->name = $resqponseqtsqtupla->prescription_urlfoto1;
	
	
    $sqvr_sqpicture->type = "image";

    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.004Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.003Z';


    $sqvr_sqv_patient->picture = $sqvr_sqpicture;


    $resqponseqtsqtupla->patient = $sqvr_sqv_patient;
    $resqponseqtsqtupla->patient = $sqvr_sqv_patient;
    $resqponseqtsqtupla->patient = $sqvr_sqv_patient;

























    $sqvr_sqv_doctor = new \stdClass();
    $sqvr_sqv_doctor->id = '';
    $sqvr_sqv_doctor->_id = '';

// "_id":"630e782ca7295547ccf003dc"

    $sqvr_sqv_doctor->accept_doc1 = true;
    $sqvr_sqv_doctor->accept_doc2 = true;
    $sqvr_sqv_doctor->accept_doc3 = true;
    $sqvr_sqv_doctor->accept_doc4 = true;
    $sqvr_sqv_doctor->accept_doc5 = true;
    $sqvr_sqv_doctor->accept_doc6 = true;


    $sqvr_sq_assigned_orders = array();

    $sqvr_sqv_doctor->assigned_orders = $sqvr_sq_assigned_orders;

    $sqvr_sqv_doctor->name = 'Desaprome';
    $sqvr_sqv_doctor->email = 'desapromex@gmail.com';
    $sqvr_sqv_doctor->createdAt = '2022-08-30T20:50:52.223Z';
    $sqvr_sqv_doctor->updatedAt = '2022-08-30T20:57:48.222Z';


    $sqvr_sqv_doctor->birthdate = '1990-08-07T00:00:00.000Z';
    $sqvr_sqv_doctor->dial_code = '+1';

    $sqvr_sqv_doctor->enabled = 'yes';

    $sqvr_sqv_doctor->phone = '1111110010';

    $sqvr_sqv_doctor->professional_license = 'cedulunoooo';

    $sqvr_sqv_doctor->verified_doctor = 'yes';
    $sqvr_sqv_doctor->platform_one_signal = 'android';

// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true
// "assigned_orders":[]
// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"





// "roles":[{"_id":"630e2f295b9b5330f043b13c"
// "name":"doctor"
// "createdAt":"2022-08-30T15:39:21.349Z"
// "updatedAt":"2022-08-30T15:39:21.349Z"}]

    $sqvr_sq_roles = array();

    $sqvr_sq_rolrool = new \stdClass();
    $sqvr_sq_rolrool->id = '';
    $sqvr_sq_rolrool->_id = '';

    $sqvr_sq_rolrool->name = 'doctor';

    $sqvr_sq_rolrool->createdAt = '2022-08-30T20:57:51.116Z';
    $sqvr_sq_rolrool->updatedAt = '2022-08-30T20:57:51.117Z';

    $sqvr_sq_roles[] = $sqvr_sq_rolrool;


    $sqvr_sqv_doctor->roles = $sqvr_sq_roles;







    $sqvr_sq_location = new \stdClass();
// $sqvr_sq_location->id = '';
// $sqvr_sq_location->_id = '';

    $sqvr_sq_location->type = 'Point';

    $sqvr_sq_coordinatesrr = array();
    $sqvr_sq_coordinatesrr[] =-99.1317833;
    $sqvr_sq_coordinatesrr[] =19.4357167;

    $sqvr_sq_location->coordinates = $sqvr_sq_coordinatesrr;


    $sqvr_sqv_doctor->location = $sqvr_sq_location;



// "roles":[{"_id":"630e2f295b9b5330f043b13c"
// "name":"doctor"
// "createdAt":"2022-08-30T15:39:21.349Z"
// "updatedAt":"2022-08-30T15:39:21.349Z"}]
// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true
// "assigned_orders":[]
// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"

















// "doctor":{
    // "roles":[{"_id":"630e2f295b9b5330f043b13c"
    // "name":"doctor"
    // "createdAt":"2022-08-30T15:39:21.349Z"
    // "updatedAt":"2022-08-30T15:39:21.349Z"}]


// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true


// "assigned_orders":[]



// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"



// "picture":{"_id":"630e7321a7295547ccf001a9"
// "name":"634d84aa-39a0-48f1-bd8a-86853c3496c0.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:29:21.057Z"
// "updatedAt":"2022-08-30T20:29:21.057Z"}


// "doc_id_back":{"_id":"630e7351a7295547ccf001d4"
// "name":"164c37af-d40a-4d81-9d17-8f3e8735b346.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:09.109Z"
// "updatedAt":"2022-08-30T20:30:09.109Z"}


// "doc_id_front":{"_id":"630e7350a7295547ccf001d1"
// "name":"6ac2ff36-1ae6-4dc8-8123-2c0b53bae641.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:08.808Z"
// "updatedAt":"2022-08-30T20:30:08.808Z"}
// }
// 1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261
// {"crotimeo":"0.20378800 1663978520","crotimepartex":["1663978520_0","20378800_"],"crotimesubparteq1":"1663978520","crotimesubparteq0":"0_20378800","crotimesubparteq2":"","crotimesubparteq3":"","crotimesubparteqrndr":"600736709","recgresao_fn_generarlargoidvariable":"1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261"}
// idcrotimemocrosegs
// seudofolio=

    // this.seudofolio,
    // this.seudofecha,
    // this.seudohora,
 

    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
    $sqvr_sqpicture->type = "image";

//$resqponseqtsqtupla->prescription_urlfoto1= $sqvqrow['serverwicharchivos'].'/'.$sqvqrow['prescription_picrutafoto1'];

    //$sqvr_sqpicture->name = $resqponseqtsqtupla->prescription_urlfoto1;
	
    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.778Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.779Z';


    $sqvr_sqv_doctor->picture = $sqvr_sqpicture;






    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
    $sqvr_sqpicture->type = "image";

    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.283Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.285Z';


    $sqvr_sqv_doctor->doc_id_back = $sqvr_sqpicture;





    $sqvr_sqpictureq = new \stdClass();
    $sqvr_sqpictureq->id = '';
    $sqvr_sqpictureq->_id = '';

    $sqvr_sqpictureq->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
    $sqvr_sqpictureq->type = "image";

    $sqvr_sqpictureq->createdAt = '2022-08-30T20:57:51.286Z';
    $sqvr_sqpictureq->updatedAt = '2022-08-30T20:57:51.287Z';


    $sqvr_sqv_doctor->doc_id_front = $sqvr_sqpictureq;




    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;
    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;
    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;




// "picture":{"_id":"630e7321a7295547ccf001a9"
// "name":"634d84aa-39a0-48f1-bd8a-86853c3496c0.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:29:21.057Z"
// "updatedAt":"2022-08-30T20:29:21.057Z"}


// "doc_id_back":{"_id":"630e7351a7295547ccf001d4"
// "name":"164c37af-d40a-4d81-9d17-8f3e8735b346.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:09.109Z"
// "updatedAt":"2022-08-30T20:30:09.109Z"}


// "doc_id_front":{"_id":"630e7350a7295547ccf001d1"
// "name":"6ac2ff36-1ae6-4dc8-8123-2c0b53bae641.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:08.808Z"
// "updatedAt":"2022-08-30T20:30:08.808Z"}








// "doctor":{"roles":[{"_id":"630e2f295b9b5330f043b13c"
// "name":"doctor"
// "createdAt":"2022-08-30T15:39:21.349Z"
// "updatedAt":"2022-08-30T15:39:21.349Z"}]
// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true
// "assigned_orders":[]
// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"
// "picture":{"_id":"630e7321a7295547ccf001a9"
// "name":"634d84aa-39a0-48f1-bd8a-86853c3496c0.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:29:21.057Z"
// "updatedAt":"2022-08-30T20:29:21.057Z"}
// "doc_id_back":{"_id":"630e7351a7295547ccf001d4"
// "name":"164c37af-d40a-4d81-9d17-8f3e8735b346.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:09.109Z"
// "updatedAt":"2022-08-30T20:30:09.109Z"}
// "doc_id_front":{"_id":"630e7350a7295547ccf001d1"
// "name":"6ac2ff36-1ae6-4dc8-8123-2c0b53bae641.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:08.808Z"
// "updatedAt":"2022-08-30T20:30:08.808Z"}}



    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;
	return $resqponseqtsqtupla;
}














function fn_obj_presupuesto($sqvqrow){
    $resqponseqtsqtupla = new \stdClass();
	
// $sqvqrow['id']
// $sqvqrow['prescription_picrutafoto1']
// $sqvqrow['serverwicharchivos']

// id_usuario___doctor
// id_usuario___paciente
// requested_medications

// sqvqrow
// sqfscvdfrowusuario




    // $resqponseqtsqtupla->usuario_perfilfoto1 = '';
	// if(isset($sqfscvdfrowusuario['rutafoto1'])){
		// if($sqfscvdfrowusuario['rutafoto1'] != null){
		// $resqponseqtsqtupla->usuario_perfilfoto1 = $servidorfotografiasurlapi.''.$sqfscvdfrowusuario['rutafoto1'];
		// }
		// else{
		// }
	// }






//$resqponseqtsqtupla->id = "".'w'.$pagieina.'-'.time()."-_dfbb"."";
//
//$resqponseqtsqtupla->id = "".'w'.$pagieina.'-'.'time()'."-_dfbb"."";
//$resqponseqtsqtupla->_id = $resqponseqtsqtupla->id;


    // $resqponseqtsqtupla->id = "".'w'.$pagieina.'---'.$sdvboter.'-_---time()'."-_dfbb"."";
    // $resqponseqtsqtupla->_id = $resqponseqtsqtupla->id;

$resqponseqtsqtupla->id= $sqvqrow['id'];
$resqponseqtsqtupla->_id= $sqvqrow['id'];
// requested_medications

// 1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261
// {"crotimeo":"0.20378800 1663978520","crotimepartex":["1663978520_0","20378800_"],"crotimesubparteq1":"1663978520","crotimesubparteq0":"0_20378800","crotimesubparteq2":"","crotimesubparteq3":"","crotimesubparteqrndr":"600736709","recgresao_fn_generarlargoidvariable":"1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261"}
// idcrotimemocrosegs
// seudofolio=

    // this.seudofolio,
    // this.seudofecha,
    // this.seudohora,

	$idcrotimemocrosegs=json_decode($sqvqrow['idcrotimemocrosegs']);
	
	
	$sqssdvvdvv=explode('_',$idcrotimemocrosegs->crotimesubparteq0);
	$sqscvdv=$sqssdvvdvv[1];
	$sqscvdv=substr($sqscvdv,0,4);
	
	
 $resqponseqtsqtupla->seudofolio= $idcrotimemocrosegs->crotimesubparteq1.''.$sqscvdv;

$resqponseqtsqtupla->seudofecha= date('d/M/Y H:i',intval($idcrotimemocrosegs->crotimesubparteq1));
$resqponseqtsqtupla->seudohora= $sqvqrow['id'];

	// SELECT id, idcrotimemocrosegs, nombrqvecitoliomberbre, id_pharmacyia___pharmacy, id_placelugar___place, id_recetaconsultamedica___prescription, id_presupuesto___budget_accepted, id_usuario___delivery_assigned, id_usuario___patient, id_solicitudpedido___solicitudpedido, id_usuario___paciente, id_usuario___doctor, lat, long, statuspedido, cost_delivery, cost_products, type_delivery, type_payment, comentario, date_send, esbotoncillobottom, fecha_created, hora_created, fechaqora_created, fechaqoraicrotieime_created, fechaqoraicrotieime_updated, fecha_updated, hora_updated, fechaqora_updated, tisfingepirnrt, tistzfingepirnrtz, createdat, updatedat
// FROM public.pedidoorder;


// $resqponseqtsqtupla->prescription_urlfoto1= $sqvqrow['serverwicharchivos'].'/'.$sqvqrow['prescription_picrutafoto1'];




  // http.get('https://www.gravatar.com/avatar/e944138e1114aefe4b08848a46465589').then((response) {
    // Uint8List bodyBytes = response.bodyBytes;
    // File('my_image.jpg').writeAsBytes(bodyBytes);
  // });
// d_o_c_t_o_r_sqscrenp_recetaspacientesmiospacientes_State_screeen_Secccion_editorcrud_consulta_SbScrenSb_State_Screen_imageSelected_foto1
// d_o_c_t_o_r_sqscrenp_recetaspacientesmiospacientes_State_screeen_Secccion_editorcrud_consulta_SbScrenSb_State_Screen_prescription_controler
// d_o_c_t_o_r_sqscrenp_recetaspacientesmiospacientes_State_screeen_Secccion_editorcrud_consulta_Fcntion_fn_get_reqest_read_consulta




// "diagnosis":"ddddddddddd"
// "prescription_text":"rrrrrrrrrrrrrrrrrrrr"
// "evolution":"eeeeeeeeeeeeeeeeee"
// "createdAt":"2022-08-30T20:57:51.322Z"
// "updatedAt":"2022-08-30T20:57:51.322Z"

    // $resqponseqtsqtupla->diagnosis = $sqvqrow['diagnosis'];
    // $resqponseqtsqtupla->prescription_text = $sqvqrow['prescription_text'];
    // $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];




// SELECT id, idcrotimemocrosegs, nombrqvecitoliomberbre, id_pharmacyia___pharmacy, cost_delivery, cost_products, statuspresupuesto, esbotoncillobottom, fecha_created, hora_created, fechaqora_created, fechaqoraicrotieime_created, fechaqoraicrotieime_updated, fecha_updated, hora_updated, fechaqora_updated, tisfingepirnrt, tistzfingepirnrtz, createdat, updatedat, comentario, id_pedidoorder
// FROM public.presupuesto;

 // comentario, id_pedidoorder
 // id_pharmacyia___pharmacy, cost_delivery, cost_products, statuspresupuesto,
 
	$resqponseqtsqtupla->id_pharmacyia___pharmacy = $sqvqrow['id_pharmacyia___pharmacy'];
	
	$resqponseqtsqtupla->id_pedidoorder = $sqvqrow['id_pedidoorder'];
	
	$resqponseqtsqtupla->id_pedidoorder = $sqvqrow['id_pedidoorder'];
	
	$resqponseqtsqtupla->id_pedidoorder = $sqvqrow['id_pedidoorder'];
	
	$resqponseqtsqtupla->id_pedidoorder = $sqvqrow['id_pedidoorder'];
	
	$resqponseqtsqtupla->comentario = $sqvqrow['comentario'];
	
	
    // $resqponseqtsqtupla->id_solicitudpedido___solicitudpedido = $sqvqrow['id_solicitudpedido___solicitudpedido'];

	// $resqponseqtsqtupla->id_placelugar___place = $sqvqrow['id_placelugar___place'];
	
	// $resqponseqtsqtupla->id_usuario___delivery_assigned = $sqvqrow['id_usuario___delivery_assigned'];
	
	// $resqponseqtsqtupla->id_presupuesto___budget_accepted = $sqvqrow['id_presupuesto___budget_accepted'];
	
/* 	$resqponseqtsqtupla->id_recetaconsultamedica___prescription = $sqvqrow['id_recetaconsultamedica___prescription'];
	$idgetidtruplaid =  $sqvqrow ['id_recetaconsultamedica___prescription'];
	$resqponseqtsqtupla->prescription = null; 
		if(is_null($idgetidtruplaid)){
				
		}
	else{
			if(''==trim($idgetidtruplaid)){
			}
			else{
				$rowresultidgetidtruplaidroqw=fn_get_row_recetaconsultamedica_byid($idgetidtruplaid);
					//var_dump($rowresultidgetidtruplaidroqw);
					if(is_null($rowresultidgetidtruplaidroqw)){
						var_dump('null');
						die();
				}
				else{
	$resqponseqtsqtupla->prescription = fn_obj_recetaconsultamedica($rowresultidgetidtruplaidroqw); 
	//var_dump($resqponseqtsqtupla->prescription);
				}
			}
	} */
		
	//var_dump($sqvqrow ['id_recetaconsultamedica___prescription']);
	 //var_dump(fn_get_row_recetaconsultamedica_byid($idgetidtruplaid)); 
				
	//$rowresultidgetidtruplaidroqw=fn_get_row_recetaconsultamedica_byid($idgetidtruplaid);
			
	 // var_dump(fn_obj_recetaconsultamedica($rowresultidgetidtruplaidroqw)); 
				
	 // var_dump(fn_obj_recetaconsultamedica($rowresultidgetidtruplaidroqw)); 
	//die();
	
	
	
	
	
	
	
	
	// $resqponseqtsqtupla->id_usuario___patient = $sqvqrow['id_usuario___patient'];
	
	// $resqponseqtsqtupla->id_usuario___paciente = $sqvqrow['id_usuario___paciente'];
	
	// $resqponseqtsqtupla->id_usuario___doctor = $sqvqrow['id_usuario___doctor'];
	
	
	




// SELECT id, idcrotimemocrosegs, nombrqvecitoliomberbre, id_pharmacyia___pharmacy, cost_delivery, cost_products, statuspresupuesto, esbotoncillobottom, fecha_created, hora_created, fechaqora_created, fechaqoraicrotieime_created, fechaqoraicrotieime_updated, fecha_updated, hora_updated, fechaqora_updated, tisfingepirnrt, tistzfingepirnrtz, createdat, updatedat, comentario, id_pedidoorder
// FROM public.presupuesto;


// esbotoncillobottom

$resqponseqtsqtupla->esbotoncillobottom = $sqvqrow['esbotoncillobottom'];

$resqponseqtsqtupla->fechaqora_created = $sqvqrow['fechaqora_created'];

$resqponseqtsqtupla->fechaqoraicrotieime_created = $sqvqrow['fechaqoraicrotieime_created'];

$resqponseqtsqtupla->fechaqoraicrotieime_updated = $sqvqrow['fechaqoraicrotieime_updated'];



$resqponseqtsqtupla->fecha_created = $sqvqrow['fecha_created'];

$resqponseqtsqtupla->hora_created = $sqvqrow['hora_created'];

$resqponseqtsqtupla->fecha_updated = $sqvqrow['fecha_updated'];

$resqponseqtsqtupla->hora_updated = $sqvqrow['hora_updated'];

$resqponseqtsqtupla->fechaqora_updated = $sqvqrow['fechaqora_updated'];



$resqponseqtsqtupla->tisfingepirnrt = $sqvqrow['tisfingepirnrt'];

$resqponseqtsqtupla->tistzfingepirnrtz = $sqvqrow['tistzfingepirnrtz'];

    $resqponseqtsqtupla->createdAt = '2022-08-30T20:57:51.312Z';
    $resqponseqtsqtupla->updatedAt = '2022-08-30T20:57:51.310Z';




// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

	// SELECT , , , , , , , , , , , , , , , , , , , , , , , , , , , , , createdat, updatedat
// FROM public.pedidoorder;


// $resqponseqtsqtupla->evolution = $sqvqrow['evolution'];

    // $resqponseqtsqtupla->createdAt = '2022-08-30T20:57:51.312Z';
    // $resqponseqtsqtupla->updatedAt = '2022-08-30T20:57:51.310Z';


    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "269c1981-79c2-46ae-a4af-4f2e64a73213.webp";
    $sqvr_sqpicture->type = "image";

    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.584Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.587Z';


    // $resqponseqtsqtupla->prescription_picture = $sqvr_sqpicture;




// "prescription_picture":{"_id":"630e79cfa7295547ccf005a0"
// "name":"269c1981-79c2-46ae-a4af-4f2e64a73213.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:57:51.284Z"
// "updatedAt":"2022-08-30T20:57:51.284Z"}



    $sqvr_sqv_patient = new \stdClass();
    $sqvr_sqv_patient->id = '';
    $sqvr_sqv_patient->_id = '';

// "_id":"630e782ca7295547ccf003dc"

    $sqvr_sqv_patient->accept_doc1 = true;
    $sqvr_sqv_patient->accept_doc2 = true;
    $sqvr_sqv_patient->accept_doc3 = true;
    $sqvr_sqv_patient->accept_doc4 = true;
    $sqvr_sqv_patient->accept_doc5 = true;
    $sqvr_sqv_patient->accept_doc6 = true;

// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true

// "name":"Pacienteeunooo"
// "email":"sdfandroid01@gmail.com"
// "createdAt":"2022-08-30T20:50:52.198Z"
// "updatedAt":"2022-08-30T20:57:48.287Z"

    $sqvr_sqv_patient->name = 'Pacienteeunooo';
    $sqvr_sqv_patient->email = 'sdfandroid01@gmail.com';
    $sqvr_sqv_patient->createdAt = '2022-08-30T20:50:52.654Z';
    $sqvr_sqv_patient->updatedAt = '2022-08-30T20:57:48.653Z';

// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"

// "enabled":"yes"
// "phone":"1111111111"
// "verified_doctor":"no"
// "platform_one_signal":"android"

    $sqvr_sqv_patient->birthdate = '1990-08-07T00:00:00.000Z';
    $sqvr_sqv_patient->dial_code = '+1';

    $sqvr_sqv_patient->enabled = 'yes';
    $sqvr_sqv_patient->phone = '1111111111';
    $sqvr_sqv_patient->verified_doctor = 'no';
    $sqvr_sqv_patient->platform_one_signal = 'android';


    $sqvr_sq_roles = array();

    $sqvr_sq_rolrool = new \stdClass();
    $sqvr_sq_rolrool->id = '';
    $sqvr_sq_rolrool->_id = '';

    $sqvr_sq_rolrool->name = 'client';

    $sqvr_sq_rolrool->createdAt = '2022-08-30T20:57:51.443Z';
    $sqvr_sq_rolrool->updatedAt = '2022-08-30T20:57:51.444Z';

    $sqvr_sq_roles[] = $sqvr_sq_rolrool;


    $sqvr_sqv_patient->roles = $sqvr_sq_roles;


    $sqvr_sq_location = new \stdClass();
// $sqvr_sq_location->id = '';
// $sqvr_sq_location->_id = '';

    $sqvr_sq_location->type = 'Point';

    $sqvr_sq_coordinatesrr = array();
    $sqvr_sq_coordinatesrr[] =-99.1317833;
    $sqvr_sq_coordinatesrr[] =19.4357167;

    $sqvr_sq_location->coordinates = $sqvr_sq_coordinatesrr;


    $sqvr_sqv_patient->location = $sqvr_sq_location;


// "patient":{
    // "location":{"type":"Point"
    // "coordinates":[-99.1317833
    // 19.4357167]}

    // "roles":[{"_id":"630e2f295b9b5330f043b13a"
    // "name":"client"
    // "createdAt":"2022-08-30T15:39:21.349Z"
    // "updatedAt":"2022-08-30T15:39:21.349Z"}]

    // "assigned_orders":[]

    // "picture":{"_id":"630e7927a7295547ccf00493"
    // "name":"3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp"
    // "type":"image"
    // "createdAt":"2022-08-30T20:55:03.045Z"
    // "updatedAt":"2022-08-30T20:55:03.045Z"}
// }


    $sqvr_sq_assigned_orders = array();

    $sqvr_sqv_patient->assigned_orders = $sqvr_sq_assigned_orders;


    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
	
	
//$resqponseqtsqtupla->prescription_urlfoto1= $sqvqrow['serverwicharchivos'].'/'.$sqvqrow['prescription_picrutafoto1'];

    //$sqvr_sqpicture->name = $resqponseqtsqtupla->prescription_urlfoto1;
	
	
    $sqvr_sqpicture->type = "image";

    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.004Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.003Z';


    $sqvr_sqv_patient->picture = $sqvr_sqpicture;


    $resqponseqtsqtupla->patient = $sqvr_sqv_patient;
    $resqponseqtsqtupla->patient = $sqvr_sqv_patient;
    $resqponseqtsqtupla->patient = $sqvr_sqv_patient;

























    $sqvr_sqv_doctor = new \stdClass();
    $sqvr_sqv_doctor->id = '';
    $sqvr_sqv_doctor->_id = '';

// "_id":"630e782ca7295547ccf003dc"

    $sqvr_sqv_doctor->accept_doc1 = true;
    $sqvr_sqv_doctor->accept_doc2 = true;
    $sqvr_sqv_doctor->accept_doc3 = true;
    $sqvr_sqv_doctor->accept_doc4 = true;
    $sqvr_sqv_doctor->accept_doc5 = true;
    $sqvr_sqv_doctor->accept_doc6 = true;


    $sqvr_sq_assigned_orders = array();

    $sqvr_sqv_doctor->assigned_orders = $sqvr_sq_assigned_orders;

    $sqvr_sqv_doctor->name = 'Desaprome';
    $sqvr_sqv_doctor->email = 'desapromex@gmail.com';
    $sqvr_sqv_doctor->createdAt = '2022-08-30T20:50:52.223Z';
    $sqvr_sqv_doctor->updatedAt = '2022-08-30T20:57:48.222Z';


    $sqvr_sqv_doctor->birthdate = '1990-08-07T00:00:00.000Z';
    $sqvr_sqv_doctor->dial_code = '+1';

    $sqvr_sqv_doctor->enabled = 'yes';

    $sqvr_sqv_doctor->phone = '1111110010';

    $sqvr_sqv_doctor->professional_license = 'cedulunoooo';

    $sqvr_sqv_doctor->verified_doctor = 'yes';
    $sqvr_sqv_doctor->platform_one_signal = 'android';

// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true
// "assigned_orders":[]
// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"





// "roles":[{"_id":"630e2f295b9b5330f043b13c"
// "name":"doctor"
// "createdAt":"2022-08-30T15:39:21.349Z"
// "updatedAt":"2022-08-30T15:39:21.349Z"}]

    $sqvr_sq_roles = array();

    $sqvr_sq_rolrool = new \stdClass();
    $sqvr_sq_rolrool->id = '';
    $sqvr_sq_rolrool->_id = '';

    $sqvr_sq_rolrool->name = 'doctor';

    $sqvr_sq_rolrool->createdAt = '2022-08-30T20:57:51.116Z';
    $sqvr_sq_rolrool->updatedAt = '2022-08-30T20:57:51.117Z';

    $sqvr_sq_roles[] = $sqvr_sq_rolrool;


    $sqvr_sqv_doctor->roles = $sqvr_sq_roles;







    $sqvr_sq_location = new \stdClass();
// $sqvr_sq_location->id = '';
// $sqvr_sq_location->_id = '';

    $sqvr_sq_location->type = 'Point';

    $sqvr_sq_coordinatesrr = array();
    $sqvr_sq_coordinatesrr[] =-99.1317833;
    $sqvr_sq_coordinatesrr[] =19.4357167;

    $sqvr_sq_location->coordinates = $sqvr_sq_coordinatesrr;


    $sqvr_sqv_doctor->location = $sqvr_sq_location;



// "roles":[{"_id":"630e2f295b9b5330f043b13c"
// "name":"doctor"
// "createdAt":"2022-08-30T15:39:21.349Z"
// "updatedAt":"2022-08-30T15:39:21.349Z"}]
// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true
// "assigned_orders":[]
// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"

















// "doctor":{
    // "roles":[{"_id":"630e2f295b9b5330f043b13c"
    // "name":"doctor"
    // "createdAt":"2022-08-30T15:39:21.349Z"
    // "updatedAt":"2022-08-30T15:39:21.349Z"}]


// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true


// "assigned_orders":[]



// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"



// "picture":{"_id":"630e7321a7295547ccf001a9"
// "name":"634d84aa-39a0-48f1-bd8a-86853c3496c0.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:29:21.057Z"
// "updatedAt":"2022-08-30T20:29:21.057Z"}


// "doc_id_back":{"_id":"630e7351a7295547ccf001d4"
// "name":"164c37af-d40a-4d81-9d17-8f3e8735b346.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:09.109Z"
// "updatedAt":"2022-08-30T20:30:09.109Z"}


// "doc_id_front":{"_id":"630e7350a7295547ccf001d1"
// "name":"6ac2ff36-1ae6-4dc8-8123-2c0b53bae641.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:08.808Z"
// "updatedAt":"2022-08-30T20:30:08.808Z"}
// }
// 1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261
// {"crotimeo":"0.20378800 1663978520","crotimepartex":["1663978520_0","20378800_"],"crotimesubparteq1":"1663978520","crotimesubparteq0":"0_20378800","crotimesubparteq2":"","crotimesubparteq3":"","crotimesubparteqrndr":"600736709","recgresao_fn_generarlargoidvariable":"1663978520020378800600736709_1663978520_0_20378800_1_600736709_9_1_0_7_0_342_261"}
// idcrotimemocrosegs
// seudofolio=

    // this.seudofolio,
    // this.seudofecha,
    // this.seudohora,
 

    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
    $sqvr_sqpicture->type = "image";

//$resqponseqtsqtupla->prescription_urlfoto1= $sqvqrow['serverwicharchivos'].'/'.$sqvqrow['prescription_picrutafoto1'];

    //$sqvr_sqpicture->name = $resqponseqtsqtupla->prescription_urlfoto1;
	
    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.778Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.779Z';


    $sqvr_sqv_doctor->picture = $sqvr_sqpicture;






    $sqvr_sqpicture = new \stdClass();
    $sqvr_sqpicture->id = '';
    $sqvr_sqpicture->_id = '';

    $sqvr_sqpicture->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
    $sqvr_sqpicture->type = "image";

    $sqvr_sqpicture->createdAt = '2022-08-30T20:57:51.283Z';
    $sqvr_sqpicture->updatedAt = '2022-08-30T20:57:51.285Z';


    $sqvr_sqv_doctor->doc_id_back = $sqvr_sqpicture;





    $sqvr_sqpictureq = new \stdClass();
    $sqvr_sqpictureq->id = '';
    $sqvr_sqpictureq->_id = '';

    $sqvr_sqpictureq->name = "3ee73ddb-1e70-479c-aecf-95a9b1026d99.webp";
    $sqvr_sqpictureq->type = "image";

    $sqvr_sqpictureq->createdAt = '2022-08-30T20:57:51.286Z';
    $sqvr_sqpictureq->updatedAt = '2022-08-30T20:57:51.287Z';


    $sqvr_sqv_doctor->doc_id_front = $sqvr_sqpictureq;




    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;
    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;
    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;




// "picture":{"_id":"630e7321a7295547ccf001a9"
// "name":"634d84aa-39a0-48f1-bd8a-86853c3496c0.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:29:21.057Z"
// "updatedAt":"2022-08-30T20:29:21.057Z"}


// "doc_id_back":{"_id":"630e7351a7295547ccf001d4"
// "name":"164c37af-d40a-4d81-9d17-8f3e8735b346.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:09.109Z"
// "updatedAt":"2022-08-30T20:30:09.109Z"}


// "doc_id_front":{"_id":"630e7350a7295547ccf001d1"
// "name":"6ac2ff36-1ae6-4dc8-8123-2c0b53bae641.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:08.808Z"
// "updatedAt":"2022-08-30T20:30:08.808Z"}








// "doctor":{"roles":[{"_id":"630e2f295b9b5330f043b13c"
// "name":"doctor"
// "createdAt":"2022-08-30T15:39:21.349Z"
// "updatedAt":"2022-08-30T15:39:21.349Z"}]
// "accept_doc1":true
// "accept_doc2":true
// "accept_doc3":true
// "accept_doc4":true
// "accept_doc5":true
// "accept_doc6":true
// "assigned_orders":[]
// "_id":"630e58aab5b9e928201a0f91"
// "name":"Desaprome"
// "email":"desapromex@gmail.com"
// "createdAt":"2022-08-30T18:36:26.095Z"
// "updatedAt":"2022-08-30T20:46:47.264Z"
// "birthdate":"1990-08-07T00:00:00.000Z"
// "dial_code":"+1"
// "enabled":"yes"
// "phone":"1111110010"
// "professional_license":"cedulunoooo"
// "verified_doctor":"yes"
// "platform_one_signal":"android"
// "picture":{"_id":"630e7321a7295547ccf001a9"
// "name":"634d84aa-39a0-48f1-bd8a-86853c3496c0.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:29:21.057Z"
// "updatedAt":"2022-08-30T20:29:21.057Z"}
// "doc_id_back":{"_id":"630e7351a7295547ccf001d4"
// "name":"164c37af-d40a-4d81-9d17-8f3e8735b346.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:09.109Z"
// "updatedAt":"2022-08-30T20:30:09.109Z"}
// "doc_id_front":{"_id":"630e7350a7295547ccf001d1"
// "name":"6ac2ff36-1ae6-4dc8-8123-2c0b53bae641.webp"
// "type":"image"
// "createdAt":"2022-08-30T20:30:08.808Z"
// "updatedAt":"2022-08-30T20:30:08.808Z"}}



    $resqponseqtsqtupla->doctor = $sqvr_sqv_doctor;
	return $resqponseqtsqtupla;
}















if(false){
    var_dump('sq7');

// foreach ($dbh->query('SELECT id, nombre FROM tableqwdsq') as $row) {
// print $row['id'] . ': ' . $row['nombre'] . "\r\n";
// }

    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq ( id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL , nombre TEXT  NOT NULL )");

    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq2 (
id VARCHAR(199) UNIQUE  PRIMARY KEY   NOT NULL 
, nombre TEXT  NOT NULL 
)");




    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq2 (
id VARCHAR(199) UNIQUE  PRIMARY KEY   NOT NULL 
, nombre TEXT  NOT NULL 
)");


    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq3 (
id VARCHAR(199) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombre TEXT  NOT NULL 
)");



    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq4 (
id VARCHAR(199) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombre TEXT  NOT NULL 
)");


    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq8 (
id VARCHAR(300) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombre TEXT  NOT NULL 
)");
    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq9 (
id VARCHAR(299) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombre TEXT  NOT NULL 
)");

    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq70 (
id VARCHAR(500) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombre TEXT  NOT NULL 
)");
    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq71 (
id VARCHAR(500) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombre TEXT  NOT NULL 
)");

    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq77 (
id VARCHAR(500) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombre TEXT  NOT NULL 
)");

    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq78 (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombre TEXT  NOT NULL 
)");

    $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq79 (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombre TEXT  NOT NULL 
)");

//
//recgresao_fn_generarlargoidvariable
//fn_generarlargoidvariable()
//object(stdClass)#2 (3) {
//["crotimeo"]=>
//  string(21) "0.45743200 1663343599"
//["crotimepartex"]=>
//  array(2) {
//    [0]=>
//    string(12) "1663343599_0"
//    [1]=>
//    string(9) "45743200_"
//  }
//  ["recgresao_fn_generarlargoidvariable"]=>
//  string(91) "1663343599_0_45743200_1_9_1661202344_1663342331_1663343599_0_45743200_0_52565256_0_55555355"
//}





    $sqvrtqpobj = fn_generarlargoidvariable();

//$sqvrtqp_id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

    var_dump($sqvrtqpobj);
    var_dump($sqvrtqpobj);
    var_dump($sqvrtqpobj);

    $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;
//$folio = str_ireplace('.','_',$sqvrtqpobj->crotimepartex[1]) . str_ireplace('.','-',$sqvrtqpobj->crotimepartex[0]);

    $dbh->exec("INSERT INTO tableqwdsq3 (
id,nombre,idcrotimemocrosegs
) 
VALUES ( '" .$id ."'
,'" .'w777' ."'
,'" .json_encode($sqvrtqpobj) ."'
)");

    foreach ($dbh->query('SELECT id, nombre FROM tableqwdsq3') as $row) {
        print $row['id'] . ': ' . $row['nombre'] . "\r\n";
    }
    var_dump( fn_generarlargoidvariable() );

















//
//Safe Examples
//The following examples are safe:
//
//mysql_query('SET NAMES utf8');
//$var = mysql_real_escape_string("\xbf\x27 OR 1=1 /*");
//mysql_query("SELECT * FROM test WHERE name = '$var' LIMIT 1");
//Because the server's expecting utf8...

//mysql_set_charset('gbk');
//$var = mysql_real_escape_string("\xbf\x27 OR 1=1 /*");
//mysql_query("SELECT * FROM test WHERE name = '$var' LIMIT 1");
//Because we've properly set the character set so the client and the server match.
//
//$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//$pdo->query('SET NAMES gbk');
//$stmt = $pdo->prepare('SELECT * FROM test WHERE name = ? LIMIT 1');
//$stmt->execute(array("\xbf\x27 OR 1=1 /*"));
//Because we've turned off emulated prepared statements.
//
//$pdo = new PDO('mysql:host=localhost;dbname=testdb;charset=gbk', $user, $password);
//$stmt = $pdo->prepare('SELECT * FROM test WHERE name = ? LIMIT 1');
//$stmt->execute(array("\xbf\x27 OR 1=1 /*"));
//Because we've set the character set properly.
//
//$mysqli->query('SET NAMES gbk');
//$stmt = $mysqli->prepare('SELECT * FROM test WHERE name = ? LIMIT 1');
//$param = "\xbf\x27 OR 1=1 /*";
//$stmt->bind_param('s', $param);
//$stmt->execute();
//Because MySQLi does true prepared statements all the time.


//
//mysql_query('SET NAMES utf8');
//mysql_set_charset('gbk');
//$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//$pdo->query('SET NAMES gbk');
//$pdo = new PDO('mysql:host=localhost;dbname=testdb;charset=gbk', $user, $password);
//
//$mysqli->query('SET NAMES gbk');

//$pdo = new PDO('mysql:host=localhost;dbname=testdb;charset=gbk', $user, $password);
//$stmt = $pdo->prepare('SELECT * FROM test WHERE name = ? LIMIT 1');
//$stmt->execute(array("\xbf\x27 OR 1=1 /*"));
//Because we've set the character set properly.

    $sqvrtqpobj = fn_generarlargoidvariable();

//$sqvrtqp_id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

    var_dump($sqvrtqpobj);
    var_dump($sqvrtqpobj);
    var_dump($sqvrtqpobj);

    var_dump('--------------------------------------------->-------');

    $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;
//$folio = str_ireplace('.','_',$sqvrtqpobj->crotimepartex[1]) . str_ireplace('.','-',$sqvrtqpobj->crotimepartex[0]);

    $stmtq = $dbh->prepare('SELECT * FROM tableqwdsq79 WHERE id = ?  LIMIT 1');
    var_dump($stmtq);
    var_dump($stmtq->execute(array( $id   )) );
    var_dump($stmtq);
    $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

    var_dump($qresultq);

    if(count($qresultq) >= 1){
        var_dump('siencontrado');
    }
    else{
    }

    var_dump('sq----------sq-------');
    $stmt = $dbh->prepare('INSERT INTO tableqwdsq79 (
id,nombre,idcrotimemocrosegs
) 
VALUES ( 
?
,?
,?
)');
    var_dump($stmt->execute(array(
        $id
    ,'w7779'
    ,json_encode($sqvrtqpobj)
    )));

    var_dump('---------------------------------------------<');

    var_dump( fn_generarlargoidvariable() );









//
//$dbh->exec("DROP TABLE IF EXISTS  tabadccc_maestro1 ");
//
//$dbh->exec("DROP TABLE IF EXISTS  tabadccc_detalle1 ");

    $dbh->exec("CREATE TABLE IF NOT EXISTS  tabadccc_maestro1 (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombre TEXT  NOT NULL 
)");

    $dbh->exec("CREATE TABLE IF NOT EXISTS  tabadccc_detalle1 (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitolio TEXT  NOT NULL 

, id_tabadccc_maestro1 TEXT  NOT NULL 
)");

    if(true) {
        var_dump('-----------------------begin--------------------------------------------------------------------------');

        $id = '';
        for ($sqi = 0; $sqi < 1000; $sqi++) {

            $sqvrtqpobj = fn_generarlargoidvariable();

            var_dump($sqvrtqpobj);

            $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

            $stmtq = $dbh->prepare('SELECT * FROM tabadccc_maestro1 WHERE id = ?  LIMIT 1');
            var_dump($stmtq);
            var_dump($stmtq->execute(array($id)));
            var_dump($stmtq);
            $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

            var_dump($qresultq);

            if (count($qresultq) >= 1) {
                var_dump('siencontrado');
            } else {
                break;
            }
        }

        var_dump('-----------------------selec-------');

        $stmt = $dbh->prepare('INSERT INTO tabadccc_maestro1 (
id,nombre,idcrotimemocrosegs
) 
VALUES ( 
?
,?
,?
)');
        var_dump($stmt->execute(array(
            $id
        , 'w7779'
        , json_encode($sqvrtqpobj)
        )));

        var_dump('-----------------------insertado-------');
        var_dump('-----------------------insertadoq---------------'.$id);


        var_dump('-----------------------end---------------------------------------------------------');
    }





    if(true) {
        var_dump('-----------------------begin-detalle1------------------------------------------------------------------------');

        $id_tabadccc_maestro1=$id;

        $id = '';
        for ($sqi = 0; $sqi < 1000; $sqi++) {

            $sqvrtqpobj = fn_generarlargoidvariable();

            var_dump($sqvrtqpobj);

            $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

            $stmtq = $dbh->prepare('SELECT * FROM tabadccc_detalle1 WHERE id = ?  LIMIT 1');
            var_dump($stmtq);
            var_dump($stmtq->execute(array($id)));
            var_dump($stmtq);
            $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

            var_dump($qresultq);

            if (count($qresultq) >= 1) {
                var_dump('siencontrado');
            } else {
                break;
            }
        }

        var_dump('-----------------------selec-detalle1-------');

        $stmt = $dbh->prepare('INSERT INTO tabadccc_detalle1 (
id,
                               nombrqvecitolio
                               , idcrotimemocrosegs
                               ,id_tabadccc_maestro1
) 
VALUES ( 
?
,?
,?

,?
)');
        var_dump($stmt->execute(array(
            $id
        , 'w7779'
        , json_encode($sqvrtqpobj)

        ,$id_tabadccc_maestro1,
        )));

        var_dump('-----------------------insertado-detalle1-------');
        var_dump('-----------------------insertadoq-detalle1---------------'.$id);


        var_dump('-----------------------end-detalle1---------------------------------------------------------');
    }





    var_dump( '-------------master---------------' );

    foreach ($dbh->query('SELECT id, nombre FROM tabadccc_maestro1') as $row) {
        print $row['id'] . ': ' . $row['nombre'] . "\r\n";
    }


    var_dump( '------------detalle----------------' );

    foreach ($dbh->query('SELECT id, nombrqvecitolio ,id_tabadccc_maestro1 FROM tabadccc_detalle1') as $row) {
        print $row['id'] . ': ' . $row['nombrqvecitolio'] .  ' sq  '. $row['id_tabadccc_maestro1']."\r\n";
    }

    var_dump( '------------detalle--<--------------' );


    var_dump( fn_generarlargoidvariable() );

    var_dump( fn_generarlargoidvariable() );


}
























if(false){

    //drop

    if (true){
        $dbh->exec("DROP TABLE IF EXISTS  prescription_picture ");
    }

    if (true){
        $dbh->exec("DROP TABLE IF EXISTS  role ");
    }

    if (true){
        $dbh->exec("DROP TABLE IF EXISTS  multimedia_asset ");
    }


    if (true){
        $dbh->exec("DROP TABLE IF EXISTS  categoryia ");
    }

    if (true){
        $dbh->exec("DROP TABLE IF EXISTS  placelugar ");
    }

    if (true){
        $dbh->exec("DROP TABLE IF EXISTS  usuario ");
    }

    if (true){
        $dbh->exec("DROP TABLE IF EXISTS  pharmacyia ");
    }

    if (true){
        $dbh->exec("DROP TABLE IF EXISTS  recetaconsultamedica ");
    }


    if (true){
        $dbh->exec("DROP TABLE IF EXISTS  solicitudpedido ");
    }

    if (true){
        $dbh->exec("DROP TABLE IF EXISTS  presupuesto ");
    }


    if (true){
        $dbh->exec("DROP TABLE IF EXISTS  pedidoorder ");
    }
//
//$dbh->exec("CREATE TABLE IF NOT EXISTS  tabadccc_detalle1 (
//id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitolio TEXT  NOT NULL
//
//, id_tabadccc_maestro1 TEXT  NOT NULL
//)");


    if(7){

        //crear tablas

        //    ,"prescription_picture":
        //	{"_id":"630e79cfa7295547ccf005a0"
        //	,"name":"269c1981-79c2-46ae-a4af-4f2e64a73213.webp"
        //	,"type":"image"
        //	,"createdAt":"2022-08-30T20:57:51.284Z"
        //	,"updatedAt":"2022-08-30T20:57:51.284Z"
        //	}

        $dbh->exec("CREATE TABLE IF NOT EXISTS  prescription_picture (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitoliomberbre TEXT  NOT NULL 

    
, name TEXT  NOT NULL 
, type TEXT  NOT NULL 
    
,  esbotoncillobottom BOOLEAN   NOT NULL

,fecha_created  DATE NOT NULL 
,hora_created  TIME NOT NULL
,fechaqora_created  TIMESTAMP NOT NULL  

   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL 
      
   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL 
      
    
,fecha_updated  DATE NOT NULL 
,hora_updated   TIME NOT NULL 
,fechaqora_updated  TIMESTAMP NOT NULL  

,tisfingepirnrt TIMESTAMP  NOT NULL 
,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL 

,createdAt TEXT  NOT NULL 
,updatedAt TEXT  NOT NULL 
)");



        $dbh->exec("CREATE TABLE IF NOT EXISTS  role (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitoliomberbre TEXT  NOT NULL 

    
, name TEXT  NOT NULL 
, type TEXT  NOT NULL 
    
,  esbotoncillobottom BOOLEAN    NOT NULL

,fecha_created  DATE NOT NULL 
,hora_created  TIME NOT NULL
,fechaqora_created  TIMESTAMP NOT NULL  

,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL 
  
,fecha_updated  DATE NOT NULL 
,hora_updated   TIME NOT NULL 
,fechaqora_updated  TIMESTAMP NOT NULL  

,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL 
  
,tisfingepirnrt TIMESTAMP   NOT NULL 
,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL 

,createdAt TEXT  NOT NULL 
,updatedAt TEXT  NOT NULL 
)");


        $dbh->exec("CREATE TABLE IF NOT EXISTS  multimedia_asset (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitoliomberbre TEXT  NOT NULL 

    
, name TEXT  NOT NULL 
, type TEXT  NOT NULL 
    
,  esbotoncillobottom BOOLEAN   NOT NULL

,fecha_created  DATE NOT NULL 
,hora_created  TIME NOT NULL
,fechaqora_created  TIMESTAMP NOT NULL  

   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL 
      
   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL 
      
,fecha_updated  DATE NOT NULL 
,hora_updated   TIME NOT NULL 
,fechaqora_updated  TIMESTAMP NOT NULL  

,tisfingepirnrt TIMESTAMP   NOT NULL 
,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL 

,createdAt TEXT  NOT NULL 
,updatedAt TEXT  NOT NULL 
)");


        $dbh->exec("CREATE TABLE IF NOT EXISTS  categoryia (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitoliomberbre TEXT  NOT NULL 

    
  ,id_multimedia_asset___cover TEXT  NOT NULL 
    
    
, title TEXT  NOT NULL 
    
,  esbotoncillobottom BOOLEAN   NOT NULL

,fecha_created  DATE NOT NULL 
,hora_created  TIME NOT NULL
,fechaqora_created  TIMESTAMP NOT NULL  

   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL 
      
   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL 
      
,fecha_updated  DATE NOT NULL 
,hora_updated   TIME NOT NULL 
,fechaqora_updated  TIMESTAMP NOT NULL  

,tisfingepirnrt TIMESTAMP    NOT NULL 
,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL 

,createdAt TEXT  NOT NULL 
,updatedAt TEXT  NOT NULL 
)");

        //
        //  dynamic num;

        $dbh->exec("CREATE TABLE IF NOT EXISTS  placelugar (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitoliomberbre TEXT  NOT NULL 

    
, place_id TEXT  NOT NULL 
    
, formatted_address TEXT  NOT NULL 
    
, written_address TEXT  NOT NULL 
    
, city TEXT  NOT NULL 
    
, name TEXT  NOT NULL 
    
  ,lat   NUMERIC(37,19) NOT NULL 
  ,lng  NUMERIC(37,19) NOT NULL 
     

,  esbotoncillobottom BOOLEAN   NOT NULL

,fecha_created  DATE NOT NULL 
,hora_created  TIME NOT NULL
,fechaqora_created  TIMESTAMP NOT NULL  

   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL 
      
   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL 
      
,fecha_updated  DATE NOT NULL 
,hora_updated   TIME NOT NULL 
,fechaqora_updated  TIMESTAMP NOT NULL  

,tisfingepirnrt TIMESTAMP    NOT NULL 
,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL 

,createdAt TEXT  NOT NULL 
,updatedAt TEXT  NOT NULL 
)");

//,id_multimedia_asset___cover TEXT  NOT NULL
//  ,"birthdate":"1990-08-07T00:00:00.000Z",
//
//    ,id_prescription_picture  TEXT  NOT NULL
//
//,id_usuario___paciente TEXT  NOT NULL
//,id_usuario___doctor TEXT  NOT NULL
//

//
//    ,id_role
////  ,id_roles_relacion_usuario___roles
//     List<RoleModel> roles;

        $dbh->exec("CREATE TABLE IF NOT EXISTS  usuario (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitoliomberbre TEXT  NOT NULL 

  ,id_multimedia_asset___picture TEXT  NOT NULL 
    
  ,id_multimedia_asset___doc_id_front TEXT  NOT NULL 
    
  ,id_multimedia_asset___doc_id_back TEXT  NOT NULL 
    
  ,id_role TEXT  NOT NULL 
     
,id_pharmacyia___pharmacy_assigned TEXT  NOT NULL 
    
, email TEXT  NOT NULL 
 
, name TEXT  NOT NULL 
 
, tipoqusuario TEXT  NOT NULL 
 
    
, token_google TEXT  NOT NULL 

, token_facebook TEXT  NOT NULL 
 
, token_apple TEXT  NOT NULL 
 
, status TEXT  NOT NULL 

, token TEXT  NOT NULL 

, logged  BOOLEAN   NOT NULL
    
, birthdate TEXT  NOT NULL 

, gender TEXT  NOT NULL 

, phone TEXT  NOT NULL 

, dial_code TEXT  NOT NULL 

, one_signal_id TEXT  NOT NULL 

, platform_one_signal TEXT  NOT NULL 

, city TEXT  NOT NULL 

, address TEXT  NOT NULL 

, confirm_email_token TEXT  NOT NULL 

, accept_doc1  BOOLEAN   NOT NULL
, accept_doc2  BOOLEAN   NOT NULL
, accept_doc3  BOOLEAN   NOT NULL
, accept_doc4  BOOLEAN   NOT NULL
, accept_doc5  BOOLEAN   NOT NULL
, accept_doc6  BOOLEAN   NOT NULL

, enabled TEXT  NOT NULL 

  ,lat   NUMERIC(37,19) NOT NULL 
  ,long  NUMERIC(37,19) NOT NULL 
        
  ,delivery_commission  NUMERIC(19,7) NOT NULL 

, verified_doctor TEXT  NOT NULL 

, professional_license TEXT  NOT NULL 

,push_id  TEXT  NOT NULL 
    
    
    
,  esbotoncillobottom BOOLEAN   NOT NULL

,fecha_created  DATE NOT NULL 
,hora_created  TIME NOT NULL
,fechaqora_created  TIMESTAMP NOT NULL  

   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL 
      
   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL 
      
,fecha_updated  DATE NOT NULL 
,hora_updated   TIME NOT NULL 
,fechaqora_updated  TIMESTAMP NOT NULL  

,tisfingepirnrt TIMESTAMP    NOT NULL 
,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL 

,createdAt TEXT  NOT NULL 
,updatedAt TEXT  NOT NULL 
)");




        $dbh->exec("CREATE TABLE IF NOT EXISTS  pharmacyia (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitoliomberbre TEXT  NOT NULL 

 
  ,id_multimedia_asset___cover TEXT  NOT NULL 
    
  ,id_usuario___admin TEXT  NOT NULL 
    
  ,id_categoryia___category TEXT  NOT NULL 
    
  ,id_placelugar___place TEXT  NOT NULL 
    
    
    
, title TEXT  NOT NULL 
 
, approved TEXT  NOT NULL 
 
,  tax_identifier TEXT NOT NULL 
 
,  description TEXT NOT NULL 
 
, phone TEXT  NOT NULL 
 
    
, dial_code  TEXT  NOT NULL 
 
,  type_commission_store TEXT  NOT NULL 
 
,  type_commission_delivery TEXT  NOT NULL 
 
, delivery_assignment  TEXT  NOT NULL 
 
,cash_payment   TEXT  NOT NULL 
 
, tj_payment  TEXT  NOT NULL 
 

    
  ,commission_store   NUMERIC(27,9) NOT NULL 
    
  ,commission_delivery  NUMERIC(27,9) NOT NULL 
      
  ,km_delivery   NUMERIC(27,9) NOT NULL 
       
    , logged  BOOLEAN   NOT NULL
      
  ,lat   NUMERIC(37,19) NOT NULL 
  ,long  NUMERIC(37,19) NOT NULL 
      
,  esbotoncillobottom BOOLEAN   NOT NULL

,fecha_created  DATE NOT NULL 
,hora_created  TIME NOT NULL
,fechaqora_created  TIMESTAMP NOT NULL  

   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL 
      
   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL 
      
,fecha_updated  DATE NOT NULL 
,hora_updated   TIME NOT NULL 
,fechaqora_updated  TIMESTAMP NOT NULL  

,tisfingepirnrt TIMESTAMP   NOT NULL 
,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL 

,createdAt TEXT  NOT NULL 
,updatedAt TEXT  NOT NULL 
)");


//    String? created_at;
//    String? updated_at;










        //,"prescription_picture":
        //	{"_id":"630e79cfa7295547ccf005a0"
        //	,"name":"269c1981-79c2-46ae-a4af-4f2e64a73213.webp"
        //	,"type":"image"
        //	,"createdAt":"2022-08-30T20:57:51.284Z"
        //	,"updatedAt":"2022-08-30T20:57:51.284Z"
        //	}
        //
        //      'id': item.id,
        //      'name': item.name,
        //      'type': item.type,
        //      'createdAt': item.created_at,
        //      'updatedAt': item.updated_at,
        //
        //
        //prescription_picture  TEXT  NOT NULL
        //
        //
        //,"prescription_picture":
        //	{"_id":"630e79cfa7295547ccf005a0"
        //	,"name":"269c1981-79c2-46ae-a4af-4f2e64a73213.webp"
        //	,"type":"image"
        //	,"createdAt":"2022-08-30T20:57:51.284Z"
        //	,"updatedAt":"2022-08-30T20:57:51.284Z"
        //	}
//,id_prescription_picture  TEXT  NOT NULL

        $dbh->exec("CREATE TABLE IF NOT EXISTS  recetaconsultamedica (
id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitoliomberbre TEXT  NOT NULL 

, diagnosis TEXT  NOT NULL 
, prescription_text TEXT  NOT NULL 
, evolution TEXT  NOT NULL 
, id_order  TEXT  NOT NULL 
,id_pedido  TEXT  NOT NULL 

  ,id_multimedia_asset___prescription_picture TEXT  NOT NULL 
    
,id_usuario___paciente TEXT  NOT NULL 

,id_usuario___doctor TEXT  NOT NULL 

, requested_medications BOOLEAN  NOT NULL
    
,  esbotoncillobottom BOOLEAN   NOT NULL

,fecha_created  DATE NOT NULL 
,hora_created  TIME NOT NULL
,fechaqora_created  TIMESTAMP NOT NULL  

   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL 
      
   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL 
      
,fecha_updated  DATE NOT NULL 
,hora_updated   TIME NOT NULL 
,fechaqora_updated  TIMESTAMP NOT NULL  

,tisfingepirnrt TIMESTAMP    NOT NULL 
,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL 

,createdAt TEXT  NOT NULL 
,updatedAt TEXT  NOT NULL 
)");




//BudgetModel

        $dbh->exec("CREATE TABLE IF NOT EXISTS  solicitudpedido (
    id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitoliomberbre TEXT  NOT NULL 

    
, status TEXT  NOT NULL 
    
,id_recetaconsultamedica___prescription TEXT  NOT NULL 

,id_usuario___patient TEXT  NOT NULL 

,id_usuario___paciente TEXT  NOT NULL 

,id_usuario___doctor TEXT  NOT NULL 

  ,lat   NUMERIC(37,19) NOT NULL 
  ,long  NUMERIC(37,19) NOT NULL 
      

    
,  esbotoncillobottom BOOLEAN   NOT NULL

,fecha_created  DATE NOT NULL 
,hora_created  TIME NOT NULL
,fechaqora_created  TIMESTAMP NOT NULL  

   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL 
      
   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL 
      
,fecha_updated  DATE NOT NULL 
,hora_updated   TIME NOT NULL 
,fechaqora_updated  TIMESTAMP NOT NULL  

,tisfingepirnrt TIMESTAMP    NOT NULL 
,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL 

,createdAt TEXT  NOT NULL 
,updatedAt TEXT  NOT NULL 
)");


        $dbh->exec("CREATE TABLE IF NOT EXISTS  presupuesto (
    id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitoliomberbre TEXT  NOT NULL 

,id_pharmacyia___pharmacy TEXT  NOT NULL 

, cost_delivery TEXT  NOT NULL 

, cost_products TEXT  NOT NULL 

, status TEXT  NOT NULL 

   
,  esbotoncillobottom BOOLEAN   NOT NULL

,fecha_created  DATE NOT NULL 
,hora_created  TIME NOT NULL
,fechaqora_created  TIMESTAMP NOT NULL  

   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL 
      
   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL 
      
,fecha_updated  DATE NOT NULL 
,hora_updated   TIME NOT NULL 
,fechaqora_updated  TIMESTAMP NOT NULL  

,tisfingepirnrt TIMESTAMP    NOT NULL 
,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL 

,createdAt TEXT  NOT NULL 
,updatedAt TEXT  NOT NULL 
)");


        //  List<presupuestoModel>? budgets;

        $dbh->exec("CREATE TABLE IF NOT EXISTS  pedidoorder (
    id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL 
, idcrotimemocrosegs TEXT  NOT NULL 
, nombrqvecitoliomberbre TEXT  NOT NULL 
    
    
,id_pharmacyia___pharmacy TEXT  NOT NULL 

,id_placelugar___place TEXT  NOT NULL 

,id_recetaconsultamedica___prescription TEXT  NOT NULL 

,id_presupuesto___budget_accepted TEXT  NOT NULL 

,id_usuario___delivery_assigned TEXT  NOT NULL 

,id_usuario___patient TEXT  NOT NULL 

,id_solicitudpedido___solicitudpedido TEXT  NOT NULL 

,id_usuario___paciente TEXT  NOT NULL 

,id_usuario___doctor TEXT  NOT NULL 

    
    
  ,lat   NUMERIC(37,19) NOT NULL 
  ,long  NUMERIC(37,19) NOT NULL 
      
    

, status TEXT  NOT NULL 
 
, cost_delivery TEXT  NOT NULL 

, cost_products TEXT  NOT NULL 

, type_delivery TEXT  NOT NULL 
 
, type_payment TEXT  NOT NULL 
 
, comments TEXT  NOT NULL 
 
, date_send TEXT  NOT NULL 
 

    
,  esbotoncillobottom BOOLEAN   NOT NULL

,fecha_created  DATE NOT NULL 
,hora_created  TIME NOT NULL
,fechaqora_created  TIMESTAMP NOT NULL  

   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL 
      
   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL 
      
,fecha_updated  DATE NOT NULL 
,hora_updated   TIME NOT NULL 
,fechaqora_updated  TIMESTAMP NOT NULL  

,tisfingepirnrt TIMESTAMP    NOT NULL 
,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL 

,createdAt TEXT  NOT NULL 
,updatedAt TEXT  NOT NULL 
)");


    }
//
//prescription_picture
//    role
//    multimedia_asset
//    categoryia
//placelugar
//usuario
//pharmacyia



}













if(false){
    if(false) {
//super_admin

        var_dump('-----------------------begin[--------------------------------------------------------------------------');

        $id = '';
        for ($sqi = 0; $sqi < 1000; $sqi++) {

            $sqvrtqpobj = fn_generarlargoidvariable();

            var_dump($sqvrtqpobj);

            $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

            $stmtq = $dbh->prepare('SELECT * FROM role WHERE id = ?  LIMIT 1');
            var_dump($stmtq);
            var_dump($stmtq->execute(array($id)));
            var_dump($stmtq);
            $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

            var_dump($qresultq);

            if (count($qresultq) >= 1) {
                var_dump('siencontrado');
            } else {
                break;
            }
        }

        var_dump('-----------------------selec-------');


//    $id
//, 'w7779'
//, json_encode($sqvrtqpobj)
//
//
//, name TEXT  NOT NULL
//, type TEXT  NOT NULL
//
//,  esbotoncillobottom BOOLEAN   NOT NULL
//
//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL
//
//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL
//
//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ
//
//,createdAt TEXT  NOT NULL
//,updatedAt TEXT  NOT NULL
//
// role (
//     id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitoliomberbre TEXT  NOT NULL


        $sqvqeiedrr = array();


        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'id';    $sqvbjo->infociloq = $id;    $sqvqeiedrr[] = $sqvbjo;

        // $sqvrsvsqnamerr[]= 'id'; $sqvrsvbinfqorr[]= $id;

        $idcrotimemocrosegs = json_encode($sqvrtqpobj);
        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'idcrotimemocrosegs';
        $sqvbjo->infociloq = $idcrotimemocrosegs;
        $sqvqeiedrr[] = $sqvbjo;

        //  $sqvrsvsqnamerr[]= 'idcrotimemocrosegs'; $sqvrsvbinfqorr[]= $idcrotimemocrosegs;

        $nombrqvecitoliomberbre = '';
        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'nombrqvecitoliomberbre';
        $sqvbjo->infociloq = $nombrqvecitoliomberbre;
        $sqvqeiedrr[] = $sqvbjo;

        // $sqvrsvsqnamerr[]= 'nombrqvecitoliomberbre'; $sqvrsvbinfqorr[]= $nombrqvecitoliomberbre;


        $name = 'super_admin';

        $sqvbjo = new \stdClass();
        $sqvbjo->nameciloq = 'name';
        $sqvbjo->infociloq = $name;
        $sqvqeiedrr[] = $sqvbjo;

        //  $sqvrsvsqnamerr[]= 'name'; $sqvrsvbinfqorr[]= $name;

        $type = '';
        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;

        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;


        $esbotoncillobottom = false;
        //   $esbotoncillobottom = 0;

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'esbotoncillobottom'; $sqvbjo->infociloq = $esbotoncillobottom; $sqvqeiedrr[] = $sqvbjo;

        //  $sqvrsvsqnamerr[]= 'esbotoncillobottom'; $sqvrsvbinfqorr[]= $esbotoncillobottom;



//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL

        $fecha_created = date("Y-m-d");
        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_created'; $sqvbjo->infociloq = $fecha_created; $sqvqeiedrr[] = $sqvbjo;

        //$sqvrsvsqnamerr[]= 'fecha_created'; $sqvrsvbinfqorr[]= $fecha_created;

        $hora_created = date("H:i:s");
        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_created'; $sqvbjo->infociloq = $hora_created; $sqvqeiedrr[] = $sqvbjo;

        // $sqvrsvsqnamerr[]= 'hora_created'; $sqvrsvbinfqorr[]= $hora_created;

        $fechaqora_created = date("Y-m-d H:i:s");
        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_created'; $sqvbjo->infociloq = $fechaqora_created; $sqvqeiedrr[] = $sqvbjo;

        //$sqvrsvsqnamerr[]= 'fechaqora_created'; $sqvrsvbinfqorr[]= $fechaqora_created;


        require('fninc_fn_gen_curdateicrovarinfo.php');

        $fechaqoraicrotieime_created =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_created'; $sqvbjo->infociloq = $fechaqoraicrotieime_created; $sqvqeiedrr[] = $sqvbjo;

        //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_created'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_created;

        //,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL



//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL


        $fecha_updated =date("Y-m-d");

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_updated'; $sqvbjo->infociloq = $fecha_updated; $sqvqeiedrr[] = $sqvbjo;

        //   $sqvrsvsqnamerr[]= 'fecha_updated'; $sqvrsvbinfqorr[]= $fecha_updated;

        $hora_updated =date("H:i:s");

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_updated'; $sqvbjo->infociloq = $hora_updated; $sqvqeiedrr[] = $sqvbjo;

        // $sqvrsvsqnamerr[]= 'hora_updated'; $sqvrsvbinfqorr[]= $hora_updated;


        $fechaqora_updated = date("Y-m-d H:i:s");


        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_updated'; $sqvbjo->infociloq = $fechaqora_updated; $sqvqeiedrr[] = $sqvbjo;

// $sqvrsvsqnamerr[]= 'fechaqora_updated'; $sqvrsvbinfqorr[]= $fechaqora_updated;


        require('fninc_fn_gen_curdateicrovarinfo.php');

        $fechaqoraicrotieime_updated =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_updated'; $sqvbjo->infociloq = $fechaqoraicrotieime_updated; $sqvqeiedrr[] = $sqvbjo;

        //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_updated'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_updated;


        // ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL




//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ

        $tisfingepirnrt =date("Y-m-d H:i:s");

        $tistzfingepirnrtz =date("Y-m-d H:i:s");

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tisfingepirnrt'; $sqvbjo->infociloq = $tisfingepirnrt; $sqvqeiedrr[] = $sqvbjo;

        // $sqvrsvsqnamerr[]= 'tisfingepirnrt'; $sqvrsvbinfqorr[]= $tisfingepirnrt;

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tistzfingepirnrtz'; $sqvbjo->infociloq = $tistzfingepirnrtz; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'tistzfingepirnrtz'; $sqvrsvbinfqorr[]= $tistzfingepirnrtz;









//
//    $sqsddvvbbggtime = time();
//
//$segiuioundo = date("s", $sqsddvvbbggtime);
//
//$miniuto = date("i", $sqsddvvbbggtime);
//
//$hororoia = date("H", $sqsddvvbbggtime);
//
//$diaiaia = date("d", $sqsddvvbbggtime);
//$meies = date("m", $sqsddvvbbggtime);
//$anioioio = date("Y", $sqsddvvbbggtime);
//
//$sqdvbmicro_date = microtime(false);
//$sqdvvdate_array = explode(" ", $sqdvbmicro_date);
//$date = date("Y-m-d H:i:s", $sqdvvdate_array[1]);
////echo "Date: $date:" . $sqdvvdate_array[0]."<br>";
//
//var_dump($sqdvbmicro_date);
//$milisiesiecons = $sqdvvdate_array[0];


//$updatedAt = $anioioio.'-'.$meies.'-'$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';



//date("Y-m-d H:i:s")

        //	,"createdAt":"2022-08-30T20:57:51.284Z"
        //	,"updatedAt":"2022-08-30T20:57:51.284Z"
//
//$createdAt = ;
//
//$updatedAt = ;

        require('fninc_fn_gen_curdateicrovarinfo.php');

        $createdAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';


        require('fninc_fn_gen_curdateicrovarinfo.php');

        $updatedAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'createdAt'; $sqvbjo->infociloq = $createdAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'createdAt'; $sqvrsvbinfqorr[]= $createdAt;

        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'updatedAt'; $sqvbjo->infociloq = $updatedAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'updatedAt'; $sqvrsvbinfqorr[]= $updatedAt;




        $sqvrsqdvbsdqsvvs = '';
        for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
            $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
        }
        $sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

        var_dump($sqvrsqdvbsdqsvvs);

        $sqvrsqdpdpqpsp = '';
        for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
            $sqvrsqdpdpqpsp .= '?' . ',';
        }
        $sqvrsqdpdpqpsp = substr($sqvrsqdpdpqpsp, 0, strlen($sqvrsqdpdpqpsp) - 1);

        var_dump($sqvrsqdpdpqpsp);

//$sqvrsqdvbsdqsvvs = '';
//for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
//    $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
//}
//$sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

        var_dump($sqvrsqdvbsdqsvvs);

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




        $stmt = $dbh->prepare("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

        var_dump($stmt);
        var_dump("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

        $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

        var_dump($reqscsult);


        var_dump('-----------------------insertado-------');
        var_dump('-----------------------insertadoq---------------' . $id);


        var_dump('-----------------------end]--------------------------------------------------------------------------');

    }







}









if(false){
    //initrole useradmin
//delivery
//pharmacy_admin
//client
// super_admin
//admin
//doctor

    if (true){
        if(true) {
//super_admin

            var_dump('-----------------------begin[--------------------------------------------------------------------------');

            $id = '';
            for ($sqi = 0; $sqi < 1000; $sqi++) {

                $sqvrtqpobj = fn_generarlargoidvariable();

                var_dump($sqvrtqpobj);

                $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

                $stmtq = $dbh->prepare('SELECT * FROM role WHERE id = ?  LIMIT 1');
                var_dump($stmtq);
                var_dump($stmtq->execute(array($id)));
                var_dump($stmtq);
                $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

                var_dump($qresultq);

                if (count($qresultq) >= 1) {
                    var_dump('siencontrado');
                } else {
                    break;
                }
            }

            var_dump('-----------------------selec-------');


//    $id
//, 'w7779'
//, json_encode($sqvrtqpobj)
//
//
//, name TEXT  NOT NULL
//, type TEXT  NOT NULL
//
//,  esbotoncillobottom BOOLEAN   NOT NULL
//
//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL
//
//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL
//
//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ
//
//,createdAt TEXT  NOT NULL
//,updatedAt TEXT  NOT NULL
//
// role (
//     id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitoliomberbre TEXT  NOT NULL


            $sqvqeiedrr = array();


            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'id';    $sqvbjo->infociloq = $id;    $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'id'; $sqvrsvbinfqorr[]= $id;

            $idcrotimemocrosegs = json_encode($sqvrtqpobj);
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'idcrotimemocrosegs';
            $sqvbjo->infociloq = $idcrotimemocrosegs;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'idcrotimemocrosegs'; $sqvrsvbinfqorr[]= $idcrotimemocrosegs;

            $nombrqvecitoliomberbre = '';
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'nombrqvecitoliomberbre';
            $sqvbjo->infociloq = $nombrqvecitoliomberbre;
            $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'nombrqvecitoliomberbre'; $sqvrsvbinfqorr[]= $nombrqvecitoliomberbre;


            $name = 'delivery';

            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'name';
            $sqvbjo->infociloq = $name;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'name'; $sqvrsvbinfqorr[]= $name;

            $type = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;


            $esbotoncillobottom = false;
            //   $esbotoncillobottom = 0;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'esbotoncillobottom'; $sqvbjo->infociloq = $esbotoncillobottom; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'esbotoncillobottom'; $sqvrsvbinfqorr[]= $esbotoncillobottom;



//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL

            $fecha_created = date("Y-m-d");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_created'; $sqvbjo->infociloq = $fecha_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fecha_created'; $sqvrsvbinfqorr[]= $fecha_created;

            $hora_created = date("H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_created'; $sqvbjo->infociloq = $hora_created; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_created'; $sqvrsvbinfqorr[]= $hora_created;

            $fechaqora_created = date("Y-m-d H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_created'; $sqvbjo->infociloq = $fechaqora_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqora_created'; $sqvrsvbinfqorr[]= $fechaqora_created;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_created =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_created'; $sqvbjo->infociloq = $fechaqoraicrotieime_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_created'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_created;

            //,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL



//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL


            $fecha_updated =date("Y-m-d");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_updated'; $sqvbjo->infociloq = $fecha_updated; $sqvqeiedrr[] = $sqvbjo;

            //   $sqvrsvsqnamerr[]= 'fecha_updated'; $sqvrsvbinfqorr[]= $fecha_updated;

            $hora_updated =date("H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_updated'; $sqvbjo->infociloq = $hora_updated; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_updated'; $sqvrsvbinfqorr[]= $hora_updated;


            $fechaqora_updated = date("Y-m-d H:i:s");


            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_updated'; $sqvbjo->infociloq = $fechaqora_updated; $sqvqeiedrr[] = $sqvbjo;

// $sqvrsvsqnamerr[]= 'fechaqora_updated'; $sqvrsvbinfqorr[]= $fechaqora_updated;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_updated =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_updated'; $sqvbjo->infociloq = $fechaqoraicrotieime_updated; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_updated'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_updated;


            // ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL




//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ

            $tisfingepirnrt =date("Y-m-d H:i:s");

            $tistzfingepirnrtz =date("Y-m-d H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tisfingepirnrt'; $sqvbjo->infociloq = $tisfingepirnrt; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'tisfingepirnrt'; $sqvrsvbinfqorr[]= $tisfingepirnrt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tistzfingepirnrtz'; $sqvbjo->infociloq = $tistzfingepirnrtz; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'tistzfingepirnrtz'; $sqvrsvbinfqorr[]= $tistzfingepirnrtz;









//
//    $sqsddvvbbggtime = time();
//
//$segiuioundo = date("s", $sqsddvvbbggtime);
//
//$miniuto = date("i", $sqsddvvbbggtime);
//
//$hororoia = date("H", $sqsddvvbbggtime);
//
//$diaiaia = date("d", $sqsddvvbbggtime);
//$meies = date("m", $sqsddvvbbggtime);
//$anioioio = date("Y", $sqsddvvbbggtime);
//
//$sqdvbmicro_date = microtime(false);
//$sqdvvdate_array = explode(" ", $sqdvbmicro_date);
//$date = date("Y-m-d H:i:s", $sqdvvdate_array[1]);
////echo "Date: $date:" . $sqdvvdate_array[0]."<br>";
//
//var_dump($sqdvbmicro_date);
//$milisiesiecons = $sqdvvdate_array[0];


//$updatedAt = $anioioio.'-'.$meies.'-'$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';



//date("Y-m-d H:i:s")

            //	,"createdAt":"2022-08-30T20:57:51.284Z"
            //	,"updatedAt":"2022-08-30T20:57:51.284Z"
//
//$createdAt = ;
//
//$updatedAt = ;

            require('fninc_fn_gen_curdateicrovarinfo.php');

            $createdAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $updatedAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'createdAt'; $sqvbjo->infociloq = $createdAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'createdAt'; $sqvrsvbinfqorr[]= $createdAt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'updatedAt'; $sqvbjo->infociloq = $updatedAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'updatedAt'; $sqvrsvbinfqorr[]= $updatedAt;




            $sqvrsqdvbsdqsvvs = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
            }
            $sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

            $sqvrsqdpdpqpsp = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdpdpqpsp .= '?' . ',';
            }
            $sqvrsqdpdpqpsp = substr($sqvrsqdpdpqpsp, 0, strlen($sqvrsqdpdpqpsp) - 1);

            var_dump($sqvrsqdpdpqpsp);

//$sqvrsqdvbsdqsvvs = '';
//for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
//    $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
//}
//$sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

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




            $stmt = $dbh->prepare("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            var_dump($stmt);
            var_dump("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

            var_dump($reqscsult);


            var_dump('-----------------------insertado-------');
            var_dump('-----------------------insertadoq---------------' . $id);


            var_dump('-----------------------end]--------------------------------------------------------------------------');

        }

        if(true) {
//super_admin

            var_dump('-----------------------begin[--------------------------------------------------------------------------');

            $id = '';
            for ($sqi = 0; $sqi < 1000; $sqi++) {

                $sqvrtqpobj = fn_generarlargoidvariable();

                var_dump($sqvrtqpobj);

                $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

                $stmtq = $dbh->prepare('SELECT * FROM role WHERE id = ?  LIMIT 1');
                var_dump($stmtq);
                var_dump($stmtq->execute(array($id)));
                var_dump($stmtq);
                $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

                var_dump($qresultq);

                if (count($qresultq) >= 1) {
                    var_dump('siencontrado');
                } else {
                    break;
                }
            }

            var_dump('-----------------------selec-------');


//    $id
//, 'w7779'
//, json_encode($sqvrtqpobj)
//
//
//, name TEXT  NOT NULL
//, type TEXT  NOT NULL
//
//,  esbotoncillobottom BOOLEAN   NOT NULL
//
//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL
//
//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL
//
//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ
//
//,createdAt TEXT  NOT NULL
//,updatedAt TEXT  NOT NULL
//
// role (
//     id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitoliomberbre TEXT  NOT NULL


            $sqvqeiedrr = array();


            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'id';    $sqvbjo->infociloq = $id;    $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'id'; $sqvrsvbinfqorr[]= $id;

            $idcrotimemocrosegs = json_encode($sqvrtqpobj);
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'idcrotimemocrosegs';
            $sqvbjo->infociloq = $idcrotimemocrosegs;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'idcrotimemocrosegs'; $sqvrsvbinfqorr[]= $idcrotimemocrosegs;

            $nombrqvecitoliomberbre = '';
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'nombrqvecitoliomberbre';
            $sqvbjo->infociloq = $nombrqvecitoliomberbre;
            $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'nombrqvecitoliomberbre'; $sqvrsvbinfqorr[]= $nombrqvecitoliomberbre;


            $name = 'pharmacy_admin';

            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'name';
            $sqvbjo->infociloq = $name;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'name'; $sqvrsvbinfqorr[]= $name;

            $type = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;


            $esbotoncillobottom = false;
            //   $esbotoncillobottom = 0;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'esbotoncillobottom'; $sqvbjo->infociloq = $esbotoncillobottom; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'esbotoncillobottom'; $sqvrsvbinfqorr[]= $esbotoncillobottom;



//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL

            $fecha_created = date("Y-m-d");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_created'; $sqvbjo->infociloq = $fecha_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fecha_created'; $sqvrsvbinfqorr[]= $fecha_created;

            $hora_created = date("H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_created'; $sqvbjo->infociloq = $hora_created; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_created'; $sqvrsvbinfqorr[]= $hora_created;

            $fechaqora_created = date("Y-m-d H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_created'; $sqvbjo->infociloq = $fechaqora_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqora_created'; $sqvrsvbinfqorr[]= $fechaqora_created;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_created =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_created'; $sqvbjo->infociloq = $fechaqoraicrotieime_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_created'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_created;

            //,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL



//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL


            $fecha_updated =date("Y-m-d");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_updated'; $sqvbjo->infociloq = $fecha_updated; $sqvqeiedrr[] = $sqvbjo;

            //   $sqvrsvsqnamerr[]= 'fecha_updated'; $sqvrsvbinfqorr[]= $fecha_updated;

            $hora_updated =date("H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_updated'; $sqvbjo->infociloq = $hora_updated; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_updated'; $sqvrsvbinfqorr[]= $hora_updated;


            $fechaqora_updated = date("Y-m-d H:i:s");


            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_updated'; $sqvbjo->infociloq = $fechaqora_updated; $sqvqeiedrr[] = $sqvbjo;

// $sqvrsvsqnamerr[]= 'fechaqora_updated'; $sqvrsvbinfqorr[]= $fechaqora_updated;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_updated =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_updated'; $sqvbjo->infociloq = $fechaqoraicrotieime_updated; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_updated'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_updated;


            // ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL




//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ

            $tisfingepirnrt =date("Y-m-d H:i:s");

            $tistzfingepirnrtz =date("Y-m-d H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tisfingepirnrt'; $sqvbjo->infociloq = $tisfingepirnrt; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'tisfingepirnrt'; $sqvrsvbinfqorr[]= $tisfingepirnrt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tistzfingepirnrtz'; $sqvbjo->infociloq = $tistzfingepirnrtz; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'tistzfingepirnrtz'; $sqvrsvbinfqorr[]= $tistzfingepirnrtz;









//
//    $sqsddvvbbggtime = time();
//
//$segiuioundo = date("s", $sqsddvvbbggtime);
//
//$miniuto = date("i", $sqsddvvbbggtime);
//
//$hororoia = date("H", $sqsddvvbbggtime);
//
//$diaiaia = date("d", $sqsddvvbbggtime);
//$meies = date("m", $sqsddvvbbggtime);
//$anioioio = date("Y", $sqsddvvbbggtime);
//
//$sqdvbmicro_date = microtime(false);
//$sqdvvdate_array = explode(" ", $sqdvbmicro_date);
//$date = date("Y-m-d H:i:s", $sqdvvdate_array[1]);
////echo "Date: $date:" . $sqdvvdate_array[0]."<br>";
//
//var_dump($sqdvbmicro_date);
//$milisiesiecons = $sqdvvdate_array[0];


//$updatedAt = $anioioio.'-'.$meies.'-'$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';



//date("Y-m-d H:i:s")

            //	,"createdAt":"2022-08-30T20:57:51.284Z"
            //	,"updatedAt":"2022-08-30T20:57:51.284Z"
//
//$createdAt = ;
//
//$updatedAt = ;

            require('fninc_fn_gen_curdateicrovarinfo.php');

            $createdAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $updatedAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'createdAt'; $sqvbjo->infociloq = $createdAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'createdAt'; $sqvrsvbinfqorr[]= $createdAt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'updatedAt'; $sqvbjo->infociloq = $updatedAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'updatedAt'; $sqvrsvbinfqorr[]= $updatedAt;




            $sqvrsqdvbsdqsvvs = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
            }
            $sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

            $sqvrsqdpdpqpsp = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdpdpqpsp .= '?' . ',';
            }
            $sqvrsqdpdpqpsp = substr($sqvrsqdpdpqpsp, 0, strlen($sqvrsqdpdpqpsp) - 1);

            var_dump($sqvrsqdpdpqpsp);

//$sqvrsqdvbsdqsvvs = '';
//for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
//    $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
//}
//$sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

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




            $stmt = $dbh->prepare("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            var_dump($stmt);
            var_dump("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

            var_dump($reqscsult);


            var_dump('-----------------------insertado-------');
            var_dump('-----------------------insertadoq---------------' . $id);


            var_dump('-----------------------end]--------------------------------------------------------------------------');

        }

        if(true) {
//super_admin

            var_dump('-----------------------begin[--------------------------------------------------------------------------');

            $id = '';
            for ($sqi = 0; $sqi < 1000; $sqi++) {

                $sqvrtqpobj = fn_generarlargoidvariable();

                var_dump($sqvrtqpobj);

                $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

                $stmtq = $dbh->prepare('SELECT * FROM role WHERE id = ?  LIMIT 1');
                var_dump($stmtq);
                var_dump($stmtq->execute(array($id)));
                var_dump($stmtq);
                $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

                var_dump($qresultq);

                if (count($qresultq) >= 1) {
                    var_dump('siencontrado');
                } else {
                    break;
                }
            }

            var_dump('-----------------------selec-------');


//    $id
//, 'w7779'
//, json_encode($sqvrtqpobj)
//
//
//, name TEXT  NOT NULL
//, type TEXT  NOT NULL
//
//,  esbotoncillobottom BOOLEAN   NOT NULL
//
//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL
//
//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL
//
//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ
//
//,createdAt TEXT  NOT NULL
//,updatedAt TEXT  NOT NULL
//
// role (
//     id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitoliomberbre TEXT  NOT NULL


            $sqvqeiedrr = array();


            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'id';    $sqvbjo->infociloq = $id;    $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'id'; $sqvrsvbinfqorr[]= $id;

            $idcrotimemocrosegs = json_encode($sqvrtqpobj);
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'idcrotimemocrosegs';
            $sqvbjo->infociloq = $idcrotimemocrosegs;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'idcrotimemocrosegs'; $sqvrsvbinfqorr[]= $idcrotimemocrosegs;

            $nombrqvecitoliomberbre = '';
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'nombrqvecitoliomberbre';
            $sqvbjo->infociloq = $nombrqvecitoliomberbre;
            $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'nombrqvecitoliomberbre'; $sqvrsvbinfqorr[]= $nombrqvecitoliomberbre;


            $name = 'client';

            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'name';
            $sqvbjo->infociloq = $name;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'name'; $sqvrsvbinfqorr[]= $name;

            $type = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;


            $esbotoncillobottom = false;
            //   $esbotoncillobottom = 0;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'esbotoncillobottom'; $sqvbjo->infociloq = $esbotoncillobottom; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'esbotoncillobottom'; $sqvrsvbinfqorr[]= $esbotoncillobottom;



//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL

            $fecha_created = date("Y-m-d");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_created'; $sqvbjo->infociloq = $fecha_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fecha_created'; $sqvrsvbinfqorr[]= $fecha_created;

            $hora_created = date("H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_created'; $sqvbjo->infociloq = $hora_created; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_created'; $sqvrsvbinfqorr[]= $hora_created;

            $fechaqora_created = date("Y-m-d H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_created'; $sqvbjo->infociloq = $fechaqora_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqora_created'; $sqvrsvbinfqorr[]= $fechaqora_created;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_created =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_created'; $sqvbjo->infociloq = $fechaqoraicrotieime_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_created'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_created;

            //,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL



//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL


            $fecha_updated =date("Y-m-d");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_updated'; $sqvbjo->infociloq = $fecha_updated; $sqvqeiedrr[] = $sqvbjo;

            //   $sqvrsvsqnamerr[]= 'fecha_updated'; $sqvrsvbinfqorr[]= $fecha_updated;

            $hora_updated =date("H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_updated'; $sqvbjo->infociloq = $hora_updated; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_updated'; $sqvrsvbinfqorr[]= $hora_updated;


            $fechaqora_updated = date("Y-m-d H:i:s");


            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_updated'; $sqvbjo->infociloq = $fechaqora_updated; $sqvqeiedrr[] = $sqvbjo;

// $sqvrsvsqnamerr[]= 'fechaqora_updated'; $sqvrsvbinfqorr[]= $fechaqora_updated;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_updated =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_updated'; $sqvbjo->infociloq = $fechaqoraicrotieime_updated; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_updated'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_updated;


            // ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL




//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ

            $tisfingepirnrt =date("Y-m-d H:i:s");

            $tistzfingepirnrtz =date("Y-m-d H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tisfingepirnrt'; $sqvbjo->infociloq = $tisfingepirnrt; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'tisfingepirnrt'; $sqvrsvbinfqorr[]= $tisfingepirnrt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tistzfingepirnrtz'; $sqvbjo->infociloq = $tistzfingepirnrtz; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'tistzfingepirnrtz'; $sqvrsvbinfqorr[]= $tistzfingepirnrtz;









//
//    $sqsddvvbbggtime = time();
//
//$segiuioundo = date("s", $sqsddvvbbggtime);
//
//$miniuto = date("i", $sqsddvvbbggtime);
//
//$hororoia = date("H", $sqsddvvbbggtime);
//
//$diaiaia = date("d", $sqsddvvbbggtime);
//$meies = date("m", $sqsddvvbbggtime);
//$anioioio = date("Y", $sqsddvvbbggtime);
//
//$sqdvbmicro_date = microtime(false);
//$sqdvvdate_array = explode(" ", $sqdvbmicro_date);
//$date = date("Y-m-d H:i:s", $sqdvvdate_array[1]);
////echo "Date: $date:" . $sqdvvdate_array[0]."<br>";
//
//var_dump($sqdvbmicro_date);
//$milisiesiecons = $sqdvvdate_array[0];


//$updatedAt = $anioioio.'-'.$meies.'-'$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';



//date("Y-m-d H:i:s")

            //	,"createdAt":"2022-08-30T20:57:51.284Z"
            //	,"updatedAt":"2022-08-30T20:57:51.284Z"
//
//$createdAt = ;
//
//$updatedAt = ;

            require('fninc_fn_gen_curdateicrovarinfo.php');

            $createdAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $updatedAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'createdAt'; $sqvbjo->infociloq = $createdAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'createdAt'; $sqvrsvbinfqorr[]= $createdAt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'updatedAt'; $sqvbjo->infociloq = $updatedAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'updatedAt'; $sqvrsvbinfqorr[]= $updatedAt;




            $sqvrsqdvbsdqsvvs = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
            }
            $sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

            $sqvrsqdpdpqpsp = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdpdpqpsp .= '?' . ',';
            }
            $sqvrsqdpdpqpsp = substr($sqvrsqdpdpqpsp, 0, strlen($sqvrsqdpdpqpsp) - 1);

            var_dump($sqvrsqdpdpqpsp);

//$sqvrsqdvbsdqsvvs = '';
//for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
//    $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
//}
//$sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

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




            $stmt = $dbh->prepare("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            var_dump($stmt);
            var_dump("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

            var_dump($reqscsult);


            var_dump('-----------------------insertado-------');
            var_dump('-----------------------insertadoq---------------' . $id);


            var_dump('-----------------------end]--------------------------------------------------------------------------');

        }

        if(true) {
//super_admin

            var_dump('-----------------------begin[--------------------------------------------------------------------------');

            $id = '';
            for ($sqi = 0; $sqi < 1000; $sqi++) {

                $sqvrtqpobj = fn_generarlargoidvariable();

                var_dump($sqvrtqpobj);

                $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

                $stmtq = $dbh->prepare('SELECT * FROM role WHERE id = ?  LIMIT 1');
                var_dump($stmtq);
                var_dump($stmtq->execute(array($id)));
                var_dump($stmtq);
                $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

                var_dump($qresultq);

                if (count($qresultq) >= 1) {
                    var_dump('siencontrado');
                } else {
                    break;
                }
            }

            var_dump('-----------------------selec-------');


//    $id
//, 'w7779'
//, json_encode($sqvrtqpobj)
//
//
//, name TEXT  NOT NULL
//, type TEXT  NOT NULL
//
//,  esbotoncillobottom BOOLEAN   NOT NULL
//
//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL
//
//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL
//
//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ
//
//,createdAt TEXT  NOT NULL
//,updatedAt TEXT  NOT NULL
//
// role (
//     id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitoliomberbre TEXT  NOT NULL


            $sqvqeiedrr = array();


            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'id';    $sqvbjo->infociloq = $id;    $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'id'; $sqvrsvbinfqorr[]= $id;

            $idcrotimemocrosegs = json_encode($sqvrtqpobj);
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'idcrotimemocrosegs';
            $sqvbjo->infociloq = $idcrotimemocrosegs;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'idcrotimemocrosegs'; $sqvrsvbinfqorr[]= $idcrotimemocrosegs;

            $nombrqvecitoliomberbre = '';
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'nombrqvecitoliomberbre';
            $sqvbjo->infociloq = $nombrqvecitoliomberbre;
            $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'nombrqvecitoliomberbre'; $sqvrsvbinfqorr[]= $nombrqvecitoliomberbre;


            $name = 'super_admin';

            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'name';
            $sqvbjo->infociloq = $name;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'name'; $sqvrsvbinfqorr[]= $name;

            $type = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;


            $esbotoncillobottom = false;
            //   $esbotoncillobottom = 0;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'esbotoncillobottom'; $sqvbjo->infociloq = $esbotoncillobottom; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'esbotoncillobottom'; $sqvrsvbinfqorr[]= $esbotoncillobottom;



//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL

            $fecha_created = date("Y-m-d");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_created'; $sqvbjo->infociloq = $fecha_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fecha_created'; $sqvrsvbinfqorr[]= $fecha_created;

            $hora_created = date("H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_created'; $sqvbjo->infociloq = $hora_created; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_created'; $sqvrsvbinfqorr[]= $hora_created;

            $fechaqora_created = date("Y-m-d H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_created'; $sqvbjo->infociloq = $fechaqora_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqora_created'; $sqvrsvbinfqorr[]= $fechaqora_created;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_created =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_created'; $sqvbjo->infociloq = $fechaqoraicrotieime_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_created'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_created;

            //,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL



//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL


            $fecha_updated =date("Y-m-d");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_updated'; $sqvbjo->infociloq = $fecha_updated; $sqvqeiedrr[] = $sqvbjo;

            //   $sqvrsvsqnamerr[]= 'fecha_updated'; $sqvrsvbinfqorr[]= $fecha_updated;

            $hora_updated =date("H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_updated'; $sqvbjo->infociloq = $hora_updated; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_updated'; $sqvrsvbinfqorr[]= $hora_updated;


            $fechaqora_updated = date("Y-m-d H:i:s");


            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_updated'; $sqvbjo->infociloq = $fechaqora_updated; $sqvqeiedrr[] = $sqvbjo;

// $sqvrsvsqnamerr[]= 'fechaqora_updated'; $sqvrsvbinfqorr[]= $fechaqora_updated;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_updated =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_updated'; $sqvbjo->infociloq = $fechaqoraicrotieime_updated; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_updated'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_updated;


            // ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL




//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ

            $tisfingepirnrt =date("Y-m-d H:i:s");

            $tistzfingepirnrtz =date("Y-m-d H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tisfingepirnrt'; $sqvbjo->infociloq = $tisfingepirnrt; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'tisfingepirnrt'; $sqvrsvbinfqorr[]= $tisfingepirnrt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tistzfingepirnrtz'; $sqvbjo->infociloq = $tistzfingepirnrtz; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'tistzfingepirnrtz'; $sqvrsvbinfqorr[]= $tistzfingepirnrtz;









//
//    $sqsddvvbbggtime = time();
//
//$segiuioundo = date("s", $sqsddvvbbggtime);
//
//$miniuto = date("i", $sqsddvvbbggtime);
//
//$hororoia = date("H", $sqsddvvbbggtime);
//
//$diaiaia = date("d", $sqsddvvbbggtime);
//$meies = date("m", $sqsddvvbbggtime);
//$anioioio = date("Y", $sqsddvvbbggtime);
//
//$sqdvbmicro_date = microtime(false);
//$sqdvvdate_array = explode(" ", $sqdvbmicro_date);
//$date = date("Y-m-d H:i:s", $sqdvvdate_array[1]);
////echo "Date: $date:" . $sqdvvdate_array[0]."<br>";
//
//var_dump($sqdvbmicro_date);
//$milisiesiecons = $sqdvvdate_array[0];


//$updatedAt = $anioioio.'-'.$meies.'-'$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';



//date("Y-m-d H:i:s")

            //	,"createdAt":"2022-08-30T20:57:51.284Z"
            //	,"updatedAt":"2022-08-30T20:57:51.284Z"
//
//$createdAt = ;
//
//$updatedAt = ;

            require('fninc_fn_gen_curdateicrovarinfo.php');

            $createdAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $updatedAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'createdAt'; $sqvbjo->infociloq = $createdAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'createdAt'; $sqvrsvbinfqorr[]= $createdAt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'updatedAt'; $sqvbjo->infociloq = $updatedAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'updatedAt'; $sqvrsvbinfqorr[]= $updatedAt;




            $sqvrsqdvbsdqsvvs = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
            }
            $sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

            $sqvrsqdpdpqpsp = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdpdpqpsp .= '?' . ',';
            }
            $sqvrsqdpdpqpsp = substr($sqvrsqdpdpqpsp, 0, strlen($sqvrsqdpdpqpsp) - 1);

            var_dump($sqvrsqdpdpqpsp);

//$sqvrsqdvbsdqsvvs = '';
//for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
//    $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
//}
//$sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

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




            $stmt = $dbh->prepare("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            var_dump($stmt);
            var_dump("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

            var_dump($reqscsult);


            var_dump('-----------------------insertado-------');
            var_dump('-----------------------insertadoq---------------' . $id);


            var_dump('-----------------------end]--------------------------------------------------------------------------');

        }

        if(true) {
//super_admin

            var_dump('-----------------------begin[--------------------------------------------------------------------------');

            $id = '';
            for ($sqi = 0; $sqi < 1000; $sqi++) {

                $sqvrtqpobj = fn_generarlargoidvariable();

                var_dump($sqvrtqpobj);

                $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

                $stmtq = $dbh->prepare('SELECT * FROM role WHERE id = ?  LIMIT 1');
                var_dump($stmtq);
                var_dump($stmtq->execute(array($id)));
                var_dump($stmtq);
                $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

                var_dump($qresultq);

                if (count($qresultq) >= 1) {
                    var_dump('siencontrado');
                } else {
                    break;
                }
            }

            var_dump('-----------------------selec-------');


//    $id
//, 'w7779'
//, json_encode($sqvrtqpobj)
//
//
//, name TEXT  NOT NULL
//, type TEXT  NOT NULL
//
//,  esbotoncillobottom BOOLEAN   NOT NULL
//
//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL
//
//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL
//
//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ
//
//,createdAt TEXT  NOT NULL
//,updatedAt TEXT  NOT NULL
//
// role (
//     id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitoliomberbre TEXT  NOT NULL


            $sqvqeiedrr = array();


            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'id';    $sqvbjo->infociloq = $id;    $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'id'; $sqvrsvbinfqorr[]= $id;

            $idcrotimemocrosegs = json_encode($sqvrtqpobj);
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'idcrotimemocrosegs';
            $sqvbjo->infociloq = $idcrotimemocrosegs;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'idcrotimemocrosegs'; $sqvrsvbinfqorr[]= $idcrotimemocrosegs;

            $nombrqvecitoliomberbre = '';
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'nombrqvecitoliomberbre';
            $sqvbjo->infociloq = $nombrqvecitoliomberbre;
            $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'nombrqvecitoliomberbre'; $sqvrsvbinfqorr[]= $nombrqvecitoliomberbre;


            $name = 'admin';

            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'name';
            $sqvbjo->infociloq = $name;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'name'; $sqvrsvbinfqorr[]= $name;

            $type = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;


            $esbotoncillobottom = false;
            //   $esbotoncillobottom = 0;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'esbotoncillobottom'; $sqvbjo->infociloq = $esbotoncillobottom; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'esbotoncillobottom'; $sqvrsvbinfqorr[]= $esbotoncillobottom;



//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL

            $fecha_created = date("Y-m-d");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_created'; $sqvbjo->infociloq = $fecha_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fecha_created'; $sqvrsvbinfqorr[]= $fecha_created;

            $hora_created = date("H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_created'; $sqvbjo->infociloq = $hora_created; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_created'; $sqvrsvbinfqorr[]= $hora_created;

            $fechaqora_created = date("Y-m-d H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_created'; $sqvbjo->infociloq = $fechaqora_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqora_created'; $sqvrsvbinfqorr[]= $fechaqora_created;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_created =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_created'; $sqvbjo->infociloq = $fechaqoraicrotieime_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_created'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_created;

            //,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL



//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL


            $fecha_updated =date("Y-m-d");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_updated'; $sqvbjo->infociloq = $fecha_updated; $sqvqeiedrr[] = $sqvbjo;

            //   $sqvrsvsqnamerr[]= 'fecha_updated'; $sqvrsvbinfqorr[]= $fecha_updated;

            $hora_updated =date("H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_updated'; $sqvbjo->infociloq = $hora_updated; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_updated'; $sqvrsvbinfqorr[]= $hora_updated;


            $fechaqora_updated = date("Y-m-d H:i:s");


            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_updated'; $sqvbjo->infociloq = $fechaqora_updated; $sqvqeiedrr[] = $sqvbjo;

// $sqvrsvsqnamerr[]= 'fechaqora_updated'; $sqvrsvbinfqorr[]= $fechaqora_updated;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_updated =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_updated'; $sqvbjo->infociloq = $fechaqoraicrotieime_updated; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_updated'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_updated;


            // ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL




//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ

            $tisfingepirnrt =date("Y-m-d H:i:s");

            $tistzfingepirnrtz =date("Y-m-d H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tisfingepirnrt'; $sqvbjo->infociloq = $tisfingepirnrt; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'tisfingepirnrt'; $sqvrsvbinfqorr[]= $tisfingepirnrt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tistzfingepirnrtz'; $sqvbjo->infociloq = $tistzfingepirnrtz; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'tistzfingepirnrtz'; $sqvrsvbinfqorr[]= $tistzfingepirnrtz;









//
//    $sqsddvvbbggtime = time();
//
//$segiuioundo = date("s", $sqsddvvbbggtime);
//
//$miniuto = date("i", $sqsddvvbbggtime);
//
//$hororoia = date("H", $sqsddvvbbggtime);
//
//$diaiaia = date("d", $sqsddvvbbggtime);
//$meies = date("m", $sqsddvvbbggtime);
//$anioioio = date("Y", $sqsddvvbbggtime);
//
//$sqdvbmicro_date = microtime(false);
//$sqdvvdate_array = explode(" ", $sqdvbmicro_date);
//$date = date("Y-m-d H:i:s", $sqdvvdate_array[1]);
////echo "Date: $date:" . $sqdvvdate_array[0]."<br>";
//
//var_dump($sqdvbmicro_date);
//$milisiesiecons = $sqdvvdate_array[0];


//$updatedAt = $anioioio.'-'.$meies.'-'$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';



//date("Y-m-d H:i:s")

            //	,"createdAt":"2022-08-30T20:57:51.284Z"
            //	,"updatedAt":"2022-08-30T20:57:51.284Z"
//
//$createdAt = ;
//
//$updatedAt = ;

            require('fninc_fn_gen_curdateicrovarinfo.php');

            $createdAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $updatedAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'createdAt'; $sqvbjo->infociloq = $createdAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'createdAt'; $sqvrsvbinfqorr[]= $createdAt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'updatedAt'; $sqvbjo->infociloq = $updatedAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'updatedAt'; $sqvrsvbinfqorr[]= $updatedAt;




            $sqvrsqdvbsdqsvvs = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
            }
            $sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

            $sqvrsqdpdpqpsp = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdpdpqpsp .= '?' . ',';
            }
            $sqvrsqdpdpqpsp = substr($sqvrsqdpdpqpsp, 0, strlen($sqvrsqdpdpqpsp) - 1);

            var_dump($sqvrsqdpdpqpsp);

//$sqvrsqdvbsdqsvvs = '';
//for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
//    $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
//}
//$sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

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




            $stmt = $dbh->prepare("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            var_dump($stmt);
            var_dump("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

            var_dump($reqscsult);


            var_dump('-----------------------insertado-------');
            var_dump('-----------------------insertadoq---------------' . $id);


            var_dump('-----------------------end]--------------------------------------------------------------------------');

        }

        if(true) {
//super_admin

            var_dump('-----------------------begin[--------------------------------------------------------------------------');

            $id = '';
            for ($sqi = 0; $sqi < 1000; $sqi++) {

                $sqvrtqpobj = fn_generarlargoidvariable();

                var_dump($sqvrtqpobj);

                $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

                $stmtq = $dbh->prepare('SELECT * FROM role WHERE id = ?  LIMIT 1');
                var_dump($stmtq);
                var_dump($stmtq->execute(array($id)));
                var_dump($stmtq);
                $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

                var_dump($qresultq);

                if (count($qresultq) >= 1) {
                    var_dump('siencontrado');
                } else {
                    break;
                }
            }

            var_dump('-----------------------selec-------');


//    $id
//, 'w7779'
//, json_encode($sqvrtqpobj)
//
//
//, name TEXT  NOT NULL
//, type TEXT  NOT NULL
//
//,  esbotoncillobottom BOOLEAN   NOT NULL
//
//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL
//
//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL
//
//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ
//
//,createdAt TEXT  NOT NULL
//,updatedAt TEXT  NOT NULL
//
// role (
//     id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitoliomberbre TEXT  NOT NULL


            $sqvqeiedrr = array();


            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'id';    $sqvbjo->infociloq = $id;    $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'id'; $sqvrsvbinfqorr[]= $id;

            $idcrotimemocrosegs = json_encode($sqvrtqpobj);
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'idcrotimemocrosegs';
            $sqvbjo->infociloq = $idcrotimemocrosegs;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'idcrotimemocrosegs'; $sqvrsvbinfqorr[]= $idcrotimemocrosegs;

            $nombrqvecitoliomberbre = '';
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'nombrqvecitoliomberbre';
            $sqvbjo->infociloq = $nombrqvecitoliomberbre;
            $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'nombrqvecitoliomberbre'; $sqvrsvbinfqorr[]= $nombrqvecitoliomberbre;


            $name = 'doctor';

            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'name';
            $sqvbjo->infociloq = $name;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'name'; $sqvrsvbinfqorr[]= $name;

            $type = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;


            $esbotoncillobottom = false;
            //   $esbotoncillobottom = 0;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'esbotoncillobottom'; $sqvbjo->infociloq = $esbotoncillobottom; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'esbotoncillobottom'; $sqvrsvbinfqorr[]= $esbotoncillobottom;



//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL

            $fecha_created = date("Y-m-d");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_created'; $sqvbjo->infociloq = $fecha_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fecha_created'; $sqvrsvbinfqorr[]= $fecha_created;

            $hora_created = date("H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_created'; $sqvbjo->infociloq = $hora_created; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_created'; $sqvrsvbinfqorr[]= $hora_created;

            $fechaqora_created = date("Y-m-d H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_created'; $sqvbjo->infociloq = $fechaqora_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqora_created'; $sqvrsvbinfqorr[]= $fechaqora_created;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_created =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_created'; $sqvbjo->infociloq = $fechaqoraicrotieime_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_created'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_created;

            //,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL



//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL


            $fecha_updated =date("Y-m-d");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_updated'; $sqvbjo->infociloq = $fecha_updated; $sqvqeiedrr[] = $sqvbjo;

            //   $sqvrsvsqnamerr[]= 'fecha_updated'; $sqvrsvbinfqorr[]= $fecha_updated;

            $hora_updated =date("H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_updated'; $sqvbjo->infociloq = $hora_updated; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_updated'; $sqvrsvbinfqorr[]= $hora_updated;


            $fechaqora_updated = date("Y-m-d H:i:s");


            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_updated'; $sqvbjo->infociloq = $fechaqora_updated; $sqvqeiedrr[] = $sqvbjo;

// $sqvrsvsqnamerr[]= 'fechaqora_updated'; $sqvrsvbinfqorr[]= $fechaqora_updated;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_updated =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_updated'; $sqvbjo->infociloq = $fechaqoraicrotieime_updated; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_updated'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_updated;


            // ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL




//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ

            $tisfingepirnrt =date("Y-m-d H:i:s");

            $tistzfingepirnrtz =date("Y-m-d H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tisfingepirnrt'; $sqvbjo->infociloq = $tisfingepirnrt; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'tisfingepirnrt'; $sqvrsvbinfqorr[]= $tisfingepirnrt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tistzfingepirnrtz'; $sqvbjo->infociloq = $tistzfingepirnrtz; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'tistzfingepirnrtz'; $sqvrsvbinfqorr[]= $tistzfingepirnrtz;









//
//    $sqsddvvbbggtime = time();
//
//$segiuioundo = date("s", $sqsddvvbbggtime);
//
//$miniuto = date("i", $sqsddvvbbggtime);
//
//$hororoia = date("H", $sqsddvvbbggtime);
//
//$diaiaia = date("d", $sqsddvvbbggtime);
//$meies = date("m", $sqsddvvbbggtime);
//$anioioio = date("Y", $sqsddvvbbggtime);
//
//$sqdvbmicro_date = microtime(false);
//$sqdvvdate_array = explode(" ", $sqdvbmicro_date);
//$date = date("Y-m-d H:i:s", $sqdvvdate_array[1]);
////echo "Date: $date:" . $sqdvvdate_array[0]."<br>";
//
//var_dump($sqdvbmicro_date);
//$milisiesiecons = $sqdvvdate_array[0];


//$updatedAt = $anioioio.'-'.$meies.'-'$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';



//date("Y-m-d H:i:s")

            //	,"createdAt":"2022-08-30T20:57:51.284Z"
            //	,"updatedAt":"2022-08-30T20:57:51.284Z"
//
//$createdAt = ;
//
//$updatedAt = ;

            require('fninc_fn_gen_curdateicrovarinfo.php');

            $createdAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $updatedAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'createdAt'; $sqvbjo->infociloq = $createdAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'createdAt'; $sqvrsvbinfqorr[]= $createdAt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'updatedAt'; $sqvbjo->infociloq = $updatedAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'updatedAt'; $sqvrsvbinfqorr[]= $updatedAt;




            $sqvrsqdvbsdqsvvs = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
            }
            $sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

            $sqvrsqdpdpqpsp = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdpdpqpsp .= '?' . ',';
            }
            $sqvrsqdpdpqpsp = substr($sqvrsqdpdpqpsp, 0, strlen($sqvrsqdpdpqpsp) - 1);

            var_dump($sqvrsqdpdpqpsp);

//$sqvrsqdvbsdqsvvs = '';
//for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
//    $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
//}
//$sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

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




            $stmt = $dbh->prepare("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            var_dump($stmt);
            var_dump("INSERT INTO role (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

            var_dump($reqscsult);


            var_dump('-----------------------insertado-------');
            var_dump('-----------------------insertadoq---------------' . $id);


            var_dump('-----------------------end]--------------------------------------------------------------------------');

        }

    }

    if(false){

        $sqvrsqrsql='SELECT * FROM role';
        $stmtq = $dbh->prepare($sqvrsqrsql);
        $sqvrsqsresultecxcq=$stmtq->execute(array());
        var_dump($sqvrsqsresultecxcq);
        $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

        var_dump($qresultq);

        var_dump(count($qresultq));
        var_dump('countq_'.count($qresultq));
        if (count($qresultq) >= 1) {
            $sqdfvqreqsqult= $dbh->query($sqvrsqrsql);
            foreach ($sqdfvqreqsqult as $row) {
//print $row['id'] . ': ' . $row['nombre'] . "\r\n";
                var_dump($row);
            }
        }
        else {

        }
        var_dump(count($qresultq));
        var_dump('countq_'.count($qresultq));
    }











    if (false) {

        if(false) {
            var_dump('-----------------------begin[--------------------------------------------------------------------------');

            $id = '';
            for ($sqi = 0; $sqi < 1000; $sqi++) {

                $sqvrtqpobj = fn_generarlargoidvariable();

                var_dump($sqvrtqpobj);

                $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

                $stmtq = $dbh->prepare('SELECT * FROM usuario WHERE id = ?  LIMIT 1');
                var_dump($stmtq);
                var_dump($stmtq->execute(array($id)));
                var_dump($stmtq);
                $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

                var_dump($qresultq);

                if (count($qresultq) >= 1) {
                    var_dump('siencontrado');
                } else {
                    break;
                }
            }

            var_dump('-----------------------selec-------');


//    $id
//, 'w7779'
//, json_encode($sqvrtqpobj)
//
//
//, name TEXT  NOT NULL
//, type TEXT  NOT NULL
//
//,  esbotoncillobottom BOOLEAN   NOT NULL
//
//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL
//
//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL
//
//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ
//
//,createdAt TEXT  NOT NULL
//,updatedAt TEXT  NOT NULL
//
// role (
//     id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitoliomberbre TEXT  NOT NULL


            $sqvqeiedrr = array();


            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'id';    $sqvbjo->infociloq = $id;    $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'id'; $sqvrsvbinfqorr[]= $id;

            $idcrotimemocrosegs = json_encode($sqvrtqpobj);
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'idcrotimemocrosegs';
            $sqvbjo->infociloq = $idcrotimemocrosegs;
            $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'idcrotimemocrosegs'; $sqvrsvbinfqorr[]= $idcrotimemocrosegs;

            $nombrqvecitoliomberbre = '';
            $sqvbjo = new \stdClass();
            $sqvbjo->nameciloq = 'nombrqvecitoliomberbre';
            $sqvbjo->infociloq = $nombrqvecitoliomberbre;
            $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'nombrqvecitoliomberbre'; $sqvrsvbinfqorr[]= $nombrqvecitoliomberbre;



//
//
//        id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitoliomberbre TEXT  NOT NULL
//
//  ,id_multimedia_asset___picture TEXT  NOT NULL
//
//  ,id_multimedia_asset___doc_id_front TEXT  NOT NULL
//
//  ,id_multimedia_asset___doc_id_back TEXT  NOT NULL
//


            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'id_multimedia_asset___picture'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'id_multimedia_asset___doc_id_front'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'id_multimedia_asset___doc_id_back'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


































//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;




//
//
//  ,id_role TEXT  NOT NULL
//
//,id_pharmacyia___pharmacy_assigned TEXT  NOT NULL



            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'id_role'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'id_pharmacyia___pharmacy_assigned'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;









//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;




//
//
//, email TEXT  NOT NULL
//
//, name TEXT  NOT NULL
//
//, tipoqusuario TEXT  NOT NULL
//super_admin



            $sqvrevrinfoeq = 'admin@r';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'email'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = 'sadministrador';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'name'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = 'super_admin';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tipoqusuario'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;












//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;


//
//, token_google TEXT  NOT NULL
//
//, token_facebook TEXT  NOT NULL
//
//, token_apple TEXT  NOT NULL




            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'token_google'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'token_facebook'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'token_apple'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;














//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;

//
//, status TEXT  NOT NULL
//
//, token TEXT  NOT NULL
//
//, logged  BOOLEAN   NOT NULL





            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'status'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'token'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = false;
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'logged'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;









//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;

//1990-08-27T00:00:00.000Z
//, birthdate TEXT  NOT NULL
//
//, gender TEXT  NOT NULL
//
//, phone TEXT  NOT NULL




            $sqvrevrinfoeq = '1990-08-27T00:00:00.000Z';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'birthdate'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'gender'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = '1000000000';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'phone'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;




//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;

//
//, dial_code TEXT  NOT NULL
//
//, one_signal_id TEXT  NOT NULL
//
//, platform_one_signal TEXT  NOT NULL
//



            $sqvrevrinfoeq = '+52';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'dial_code'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = 'b000one_signal_id';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'one_signal_id'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = 'android';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'platform_one_signal'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//, city TEXT  NOT NULL
//
//, address TEXT  NOT NULL
//
//, confirm_email_token TEXT  NOT NULL





            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'city'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'address'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'confirm_email_token'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;









//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//




//
//
//, accept_doc1  BOOLEAN   NOT NULL
//, accept_doc2  BOOLEAN   NOT NULL
//, accept_doc3  BOOLEAN   NOT NULL
//, accept_doc4  BOOLEAN   NOT NULL
//, accept_doc5  BOOLEAN   NOT NULL
//, accept_doc6  BOOLEAN   NOT NULL
//




            $sqvrevrinfoeq = false;
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc1'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;




            $sqvrevrinfoeq = false;
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc2'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;




            $sqvrevrinfoeq = false;
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc3'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


            $sqvrevrinfoeq = false;
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc4'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = false;
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc5'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;




            $sqvrevrinfoeq = false;
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc6'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;










//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//






//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;




//
//, enabled TEXT  NOT NULL




            $sqvrevrinfoeq = 'yes';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'enabled'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;








//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;



//
//
//  ,lat   NUMERIC(37,19) NOT NULL
//  ,long  NUMERIC(37,19) NOT NULL
//
//  ,delivery_commission  NUMERIC(19,7) NOT NULL
//


            $sqvrevrinfoeq = 0.0;
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'lat'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = 0.0;
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'long'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = 0;
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'delivery_commission'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;




//
//, verified_doctor TEXT  NOT NULL
//
//, professional_license TEXT  NOT NULL
//
//,push_id  TEXT  NOT NULL




            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'verified_doctor'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'professional_license'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



            $sqvrevrinfoeq = '';
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'push_id'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;


















//
//,  esbotoncillobottom BOOLEAN   NOT NULL
//
//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL
//
//   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL
//
//   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL
//
//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL
//
//,tisfingepirnrt TIMESTAMP    NOT NULL
//,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL
//
//,createdAt TEXT  NOT NULL
//,updatedAt TEXT  NOT NULL


            $esbotoncillobottom = false;
            //   $esbotoncillobottom = 0;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'esbotoncillobottom'; $sqvbjo->infociloq = $esbotoncillobottom; $sqvqeiedrr[] = $sqvbjo;

            //  $sqvrsvsqnamerr[]= 'esbotoncillobottom'; $sqvrsvbinfqorr[]= $esbotoncillobottom;



//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL

            $fecha_created = date("Y-m-d");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_created'; $sqvbjo->infociloq = $fecha_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fecha_created'; $sqvrsvbinfqorr[]= $fecha_created;

            $hora_created = date("H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_created'; $sqvbjo->infociloq = $hora_created; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_created'; $sqvrsvbinfqorr[]= $hora_created;

            $fechaqora_created = date("Y-m-d H:i:s");
            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_created'; $sqvbjo->infociloq = $fechaqora_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqora_created'; $sqvrsvbinfqorr[]= $fechaqora_created;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_created =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_created'; $sqvbjo->infociloq = $fechaqoraicrotieime_created; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_created'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_created;

            //,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL



//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL


            $fecha_updated =date("Y-m-d");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_updated'; $sqvbjo->infociloq = $fecha_updated; $sqvqeiedrr[] = $sqvbjo;

            //   $sqvrsvsqnamerr[]= 'fecha_updated'; $sqvrsvbinfqorr[]= $fecha_updated;

            $hora_updated =date("H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_updated'; $sqvbjo->infociloq = $hora_updated; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'hora_updated'; $sqvrsvbinfqorr[]= $hora_updated;


            $fechaqora_updated = date("Y-m-d H:i:s");


            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_updated'; $sqvbjo->infociloq = $fechaqora_updated; $sqvqeiedrr[] = $sqvbjo;

// $sqvrsvsqnamerr[]= 'fechaqora_updated'; $sqvrsvbinfqorr[]= $fechaqora_updated;


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $fechaqoraicrotieime_updated =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_updated'; $sqvbjo->infociloq = $fechaqoraicrotieime_updated; $sqvqeiedrr[] = $sqvbjo;

            //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_updated'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_updated;


            // ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL




//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ

            $tisfingepirnrt =date("Y-m-d H:i:s");

            $tistzfingepirnrtz =date("Y-m-d H:i:s");

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tisfingepirnrt'; $sqvbjo->infociloq = $tisfingepirnrt; $sqvqeiedrr[] = $sqvbjo;

            // $sqvrsvsqnamerr[]= 'tisfingepirnrt'; $sqvrsvbinfqorr[]= $tisfingepirnrt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tistzfingepirnrtz'; $sqvbjo->infociloq = $tistzfingepirnrtz; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'tistzfingepirnrtz'; $sqvrsvbinfqorr[]= $tistzfingepirnrtz;









//
//    $sqsddvvbbggtime = time();
//
//$segiuioundo = date("s", $sqsddvvbbggtime);
//
//$miniuto = date("i", $sqsddvvbbggtime);
//
//$hororoia = date("H", $sqsddvvbbggtime);
//
//$diaiaia = date("d", $sqsddvvbbggtime);
//$meies = date("m", $sqsddvvbbggtime);
//$anioioio = date("Y", $sqsddvvbbggtime);
//
//$sqdvbmicro_date = microtime(false);
//$sqdvvdate_array = explode(" ", $sqdvbmicro_date);
//$date = date("Y-m-d H:i:s", $sqdvvdate_array[1]);
////echo "Date: $date:" . $sqdvvdate_array[0]."<br>";
//
//var_dump($sqdvbmicro_date);
//$milisiesiecons = $sqdvvdate_array[0];


//$updatedAt = $anioioio.'-'.$meies.'-'$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';



//date("Y-m-d H:i:s")

            //	,"createdAt":"2022-08-30T20:57:51.284Z"
            //	,"updatedAt":"2022-08-30T20:57:51.284Z"
//
//$createdAt = ;
//
//$updatedAt = ;

            require('fninc_fn_gen_curdateicrovarinfo.php');

            $createdAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';


            require('fninc_fn_gen_curdateicrovarinfo.php');

            $updatedAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'createdAt'; $sqvbjo->infociloq = $createdAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'createdAt'; $sqvrsvbinfqorr[]= $createdAt;

            $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'updatedAt'; $sqvbjo->infociloq = $updatedAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'updatedAt'; $sqvrsvbinfqorr[]= $updatedAt;




            $sqvrsqdvbsdqsvvs = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
            }
            $sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

            $sqvrsqdpdpqpsp = '';
            for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
                $sqvrsqdpdpqpsp .= '?' . ',';
            }
            $sqvrsqdpdpqpsp = substr($sqvrsqdpdpqpsp, 0, strlen($sqvrsqdpdpqpsp) - 1);

            var_dump($sqvrsqdpdpqpsp);

//$sqvrsqdvbsdqsvvs = '';
//for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
//    $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
//}
//$sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

            var_dump($sqvrsqdvbsdqsvvs);

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




            $stmt = $dbh->prepare("INSERT INTO usuario (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

            var_dump($stmt);

            $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

            var_dump($reqscsult);


            var_dump('-----------------------insertado-------');
            var_dump('-----------------------insertadoq---------------' . $id);


            var_dump('-----------------------end]--------------------------------------------------------------------------');

        }

    }







//$sqdfvqreqsqult= $dbh->query('SELECT * FROM usuario');
//var_dump($sqdfvqreqsqult);
//foreach ($sqdfvqreqsqult as $row) {
////print $row['id'] . ': ' . $row['nombre'] . "\r\n";
//var_dump($row);
//}
//var_dump('countq_',count($sqdfvqreqsqult));

    $sqvrsqrsql='SELECT * FROM usuario';
    $stmtq = $dbh->prepare($sqvrsqrsql);
    $sqvrsqsresultecxcq=$stmtq->execute(array());
    var_dump($sqvrsqsresultecxcq);
    $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

    var_dump($qresultq);

    var_dump(count($qresultq));
    var_dump('countq_'.count($qresultq));
    if (count($qresultq) >= 1) {
        $sqdfvqreqsqult= $dbh->query($sqvrsqrsql);
        foreach ($sqdfvqreqsqult as $row) {
//print $row['id'] . ': ' . $row['nombre'] . "\r\n";
            var_dump($row);
        }
    }
    else {

    }
    var_dump(count($qresultq));
    var_dump('countq_'.count($qresultq));
}



//
//var_dump('-----------------------begin[--------------------------------------------------------------------------');
//
//$id = '';
//for ($sqi = 0; $sqi < 1000; $sqi++) {
//
//    $sqvrtqpobj = fn_generarlargoidvariable();
//
//    var_dump($sqvrtqpobj);
//
//    $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;
//
//}
//
//var_dump('-----------------------selec-------');
//foreach ($dbh->query('SELECT * FROM role') as $row) {
//    //print $row['id'] . ': ' . $row['nombre'] . "\r\n";
//    var_dump($row);
//}




if(0) {
    $sqdvsqvbbbqbt = time();

//date("Y-m-d H:i:s",sqdvbbbt)

    $sqvr_anio = date("Y", $sqdvsqvbbbqbt);

    $sqvr_mes = date("m", $sqdvsqvbbbqbt);

    $sqvr_dia = date("d", $sqdvsqvbbbqbt);

    $sqvr_hora = date("H", $sqdvsqvbbbqbt);

    $sqvr_minuto = date("i", $sqdvsqvbbbqbt);

    $sqvr_segundo = date("s", $sqdvsqvbbbqbt);

    $sqvrfoldqeruploads = 'uploads';
    $sqvr_sdcvvruta = $sqvr_anio . '/' . $sqvr_mes . '/' . $sqvr_dia . '/' . $sqvr_hora . '/' . $sqvr_minuto . '/' . $sqvr_segundo;

    if (file_exists($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta)) {

    } else {
        mkdir($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta, 0775, true);
    }
    var_dump(microtime(true));
    var_dump(microtime(false));
    file_put_contents($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta . '/' . 's.txt', 's');
    var_dump($sqvrfoldqeruploads . '/' . $sqvr_sdcvvruta);
}



















if(false){

//$sqdfvqreqsqult= $dbh->query('SELECT * FROM usuario');
//var_dump($sqdfvqreqsqult);
//foreach ($sqdfvqreqsqult as $row) {
////print $row['id'] . ': ' . $row['nombre'] . "\r\n";
//var_dump($row);
//}
//var_dump('countq_',count($sqdfvqreqsqult));

    $sqvrsqrsql='SELECT * FROM role';
    $stmtq = $dbh->prepare($sqvrsqrsql);
    $sqvrsqsresultecxcq=$stmtq->execute(array());
    var_dump($sqvrsqsresultecxcq);
    $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

//var_dump($qresultq);

    var_dump(count($qresultq));
    var_dump('countq_'.count($qresultq));
    if (count($qresultq) >= 1) {
        $sqdfvqreqsqult= $dbh->query($sqvrsqrsql);
        foreach ($sqdfvqreqsqult as $row) {
//print $row['id'] . ': ' . $row['nombre'] . "\r\n";
            var_dump($row);
        }
    }
    else {

    }
    var_dump(count($qresultq));
    var_dump('countq_'.count($qresultq));


//$sqdfvqreqsqult= $dbh->query('SELECT * FROM usuario');
//var_dump($sqdfvqreqsqult);
//foreach ($sqdfvqreqsqult as $row) {
////print $row['id'] . ': ' . $row['nombre'] . "\r\n";
//var_dump($row);
//}
//var_dump('countq_',count($sqdfvqreqsqult));

    $sqvrsqrsql='SELECT * FROM usuario';
    $stmtq = $dbh->prepare($sqvrsqrsql);
    $sqvrsqsresultecxcq=$stmtq->execute(array());
    var_dump($sqvrsqsresultecxcq);
    $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

//var_dump($qresultq);

    var_dump(count($qresultq));
    var_dump('countq_'.count($qresultq));
    if (count($qresultq) >= 1) {
        $sqdfvqreqsqult= $dbh->query($sqvrsqrsql);
        foreach ($sqdfvqreqsqult as $row) {
//print $row['id'] . ': ' . $row['nombre'] . "\r\n";
            var_dump($row);
        }
    }
    else {

    }
    var_dump(count($qresultq));
    var_dump('countq_'.count($qresultq));

}





if(false) {
//super_admin

    var_dump('-----------------------begin[--------------------------------------------------------------------------');

    $id = '';
    for ($sqi = 0; $sqi < 1000; $sqi++) {

        $sqvrtqpobj = fn_generarlargoidvariable();

        var_dump($sqvrtqpobj);

        $id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;

        $stmtq = $dbh->prepare('SELECT * FROM usuario WHERE id = ?  LIMIT 1');
        var_dump($stmtq);
        var_dump($stmtq->execute(array($id)));
        var_dump($stmtq);
        $qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);

        var_dump($qresultq);

        if (count($qresultq) >= 1) {
            var_dump('siencontrado');
        } else {
            break;
        }
    }

    var_dump('-----------------------selec-------');


//    $id
//, 'w7779'
//, json_encode($sqvrtqpobj)
//
//
//, name TEXT  NOT NULL
//, type TEXT  NOT NULL
//
//,  esbotoncillobottom BOOLEAN   NOT NULL
//
//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL
//
//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL
//
//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ
//
//,createdAt TEXT  NOT NULL
//,updatedAt TEXT  NOT NULL
//
// role (
//     id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitoliomberbre TEXT  NOT NULL


    $sqvqeiedrr = array();


    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'id';    $sqvbjo->infociloq = $id;    $sqvqeiedrr[] = $sqvbjo;

    // $sqvrsvsqnamerr[]= 'id'; $sqvrsvbinfqorr[]= $id;

    $idcrotimemocrosegs = json_encode($sqvrtqpobj);
    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'idcrotimemocrosegs';
    $sqvbjo->infociloq = $idcrotimemocrosegs;
    $sqvqeiedrr[] = $sqvbjo;

    //  $sqvrsvsqnamerr[]= 'idcrotimemocrosegs'; $sqvrsvbinfqorr[]= $idcrotimemocrosegs;

    $nombrqvecitoliomberbre = '';
    $sqvbjo = new \stdClass();
    $sqvbjo->nameciloq = 'nombrqvecitoliomberbre';
    $sqvbjo->infociloq = $nombrqvecitoliomberbre;
    $sqvqeiedrr[] = $sqvbjo;

    // $sqvrsvsqnamerr[]= 'nombrqvecitoliomberbre'; $sqvrsvbinfqorr[]= $nombrqvecitoliomberbre;



//
//
//        id VARCHAR(1000) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombrqvecitoliomberbre TEXT  NOT NULL
//
//  ,id_multimedia_asset___picture TEXT  NOT NULL
//
//  ,id_multimedia_asset___doc_id_front TEXT  NOT NULL
//
//  ,id_multimedia_asset___doc_id_back TEXT  NOT NULL
//


    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'id_multimedia_asset___picture'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'id_multimedia_asset___doc_id_front'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'id_multimedia_asset___doc_id_back'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


































//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;




//
//
//  ,id_role TEXT  NOT NULL
//
//,id_pharmacyia___pharmacy_assigned TEXT  NOT NULL



    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'id_role'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'id_pharmacyia___pharmacy_assigned'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;









//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;




//
//
//, email TEXT  NOT NULL
//
//, name TEXT  NOT NULL
//
//, tipoqusuario TEXT  NOT NULL
//super_admin



    $sqvrevrinfoeq = 'admin@r';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'email'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = 'sadministrador';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'name'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = 'super_admin';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tipoqusuario'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;












//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;


//
//, token_google TEXT  NOT NULL
//
//, token_facebook TEXT  NOT NULL
//
//, token_apple TEXT  NOT NULL




    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'token_google'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'token_facebook'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'token_apple'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;














//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;

//
//, status TEXT  NOT NULL
//
//, token TEXT  NOT NULL
//
//, logged  BOOLEAN   NOT NULL





    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'status'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'token'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = false;
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'logged'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;









//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;

//1990-08-27T00:00:00.000Z
//, birthdate TEXT  NOT NULL
//
//, gender TEXT  NOT NULL
//
//, phone TEXT  NOT NULL




    $sqvrevrinfoeq = '1990-08-27T00:00:00.000Z';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'birthdate'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'gender'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = '1000000000';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'phone'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;




//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;

//
//, dial_code TEXT  NOT NULL
//
//, one_signal_id TEXT  NOT NULL
//
//, platform_one_signal TEXT  NOT NULL
//



    $sqvrevrinfoeq = '+52';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'dial_code'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = 'b000one_signal_id';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'one_signal_id'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = 'android';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'platform_one_signal'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//, city TEXT  NOT NULL
//
//, address TEXT  NOT NULL
//
//, confirm_email_token TEXT  NOT NULL





    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'city'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'address'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'confirm_email_token'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;









//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//




//
//
//, accept_doc1  BOOLEAN   NOT NULL
//, accept_doc2  BOOLEAN   NOT NULL
//, accept_doc3  BOOLEAN   NOT NULL
//, accept_doc4  BOOLEAN   NOT NULL
//, accept_doc5  BOOLEAN   NOT NULL
//, accept_doc6  BOOLEAN   NOT NULL
//




    $sqvrevrinfoeq = false;
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc1'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;




    $sqvrevrinfoeq = false;
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc2'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;




    $sqvrevrinfoeq = false;
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc3'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;


    $sqvrevrinfoeq = false;
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc4'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = false;
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc5'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;




    $sqvrevrinfoeq = false;
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'accept_doc6'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;










//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//






//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;




//
//, enabled TEXT  NOT NULL




    $sqvrevrinfoeq = 'yes';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'enabled'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;








//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;



//
//
//  ,lat   NUMERIC(37,19) NOT NULL
//  ,long  NUMERIC(37,19) NOT NULL
//
//  ,delivery_commission  NUMERIC(19,7) NOT NULL
//


    $sqvrevrinfoeq = 0.0;
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'lat'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = 0.0;
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'long'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = 0;
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'delivery_commission'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;




//
//, verified_doctor TEXT  NOT NULL
//
//, professional_license TEXT  NOT NULL
//
//,push_id  TEXT  NOT NULL




    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'verified_doctor'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'professional_license'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



    $sqvrevrinfoeq = '';
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'push_id'; $sqvbjo->infociloq = $sqvrevrinfoeq; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'id_multimedia_asset___doc_id_back'; $sqvrsvbinfqorr[]= $sqvrevrinfoeq;



//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;
//
//
//
//        $type = '';
//        $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'type'; $sqvbjo->infociloq = $type; $sqvqeiedrr[] = $sqvbjo;
//
//        //  $sqvrsvsqnamerr[]= 'type'; $sqvrsvbinfqorr[]= $type;


















//
//,  esbotoncillobottom BOOLEAN   NOT NULL
//
//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL
//
//   ,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL
//
//   ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL
//
//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL
//
//,tisfingepirnrt TIMESTAMP    NOT NULL
//,tistzfingepirnrtz TIMESTAMPTZ  NOT NULL
//
//,createdAt TEXT  NOT NULL
//,updatedAt TEXT  NOT NULL


    $esbotoncillobottom = false;
    //   $esbotoncillobottom = 0;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'esbotoncillobottom'; $sqvbjo->infociloq = $esbotoncillobottom; $sqvqeiedrr[] = $sqvbjo;

    //  $sqvrsvsqnamerr[]= 'esbotoncillobottom'; $sqvrsvbinfqorr[]= $esbotoncillobottom;



//,fecha_created  DATE NOT NULL
//,hora_created  TIME NOT NULL
//,fechaqora_created  TIMESTAMP NOT NULL

    $fecha_created = date("Y-m-d");
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_created'; $sqvbjo->infociloq = $fecha_created; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'fecha_created'; $sqvrsvbinfqorr[]= $fecha_created;

    $hora_created = date("H:i:s");
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_created'; $sqvbjo->infociloq = $hora_created; $sqvqeiedrr[] = $sqvbjo;

    // $sqvrsvsqnamerr[]= 'hora_created'; $sqvrsvbinfqorr[]= $hora_created;

    $fechaqora_created = date("Y-m-d H:i:s");
    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_created'; $sqvbjo->infociloq = $fechaqora_created; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'fechaqora_created'; $sqvrsvbinfqorr[]= $fechaqora_created;


    require('fninc_fn_gen_curdateicrovarinfo.php');

    $fechaqoraicrotieime_created =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_created'; $sqvbjo->infociloq = $fechaqoraicrotieime_created; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_created'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_created;

    //,fechaqoraicrotieime_created  NUMERIC(199,15) NOT NULL



//,fecha_updated  DATE NOT NULL
//,hora_updated   TIME NOT NULL
//,fechaqora_updated  TIMESTAMP NOT NULL


    $fecha_updated =date("Y-m-d");

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fecha_updated'; $sqvbjo->infociloq = $fecha_updated; $sqvqeiedrr[] = $sqvbjo;

    //   $sqvrsvsqnamerr[]= 'fecha_updated'; $sqvrsvbinfqorr[]= $fecha_updated;

    $hora_updated =date("H:i:s");

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'hora_updated'; $sqvbjo->infociloq = $hora_updated; $sqvqeiedrr[] = $sqvbjo;

    // $sqvrsvsqnamerr[]= 'hora_updated'; $sqvrsvbinfqorr[]= $hora_updated;


    $fechaqora_updated = date("Y-m-d H:i:s");


    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqora_updated'; $sqvbjo->infociloq = $fechaqora_updated; $sqvqeiedrr[] = $sqvbjo;

// $sqvrsvsqnamerr[]= 'fechaqora_updated'; $sqvrsvbinfqorr[]= $fechaqora_updated;


    require('fninc_fn_gen_curdateicrovarinfo.php');

    $fechaqoraicrotieime_updated =  floatval($sqdvvdate_array[1])+ floatval($sqdvvdate_array[0])    ;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'fechaqoraicrotieime_updated'; $sqvbjo->infociloq = $fechaqoraicrotieime_updated; $sqvqeiedrr[] = $sqvbjo;

    //$sqvrsvsqnamerr[]= 'fechaqoraicrotieime_updated'; $sqvrsvbinfqorr[]= $fechaqoraicrotieime_updated;


    // ,fechaqoraicrotieime_updated  NUMERIC(199,15) NOT NULL




//,tisfingepirnrt TIMESTAMP,
//,tistzfingepirnrtz TIMESTAMPTZ

    $tisfingepirnrt =date("Y-m-d H:i:s");

    $tistzfingepirnrtz =date("Y-m-d H:i:s");

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tisfingepirnrt'; $sqvbjo->infociloq = $tisfingepirnrt; $sqvqeiedrr[] = $sqvbjo;

    // $sqvrsvsqnamerr[]= 'tisfingepirnrt'; $sqvrsvbinfqorr[]= $tisfingepirnrt;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'tistzfingepirnrtz'; $sqvbjo->infociloq = $tistzfingepirnrtz; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'tistzfingepirnrtz'; $sqvrsvbinfqorr[]= $tistzfingepirnrtz;









//
//    $sqsddvvbbggtime = time();
//
//$segiuioundo = date("s", $sqsddvvbbggtime);
//
//$miniuto = date("i", $sqsddvvbbggtime);
//
//$hororoia = date("H", $sqsddvvbbggtime);
//
//$diaiaia = date("d", $sqsddvvbbggtime);
//$meies = date("m", $sqsddvvbbggtime);
//$anioioio = date("Y", $sqsddvvbbggtime);
//
//$sqdvbmicro_date = microtime(false);
//$sqdvvdate_array = explode(" ", $sqdvbmicro_date);
//$date = date("Y-m-d H:i:s", $sqdvvdate_array[1]);
////echo "Date: $date:" . $sqdvvdate_array[0]."<br>";
//
//var_dump($sqdvbmicro_date);
//$milisiesiecons = $sqdvvdate_array[0];


//$updatedAt = $anioioio.'-'.$meies.'-'$diaiaia.'T'.$hororoia.':'.$miniuto.':'.$segiuioundo.'';



//date("Y-m-d H:i:s")

    //	,"createdAt":"2022-08-30T20:57:51.284Z"
    //	,"updatedAt":"2022-08-30T20:57:51.284Z"
//
//$createdAt = ;
//
//$updatedAt = ;

    require('fninc_fn_gen_curdateicrovarinfo.php');

    $createdAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';


    require('fninc_fn_gen_curdateicrovarinfo.php');

    $updatedAt = $anioioio . '-' . $meies . '-'.$diaiaia . 'T' . $hororoia . ':' . $miniuto . ':' . $segiuioundo . '.' . $sqvrsqdcqcvb.'Z';

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'createdAt'; $sqvbjo->infociloq = $createdAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'createdAt'; $sqvrsvbinfqorr[]= $createdAt;

    $sqvbjo = new \stdClass(); $sqvbjo->nameciloq = 'updatedAt'; $sqvbjo->infociloq = $updatedAt; $sqvqeiedrr[] = $sqvbjo;

//$sqvrsvsqnamerr[]= 'updatedAt'; $sqvrsvbinfqorr[]= $updatedAt;




    $sqvrsqdvbsdqsvvs = '';
    for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
        $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
    }
    $sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

    var_dump($sqvrsqdvbsdqsvvs);

    $sqvrsqdpdpqpsp = '';
    for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
        $sqvrsqdpdpqpsp .= '?' . ',';
    }
    $sqvrsqdpdpqpsp = substr($sqvrsqdpdpqpsp, 0, strlen($sqvrsqdpdpqpsp) - 1);

    var_dump($sqvrsqdpdpqpsp);

//$sqvrsqdvbsdqsvvs = '';
//for ($sqwqwi = 0; $sqwqwi < count($sqvqeiedrr); $sqwqwi++) {
//    $sqvrsqdvbsdqsvvs .= $sqvqeiedrr[$sqwqwi]->nameciloq . ',';
//}
//$sqvrsqdvbsdqsvvs = substr($sqvrsqdvbsdqsvvs, 0, strlen($sqvrsqdvbsdqsvvs) - 1);

    var_dump($sqvrsqdvbsdqsvvs);

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




    $stmt = $dbh->prepare("INSERT INTO usuario (" . $sqvrsqdvbsdqsvvs . ") VALUES (" . $sqvrsqdpdpqpsp . ")");

    var_dump($stmt);

    $reqscsult = $stmt->execute($sqvrsqdpdpqpspinqfo);

    var_dump($reqscsult);


    var_dump('-----------------------insertado-------');
    var_dump('-----------------------insertadoq---------------' . $id);


    var_dump('-----------------------end]--------------------------------------------------------------------------');

}










if(0){
//asset
//'id': item.id,
//      'name': item.name,
//      'type': item.type,
//      'createdAt': item.created_at,
//      'updatedAt': item.updated_at,

//
//created_at: json["createdAt"],
//        updated_at: json["updatedAt"]);
//
//,"createdAt":"2022-08-30T20:57:51.322Z"
//,"updatedAt":"2022-08-30T20:57:51.322Z"
//
//,"createdAt":"2022-08-30T20:57:51.322Z"
//,"updatedAt":"2022-08-30T20:57:51.322Z"
//
//UserModel? patient;
//UserModel? doctor;
//
//AssetModel? prescription_picture;
//
//	patient: (json.containsKey("patient"))? UserModel.fromJson(json["patient"]) :json["patient"],
//	doctor: (json.containsKey("doctor"))? UserModel.fromJson(json["doctor"]) :json["doctor"],
//
//
//prescription_picture: (json.containsKey("prescription_picture")) ? (json["prescription_picture"]!=null)? AssetModel.fromJson(json["prescription_picture"]):null : json["prescription_picture"] ,

//
//$dbh->exec("INSERT INTO tableqwdsq79 (
//id,nombre,idcrotimemocrosegs
//)
//VALUES ( '" .$id ."'
//,'" .'w777' ."'
//,'" .json_encode($sqvrtqpobj) ."'
//)");

    foreach ($dbh->query('SELECT id, nombre FROM tableqwdsq79') as $row) {
        print $row['id'] . ': ' . $row['nombre'] . "\r\n";
    }

    var_dump( fn_generarlargoidvariable() );




    $sqdvbbbt=time();

//date("Y-m-d H:i:s",sqdvbbbt)

    $sqvr_anio=date("Y",$sqdvbbbt);

    $sqvr_mes=date("m",$sqdvbbbt);

    $sqvr_dia=date("d",$sqdvbbbt);

    $sqvr_hora=date("H",$sqdvbbbt);

    $sqvr_minuto=date("i",$sqdvbbbt);

    $sqvr_segundo=date("s",$sqdvbbbt);

    $sqvr_sdcvvruta=$sqvr_anio.'/'.$sqvr_mes.'/'.$sqvr_dia.'/'.$sqvr_hora.'/'.$sqvr_minuto.'/'.$sqvr_segundo;

    if(file_exists($sqvr_sdcvvruta)){

    }
    else{
        mkdir($sqvr_sdcvvruta,0775,true);
    }
    var_dump(microtime(true));
    var_dump(microtime(false));
    file_put_contents($sqvr_sdcvvruta.'/'.'s.txt','s');
    var_dump($sqvr_sdcvvruta);
}








if(0) {
    die();
    die();
    die();
}




if(false){
    if(false){

//if(false) {
////
////    if(false){
////        /*
////    if (false) {
////        $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq ( id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL , nombre TEXT  NOT NULL )");
////
////// create table
////        // "public"."untitled_table" (
////        // "id" serial primary key,
////        // "created_at" timestamp not null default NOW(),
////        // "column_3" TIMESTAMPTZ null,
////        // "column_4" T null
////        // INT64
////        // INT64
////        // )
////
////
////        $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq ( id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL , nombre TEXT  NOT NULL )");
////
////// const configSystemScheme =new Schema({
////        // email_support:String,
////        // phone: String,
////        // dial_code: String,
////        // enable_register_pharmacy:Boolean,
////        // enable_mandatory_identification :Boolean,
////// })
////
////        $dbh->exec("CREATE TABLE IF NOT EXISTS  ConfigSystem "
////            . "("
////            . "id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL "
////            . ", email_support TEXT  NOT NULL "
////            . ", phone TEXT  NOT NULL   "
////            . ", dial_code TEXT  NOT NULL   "
////            . ", enable_register_pharmacy BOOL "
////            . ", enable_mandatory_identification BOOL "
////            . ")"
////        );
////// {
////        // "createdAt": "Aug 27, 2022, 10:07:45 AM",
////        // "name": "super_admin",
////        // "_id": {
////        // "timestamp": 1661612865,
////        // "counter": 2461196,
////        // "randomValue1": 13137119,
////        // "randomValue2": 16659
////        // },
////        // "updatedAt": "Aug 27, 2022, 10:07:45 AM"
////// }
////
////        $dbh->exec("CREATE TABLE IF NOT EXISTS  asset "
////            . "("
////            . "_id TEXT  NOT NULL "
////            . "createdAt TEXT  NOT NULL"
////            . "updatedAt TEXT  NOT NULL"
////
////            . "id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL "
////            . ", type TEXT  NOT NULL "
////            . ", name TEXT  NOT NULL "
////            . ")"
////        );
////
////        $dbh->exec("CREATE TABLE IF NOT EXISTS  role "
////            . "("
////            . "_id TEXT  NOT NULL "
////            . "createdAt TEXT  NOT NULL",
////  ."updatedAt TEXT  NOT NULL"
////
////        . "id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL "
////
////        . ", name TEXT  NOT NULL "
////        . ")"
////  );
////
/////*    email: {
////      type: String,
////       unique: false,
////    },
////    name: String,
////    picture: {
////      type: Schema.Types.ObjectId,
////      ref: "Asset",
////    },
////    picture: {
////      type: Schema.Types.ObjectId,
////      ref: "Asset",
////    },
////    doc_id_front: {
////      type: Schema.Types.ObjectId,
////      ref: "Asset",
////    },
////    doc_id_back: {
////      type: Schema.Types.ObjectId,
////      ref: "Asset",
////    },
////    token_google: String,
////    token_facebook: String,
////    token_apple: String,
////    logged: Boolean,
////    status: String,
////    birthdate: Date,
////    gender: String,
////    phone: String,
////    dial_code: String,
////    one_signal_id: String,
////    platform_one_signal: String,*/
////
////
////
////
////        $dbh->exec("CREATE TABLE IF NOT EXISTS usuario  "
////            . "("
////            . "_id TEXT  NOT NULL "
////            . "createdAt TEXT  NOT NULL",
////  ."updatedAt TEXT  NOT NULL"
////
////        . "id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL "
////
////        . ", email TEXT  NOT NULL "
////
////        . ", name TEXT  NOT NULL "
////
////        . ", token_google TEXT  NOT NULL "
////
////        . ", token_facebook TEXT  NOT NULL "
////
////        . ", token_apple TEXT  NOT NULL "
////
////    // token_google: String,
////    // token_facebook: String,
////    // token_apple: String,
////    // logged: Boolean,
////    // status: String,
////
////	    // email: {
////      // type: String,
////       // unique: false,
////    // },
////    // name: String,
////    // token_google: String,
////    // token_facebook: String,
////    // token_apple: String,
////    // logged: Boolean,
////    // status: String,
////    birthdate: Date,
////    // gender: String,
////    // phone: String,
////    // dial_code: String,
////    // one_signal_id: String,
////    // platform_one_signal: String,
////    // password: {
////      // type: String,
////       // select: false
////    // },
////    // password_token: String,
////
////
////
////  .", logged BOOL  NOT NULL "
////
////        . ", status TEXT  NOT NULL "
////
////
////        . ", birthdate Date  NOT NULL "
////
////        . ", gender TEXT  NOT NULL "
////
////        . ", phone TEXT  NOT NULL "
////
////        // birthdate: Date,
////        // gender: String,
////        // phone: String,
////
////
////        . ", dial_code TEXT  NOT NULL "
////
////        . ", one_signal_id TEXT  NOT NULL "
////
////        . ", platform_one_signal TEXT  NOT NULL "
////
////
////        // dial_code: String,
////        // one_signal_id: String,
////        // platform_one_signal: String,
////
////
////        . ", password TEXT  NOT NULL "
////
////        . ", password_token TEXT  NOT NULL "
////
////        // password: {
////        // type: String,
////        // select: false
////        // },
////        // password_token: String,
////
////        . ", address TEXT  NOT NULL "
////        . ", confirm_email_token TEXT  NOT NULL "
////
////        // address:String,
////        // confirm_email_token: String,
////        // address:String,
////        // confirm_email_token: String,
////
////        // enabled:String,
////        // verified_doctor:String,
////        // delivery_commission:Number,
////        // professional_license:String,
////
////        . ", enabled TEXT  NOT NULL "
////
////        . ", verified_doctor TEXT  NOT NULL "
////        // .", delivery_commission   NOT NULL "
////        . ", professional_license TEXT  NOT NULL "
////        . ", delivery_commission Double  NOT NULL "
////        . ", push_id TEXT  NOT NULL "
////        // address:String,
////        // confirm_email_token: String,
////        // enabled:String,
////        // verified_doctor:String,
////        // delivery_commission:Number,
////        // professional_license:String,
////        // push_id:String,
////        // push_id:String,
////        // accept_doc1: {
////        // type: Boolean,
////        // default: true
////        // },
////        // accept_doc2:  {
////        // type: Boolean,
////        // default: true
////        // },
////        // accept_doc3:  {
////        // type: Boolean,
////        // default: true
////        // },
////        // accept_doc4:  {
////        // type: Boolean,
////        // default: true
////        // },
////        // accept_doc5:  {
////        // type: Boolean,
////        // default: true
////        // },
////        // accept_doc6:  {
////        // type: Boolean,
////        // default: true
////        // },
////
////        . ", accept_doc1 BOOL  NOT NULL "
////        . ", accept_doc2 BOOL  NOT NULL "
////        . ", accept_doc3 BOOL  NOT NULL "
////        . ", accept_doc4 BOOL  NOT NULL "
////        . ", accept_doc5 BOOL  NOT NULL "
////        . ", accept_doc6 BOOL  NOT NULL "
////        // accept_doc1: {
////        // type: Boolean,
////        // default: true
////        // },
////        // accept_doc2:  {
////        // type: Boolean,
////        // default: true
////        // },
////        // accept_doc3:  {
////        // type: Boolean,
////        // default: true
////        // },
////        // accept_doc4:  {
////        // type: Boolean,
////        // default: true
////        // },
////        // accept_doc5:  {
////        // type: Boolean,
////        // default: true
////        // },
////        // accept_doc6:  {
////        // type: Boolean,
////        // default: true
////        // },
////
////        . ", pharmacy_assigned_idpharmacy TEXT  NOT NULL "
////        . ", pharmacy_assigned TEXT  NOT NULL "
////
////  pharmacy_assigned:{
////            type:
////            Schema . Types . ObjectId,
////    ref:"Pharmacy",
////  },
////  // pharmacy_assigned:{
////    // type: Schema.Types.ObjectId,
////    // ref:"Pharmacy",
////  // },
////  //.", idpharmacy_assigned TEXT  NOT NULL "
////  // pharmacy_assigned:{
////    // type: Schema.Types.ObjectId,
////    // ref:"Pharmacy",
////  // },
////  // pharmacy_assigned:{
////    // type: Schema.Types.ObjectId,
////    // ref:"Pharmacy",
////  // },
////
////   // assigned_orders: [
////    // {
////      // type: Schema.Types.ObjectId,
////      // ref: "Order",
////    // }
////   // ],
////
////  .", assigned_ordersjson TEXT  NOT NULL "
////
////        . ", assigned_orders TEXT  NOT NULL "
////
////   assigned_orders: [
////    {
////        type:
////        Schema . Types . ObjectId,
////      ref: "Order",
////    }
////   ],
////
////    // picture: {
////      // type: Schema.Types.ObjectId,
////      // ref: "Asset",
////    // },
////    // picture: {
////      // type: Schema.Types.ObjectId,
////      // ref: "Asset",
////    // },
////    // doc_id_front: {
////      // type: Schema.Types.ObjectId,
////      // ref: "Asset",
////    // },
////    // doc_id_back: {
////      // type: Schema.Types.ObjectId,
////      // ref: "Asset",
////    // },
////
////  .", picture_idasset TEXT  NOT NULL "
////        . ", picture2_idasset TEXT  NOT NULL "
////        . ", doc_id_front_idasset TEXT  NOT NULL "
////        . ", doc_id_back_idasset TEXT  NOT NULL "
////
//////json
////        . ", picture TEXT  NOT NULL "
////        . ", picture2 TEXT  NOT NULL "
////        . ", doc_id_front TEXT  NOT NULL "
////        . ", doc_id_back TEXT  NOT NULL "
////
////
////        // .", idrole TEXT  NOT NULL "
////
////        . ", idsrole_sqwholeids TEXT  NOT NULL "
////
////        . ", roles TEXT  NOT NULL "
////
////    // roles: [{ type: Schema.Types.ObjectId, ref: "Role" }],
////
////
////  location:{
////            type: {
////                type:
////                String },
////            coordinates:
////            []
////   },
////
////
////   // locationtype
////   // locationjson
////
////  .", locationtype TEXT  NOT NULL "
////        . ", locationjson TEXT  NOT NULL "
////        // location:{
////        // type: { type: String },
////        // coordinates: []
////        // },
////        // locationcoordinateslatitude
////        // locationcoordinateslongitude
////        // locationcoordinatesjson
////
////        . ", locationcoordinateslatitude TEXT  NOT NULL "
////        . ", locationcoordinateslongitude TEXT  NOT NULL "
////
////        . ", locationcoordinatesjson TEXT  NOT NULL "
////
////
////        // picture: {
////        // type: Schema.Types.ObjectId,
////        // ref: "Asset",
////        // },
////        // picture: {
////        // type: Schema.Types.ObjectId,
////        // ref: "Asset",
////        // },
////        // doc_id_front: {
////        // type: Schema.Types.ObjectId,
////        // ref: "Asset",
////        // },
////        // doc_id_back: {
////        // type: Schema.Types.ObjectId,
////        // ref: "Asset",
////        // },
////
////
////        . ")"
////  );
////
////
////
////
////
////
////
////
////
/////*{
////    email: {
////      type: String,
////       unique: false,
////    },
////    name: String,
////    picture: {
////      type: Schema.Types.ObjectId,
////      ref: "Asset",
////    },
////    picture: {
////      type: Schema.Types.ObjectId,
////      ref: "Asset",
////    },
////    doc_id_front: {
////      type: Schema.Types.ObjectId,
////      ref: "Asset",
////    },
////    doc_id_back: {
////      type: Schema.Types.ObjectId,
////      ref: "Asset",
////    },
////    token_google: String,
////    token_facebook: String,
////    token_apple: String,
////    logged: Boolean,
////    status: String,
////    birthdate: Date,
////    gender: String,
////    phone: String,
////    dial_code: String,
////    one_signal_id: String,
////    platform_one_signal: String,
////    password: {
////      type: String,
////       select: false
////    },
////    password_token: String,
////    roles: [{ type: Schema.Types.ObjectId, ref: "Role" }],
////    address:String,
////    confirm_email_token: String,
////    accept_doc1: {
////      type: Boolean,
////      default: true
////  },
////    accept_doc2:  {
////      type: Boolean,
////      default: true
////  },
////    accept_doc3:  {
////      type: Boolean,
////      default: true
////  },
////    accept_doc4:  {
////      type: Boolean,
////      default: true
////  },
////    accept_doc5:  {
////      type: Boolean,
////      default: true
////  },
////    accept_doc6:  {
////      type: Boolean,
////      default: true
////  },
////  enabled:String,
////  verified_doctor:String,
////  delivery_commission:Number,
////  professional_license:String,
////  pharmacy_assigned:{
////    type: Schema.Types.ObjectId,
////    ref:"Pharmacy",
////  },
////  location:{
////    type: { type: String },
////    coordinates: []
////   },
////   push_id:String,
////   assigned_orders: [
////    {
////      type: Schema.Types.ObjectId,
////      ref: "Order",
////    }
////   ],
////  }*/
////
////
////
////
////}
////
//}

        // .", name TEXT  NOT NULL "

        // $dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq ( id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL , nombre TEXT  NOT NULL )");

        // $dbh->exec("CREATE INDEX ON tableqwdsq (id);");

//$dbh->exec("INSERT INTO tableqwdsq ( id,nombre) VALUES ( '".fn_generarlargoidvariable()."','w1000')");
//
//var_dump('sq7');
//
//  // foreach ($dbh->query('SELECT id, nombre FROM tableqwdsq') as $row) {
//      // print $row['id'] . ': ' . $row['nombre'] . "\r\n";
//  // }
//
//$dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq ( id VARCHAR(150) UNIQUE  PRIMARY KEY   NOT NULL , nombre TEXT  NOT NULL )");
//
//$dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq2 (
//id VARCHAR(199) UNIQUE  PRIMARY KEY   NOT NULL
//, nombre TEXT  NOT NULL
//)");
//
//
//
//
//$dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq2 (
//id VARCHAR(199) UNIQUE  PRIMARY KEY   NOT NULL
//, nombre TEXT  NOT NULL
//)");
//
//
//$dbh->exec("CREATE TABLE IF NOT EXISTS  tableqwdsq3 (
//id VARCHAR(199) UNIQUE  PRIMARY KEY   NOT NULL
//, idcrotimemocrosegs TEXT  NOT NULL
//, nombre TEXT  NOT NULL
//)");
//
//
////
////recgresao_fn_generarlargoidvariable
////fn_generarlargoidvariable()
//
//$sqvrtqpobj = fn_generarlargoidvariable();
//
////$sqvrtqp_id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;
//
//var_dump($sqvrtqpobj);
//var_dump($sqvrtqpobj);
//var_dump($sqvrtqpobj);
//
//$id = $sqvrtqpobj->recgresao_fn_generarlargoidvariable;
//$folio = str_ireplace('.','_',$sqvrtqpobj->crotimepartex[1]) . str_ireplace('.','-',$sqvrtqpobj->crotimepartex[0]);
//
//$dbh->exec("INSERT INTO tableqwdsq3 (
//id,nombre,idcrotimemocrosegs
//)
//VALUES ( '" .$id ."'
//,'" .'w777' ."'
//,'" .json_encode($sqvrtqpobj) ."'
//)");
//
//foreach ($dbh->query('SELECT id, nombre FROM tableqwdsq3') as $row) {
//  print $row['id'] . ': ' . $row['nombre'] . "\r\n";
//}
//var_dump( fn_generarlargoidvariable() );
//
//
//$sqdvbbbt=time();
//
////date("Y-m-d H:i:s",sqdvbbbt)
//
//$sqvr_anio=date("Y",$sqdvbbbt);
//
//$sqvr_mes=date("m",$sqdvbbbt);
//
//$sqvr_dia=date("d",$sqdvbbbt);
//
//$sqvr_hora=date("H",$sqdvbbbt);
//
//$sqvr_minuto=date("i",$sqdvbbbt);
//
//$sqvr_segundo=date("s",$sqdvbbbt);
//
//$sqvr_sdcvvruta=$sqvr_anio.'/'.$sqvr_mes.'/'.$sqvr_dia.'/'.$sqvr_hora.'/'.$sqvr_minuto.'/'.$sqvr_segundo;
//
//if(file_exists($sqvr_sdcvvruta)){
//
//}
//else{
//    mkdir($sqvr_sdcvvruta,0775,true);
//}
//var_dump(microtime(true));
//var_dump(microtime(false));
//file_put_contents($sqvr_sdcvvruta.'/'.'s.txt','s');
//var_dump($sqvr_sdcvvruta);
//die();
//die();
//die();

//
//if(false) {
//    $nbjsdbnsvb = '';
//    $tvrwdhn = explode(" ", microtime(false));
//    var_dump($tvrwdhn);
//    for ($w = 0; $w < count($tvrwdhn); $w++) {
//        var_dump($w);
//        $nbjsdbnsvb = $tvrwdhn[$w] . '_' . $nbjsdbnsvb;
//    }
//
//    var_dump($nbjsdbnsvb);
//
//    $nbjsdbnsvbqv = '';
//    $tvrwdhn = explode(".", $nbjsdbnsvb);
//    for ($w = 0; $w < count($tvrwdhn); $w++) {
//        var_dump($w);
//        $nbjsdbnsvbqv = $nbjsdbnsvbqv . '_' . $tvrwdhn[$w];
//    }
//
//    var_dump($nbjsdbnsvbqv);
//
//    $sdfbwdfggdfgb = substr($nbjsdbnsvbqv, strlen($nbjsdbnsvbqv) - 1, 1);
//    var_dump($sdfbwdfggdfgb);
//    if ($sdfbwdfggdfgb != '_') {
//    } else {
//        var_dump($sdfbwdfggdfgb);
//
//        var_dump($sdfbwdfggdfgb);
//
//        $sdfbwdfggdfgb = substr($nbjsdbnsvbqv, 0, strlen($nbjsdbnsvbqv) - 1);
//        var_dump($sdfbwdfggdfgb);
//
//    }
//    var_dump($sdfbwdfggdfgb);
//
//
//    var_dump(rand(48, 57) . '.' . rand(48, 57) . '_' . $sdfbwdfggdfgb);
//
//
//    $sdfbwdfggdfgbq = substr($sdfbwdfggdfgb, 0, 1);
//
//    if ($sdfbwdfggdfgbq != '_') {
//    } else {
//        var_dump($sdfbwdfggdfgbq);
//
//        var_dump($sdfbwdfggdfgbq);
//
//        $sdfbwdfggdfgb = substr($sdfbwdfggdfgb, 1, strlen($sdfbwdfggdfgb));
//        var_dump($sdfbwdfggdfgb);
//
//    }
//
//
//    var_dump(rand(0, 9));
//// 48 57
//// 65,90
//// 65,93
//// 28
//// 10
//    var_dump(rand(48, 57));
//
//    var_dump(rand(48, 57));
//// 10,578,455,953,408
//// 14
//// 123,123,123,123,123,123,1
//// 123,123,123,123,123,123,123,123
//// 123,123,123,123,123,123,123,123,123,123
//
//    var_dump(rand(48, 57) . '.' . rand(48, 57) . '_' . $nbjsdbnsvb);
//    var_dump(rand(48, 57) . '.' . rand(48, 57) . '_' . $nbjsdbnsvbqv);
//    var_dump(rand(48, 57) . '.' . rand(48, 57) . '_' . $sdfbwdfggdfgb);
//
//    var_dump(rand(48, 57) . '.' . rand(48, 57) . '_' . $sdfbwdfggdfgb);
//
//    var_dump(rand(48, 57) . '.' . rand(48, 57) . '_' . $sdfbwdfggdfgb);
//
//    var_dump(rand(48, 57) . '.' . rand(48, 57) . '_' . $sdfbwdfggdfgb . '_0_' . rand(48, 57) . rand(48, 57) . rand(48, 57) . rand(48, 57));
//// rand(48,57)
//
////	$nbjsdbnsvbqv = '';
//    $tvrwdhnsqw = explode("_", $sdfbwdfggdfgb);
//    $tvrwdhnsqw = $tvrwdhnsqw[0];
//
//    $tvrwdhnsqw = substr($tvrwdhnsqw, 0, strlen($tvrwdhnsqw) - (1 + 3));
//
//    $tvrwdhnsqw = $tvrwdhnsqw . rand(11, 50) . rand(11, 97);
//
//// var_dump(rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57));
//
//// var_dump(rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57));
//
//// $sccbbnbdbb = rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);
//
//// $sccbbnbdbb = chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);
//
//// $sccbbnbdbb = '1'.chr(rand(65,93)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);
//
//    $sccbbnbdbb = '1' . chr(rand(65, 90)) . '_' . rand(16, 16) . rand(61, 61) . rand(20, 20) . rand(54, 59) . rand(10, 99) . '_' . $tvrwdhnsqw . '_' . $sdfbwdfggdfgb . '_0_' . rand(48, 57) . rand(48, 57) . rand(48, 57) . rand(48, 57) . '_0_' . rand(48, 57) . rand(48, 57) . rand(48, 57) . rand(48, 57);
//
//    var_dump($sccbbnbdbb);
//}
//


// 205118
// .1661387558_1661205360_


// string(28) "48.53_1661204336_0.39983300_"
// string(29) "52.56__1661204336_0_39983300_"
// string(27) "57.48_1661204336_0_39983300"
// string(27) "57.57_1661204336_0_39983300"
// string(27) "50.51_1661204336_0_39983300"



// string(28) "49.51__1661204042_0_44701500"
// int(0)
// int(1)
// string(22) "1661202981_0.40535600_"
// int(0)
// int(49)
// int(54)
// string(28) "49.55_1661202981_0.40535600_"


// var_dump(rand(48,57).'.'.rand(48,57).'_'.$nbjsdbnsvbqv);

// array(2) {
        // [0]=>
        // string(10) "0.90141200"
        // [1]=>
        // string(10) "1661205415"
// }
// int(0)
// int(1)
// string(22) "1661205415_0.90141200_"
// int(0)
// int(1)
// string(23) "_1661205415_0_90141200_"
// string(1) "_"
// string(1) "_"
// string(1) "_"
// string(22) "_1661205415_0_90141200"
// string(22) "_1661205415_0_90141200"
// string(28) "55.49__1661205415_0_90141200"
// string(1) "_"
// string(1) "_"
// string(21) "1661205415_0_90141200"
// int(9)
// int(50)
// int(55)
// string(28) "55.51_1661205415_0.90141200_"
// string(29) "52.55__1661205415_0_90141200_"
// string(27) "53.57_1661205415_0_90141200"
// string(27) "55.51_1661205415_0_90141200"
// string(27) "54.54_1661205415_0_90141200"
// string(38) "49.53_1661205415_0_90141200_0_57485356"
// string(46) "51.1661429712_1661205415_0_90141200_0_54575156"



//
//
// function fn_generarlargoidvariable_old(){
//	$nbjsdbnsvb = '';
// $tvrwdhn =explode(" ", microtime(false));
// var_dump($tvrwdhn);
// for($w=0;$w <count($tvrwdhn);$w++){
//	 var_dump($w);
//	 $nbjsdbnsvb=$tvrwdhn[$w] .'_'.$nbjsdbnsvb;
// }
//
//  var_dump($nbjsdbnsvb);
//
//	$nbjsdbnsvbqv = '';
// $tvrwdhn =explode(".", $nbjsdbnsvb);
// for($w=0;$w <count($tvrwdhn);$w++){
//	 var_dump($w);
//	 $nbjsdbnsvbqv=$nbjsdbnsvbqv .'_'. $tvrwdhn[$w] ;
// }
//
//var_dump($nbjsdbnsvbqv);
//
//$sdfbwdfggdfgb = substr($nbjsdbnsvbqv,strlen($nbjsdbnsvbqv)-1,1);
//var_dump($sdfbwdfggdfgb);
//if($sdfbwdfggdfgb != '_'){
//}
//else{
//	var_dump($sdfbwdfggdfgb);
//
//	var_dump($sdfbwdfggdfgb);
//
//$sdfbwdfggdfgb = substr($nbjsdbnsvbqv,0,strlen($nbjsdbnsvbqv)-1);
//var_dump($sdfbwdfggdfgb);
//
//}
//var_dump($sdfbwdfggdfgb);
//
//
//var_dump(rand(48,57).'.'.rand(48,57).'_'.$sdfbwdfggdfgb);
//
//
//$sdfbwdfggdfgbq = substr($sdfbwdfggdfgb,0,1);
//
//if($sdfbwdfggdfgbq != '_'){
//}
//else{
//	var_dump($sdfbwdfggdfgbq);
//
//	var_dump($sdfbwdfggdfgbq);
//
//$sdfbwdfggdfgb = substr($sdfbwdfggdfgb,1,strlen($sdfbwdfggdfgb));
//var_dump($sdfbwdfggdfgb);
//
//}
//
//
//
//
//var_dump(rand(0,9));
//// 48 57
//// 65,90
//// 65,93
//// 28
//// 10
//var_dump(rand(48,57));
//
//var_dump(rand(48,57));
//// 10,578,455,953,408
//// 14
//// 123,123,123,123,123,123,1
//// 123,123,123,123,123,123,123,123
//// 123,123,123,123,123,123,123,123,123,123
//
//var_dump(rand(48,57).'.'.rand(48,57).'_'.$nbjsdbnsvb);
//var_dump(rand(48,57).'.'.rand(48,57).'_'.$nbjsdbnsvbqv);
//var_dump(rand(48,57).'.'.rand(48,57).'_'.$sdfbwdfggdfgb);
//
//var_dump(rand(48,57).'.'.rand(48,57).'_'.$sdfbwdfggdfgb);
//
//var_dump(rand(48,57).'.'.rand(48,57).'_'.$sdfbwdfggdfgb);
//
//var_dump(rand(48,57).'.'.rand(48,57).'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57));
//// rand(48,57)
//
////	$nbjsdbnsvbqv = '';
// $tvrwdhnsqw =explode("_", $sdfbwdfggdfgb);
// $tvrwdhnsqw = $tvrwdhnsqw[0];
//
//$tvrwdhnsqw = substr($tvrwdhnsqw,0,strlen($tvrwdhnsqw)-(1+3));
//
//$tvrwdhnsqw = $tvrwdhnsqw.rand(11,50).rand(11,97);
//
//// var_dump(rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57));
//
//// var_dump(rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57));
//
//// $sccbbnbdbb = rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);
//
//// $sccbbnbdbb = chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)).chr(rand(65,93)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);
//
//// $sccbbnbdbb = '1'.chr(rand(65,93)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);
////
////$sccbbnbdbb = '1'.chr(rand(65,90)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);
//
//
//
//     $sccbbnbdbb = '1'.chr(rand(65,90)) .'_'. rand(16,16).rand(61,61).rand(20,20).rand(54,59).rand(10,99).    '_'.$tvrwdhnsqw.'_'.$sdfbwdfggdfgb.'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57).'_0_'.rand(48,57).rand(48,57).rand(48,57).rand(48,57);
//
//
//
//     var_dump($sccbbnbdbb);
//return $sccbbnbdbb;
//}
//

    }
}















?>