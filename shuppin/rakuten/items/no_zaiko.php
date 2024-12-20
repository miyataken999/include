<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>在庫ｾﾞﾛ商品一覧</title>
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
    margin: auto;
  }
  table a:hover{
    font-weight: bold;
    border-color: #0ff;
    color: #0ff;
  }
  table a {
      color: #333;
      text-decoration: none;
      font-size: 13px;
      text-align: center;
      display: block;
      width: 150px;
      margin: auto;
      border: 2px solid #888;
      border-radius: 12px;
      padding: 2px 0;
  }
  body{
    background-color: #aaa;
  }
  select{
    padding: 5px;
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



$offset = 0;
if($_GET["offset"] != ""){
  $offset = htmlspecialchars($_GET["offset"]);
}
$limit = 30;
if($_GET["limit"] != ""){
  $limit = htmlspecialchars($_GET["limit"]);
}
$z_flag = "";
if($_GET["z_flag"] != ""){
  $z_flag = htmlspecialchars($_GET["z_flag"]);
}

//全商品情報
$sortOrder = "asc";
$itemName = "/";
$depotFlg = 0;
//リクエストパラメータ
$rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/item/search";
$request = "?itemName={$itemName}&depotFlg={$depotFlg}&sortOrder={$sortOrder}&offset={$offset}&limit={$limit}";
$rakuten_url = "{$rakuten_baseurl}{$request}";

$result = file_get_contents(
  $rakuten_url,
  false,
  stream_context_create(
    array(
      'http' => array(
        'method' => 'GET',
        'header' => implode(
          "\r\n",
          array(
            0 => "Authorization: {$ccc}"
          )
        )
      )
    )
  )
);
// var_dump($result);

$obj = simplexml_load_string($result);

// var_dump($obj);



$numFound = $obj->itemSearchResult->numFound;
?>

<form action="./no_zaiko.php" method="get" accept-charset="utf-8">
  offset
  <select name="offset" id="offset">
    <?for ($sel_i=0; $sel_i <= 10000; $sel_i++) {?>
    <option value="<?=$sel_i?>" <?if($sel_i == $offset){?>selected<?}?> ><?=$sel_i?></option>
    <?}?>
  </select>
  <br>
  抽出件数
  <select name="limit" id="limit">
    <?for ($sel_i=0; $sel_i <= 30; $sel_i++) {?>
    <option value="<?=$sel_i?>" <?if($sel_i == $limit){?>selected<?}?> ><?=$sel_i?></option>
    <?}?>
  </select>
  実際の表示数と異なります。
  <br>
  <select name="z_flag" id="z_flag">
    <option value="">在庫ｾﾞﾛのみ</option>}
    <option value="off" <?if($z_flag == "off"){?>selected<?}?> >全て表示</option>}
  </select>
  <input type="submit" value="表示する">
  <input type="button" value="リセットする" onclick="window.location.href='./no_zaiko.php'">
</form>

<h3>現在の抽出条件：<?=($offset+1)?>件目から<?=($offset+$limit)?>件目</h3>

<table>
  <tr>
    <th>全商品情報数（商品名に「/」が入ってるもの）</th>
    <td><?=$numFound?>件</td>
  </tr>
</table>

<table>
  <tr>
    <th>削除</th>
    <th>商品管理番号</th>
    <th>在庫数</th>
    <th>画像格納フォルダ</th>
    <th>画像</th>
    <th>倉庫</th>
    <th>リンク</th>
  </tr>
<?
for ($i=0; $i < count($obj->itemSearchResult->items->item); $i++) {
  $itemUrl = $obj->itemSearchResult->items->item[$i]->itemUrl;

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//各商品詳細取得
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
  //リクエストパラメータ
  $seq_rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/item/get";
  $seq_request = "?itemUrl={$itemUrl}";
  $seq_rakuten_url = "{$seq_rakuten_baseurl}{$seq_request}";

  $seq_result = file_get_contents(
    $seq_rakuten_url,
    false,
    stream_context_create(
      array(
        'http' => array(
          'method' => 'GET',
          'header' => implode(
            "\r\n",
            array(
              0 => "Authorization: {$ccc}"
            )
          )
        )
      )
    )
  );
  $seq_obj = simplexml_load_string($seq_result);

  // var_dump($seq_obj);


  $inventoryCount = $seq_obj->itemGetResult->item->itemInventory->inventories->inventory->inventoryCount;
  //初期は在庫数がｾﾞﾛの場合のみ出力
  if(($inventoryCount == 0) OR ($z_flag == "off")){
    $itemName = $seq_obj->itemGetResult->item->itemName;
    $isDepot = $seq_obj->itemGetResult->item->isDepot;
    $imageUrl = $seq_obj->itemGetResult->item->images->image->imageUrl;

    $folder_name = str_replace("http://image.rakuten.co.jp/rfstore/cabinet/","",$imageUrl);
    $folder_name_array = explode("/",$folder_name);
    $folder_name = $folder_name_array[0];


?>
  <tr>
    <td><a href="/include/shuppin/rakuten/items/item_delete.php?itemUrl=<?=$itemUrl?>" data="<?=$itemUrl?>" class="delete_a" target="_blank">商品データを削除する</a></td>
    <td><?=$itemUrl?></td>
    <td><?=$inventoryCount?></td>
    <td><?=$folder_name?></td>
    <td><img src='<?=$imageUrl?>' onerror="this.style.display='none';" width="30px"></td>
    <td>
      <?
      if($isDepot == "false"){
        print "×";
      }else{
        print "倉庫内";
      }
      ?>
    </td>
    <td>
      <a href="/include/shuppin/rakuten/cabinet_navi.php?foder_name=<?=$folder_name?>" target="_blank" >フォルダ内画像一覧</a>
      <a href="/include/shuppin/rakuten/items/item.php?seq=<?=$itemUrl?>" target="_blank" >商品詳細</a>
    </td>
  </tr>
<?
  }


}
?>
</table>

<script type="text/javascript">
  $("#offset").focus();
  var delete_seq = "";
  $(".delete_a").click(function(){
    delete_seq = $(this).attr("data");
    if(window.confirm('商品管理番号\n'+delete_seq+'\nを削除します。\n※画像の削除を先に完了してから実行してください。\n\n実行してよろしいですか？')){
      return true;
    }
    else{
      window.alert('キャンセルしました。');
      return false;
    }
  })
</script>
</body>
</html>
