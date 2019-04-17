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
 
// DB table to use
$table = 'views_ujian_masuk';
 
// Table's primary key
$primaryKey = 'no_reg';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    // array('no', 'dt' => 0),
    array( 'db' => 'nisn', 'dt' => 0 ),
    array( 'db' => 'nm_siswa',  'dt' => 1 ),
    array( 'db' => 'asal_sekolah',   'dt' => 2 ),
    array( 
        'db' => 'ket_ujian',   
        'dt' => 3,
        'formatter' => function($data, $row){
            if($data == "Belum"){
                $data = "Belum Ujian";
            }
            elseif($data == "Tidak"){
                $data = "Tidak Lulus";
            }
            else{
                $data = "Lulus USM";
            }
            return $data;
        } 
    ),
    // array( 
    //     'db' => 'status_verifikasi',     
    //     'dt' => 3,
    //     'formatter' => function($data, $row){
    //         return $data == "Y" ? "Sudah Verifikasi" : "Belum Verifikasi"; 
    //     } 
    // ),
    // array(
    //     'db'        => 'start_date',
    //     'dt'        => 4,
    //     'formatter' => function( $d, $row ) {
    //         return date( 'jS M y', strtotime($d));
    //     }
    // ),
    // array(
    //     'db'        => 'salary',
    //     'dt'        => 5,
    //     'formatter' => function( $d, $row ) {
    //         return '$'.number_format($d);
    //     }
    // )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'psb',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
// require( 'ssp.class.php' );
require( '../class/ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);