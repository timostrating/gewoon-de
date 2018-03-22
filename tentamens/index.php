<!DOCTYPE html>
<html>
    <head>
        <title>gewoon.de</title>
        <script src="sorttable.js"></script>
        <style>
            /* Sortable tables */
            table.sortable thead {
                background-color:#eee;
                color:#666666;
                font-weight: bold;
                cursor: default;
            }
        </style>
    </head>
    <body>
        <pre>


<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;


$file ='test.xlsx';
$spreadsheet = IOFactory::load($file);

$xls_data = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
$show = [
    "O", // Klas
    // "A", // V/D
    // "B", // D/B
    "C", // Periode
    "D", // Soort
    // "E", // Type
    // "F", // Opleiding
    "G", // Weeknr
    "H", // Datum
    "I", // Van
    "J", // Tot
    // "K", // vakcode
    "L", // Omschrijving
    // "M", // Toets_Oms
    // "N", // NULL
    // "P", // Duur
    "Q", // Lokatie
    "R"  // Bijzonderheden
];

// var_dump($xls_data);
?>

            <table class="sortable" border="1">
                <tr>
                    <?php for($i=0; $i < count($show); $i++) { ?>
                        <th> <?= $xls_data[1][$show[$i]] ?> </th>
                    <?php } ?>
                </tr>

                <?php for($i=2; $i <= count($xls_data); $i++) {  if( $xls_data[$i]["O"] !== "Jaar 1") continue ?>
                    <tr>
                        <?php for($j=0; $j < count($show); $j++) { ?>
                            <th> <?= $xls_data[$i][$show[$j]] ?> </th>
                        <?php } ?>
                    </tr>
                <?php } ?>

            </table>






            <table border="1"><tr><th> <?= implode('</th><th>', $xls_data[1]) ?> </th></tr>
                <?php for($i=2; $i <= count($xls_data); $i++) { ?>
                    <tr><td> <?= implode('</td><td>', $xls_data[$i]) ?> </td></tr>
                <?php } ?>
            </table>

        </pre>
    </body>
</html>