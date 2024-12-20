<?
/*******************************************************
ログで主要ファイルの書き出し
********************************************************/
require_once 'class.php';
require_once 'Log.php';
$result["txt"] = $params["txt"]." world!";
$conf = array('mode' => 0777, 'timeFormat' => '%X %x');
$file = &Log::factory('file', '/var/www/html/shop/out.log', 'TEST', $conf);
$a = dirname(__FILE__);
$b = __FILE__;
$c = __LINE__;


function createSql($db55){
$sql="insert into auctions
(product_id,
store_product_id,
Control_Number,
Categories,
Description,
Description_for_mobile_version,
Items_in_the_store_for_the_search_keyword,
Starting_price,
Qty,
Limited_number_of_bids,
Period,
End_time,
State_of_the_original_shipment,
Shipment_of_the_original_city,
Expense,
Upfront_payment_deferred_payment,
Navigation_Settings_payment_bid,
Product_status,
Returns_whether_or_not,
Image_1,
Image_2,
Image_3,
        Lowest_rating,
Automatic_extension,
Early_termination,
Price_summary,
Price_negotiation,
Auto_Relist_Item,
Lowest_winning_bid,
Auction_Spotlight,
Bold_text,
Background_color,
Sutoahottookushon,
Prominent_icon,
Icon_Gifts,
Yahoo_point_options,
Afirieitoopushon,
Package_size,
Weight_of_luggage,
FUN_BOON,
delvery_1,
delivery_link_1,
delivery_methods_1,
delivery_2,
delivery_link_2,
delivery_methods_2,
image_amount,
delivery_3,
delivery_link_3,
delivery_methods_3,
delivery_4,
delivery_link_4,
delivery_methods_4,
delivery_5,
delivery_link_5,
delivery_methods_5,
delivery_6,
delivery_link_6,
delivery_methods_6,
delivery_7,
delivery_link_7,
delivery_methods_7,
delivery_8,
delivery_link_8,
delivery_methods_8,
delivery_9,
delivery_link_9,
delivery_methods_9,
delivery_10,
delivery_link_10,
delivery_methods_10,
Image_1_Comments1,
amount_of_image
)
select ".$db55->f("product_id").",
".$db55->f("product_id").",'".$db55->f("yahoo_sinaban")."',
Categories,
Description,
Description_for_mobile_version,
Items_in_the_store_for_the_search_keyword,
'".$db55->f("sales_price")."',
Qty,
Limited_number_of_bids,
Period,
End_time,
State_of_the_original_shipment,
Shipment_of_the_original_city,
Expense,
Upfront_payment_deferred_payment,
Navigation_Settings_payment_bid,
Product_status,
Returns_whether_or_not,
'".$db55->f("product_id")."_1.jpg',
'".$db55->f("product_id")."_2.jpg',
'".$db55->f("product_id")."_3.jpg',
        Lowest_rating,
Automatic_extension,
Early_termination,
Price_summary,
Price_negotiation,
Auto_Relist_Item,
Lowest_winning_bid,
Auction_Spotlight,
Bold_text,
Background_color,
Sutoahottookushon,
Prominent_icon,
Icon_Gifts,
Yahoo_point_options,
Afirieitoopushon,
Package_size,
Weight_of_luggage,
FUN_BOON,
delvery_1,
delivery_link_1,
delivery_methods_1,
delivery_2,
delivery_link_2,
delivery_methods_2,
image_amount,
delivery_3,
delivery_link_3,
delivery_methods_3,
delivery_4,
delivery_link_4,
delivery_methods_4,
delivery_5,
delivery_link_5,
delivery_methods_5,
delivery_6,
delivery_link_6,
delivery_methods_6,
delivery_7,
delivery_link_7,
delivery_methods_7,
delivery_8,
delivery_link_8,
delivery_methods_8,
delivery_9,
delivery_link_9,
delivery_methods_9,
delivery_10,
delivery_link_10,
delivery_methods_10,
Image_1_Comments1,
amount_of_image
from
auctions_master where id = 17
";
return $sql;
}

$dsn = 'mysql:dbname=internet;host=';
$user = 'admin';
$password = 'admin';

    $dbh = new PDO($dsn, $user, $password);
    $dbh2 = new PDO($dsn, $user, $password);
    $dbh3 = new PDO($dsn, $user, $password);
      if ($dbh == null){
        print('接続に失敗しました。<br>');
    }else{
        print('接続に成功しました。<br>');
    }

    //$dbh->query('SET NAMES sjis');
    print $sql = 'select * from store_products where product_id = '.$values["product_id"];
    $stmt = $dbh->query($sql);
    $db55 = new db55();

   mail('miyataken999@gmail.com', 'My Subject', $sql);

