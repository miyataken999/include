<?


/**********************************************************
198行目　追加

select * from _raku_setting_small_mini where sex = "" and parent_id = 11
***********************************************************/
$values['raku_hyouji_big2'];


  require_once 'Log.php';
$result["txt"] = $params["txt"]." world!";
$conf = array('mode' => 0777, 'timeFormat' => '%X %x');
$file = &Log::factory('file', '/var/www/html/shop/out.log', 'TEST', $conf);
$a = dirname(__FILE__);
$b = __FILE__;
$c = __LINE__;


// Place event code here.
// Use "Add Action" button to add code snippets.

/**********************************************************
変数の初期化
***********************************************************/
//$product_id = $data["product_id"];
print $product_id = $values['product_id'];

/**********************************************************
更新者更新
商品を更新したユーザIDを入れる
***********************************************************/
//try{
$sql = "UPDATE store_products SET updated_by = ".$_SESSION['uid']." where product_id = ".$product_id;
$file->log($a.$b.$c.'\r\n<BR>査定更新者は\r\n'.$sql."\r\n");
$file->log($sql);
$rs = CustomQuery($sql);
//}catch (Exception $e) {
//    echo 'Caught exception: ',  $e->getMessage(), "\n";
//}

/**********************************************************
更新日の追加 FN0010
**********************************************************/
print $sql = "UPDATE store_products SET updated_at = '".date("Y/m/d H:i:s")."' where product_id = ".$product_id;
$rs = CustomQuery($sql);
$file->log($a.$b.$c.'\r\n<BR>査定設定内容は\r\n'.$sql."\r\n");

/*****************************************************************************
初期化 store_products->add_page->After_record_added
*******************************************************************************/
//ｓEQ
/*****************************************************************************
成約日と成約者の更新
売却済みに変更の際に　成約日と成約者を設定する （売却待ち）登録待ちになった日
******************************************************************************/
if($values['status'] == 33){
  $sql = "UPDATE store_products SET DT_UP_DATE = '".date("Y-m-d H:i:s")."' where product_id = ".$product_id;
$file->log($a.$b.$c.'\r\n<BR>査定設定内容は\r\n'.$sql."\r\n");

  $rs = CustomQuery($sql);
  $sql = "UPDATE store_products SET REG_AUTHOR = ".$_SESSION['uid']." where product_id = ".$product_id;
$file->log($a.$b.$c.'\r\n<BR>査定設定内容は\r\n'.$sql."\r\n");

  $rs = CustomQuery($sql);


}
/*****************************************************************************
合わず日 返却人　返却日
⇒合わずとなった場合に合わず日と担当者をいれる
******************************************************************************/

if($values['status'] == 34){
  $sql = "UPDATE store_products SET AWAZU_DATE = '".date("Y/m/d H:i:s")."' where product_id = ".$product_id;
  $rs = CustomQuery($sql);
  $file->log($a.$b.$c.'\r\n<BR>合わず日は\r\n'.$sql."\r\n");
  $sql = "UPDATE store_products SET AWAZU_NIN = ".$_SESSION['uid']." where product_id = ".$product_id;
  $rs = CustomQuery($sql);
  $file->log($a.$b.$c.'\r\n<BR>合わず人は\r\n'.$sql."\r\n");
}
//sinaban
/****************************************************************
ログファイル初期化
*****************************************************************/
$file = &Log::factory('file', '/var/www/html/shop/out.log', 'TEST', $conf);
$a = dirname(__FILE__);
$b = __FILE__;
$c = __LINE__;
// **********  Send simple email  ************
$email="miyataken999@gmail.com";
$from="miyataken999@gmail.com";
$msg="Eva_st_all make maill";
$subject="makemail";
$attachments = array();
// Attachments description. The 'path' is required. Others parameters are optional.
// $attachments =  array(
//    array('path' => getabspath('files/1.jpg')),
//    array('path' => getabspath('files/2.jpg'), 'name' => 'image.jpg', 'encoding' => 'base64', 'type' => 'application/octet-stream')) ;

// Place event code here.
// Use "Add Action" button to add code snippets.

/**********************************************************
変数の初期化
***********************************************************/
//$product_id = $data["product_id"];
print $product_id = $values['product_id'];
/****************************************************************
更新者の更新
*****************************************************************/
//SEQでUP

/*****************************************************************/

/******************************************************************
更新日の更新
*******************************************************************/
//$sql = 'update store_products set updated_at = ''.date('Y-m-d H:i:s').'',status = ''.$data['_satatus'].'' where product_id = ''.$data['product_id'].''';
//CustomQuery($sql);

  $product_id = null;
  $ini = null;
  $yahoo_seq = null;
  $sql = "SELECT max(store_products.product_id) AS product_id FROM store_products";
  $values['product_id'];
  $rs = CustomQuery($sql);
  $data = db_fetch_array($rs);

  $product_id = $values['product_id'];//$data["product_id"];

/******************************************************************
シーケンスの取得
*******************************************************************/
  $sql = "SELECT * FROM seq where product_id=".$product_id;
  $rs = CustomQuery($sql);
  $data = db_fetch_array($rs);

  if($data["initial_name"] == ""){
    $ini = "X";
  }else{
    $ini= $data["initial_name"];
  }

