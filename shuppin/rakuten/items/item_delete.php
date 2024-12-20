<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>商品情報削除</title>
</head>
<body>
<style type="text/css">
  th{
    font-weight: normal;
    background-color: #ffc;
    border: 1px solid #aaa;
    padding: 5px;
  }
  td{
    border: 1px solid #aaa;
    background-color: #fff;
    padding: 5px;
  }
  table{
    border-collapse: collapse;
  }
</style>


<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header.php";
?>

<?
// エラー出力する場合
// ini_set( 'display_errors', 1 );

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//認証部分作成
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
include_once $_SERVER["DOCUMENT_ROOT"]."/include/shuppin/rakuten/code/key.php";

//リクエストパラメータ
// $itemUrl = 169661;
if($_GET["itemUrl"] != ""){
  $itemUrl = htmlspecialchars($_GET["itemUrl"]);

  $rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/item/delete";
  $rakuten_url = "{$rakuten_baseurl}";

  $rootNode = new SimpleXMLElement( '<?xml version="1.0" encoding="UTF-8"?><request></request>' );

  // ノードの追加
  $itemNode = $rootNode->addChild('itemDeleteRequest')->addChild('item');
  $itemNode->addChild( 'itemUrl', $itemUrl );

  // 作ったxmlツリーを出力する
  $request_body = $rootNode->asXML();

  print $request_body;


  $result = file_get_contents(
    $rakuten_url,
    false,
    stream_context_create(
      array(
        'http' => array(
          'method' => 'POST',
          'header' => implode(
            "\r\n",
            array(
              0 => "Authorization: {$ccc}"
            )
          ),
          'content' => $request_body
        )
      )
    )
  );

  // var_dump($result);
  $obj = simplexml_load_string($result);

  var_dump($obj);
?>

  <script type="text/javascript">
    $(window).load(function(){
      window.close();
    })
  </script>

<?

  mb_internal_encoding("utf8");
  include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
  //log
  $log_time = date("Y-m-d H:i:s");
  $log_ip = $_SERVER["REMOTE_ADDR"];
  //user_login取得
  $user_login_query = " SELECT user_login FROM users WHERE user_id={$user_id} LIMIT 1";
  $user_login_sql = mysql_query('SET NAMES utf8');
  $user_login_sql = mysql_query($user_login_query);
  $user_login_result = mysql_fetch_assoc($user_login_sql);
  $log_user = $user_login_result["user_login"];
  //user_login取得 end
  $log_table = "rakuten";
  $log_action = "delete";
  $log_descri = "---Keys\n";
  $log_descri .= "商品管理番号:{$itemUrl}\n";
  $log_descri .= "---Fields\n";
  $log_descri .= "楽天から商品情報を削除\n";


  $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
  // print $insert_sql."<br><br>";
  $result_flag = mysql_query('SET NAMES utf8');
  $result_flag = mysql_query($insert_sql);
  if (!$result_flag) {
    print mysql_error();
    exit('データを登録できませんでした。');
  }


}else{
?>
商品管理番号が設定されていません。
<?
}


?>

</body>
</html>
