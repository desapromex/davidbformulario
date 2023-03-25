<?php 

require('../../initcfg.php');

$sdvbbfparname = 'sqvraction';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$sqvraction = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato sqvraction es obligatorio"]';
    die();
}




$sdvbbfparname = 'sqvrid';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$sqvrid = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato sqvrid es obligatorio"]';
    die();
}





$sdvbbfparname = 'sqvr_fotowdfggbbburlw';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$sqvr_fotowdfggbbburlw = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato sqvr_fotowdfggbbburlw es obligatorio"]';
    die();
}










$sdvbbfparname = 'sqvr_tiporegistro';
$sdvbbfparinfoq = '';
if (isset($_REQUEST[$sdvbbfparname])) {
//$sdvbbfparinfoq=$_REQUEST[$sdvbbfparname];
    $sdvbbfparinfoq = trim($_REQUEST[$sdvbbfparname]);
}
$sqvr_tiporegistro = $sdvbbfparinfoq;

if (trim($sdvbbfparinfoq) != '') {

} else {

    header("HTTP/1.0 202 ErrorqServerq");
    echo '["el dato sqvr_tiporegistro es obligatorio"]';
    die();
}

?>
<div id="container" style="
    display: inline-block;
    height: 100%;
    width: 100%;
    overflow: visible;
">  <script>
 // eefgfotoarcaducidad_foto_visitatienda=[];
 // eefgfotoarentrada_foto_visitatienda=[];
 // eefgfotoarincidencia_foto_visitatienda=[];
 // eefgfotoarsalida_foto_visitatienda=[];
  </script>				
<?php
   $stmtq = $dbh->prepare("SELECT * FROM visitatienda WHERE id=?");
                    $stmtq->execute(array($sqvrid));
                    //$qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);
                    $qresultq = $stmtq->fetchAll(PDO::FETCH_ASSOC);

                    //var_dump($qresultq);
					if (count($qresultq) >= 1) {
						//var_dump('siencontrado');
						//var_dump($qresultq);

						for($sqwrweqi=0; $sqwrweqi < count($qresultq); $sqwrweqi++) {
						$sqvqrowtupla_usuario = $qresultq[$sqwrweqi];
						
						}
						
//$stmtqbqb = $dbh->prepare("SELECT * FROM fotosvisita WHERE id_visitatienda=?");
							
			//	$stmtqbqb->execute(array($sqvrid));
					//	 $sqvqrowtupla_usuario = $stmtqbqb->fetchAll(PDO::FETCH_ASSOC);



//$stmtqbqb = $dbh->prepare("SELECT * FROM fotosvisita WHERE id_visitatienda=?");
									
				//$stmtqbqb->execute(array($sqvqrowtupla_usuario['idhw']));
						
				$stmtqbqb = $dbh->prepare("SELECT * FROM fotosvisita WHERE id_visitatienda=? AND tiporegistro	=?");
									
				$stmtqbqb->execute(array($sqvqrowtupla_usuario['idhw'],$sqvr_tiporegistro));
				 $qresultqowvhgbq = $stmtqbqb->fetchAll(PDO::FETCH_ASSOC);
				if (count($qresultqowvhgbq) >= 1) {
				}
?>				
<?php  
$sqvr_fotowdfggbbburlwencontrado=false;
for($sqwrweqwebq=0; $sqwrweqwebq < count($qresultqowvhgbq); $sqwrweqwebq++) {
					$sqvqrowtupla_fotosvisita = $qresultqowvhgbq[$sqwrweqwebq];
					if($sqwrweqwebq <=0){
					$sqvr_fotowdfggbbburlwsqonesq=$sqvqrowtupla_fotosvisita['wurlrutafoto'];
					}
					
?>  <script>

// eefgfotoarcaducidad_foto_visitatienda.push('<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>');
// eefgfotoarentrada_foto_visitatienda.push('<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>');
// eefgfotoarincidencia_foto_visitatienda.push('<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>');
// eefgfotoarsalida_foto_visitatienda.push('<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>');
  </script>
<?php 
if(strtolower($sqvr_fotowdfggbbburlw)==strtolower($sqvqrowtupla_fotosvisita['wurlrutafoto'])){
	$sqvr_fotowdfggbbburlwencontrado=true;$sqvr_fotowdfggbbburlwsrcsq=$sqvqrowtupla_fotosvisita['wurlrutafoto'];
?>

<?php 
}
?>
<?php 
}
?>
<?php 
if($sqvr_fotowdfggbbburlwencontrado){
	
}
else{
	$sqvr_fotowdfggbbburlwsrcsq=$sqvr_fotowdfggbbburlwsqonesq;
}
?>
<img  id="image"  src="../../<?php echo $sqvr_fotowdfggbbburlwsrcsq;?>" style="
    height: initial;
    width: initial;
    /* height: 100%; */
    /* width: 100%; */
">
<?php 
					}
					else{
					}
?>
</div>
<script>
var angle = 0,
img = document.getElementById('container');
</script>
