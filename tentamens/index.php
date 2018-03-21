<pre>
<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;


$file ='test.xlsx';
$spreadsheet = IOFactory::load($file);

$xls_data = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

// var_dump($xls_data);

$html_tb ='<table border="1"><tr><th>'. implode('</th><th>', $xls_data[1]) .'</th></tr>';
$nr = count($xls_data); //number of rows
for($i=2; $i<=$nr; $i++){
  $html_tb .='<tr><td>'. implode('</td><td>', $xls_data[$i]) .'</td></tr>';
}
$html_tb .='</table>';

echo $html_tb;