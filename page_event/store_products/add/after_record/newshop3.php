<?
//after_record.php


// Place event code here.
// Use "Add Action" button to add code snippets.

/*****************************************************************************
初期化 store_products->add_page->After_record_added
*******************************************************************************/
//ｓEQ

//print $product_id = $values['product_id'];

//$sql = "select max(product_id) from store_products";


/*****************************************************************************
成約日と成約者の更新
******************************************************************************/
//if($values['status'] = 33){
//	$sql = "UPDATE store_products SET DT_UP_DATE = '".date("Y-m-d H:i:s")."' where product_id = ".$product_id;
//  $rs = CustomQuery($sql);
//  $sql = "UPDATE store_products SET REG_AUTHER = ".$_SESSION['uid']." where product_id = ".$product_id;
//  $rs = CustomQuery($sql);
//}

/*********************************************************************
タイトルのアップ 単体テストで１商品のみ　BPM
**********************************************************************/
$color_val = $values['yahoo_color'];
$kataban_val = $values['yahoo_kataban'];
$values['title'];
$values['yahoo_title'];



if($color_val != ""){
$color_val = "/".$color_val;
}
if($kataban_val != ""){
$kataban_val = "/".$kataban_val;
}

$product_id = $values['product_id'];

if($values['yahoo_junle'] == "" || $values['yahoo_junle'] == " " || $values['yahoo_junle'] == "  " || $values['yahoo_junle'] == "6678" ){
  //$_title = 'ノーブランド(ノンブランド) '.$values['title'].$color_val.$kataban_val;
  $_title = 'ノーブランド(ノンブランド) '.$values['title'].$kataban_val;
}else{
  //$_title = $values['yahoo_junle']." ".$values['title'].$color_val.$kataban_val;
  $_title = $values['yahoo_junle']." ".$values['title'].$kataban_val;
}

/************************************************************
デバッグモードがオンの場合ログを書き出す
タイトルをアップする
*************************************************************/

$sql = "UPDATE store_products SET raku_title = '".$_title ."' where product_id = ".$product_id;
//exit();
$rs = CustomQuery($sql);
/**************************************************************
６６７８か空の場合ノンブランドに設定をする
@@yahoo_junle YAHOOJUNLE
***************************************************************/
if($values['yahoo_junle'] == '' || $values['yahoo_junle'] == " " || $values['yahoo_junle'] == "  " || $values['yahoo_junle'] == "6678" ){
$sql = "UPDATE store_products SET product_num = 631, yahoo_junle = 'ノーブランド(ノンブランド)' where product_id = ".$product_id;
//exit();
$rs = CustomQuery($sql);
}


$sql = "UPDATE store_products SET raku_title = '".$_title ."' where product_id = ".$product_id;
//exit();
$rs = CustomQuery($sql);
/**************************************************************
６６７８か空の場合ノンブランドに設定をする
@@yahoo_junle YAHOOJUNLE
***************************************************************/
if($values['yahoo_junle'] == " " || $values['yahoo_junle'] == "  " || $values['yahoo_junle'] == "6678" )
$sql = "UPDATE store_products SET yahoo_junle = 'ノーブランド(ノンブランド)' where product_id = ".$product_id;
//exit();
$rs = CustomQuery($sql);




