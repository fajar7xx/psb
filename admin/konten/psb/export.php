<?php  
require '../../../config/koneksi.php';

// // $tablename = 'psb';
// $filename = 'export_' . date('Y-m-d') . '.xls';

// $query = "SELECT * FROM psb";
// $sql = mysqli_query($conn, $query)or die("Error : " . mysqli_error($conn));
// // $result = mysqli_fetch_assoc($sql);


// // header info setting
// header("Content-Type: application/xls");
// header("Content-Disposition: attachment; filename=$filename");
// header("Pragma: no-cache");
// header("Expires: 0");

// // tabbed character
// $sep = "\t";

// // mulai cetak nama colum sebagi dengan field mysql
// for($i = 0; $i<mysqli_num_fields($sql); $i++){
// 	echo mysqli_fetch_field_direct($sql, $i);
// }

// // end of printing column names
// print("\n");

// while($row = mysqli_fetch_row($sql)){
// 	$schema_insert = "";
// 	for($j=0; $j<mysqli_num_fields($sql); $j++){
// 		if(!isset($row[$j])){
// 			$schema_insert .= "NULL".$sep;
// 		}
// 		elseif($row[$j] != ""){
// 			$schema_insert .= "$row[$j]".$sep;
// 		}
// 		else{
// 			$schema_insert .= "".$sep;
// 		}
// 	}

// 	$schema_insert = str_replace($sep. "$", "", $schema_insert);
// 	$schema_insert = preg_replace("/\r\n|\n\r|\n|\r/" ,  " ", $schema_insert);
// 	$schema_insert .= "\t";

// 	print(trim($schema_insert));
// 	print "\n";
// }

// export menggunakan phpspreadsheet
// ini masih test data kosong
// link nya ini
// https://www.youtube.com/watch?v=7EUsBg5NZqc

// require '../../../config/koneksi.php';
require '../../../libs/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// use PhpOffice\PhpSpreadsheet\IOFactory;


$excel = new Spreadsheet();
$sheet = $excel->getActiveSheet();
$sheet->setCellValue('A1', 'aku fajar');

// $filename = 'data-psb-' . time() . '.xlsx';

// redirect output to client
// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment;filename="'. $filename .'"');
// header('Cache-Control: max-age=0');

// $writer = IOFactory::createWriter($excel, 'xlsx');
$writer = new Xlsx($excel);
$witer->save('tes.xlsx');
?>