$yahoo_seq =
  $data["sub_cate"].
  $ini.
  $data["c"].
  $data["d"].$data["sex_ini"];

$sql = "UPDATE store_products SET yahoo_sinaban = '".$yahoo_seq."' where product_id = ".$product_id;
  //exit();
  $rs = CustomQuery($sql);

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
  //$_title = 'ノンブランド '.$values['title'].$color_val.$kataban_val;
  $_title = 'ノンブランド '.$values['title'].$kataban_val;
}else{
  //$_title = $values['yahoo_junle']." ".$values['title'].$color_val.$kataban_val;
  $_title = $values['yahoo_junle']." ".$values['title'].$kataban_val;
}


//$_title = $values['yahoo_junle']." ".$values['title'].$color_val.$kataban_val."■".$product_id;
$sql = "UPDATE store_products SET raku_title = '".$_title ."' where product_id = ".$product_id;
//exit();
$rs = CustomQuery($sql);



/*********************************************************************
タイトルなどの処理
**********************************************************************/
$product_id = $values['product_id'];

/***********************************************************
ブランドジャンルが 空の場合は　ジャンルを設定しない
************************************************************/

if($values['yahoo_junle'] == "" || $values['yahoo_junle'] == " " || $values['yahoo_junle'] == "  " || $values['yahoo_junle'] == "6678" ){
  $_title = 'ノンブランド '.$values['title'].$color_val.$kataban_val;
}else{
  $_title = $values['yahoo_junle']." ".$values['title'].$color_val.$kataban_val;
}

/************************************************************
デバッグモードがオンの場合ログを書き出す
タイトルをアップする
*************************************************************/

$sql = "UPDATE store_products SET raku_title = '".$_title ."' where product_id = ".$product_id;
//exit();
$rs = CustomQuery($sql);

/**************************************************************
楽天中カテゴリーの自動登録

大カテゴリー中カテゴリーを自動で持ってくる
***************************************************************/
$y_sex = $values['st_yahoo_sex'];
$brand_id = $values['sub_category_id1'];
//select * from _raku_setting_small_mini where sex = "" and parent_id = 11;

/**************************************************************
大カテゴリー raku_big
****************************************************************/
$sql = 'select * from _raku_setting_small_mini where sex = '.$y_sex.' and parent_id = '.$brand_id;
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
//raku_sub_category_id2
//Dataがあった場合にアップデートする
$sql = "UPDATE store_products SET raku_sub_category_id2 = ".$data['ms_id']." where product_id = ".$product_id;

if($data['ms_id'] != ""){
$rs = CustomQuery($sql);
}

/**************************************************************
中カテゴリー raku_sub_category_id middle
****************************************************************/
$sql = 'select * from _raku_setting_small where sex = '.$y_sex.' and parent_id = '.$brand_id;
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
//raku_sub_category_id2
//Dataがあった場合にアップデートする
$sql = "UPDATE store_products SET raku_sub_category_id = ".$data['name']." where product_id = ".$product_id;

if($data['ms_id'] != ""){
//$rs = CustomQuery($sql);
}

/**************************************************************
小カテゴリー rakuten mini
****************************************************************/
$sql = 'select * from _raku_setting_middle where sex = '.$y_sex.' and parent_id = '.$brand_id;
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
//raku_sub_category_id2
//Dataがあった場合にアップデートする
$sql = "UPDATE store_products SET raku_sub_category_id2 = ".$data['name']." where product_id = ".$product_id;



/*
$data = array(
    'param1' => "1",
    'param2' => "2",
);
$data = http_build_query($data, '', '&');
$header = array(
    'Content-Type: application/x-www-form-urlencoded',
    'Content-Length: '.strlen($data)
);
$context = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => implode('\r\n', $header),
        'content' => $data
    )
);
$url = 'https://ssl.jcswclass.jp/bot/line.php';
file_get_contents($url, false, stream_context_create($context));
*/

//exit();
/***************************************************************
//データがあった場合楽天項目の設定
****************************************************************/


/**************************************************************
６６７８か空の場合ノンブランドに設定をする
@@yahoo_junle YAHOOJUNLE
***************************************************************/
if($values['yahoo_junle'] == '' || $values['yahoo_junle'] == " " || $values['yahoo_junle'] == "  " || $values['yahoo_junle'] == "6678" ){
$sql = "UPDATE store_products SET product_num = 631, yahoo_junle = 'ノーブランド(ノンブランド)' where product_id = ".$product_id;
//exit();
$rs = CustomQuery($sql);
}

$sql = "UPDATE store_products SET yahoo_fuzokuhin = '".$values["Discrimination"]."' where product_id = ".$product_id;
$rs = CustomQuery($sql);





/*********************************************************************
確認メールの送信
**********************************************************************/

$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from.$sql, 'attachments' => $attachments));
// You can manually overwrite SMTP settings
// $ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from, 'attachments' => $attachments,
//     'host' => 'somehost', 'port' => 25, 'username' => 'smtpUserName', 'password' => 'password'));
if(!$ret["mailed"])
  echo $ret["message"];



//test
// $sql = "UPDATE store_products SET comment = 'ファイル読み込みテストafter_record edit' where product_id = ".$product_id;
// $rs = CustomQuery($sql);

