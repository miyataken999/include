<?php
ini_set("display_errors",1);
include "./tcpdf/tcpdf.php"; // include_path配下に設置したtcpdf.phpを読み込む

$tcpdf = new TCPDF();
$tcpdf->setPrintHeader(false);
$tcpdf->AddPage(); // 新しいpdfページを追加

$tcpdf->SetFont("kozgopromedium", "", 10); // デフォルトで用意されている日本語フォント

$orientation='L';
$format='A4';

$tcpdf->setPageFormat($format, $orientation);

$html = file_get_contents("temp.html");
$tcpdf->writeHTML($html); // 表示htmlを設定


$tcpdf->AddPage(); // 新しいpdfページを追加

$tcpdf->SetFont("kozgopromedium", "", 10); // デフォルトで用意されている日本語フォント
// $tcpdf->setPageFormat("B5", "L" );
$html = file_get_contents("temp_back.html");
$tcpdf->writeHTML($html); // 表示htmlを設定
$tcpdf->Output('meisai.pdf', 'I'); // pdf表示設定

?>
