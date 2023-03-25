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
	
	div#mapqaseven {
		height: 270px;
		width: 99%;
	}
</style>




<!-- Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 style="
                                    font-weight: bold;
                                    " >
                    Tiendas
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
            </div>
            <div class="body">

                    <?php

                    //$stmtq = $dbh->prepare('SELECT * FROM tienda WHERE id = ?  LIMIT 1');
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
                        $stmtq = $dbh->prepare("SELECT * FROM tienda WHERE id=?");
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
                                $sqvrfeldtconame='nombretienda';

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
                                <label for="email_address">Nombre</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?> type="text" class="form-control" placeholder="" value="<?php echo $sqvrfeldtcoenfo;?>">
                                    </div>
                                </div>

                                <?php
                                $sqvrfeldtconame='email';

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
                                <label for="email_address">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?> type="text" class="form-control" placeholder="" value="<?php echo $sqvrfeldtcoenfo;?>">
                                    </div>
                                </div>

								<div class="form-group">
								<div class="form-line">
									<div id="mapqaseven" style=""></div>
								<script>
	//17.9863552, -94.5782784
	//var map = L.map('map').setView([51.505, -0.09], 13);
	//var jdcvpodfvb=[23.4834007, -99.953125]
	
									<?php 
									
                                    $sqvrfeldtcoenfo_latitude='';

                                    $sqvrfeldtcoenfo_longitude='';
							
                                if('agregar'== $sqvraction){

                                }
                                else{
                                    $sqvrfeldtcoenfo_latitude=$sqvqrowtupla_usuario['latitude'];

                                    $sqvrfeldtcoenfo_longitude=$sqvqrowtupla_usuario['longitude'];
								}
$sqvradfhhhscvvbanderaubicacion=false;

if($sqvrfeldtcoenfo_latitude != ''){
if($sqvrfeldtcoenfo_longitude != ''){
	
if(is_numeric($sqvrfeldtcoenfo_latitude) != ''){
if(is_numeric($sqvrfeldtcoenfo_longitude) != ''){
	$sqvradfhhhscvvbanderaubicacion=true;
}
}

}
}
	?>
	
	
	
	
									<?php 
                  if($sqvradfhhhscvvbanderaubicacion){
	?>
	
	var jdcvpodfvblatitide=<?php echo $sqvrfeldtcoenfo_latitude;?>
	
	var jdcvpodfvblongitude=<?php echo $sqvrfeldtcoenfo_longitude;?>
	
	var jdcvpodfvbzo=11
									<?php 
                  }
				  else{
	?>
	
	var jdcvpodfvblatitide=23.4834007
	var jdcvpodfvblongitude=-99.953125
	var jdcvpodfvbzo=5
	var jdcvpodfvblatitide=0
	var jdcvpodfvblongitude=-0
	var jdcvpodfvbzo=5
									<?php 
                  }
	?>
	
	var mapqaseven = L.map('mapqaseven').setView([jdcvpodfvblatitide,jdcvpodfvblongitude], jdcvpodfvbzo);

	var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(mapqaseven);
	
	var marker = L.marker([jdcvpodfvblatitide, jdcvpodfvblongitude]).addTo(mapqaseven);//		.bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

    setTimeout(function(){
        mapqaseven.setView([jdcvpodfvblatitide,jdcvpodfvblongitude], jdcvpodfvbzo);
    }, 100);
    setTimeout(function(){
        mapqaseven.setView([jdcvpodfvblatitide,jdcvpodfvblongitude], jdcvpodfvbzo);
    }, 300);
    setTimeout(function(){
        mapqaseven.setView([jdcvpodfvblatitide,jdcvpodfvblongitude], jdcvpodfvbzo);
    }, 500);

								</script>
								</div>
								</div>

                            </div>
                            <div class="est7456coldoble593">

                                <?php
                                $sqvrfeldtconame='telefono';

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
                                <label for="email_address">Telefono</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?> type="text" class="form-control" placeholder="" value="<?php echo $sqvrfeldtcoenfo;?>">
                                    </div>
                                </div>

                                <?php
                                $sqvrfeldtconame='direccion';

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
                                <label for="email_address">Direccion</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?> type="text" class="form-control" placeholder="" value="<?php echo $sqvrfeldtcoenfo;?>">
                                    </div>
                                </div>

								<br>
                                <label for="email_address">UbicacionGps</label>
								<br>
								<br><?php 			
								if('modificar'==strtolower(trim($sqvraction))
									or 'agregar'==strtolower(trim($sqvraction))
								){
								?>
                                <button onclick="fn_loadqedt_edtboxedtboxfronthighone_otrooneubicacionmapasel('','agregar',null,0,0)" type="button" class="btn bg-teal waves-effect">
                                    <i class="material-icons">edit_location</i>
                                    <span>Seleccionar en el Mapa Gps</span>
                                </button><?php 
								}
								?>
								<br>
								<br>
                                <?php
                                $sqvrfeldtconame='latitude';

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
                                <label for="email_address">latitude</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?> type="text" class="form-control" placeholder="" value="<?php echo $sqvrfeldtcoenfo;?>">
                                    </div>
                                </div>

                                <?php
                                $sqvrfeldtconame='longitude';

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
                                <label for="email_address">longitude</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input  id="<?php echo $sqvrfeldtconame;?>" name="<?php echo $sqvrfeldtconame;?>" <?php echo $sqvrfeldtcoreadonly;?>  <?php echo $sqvrfeldtcodisabled;?> type="text" class="form-control" placeholder="" value="<?php echo $sqvrfeldtcoenfo;?>">
                                    </div>
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
            url: '../../tiendas-func.php',
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



















<script>

    function fn_loadqedt_edtboxedtboxfronthighone_otrooneubicacionmapasel(jvrid,jvraction,jvrthis,jvrlatitude,jvrlongitude){

        jQuery('#edtboxedtboxfronthighone_otrooneubicacionmapasel .modal-body').html('...');
        jQuery('#edtboxedtboxfronthighone_otrooneubicacionmapasel').show();

        var sqvrqformData = new FormData();
        sqvrqformData.append("sqvraction", jvraction);
        sqvrqformData.append("sqvrid", jvrid);

		sqvrqformData.append('sqvr_latitude',jQuery('#latitude').val())
		sqvrqformData.append('sqvr_longitude',jQuery('#longitude').val())

        // contentType: 'application/json',
        // dataType: 'json',
        //data: JSON.stringify( { "first-name": $('#first-name').val(), "last-name": $('#last-name').val() } ),
        jQuery.ajax({
            url: 'tiendas-selubicacionmapagps.php',
            type: 'post',
            cache: false,
            contentType: false,
            processData: false,
            data:sqvrqformData,
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
            jQuery('#edtboxedtboxfronthighone_otrooneubicacionmapasel .modal-body').html(data)
        }
    }


//fn_loadqedt_edtboxedtboxfronthighone_otrooneubicacionmapasel('','agregar',null,0,0)

    function fn_hide_edtboxedtboxfronthighone_otrooneubicacionmapasel(){
        jQuery('#edtboxedtboxfronthighone_otrooneubicacionmapasel').hide();
	}
</script>






