<?php  

// masih bug\

require '../../../libs/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');

$dirPath  = "/usr/share";
$fileName = "{$dirPath}/filename.xlsx";

// recursively creates all required nested directories
if (!file_exists($dirPath)) {
    mkdir($dirPath, 0774, true);
}


$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');


?>