//$sth = $dbh->prepare("SELECT name, colour FROM fruit");
//$sth->execute();



    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
  $db55->c = $result;
    print "======================</br>";
  print $sql2 = "select count(*) as c from auctions where product_id = ".$result["product_id"];
  //  print $result['status'];
  //       print "======================</br>";


        if($result['status'] != 7){
            $stmt2 = $dbh2->query($sql2);

            while($result2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
                print "COUNTは".$result2["c"];
                if($result2["c"]==0){
                print "=================";
                   print $sql =  createSql($db55);
                print "=================";
                   mail('miyataken999@gmail.com', 'My Subject', $sql);
                   $stmt2 = $dbh3->query($sql);

                }
            }
        }

    }


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

/**********************************************************
採寸者更新
商品を更新したユーザIDを入れる
***********************************************************/
//try{
$sql = "UPDATE store_products SET yahoo_saisun_sha = ".$_SESSION['uid']." where product_id = ".$product_id;
$file->log($a.$b.$c.'\r\n<BR>採寸者更新は\r\n'.$sql."\r\n");
$file->log($sql);
$rs = CustomQuery($sql);
//}catch (Exception $e) {
//    echo 'Caught exception: ',  $e->getMessage(), "\n";
//}

/**********************************************************
採寸終了の追加 FN0010
**********************************************************/
print $sql = "UPDATE store_products SET saisun_end = '".date("Y/m/d H:i:s")."' where product_id = ".$product_id;
$rs = CustomQuery($sql);

$file->log($a.$b.$c.'\r\n<BR>採寸終了は\r\n'.$sql."\r\n");

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
合わず日
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
//                array('path' => getabspath('files/1.jpg')),
//                array('path' => getabspath('files/2.jpg'), 'name' => 'image.jpg', 'encoding' => 'base64', 'type' => 'application/octet-stream')) ;

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
  //品番生成は査定物一覧でまとめたいため、ここのはコメントアウト
  // $rs = CustomQuery($sql);

$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from.$sql, 'attachments' => $attachments));
// You can manually overwrite SMTP settings
// $ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from, 'attachments' => $attachments,
//     'host' => 'somehost', 'port' => 25, 'username' => 'smtpUserName', 'password' => 'password'));
if(!$ret["mailed"])
        echo $ret["message"];
//採寸済み削除
//$sql = "update store_products SET status = 2 where product_id = ".$product_id;
  //$rs = CustomQuery($sql);
//この時点で撮影待ちに変更 201703081143
$sql = "update store_products SET status = 7 where product_id = ".$product_id;
  $rs = CustomQuery($sql);

//ストア内検索用キーワード
$search_keyword = $values["search_keyword"];
$rs = CustomQuery("update auctions SET Items_in_the_store_for_the_search_keyword = '".$search_keyword."' where product_id = ".$product_id);


/*
wget -O "/home/dacelo/cron/`date +%Y%m%d_%H%M%S`.html" 'http://blog.dacelo.info'
*/


$dsn = 'mysql:dbname=internet;host=';
$user = 'admin';
$password = 'admin';


$dbh = null;

//旧EVAリダイレクト
$product_id = $values['product_id'];
$ecc_id = $values['ecc_id'];
$yahoo_sinaban = $values['yahoo_sinaban'];

$saisun_next = "/shop/store_products_maint_state_saisun.php?saisun_tyokugo=yes&auction_auto_reg=on&product_id=" . $product_id . "&ecc_id=" . $ecc_id . "&yahoo_sinaban=" . $yahoo_sinaban . "&status=1&ccsForm=store_products%3AEdit";

//newshop3のテスト用コード
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/newshop3/")){
  //テストページへ遷移させる
  $saisun_next = "/shop/store_products_maint_state_saisun_test.php?saisun_tyokugo=yes&auction_auto_reg=on&product_id=" . $product_id . "&ecc_id=" . $ecc_id . "&yahoo_sinaban=" . $yahoo_sinaban . "&status=1&ccsForm=store_products%3AEdit";
}

header('Location: '.$saisun_next);
exit();
