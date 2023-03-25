<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */


 require('../../../initcfg.php');

// DB table to use
//$table = 'datatables_demo';
$table = 'tienda';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
// $columns = array(
	// array( 'db' => 'nombretienda', 'dt' => 'nombretienda' ),
	// array( 'db' => 'nombretienda',  'dt' => 'nombretienda' ),
	// array( 'db' => 'email',   'dt' => 'email' ),
	// array( 'db' => 'telefono',     'dt' => 'telefono' ),
	// array(
		// 'db'        => 'start_date',
		// 'dt'        => 'start_date',
		// 'formatter' => function( $d, $row ) {
			// return date( 'jS M y', strtotime($d));
		// }
	// ),
	// array(
		// 'db'        => 'salary',
		// 'dt'        => 'salary',
		// 'formatter' => function( $d, $row ) {
			// return '$'.number_format($d);
		// }
	// )
// );
$columns = array(
    array(
        'db'        => 'id',
        'dt'        => 'botoneraonqeaaa',
        'formatter' => function( $d, $row ) {
            //return //'$'.number_format($d);
            return '<button onclick="fn_loadqedt_edtboxedtboxone(\''.$d.'\',\'visualizar\',this)" type="button" class="estbtn863467655 btn bg-gray waves-effect">
                                    <i class="material-icons">preview</i><span>Ver</span></button>
                                    <button onclick="fn_loadqedt_edtboxedtboxone(\''.$d.'\',\'modificar\',this)" type="button" class="estbtn863467655 btn bg-blue waves-effect">
                                    <i class="material-icons">edit</i><span>Modificar</span></button>';
        }
    ),
	array( 'db' => 'email', 'dt' => 'email' ),
	array( 'db' => 'nombretienda',   'dt' => 'nombretienda' ),
	array( 'db' => 'telefono',     'dt' => 'telefono' ),
	array( 'db' => 'direccion',     'dt' => 'direccion' ),
/* 	// array(
		// 'db'        => 'fechahora_hwa',
		// 'dt'        => 'fechahora_hwa',
		// 'formatter' => function( $d, $row ) {
			// return date( 'jS M y', strtotime($d));
		// }
	// ),
	// array(
		// 'db'        => 'fechahoranumeritime_hwa',
		// 'dt'        => 'fechahoranumeritime_hwa',
		// 'formatter' => function( $d, $row ) {
			// return '$'.number_format($d);
		// }
	// ) */
     array(
     'db'        => 'id',
     'dt'        => 'botoneraonqebbb',
     'formatter' => function( $d, $row ) {
     //return //'$'.number_format($d);
         return '<button onclick="fn_loadqedt_edtboxedtboxone(\''.$d.'\',\'visualizar\',this)" type="button" class="estbtn863467655 btn bg-gray waves-effect">
                                    <i class="material-icons">preview</i><span>Ver</span></button>
                                    <button onclick="fn_loadqedt_edtboxedtboxone(\''.$d.'\',\'modificar\',this)" type="button" class="estbtn863467655 btn bg-blue waves-effect">
                                    <i class="material-icons">edit</i><span>Modificar</span></button>';
     }
     )
);

	global $sqvrbrsql_details;
// SQL server connection information
$sql_details = array(
	'user' => $sqvrbrsql_details['user'],
	'pass' => $sqvrbrsql_details['pass'],
	'db'   => $sqvrbrsql_details['db'],
	'host' => $sqvrbrsql_details['host'],	
	'port' => $sqvrbrsql_details['port'],
);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);