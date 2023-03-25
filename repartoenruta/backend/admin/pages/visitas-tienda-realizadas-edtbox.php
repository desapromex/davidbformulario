<?php //echo $sqvqrowtupla_usuario[''];

//$sqvraction='agregar';
//
//$sqvrid='0';
//
//$sqvraction='agregar';
//
//$sqvrid='0';

require('../../initcfg.php');
//require('initvfunctioions.php');

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

if('agregar'==strtolower(trim($sqvraction))) {
}
else{
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

}

?>

<?php

?>

<?php

?>


<style>
    .est795evjj754egh754dgh{
        display: block;
        /* margin: auto; */
        text-align: center;
        width: 100%;
    }
    .estmodal_est_fade_estin .estmodal_dialog_estmodal_est_lg .modal-content .modal-body{
        padding-top:2%;
    }

    .estbgmodal{

    }

    .estbgfade{

    }

    .estbgin{

    }

    .estlargeModal{

    }

    .estbgmodal_est_largeModal_est_bgfade_est_bgin{
        display: none;/* padding-right: 17px; */position: fixed;background: #00000091; background-color: #00000091;top: 0;left: 0;z-index: 77777;height: 100%;width: 100%;
    }

    .estmodal_est_fade_estin{
        display: block;padding-right: 17px;height: 99%;
    }

    .estmodal_dialog_estmodal_est_lg{
        overflow-y: scroll;
        overflow-x: hidden;
        max-height: 97%;
        height: 97%;
        width: 77%;
        width: 97%;
    }
    .estmodal_dialog_estmodal_est_lg{
        overflow-y: scroll;
        overflow-x: hidden;
        max-height: 90%;
        height: auto;
        width: 87%;
    }
    .est7456coldoble593:nth-child(1) {
        padding-right: 5%;
        /* width: 50%; */
    }
    .est7456coldoble593{
        display: inline-block;
        float: left;
        height: auto;
        width: 50%;
    }
    button.estbtn863467655.btn.bg-indigo.waves-effect {
        box-shadow: 2px 2px 3px #626262;
        padding: 0px !important;
        padding-left: 6px !important;
        padding-right: 6px !important;
    }
    button.estbtn863467655.btn {
        box-shadow: 2px 2px 3px #626262;
        padding: 0px !important;
        padding-left: 6px !important;
        padding-right: 6px !important;
        font-size: 12px !important;
    }
    button.estbtn863467655.btn i.material-icons{
        font-size: 17px !important;
    }




    .est7864btn664close.estbtn863467655.btn span{
        margin: 0px !important;
        padding: 0px !important;
        font-weight: bold !important;
        font-size: 17pt !important;
    }

    .est7864btn664close .estbtn863467655 .btn span{
        margin: 0px !important;
        padding: 0px !important;
        font-weight: bold !important;
        font-size: 17pt !important;
    }

    .est7864btn664close.estbtn863467655.btn {
        box-shadow: 2px 2px 3px #626262 !important;
        padding: 3px !important;
        padding-left: 3px !important;
        padding-right: 3px !important;
        height: auto !important;
        font-weight: bold !important;
        font-size: 17pt !important;
    }


    .est7864btn664close .estbtn863467655 .btn {
        box-shadow: 2px 2px 3px #626262 !important;
        padding: 3px !important;
        padding-left: 3px !important;
        padding-right: 3px !important;
        height: auto !important;
        font-weight: bold !important;
        font-size: 17pt !important;
    }


    .est7864btn664close .estbtn863467655 .btn .bg-indigo{
    }

    .est7864btn664close .estbtn863467655 .btn .bg-indigo .waves-effect{
    }

    .est7456coldoble593 {
        display: inline-block;
        margin: 3%;
        float: left;
        height: auto;
        width: 43%;
    }



    .est7853wgm855{
        display: inline-block;
    }
    .est7853wgm855 li{
        display: inline-block;
        text-decoration: none;
        margin: 3px;
        border: solid 1px #b2b2b2;
        background: #fff;
        padding: 1px;
    }
    .est7853wgm855 li img{
        height: 47px;
        width: auto;
    }
    .est7456coldoble593 {
        display: inline-block;
        margin: 3%;
        margin-top: 13px;
        float: left;
        height: auto;
        width: 43%;
    }
