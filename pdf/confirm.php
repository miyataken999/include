<?php
include "./tcpdf/tcpdf.php"; // include_path配下に設置したtcpdf.phpを読み込む

$tcpdf = new TCPDF();
$tcpdf->setPrintHeader(false);
$tcpdf->AddPage(); // 新しいpdfページを追加

$tcpdf->SetFont("kozgopromedium", "", 10); // デフォルトで用意されている日本語フォント

$orientation='P';
$format='B5';

$tcpdf->setPageFormat($format, $orientation);


$html = file_get_contents("temp_confirm.html");
$tcpdf->writeHTML($html); // 表示htmlを設定
$tcpdf->Output('meisai.pdf', 'I'); // pdf表示設定



?>
