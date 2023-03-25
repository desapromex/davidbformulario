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

$sql = 'SELECT  NOW()';
$qresultq = $dbh->query($sql);
var_dump($qresultq);
foreach ($qresultq as $row) {

    var_dump($row);
    print $row['name'] . "\t";
    print $row['color'] . "\t";
    print $row['calories'] . "\n";
}

$sql = "SELECT CONVERT_TZ('2004-01-01 07:00:00','+00:00','+02:00')";
$qresultq = $dbh->query($sql);
var_dump($qresultq);
foreach ($qresultq as $row) {

    var_dump($row);
    print $row['name'] . "\t";
    print $row['color'] . "\t";
    print $row['calories'] . "\n";
}

$sql = 'SELECT  NOW()';
$qresultq = $dbh->query($sql);
var_dump($qresultq);
foreach ($qresultq as $row) {

    var_dump($row);
    print $row['name'] . "\t";
    print $row['color'] . "\t";
    print $row['calories'] . "\n";
}

$sql = "SELECT CONVERT_TZ('2004-01-01 07:00:00','+00:00','+02:00')";
$qresultq = $dbh->query($sql);
var_dump($qresultq);
foreach ($qresultq as $row) {

    var_dump($row);
    print $row['name'] . "\t";
    print $row['color'] . "\t";
    print $row['calories'] . "\n";
}

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
var_dump($qresultq);
foreach ($qresultq as $row) {

    var_dump($row);
    print $row['name'] . "\t";
    print $row['color'] . "\t";
    print $row['calories'] . "\n";
}

$sql = "SET @@session.time_zone = '+00:00'";
$qresultq = $dbh->query($sql);
var_dump($qresultq);
foreach ($qresultq as $row) {

    var_dump($row);
    print $row['name'] . "\t";
    print $row['color'] . "\t";
    print $row['calories'] . "\n";
}




$sql = 'SELECT  NOW()';
$qresultq = $dbh->query($sql);
var_dump($qresultq);
foreach ($qresultq as $row) {

    var_dump($row);
    print $row['name'] . "\t";
    print $row['color'] . "\t";
    print $row['calories'] . "\n";
}

$sql = "SELECT CONVERT_TZ('2004-01-01 07:00:00','+00:00','+02:00')";
$qresultq = $dbh->query($sql);
var_dump($qresultq);
foreach ($qresultq as $row) {

    var_dump($row);
    print $row['name'] . "\t";
    print $row['color'] . "\t";
    print $row['calories'] . "\n";
}

$sql = "SELECT CONVERT_TZ(NOW() ,'+00:00','".date('P')."')";
$qresultq = $dbh->query($sql);
var_dump($qresultq);
foreach ($qresultq as $row) {

    var_dump($row);
    print $row['name'] . "\t";
    print $row['color'] . "\t";
    print $row['calories'] . "\n";
}

?>