</style>









<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <!--             <div class="header">
                <h2 style="
                                    font-weight: bold;
                                    " >
                    S
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div> -->
            <div class="body" style="    padding-top: 0px;">

                <?php

                //$stmtq = $dbh->prepare('SELECT * FROM visitatienda WHERE id = ?  LIMIT 1');
                //        var_dump($stmtq);
                //        var_dump($stmtq->execute(array($id)));
                //        var_dump($stmtq);
                //$stmtq->execute(array($id));
                //
                //                    $sqvraction = $sdvbbfparinfoq;
                //                    $sqvrid

                if('agregar'==strtolower(trim($sqvraction))) {
                    $qresultq=array();
                    $sqvrtemprowsq=array();
                    $qresultq[]=$sqvrtemprowsq;
                }
                else {
                    $stmtq = $dbh->prepare("SELECT * FROM visitatienda WHERE id=?");
                    $stmtq->execute(array($sqvrid));
                    //$qresultq = $stmtq->fetchAll(PDO::FETCH_BOTH);
                    $qresultq = $stmtq->fetchAll(PDO::FETCH_ASSOC);

                    //var_dump($qresultq);
                }

                if (count($qresultq) >= 1) {
                //var_dump('siencontrado');
                //var_dump($qresultq);

                for($sqwrweqi=0; $sqwrweqi < count($qresultq); $sqwrweqi++) {
                $sqvqrowtupla_usuario = $qresultq[$sqwrweqi];

                ?>

                <form id="formqoneq">

                    <input id="sqvraction" name="sqvraction" value="<?php echo $sqvraction;?>" type="hidden">

                    <input id="sqvrid" name="sqvrid" value="<?php echo $sqvrid;?>" type="hidden">


                    <div class="est7456coldoble593">

                        <?php
                        $sqvrfeldtconame='fechahora_hwa';

                        $sqvrfeldtcoenfo='';

                        $sqvrfeldtcoreadonly = ' readonly="readonly" ';

                        $sqvrfeldtcodisabled = ' disabled="disabled" ';

                        if('agregar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('modificar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('agregar'== $sqvraction){

                        }
                        else{

                            $sqvrfeldtcoenfo=$sqvqrowtupla_usuario[$sqvrfeldtconame];

                        }
                        ?>
                        <label for="email_address">FechaHora</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?> type="text" class="form-control" placeholder="" value="<?php echo $sqvrfeldtcoenfo;?>">
                            </div>
                        </div>



                        <?php
                        $sqvrfeldtconame='entrada_comentario';

                        $sqvrfeldtcoenfo='';

                        $sqvrfeldtcoreadonly = ' readonly="readonly" ';

                        $sqvrfeldtcodisabled = ' disabled="disabled" ';

                        if('agregar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('modificar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('agregar'== $sqvraction){

                        }
                        else{

                            $sqvrfeldtcoenfo=$sqvqrowtupla_usuario[$sqvrfeldtconame];

                        }
                        ?>

                        <label for="<?php echo $sqvrfeldtconame;?>">entrada_comentario</label>
                        <div class="form-group" style="
    margin-bottom: 7px;
">
                            <div class="form-line">
                                <textarea  rows="7"  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" style="border: solid 2px #ccc;" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?>  class="form-control"><?php echo $sqvrfeldtcoenfo;?></textarea>
                            </div>
                        </div>
                        <div class="form-group" style="
    display: block;
    margin-top: 0px;
    margin-bottom: 33px;
">
                            <label for="email_address">entrada_comentario Fotos</label>
                 
					<?php 
					
                if('agregar'==strtolower(trim($sqvraction))) {
 
                }
                else {
                    $stmtqbqb = $dbh->prepare("SELECT * FROM fotosvisita WHERE id_visitatienda=?");
										
                    $stmtqbqb->execute(array($sqvqrowtupla_usuario['idhw']));
							
                    $stmtqbqb = $dbh->prepare("SELECT * FROM fotosvisita WHERE id_visitatienda=? AND tiporegistro	='entrada_foto_visitatienda'");
										
                    $stmtqbqb->execute(array($sqvqrowtupla_usuario['idhw']));
						// caducidad_foto_visitatienda
// entrada_foto_visitatienda
// incidencia_foto_visitatienda
// salida_foto_visitatienda

					
                    //$qresultqowvhgbq = $stmtqbqb->fetchAll(PDO::FETCH_BOTH);
                    $qresultqowvhgbq = $stmtqbqb->fetchAll(PDO::FETCH_ASSOC);

                    //var_dump($qresultqowvhgbq);
					
					
					
// var eefgfotoarcaducidad_foto_visitatienda;
// var eefgfotoarentrada_foto_visitatienda;
// var eefgfotoarincidencia_foto_visitatienda;
// var eefgfotoarsalida_foto_visitatienda;
		
 // eefgfotoarentrada_foto_visitatienda=[];


// var eefgfotoarincidencia_foto_visitatienda;
// var eefgfotoarsalida_foto_visitatienda;

// var eefgfotoarcaducidad_foto_visitatienda;


					if (count($qresultqowvhgbq) >= 1) {
					//var_dump('siencontrado');
					//var_dump($qresultqowvhgbq);
					?>
           <ul class="est7853wgm855" style="
    margin: 0px;
    padding: 0px;
">
                               
					<?php 
					for($sqwrweqwebq=0; $sqwrweqwebq < count($qresultqowvhgbq); $sqwrweqwebq++) {
					$sqvqrowtupla_fotosvisita = $qresultqowvhgbq[$sqwrweqwebq];
?>

                        <script>

eefgfotoarentrada_foto_visitatienda.push('<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>');
			
                        </script>

                                <li onclick="fn_loadqedt_edtboxedtboxfronthighone_otroone_fotografiaviewerq('entrada_foto_visitatienda','<?php echo $sqvrid;?>','<?php echo $sqvraction;?>',this,'',<?php echo $sqwrweqwebq;?>)"><img src="../../<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>"></li>
					<?php 
				}
				}
				else{
				}
				}
					?>
                            </ul>
                        </div>














                        <?php
                        $sqvrfeldtconame='salida_comentario';

                        $sqvrfeldtcoenfo='';

                        $sqvrfeldtcoreadonly = ' readonly="readonly" ';

                        $sqvrfeldtcodisabled = ' disabled="disabled" ';

                        if('agregar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('modificar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('agregar'== $sqvraction){

                        }
                        else{

                            $sqvrfeldtcoenfo=$sqvqrowtupla_usuario[$sqvrfeldtconame];

                        }
                        ?>

                        <label for="<?php echo $sqvrfeldtconame;?>">salida_comentario</label>
                        <div class="form-group" style="
    margin-bottom: 7px;
">
                            <div class="form-line">
                                <textarea  rows="7"  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" style="border: solid 2px #ccc;" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?>  class="form-control"><?php echo $sqvrfeldtcoenfo;?></textarea>
                            </div>
                        </div>
                        <div class="form-group" style="
    display: block;
    margin-top: 0px;
    margin-bottom: 33px;
">
                            <label for="email_address">salida_comentario Fotos</label>
							
						
					<?php 
					
                if('agregar'==strtolower(trim($sqvraction))) {
 
                }
                else {
                    $stmtqbqb = $dbh->prepare("SELECT * FROM fotosvisita WHERE id_visitatienda=?");
										
                    $stmtqbqb->execute(array($sqvqrowtupla_usuario['idhw']));
							
                    $stmtqbqb = $dbh->prepare("SELECT * FROM fotosvisita WHERE id_visitatienda=? AND tiporegistro	='salida_foto_visitatienda'");
										
                    $stmtqbqb->execute(array($sqvqrowtupla_usuario['idhw']));
						// caducidad_foto_visitatienda
// entrada_foto_visitatienda
// incidencia_foto_visitatienda
// salida_foto_visitatienda

					
                    //$qresultqowvhgbq = $stmtqbqb->fetchAll(PDO::FETCH_BOTH);
                    $qresultqowvhgbq = $stmtqbqb->fetchAll(PDO::FETCH_ASSOC);

                    //var_dump($qresultqowvhgbq);
					
					
					
// var eefgfotoarcaducidad_foto_visitatienda;
// var eefgfotoarentrada_foto_visitatienda;
// var eefgfotoarincidencia_foto_visitatienda;
// var eefgfotoarsalida_foto_visitatienda;
		
 // eefgfotoarentrada_foto_visitatienda=[];


// var eefgfotoarincidencia_foto_visitatienda;
// var eefgfotoarsalida_foto_visitatienda;

// var eefgfotoarcaducidad_foto_visitatienda;


					if (count($qresultqowvhgbq) >= 1) {
					//var_dump('siencontrado');
					//var_dump($qresultqowvhgbq);
					?>
           <ul class="est7853wgm855" style="
    margin: 0px;
    padding: 0px;
">
                               
					<?php 
					for($sqwrweqwebq=0; $sqwrweqwebq < count($qresultqowvhgbq); $sqwrweqwebq++) {
					$sqvqrowtupla_fotosvisita = $qresultqowvhgbq[$sqwrweqwebq];
?>

                        <script>

eefgfotoarsalida_foto_visitatienda.push('<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>');
			
                        </script>

                             <li onclick="fn_loadqedt_edtboxedtboxfronthighone_otroone_fotografiaviewerq('salida_foto_visitatienda','<?php echo $sqvrid;?>','<?php echo $sqvraction;?>',this,'',<?php echo $sqwrweqwebq;?>)"><img src="../../<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>"></li>
					<?php 
				}
				}
				else{
				}
				}
					?>
                            	
							
							
							
							
                            </ul>
                        </div>



                        <?php
                        $sqvrfeldtconame='id_usuario';

                        $sqvrfeldtcoenfo='';

                        $sqvrfeldtcoreadonly = ' readonly="readonly" ';

                        $sqvrfeldtcodisabled = ' disabled="disabled" ';

                        if('agregar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('modificar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('agregar'== $sqvraction){

                        }
                        else{

                            $sqvrfeldtcoenfo=$sqvqrowtupla_usuario[$sqvrfeldtconame];

                        }
                        ?>
                        <label for="email_address">Usuario</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?> type="text" class="form-control" placeholder="" value="<?php echo $sqvrfeldtcoenfo;?>">
                            </div>
                        </div>



































                    </div>
                    <div class="est7456coldoble593">

                        <?php
                        $sqvrfeldtconame='id_tienda';

                        $sqvrfeldtcoenfo='';

                        $sqvrfeldtcoreadonly = ' readonly="readonly" ';

                        $sqvrfeldtcodisabled = ' disabled="disabled" ';

                        if('agregar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('modificar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('agregar'== $sqvraction){

                        }
                        else{

                            $sqvrfeldtcoenfo=$sqvqrowtupla_usuario[$sqvrfeldtconame];

                        }
                        ?>
                        <label for="email_address">Tienda</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?> type="text" class="form-control" placeholder="" value="<?php echo $sqvrfeldtcoenfo;?>">
                            </div>
                        </div>





                        <?php
                        $sqvrfeldtconame='caducidad_comentario';

                        $sqvrfeldtcoenfo='';

                        $sqvrfeldtcoreadonly = ' readonly="readonly" ';

                        $sqvrfeldtcodisabled = ' disabled="disabled" ';

                        if('agregar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('modificar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('agregar'== $sqvraction){

                        }
                        else{

                            $sqvrfeldtcoenfo=$sqvqrowtupla_usuario[$sqvrfeldtconame];

                        }
                        ?>

                        <label for="<?php echo $sqvrfeldtconame;?>">caducidad_comentario</label>
                        <div class="form-group" style="
    margin-bottom: 7px;
">
                            <div class="form-line">
                                <textarea  rows="7"  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" style="border: solid 2px #ccc;" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?>  class="form-control"><?php echo $sqvrfeldtcoenfo;?></textarea>
                            </div>
                        </div>
                        <div class="form-group" style="
    display: block;
    margin-top: 0px;
    margin-bottom: 33px;
">
                            <label for="email_address">caducidad_comentario Fotos</label>
                        

					<?php 
					
                if('agregar'==strtolower(trim($sqvraction))) {
 
                }
                else {
                    $stmtqbqb = $dbh->prepare("SELECT * FROM fotosvisita WHERE id_visitatienda=?");
										
                    $stmtqbqb->execute(array($sqvqrowtupla_usuario['idhw']));
							
                    $stmtqbqb = $dbh->prepare("SELECT * FROM fotosvisita WHERE id_visitatienda=? AND tiporegistro	='caducidad_foto_visitatienda'");
										
                    $stmtqbqb->execute(array($sqvqrowtupla_usuario['idhw']));
						// caducidad_foto_visitatienda
// entrada_foto_visitatienda
// incidencia_foto_visitatienda
// salida_foto_visitatienda

					
                    //$qresultqowvhgbq = $stmtqbqb->fetchAll(PDO::FETCH_BOTH);
                    $qresultqowvhgbq = $stmtqbqb->fetchAll(PDO::FETCH_ASSOC);

                    //var_dump($qresultqowvhgbq);
					
					
					
// var eefgfotoarcaducidad_foto_visitatienda;
// var eefgfotoarentrada_foto_visitatienda;
// var eefgfotoarincidencia_foto_visitatienda;
// var eefgfotoarsalida_foto_visitatienda;
		
 // eefgfotoarentrada_foto_visitatienda=[];


// var eefgfotoarincidencia_foto_visitatienda;
// var eefgfotoarsalida_foto_visitatienda;

// var eefgfotoarcaducidad_foto_visitatienda;


					if (count($qresultqowvhgbq) >= 1) {
					//var_dump('siencontrado');
					//var_dump($qresultqowvhgbq);
					?>
           <ul class="est7853wgm855" style="
    margin: 0px;
    padding: 0px;
">
                               
					<?php 
					for($sqwrweqwebq=0; $sqwrweqwebq < count($qresultqowvhgbq); $sqwrweqwebq++) {
					$sqvqrowtupla_fotosvisita = $qresultqowvhgbq[$sqwrweqwebq];
?>

                        <script>

eefgfotoarcaducidad_foto_visitatienda.push('<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>');
			
                        </script>

                            <li onclick="fn_loadqedt_edtboxedtboxfronthighone_otroone_fotografiaviewerq('caducidad_foto_visitatienda','<?php echo $sqvrid;?>','<?php echo $sqvraction;?>',this,'',<?php echo $sqwrweqwebq;?>)"><img src="../../<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>"></li>
					<?php 
				}
				}
				else{
				}
				}
					?>
                            	
							
							
							
							
                       






						</ul>
                        </div>



                        <?php
                        $sqvrfeldtconame='incidencia_comentario';

                        $sqvrfeldtcoenfo='';

                        $sqvrfeldtcoreadonly = ' readonly="readonly" ';

                        $sqvrfeldtcodisabled = ' disabled="disabled" ';

                        if('agregar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('modificar'== $sqvraction){

                            $sqvrfeldtcoreadonly = '';

                            $sqvrfeldtcodisabled = '';

                        }
                        if('agregar'== $sqvraction){

                        }
                        else{

                            $sqvrfeldtcoenfo=$sqvqrowtupla_usuario[$sqvrfeldtconame];

                        }
                        ?>

                        <label for="<?php echo $sqvrfeldtconame;?>">incidencia_comentario</label>
                        <div class="form-group" style="
    margin-bottom: 7px;
">
                            <div class="form-line">
                                <textarea  rows="7"  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" style="border: solid 2px #ccc;" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?>  class="form-control"><?php echo $sqvrfeldtcoenfo;?></textarea>
                            </div>
                        </div>
                        <div class="form-group" style="
    display: block;
    margin-top: 0px;
    margin-bottom: 33px;
">
                            <label for="email_address">incidencia_comentario Fotos</label>
                       
					   
					<?php 
					
                if('agregar'==strtolower(trim($sqvraction))) {
 
                }
                else {
                    $stmtqbqb = $dbh->prepare("SELECT * FROM fotosvisita WHERE id_visitatienda=?");
										
                    $stmtqbqb->execute(array($sqvqrowtupla_usuario['idhw']));
							
                    $stmtqbqb = $dbh->prepare("SELECT * FROM fotosvisita WHERE id_visitatienda=? AND tiporegistro	='incidencia_foto_visitatienda'");
										
                    $stmtqbqb->execute(array($sqvqrowtupla_usuario['idhw']));
						// caducidad_foto_visitatienda
// entrada_foto_visitatienda
// incidencia_foto_visitatienda
// salida_foto_visitatienda

					
                    //$qresultqowvhgbq = $stmtqbqb->fetchAll(PDO::FETCH_BOTH);
                    $qresultqowvhgbq = $stmtqbqb->fetchAll(PDO::FETCH_ASSOC);

                    //var_dump($qresultqowvhgbq);
					
					
					
// var eefgfotoarcaducidad_foto_visitatienda;
// var eefgfotoarentrada_foto_visitatienda;
// var eefgfotoarincidencia_foto_visitatienda;
// var eefgfotoarsalida_foto_visitatienda;
		
 // eefgfotoarentrada_foto_visitatienda=[];


// var eefgfotoarincidencia_foto_visitatienda;
// var eefgfotoarsalida_foto_visitatienda;

// var eefgfotoarcaducidad_foto_visitatienda;


					if (count($qresultqowvhgbq) >= 1) {
					//var_dump('siencontrado');
					//var_dump($qresultqowvhgbq);
					?>
           <ul class="est7853wgm855" style="
    margin: 0px;
    padding: 0px;
">
                               
					<?php 
					for($sqwrweqwebq=0; $sqwrweqwebq < count($qresultqowvhgbq); $sqwrweqwebq++) {
					$sqvqrowtupla_fotosvisita = $qresultqowvhgbq[$sqwrweqwebq];
?>

                        <script>

eefgfotoarincidencia_foto_visitatienda.push('<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>');
			
                        </script>
                                <li onclick="fn_loadqedt_edtboxedtboxfronthighone_otroone_fotografiaviewerq('incidencia_foto_visitatienda','<?php echo $sqvrid;?>','<?php echo $sqvraction;?>',this,'',<?php echo $sqwrweqwebq;?>)"><img src="../../<?php echo $sqvqrowtupla_fotosvisita['wurlrutafoto'];?>"></li>
					<?php 
				}
				}
				else{
				}
				}
					?>
                            	
							
							
							
							
                       






					   
					   
                            </ul>
                        </div>

























                    </div>

                    <div style="float:none; clear: both;">
                    </div>

                    <br>
                    <br>
                    <div class="est795evjj754egh754dgh">
                        <button onclick="fn_hide_edtboxedtboxone()" type="button" class="btn btn-default waves-effect">Cancelar</button>
                        <span style="display:inline-block;width: 5%;">&nbsp;</span>
                        <?php
                        if('agregar'==strtolower(trim($sqvraction))
                            or 'modificar'==strtolower(trim($sqvraction))){
                            ?>
                            <button onclick="fn_savesend_edtboxedtboxone('<?php echo $sqvraction;?>','<?php echo $sqvrid;?>',this)" type="button" class="btn bg-indigo waves-effect">Guardar</button>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    }
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Vertical Layout -->





<?php
//require('footer.php');
?>








<script>
    //
    //    function fn_hide_edtboxedtboxfronthighone() {
    //
    //        jQuery('#edtboxedtboxfronthighone .modal-body').html('...');
    //        jQuery('#edtboxedtboxfronthighone').hide();
    //
    //    }
    //    function fn_hide_edtboxedtboxone() {
    //
    //        jQuery('#edtboxedtboxone .modal-body').html('...');
    //        jQuery('#edtboxedtboxone').hide();
    //
    //    }
    //fn_close_edtboxedtboxone
    function fn_savesend_edtboxedtboxone(jvraction,jvrid,jvrthis){
        jQuery('#edtboxedtboxfronthighone .modal-body').html('...');

        const sqvrformElement = jQuery("#edtboxedtboxone #formqoneq")[0];
        const sqvrformData = new FormData(sqvrformElement);

        //sqvrformData.append("serialnumber", serialNumber++);
        // contentType: 'application/json',
        // dataType: 'json',
        //data: JSON.stringify( { "first-name": $('#first-name').val(), "last-name": $('#last-name').val() } ),
        jQuery.ajax({
            url: '../../ssssssssqvisitatienda-func.php',
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            data:sqvrformData,
            success: function( data, textStatus, jQxhr ){
                //$('#response pre').html( JSON.stringify( data ) );
                fn_sqssdcvbsqs_procesar(data);
            },
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
                console.log( jqXhr );
                console.log( textStatus );
                var sqvrsqscsq_data='error'
                if(jqXhr){
                    if(jqXhr.responseText){
                        sqvrsqscsq_data=jqXhr.responseText
                    }
                }
                fn_sqssdcvbsqs_procesar(sqvrsqscsq_data);
            }
        });
        function fn_sqssdcvbsqs_procesar(data){
            console.log('sq_data');
            console.log(data)
            jQuery('#edtboxedtboxfronthighone .modal-body').html(data);
            jQuery('#edtboxedtboxfronthighone').show();

            if(data) {
                if (data.responsnstupla) {

                }
                else {

                    try {

                        var sqjvrdata = JSON.parse(data);

                        data = sqjvrdata
                        console.log(sqjvrdata);

                    } catch (exceptionVar) {
                        console.log(exceptionVar)

                        jQuery('#edtboxedtboxfronthighone .modal-body').html(data);
                        jQuery('#edtboxedtboxfronthighone').show();

                    }
                }
            }
            else {
                try {
                    var sqjvrdata = JSON.parse(data);

                    data = sqjvrdata
                    console.log(sqjvrdata);

                } catch (exceptionVar) {
                    console.log(exceptionVar)

                    jQuery('#edtboxedtboxfronthighone .modal-body').html(data);
                    jQuery('#edtboxedtboxfronthighone').show();

                }
            }

            if(data.responsnstupla){

                if(data.responsnstupla){

                    if(data.responsnstupla.length){
                        if(data.responsnstupla.length >= 1){
                            //jQuery('#edtboxedtboxfronthighone .modal-body').html('');
                            jQuery('#edtboxedtboxfronthighone').hide();
                            //jQuery('#edtboxedtboxone .modal-body').html('')
                            jQuery('#edtboxedtboxone').hide();
                            window.location.reload()
                        }
                        else {

                            jQuery('#edtboxedtboxfronthighone .modal-body').html(data);
                            jQuery('#edtboxedtboxfronthighone').show();

                        }
                    }
                    else {

                        jQuery('#edtboxedtboxfronthighone .modal-body').html(data);
                        jQuery('#edtboxedtboxfronthighone').show();

                    }
                }
                else {
                    jQuery('#edtboxedtboxfronthighone .modal-body').html(data);
                    jQuery('#edtboxedtboxfronthighone').show();
                }

            }
            else {
                jQuery('#edtboxedtboxfronthighone .modal-body').html(data);
                jQuery('#edtboxedtboxfronthighone').show();
            }

        }
    }

</script>
