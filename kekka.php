<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<pre>
<?
// ini_set( 'display_errors', 1 );


// 初期値設定
$search_query = "EVA2";
$api_key = "AIzaSyBQHMPrIvHAs9RlO0Qx1EQcCj0FA_M_zsg";
$cx = "002443116268753684281:-4fk1m88kim";
$num = 10;
// 検索用URL
$tmp_url = "https://www.googleapis.com/customsearch/v1?";




for ($iii=0; $iii < 10; $iii++) {
  $start = 1+($iii*10);
  // print "start ".$start."\n";
  // 検索パラメタ発行
  $params_list[$iii] = array('q'=>$search_query,'key'=>$api_key,'cx'=>$cx,'start'=>$start,'alt'=>'json');

  // リクエストパラメータ作成
  $req_param[$iii] = http_build_query($params_list[$iii]);

  // リクエスト本体作成
  $request[$iii] = $tmp_url.$req_param[$iii];

  // jsonデータ取得
  $json[$iii] = file_get_contents($request[$iii],true);
  $json_d[$iii] = json_decode($json[$iii],true);


  // var_dump($json_d[$iii]);

  // urlを取得
  for ($i=0; $i<10; $i++){
  $get_url[$iii] = $json_d[$iii]["items"][$i]["link"];
  echo "$get_url[$iii]\n";
  }

  $start = "";
  $params_list[$iii] = "";
  $req_param[$iii] = "";
  $json[$iii] = "";
  $json_d[$iii] = "";
  $get_url[$iii] = "";

}





  ?>
</pre>

</body>
</html>
