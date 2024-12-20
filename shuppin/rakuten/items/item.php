
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>商品情報</title>
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
    width: 200px;
    border: 1px solid #aaa;
    background-color: #fff;
    padding: 5px;
  }
  table{
    border-collapse: collapse;
    margin: auto;
  }
  #ctrl_table{
    margin: 20px auto;
  }
  #ctrl_table a:hover{
    font-weight: bold;
    border-color: #0ff;
    color: #0ff;
  }
  #ctrl_table a{
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


$seq = 170579;
if($_GET["seq"] != ""){
  $seq = htmlspecialchars($_GET["seq"]);
}

?>
<form action="./item.php" method="get" accept-charset="utf-8">
  <input type="text" name="seq" id="seq" value="<?=$seq?>">
  <input type="submit" value="表示">
</form>
<?
//リクエストパラメータ
$rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/item/get";
$request = "?itemUrl={$seq}";
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
$obj = simplexml_load_string($result);

// var_dump($obj);


$status = $obj->itemGetResult->code;

if($status == "N000"){
  $status = "正常";
}else{
  if(($status == "S001") OR ($status == "S002")){
    $status = "只今メンテナンス中のためアクセスできません。";
  }elseif(($status == "S011") OR ($status == "S021") OR ($status == "S031") OR ($status == "S999")){
    $status = "楽天側エラー";
  }elseif($status == "C001"){
    $status = "該当する商品IDは存在しません。";
  }elseif($status == "C011"){
    $status = "指定された店舗IDは存在しません。";
  }elseif($status == "C113"){
    $status = "パラメータがフォーマットにそっていません。";
  }elseif($status == "C114"){
    $status = "商品一括登録サービスにロックされているため操作できません。";
  }elseif($status == "C201"){
    $status = "指定されたイベントIDは存在しません。";
  }elseif($status == "C204"){
    $status = "商品IDのフォーマットが正しくありません。";
  }elseif($status == "C219"){
    $status = "不要なデータが入っています。";
  }elseif($status == "C301"){
    $status = "登録・更新・削除時 :渡されたtransactionIDでの更新が既にされています。";
  }else{
    $status = "原因不明エラー。エラーコードの再設定の必要があります。要確認です。";
  }
  //商品情報がない場合、中止
  print $status;
  exit();
}
  print $status;



$itemUrl = $obj->itemGetResult->item->itemUrl;

$item_i = 0;

$item_data[$item_i]["data"] = $itemUrl;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemNumber;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemName;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemPrice;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->genreId;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->catalogId;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->catalogIdExemptionReason;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->images;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->images->image;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->images->image->imageUrl; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->images->image->imageAlt; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->descriptionForPC;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->descriptionForMobile;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->descriptionForSmartPhone;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->movieUrl;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->options;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->options->option; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->options->option->optionName; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->options->option->optionStyle; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->options->option->optionValues; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->options->option->optionValues->optionValue; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->options->option->optionValues->optionValue->value;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->tagIds;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->tagIds->tagId;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->catchCopyForPC;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->catchCopyForMobile;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->descriptionBySalesMethod;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isSaleButton;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isDocumentButton;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isInquiryButton;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isStockNoticeButton;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemLayout;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isIncludedTax;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isIncludedPostage;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isIncludedCashOnDeliveryPostage;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->displayPrice;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->orderLimit;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->postage;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->postageSegment1;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->postageSegment2;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isNoshiEnable;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isTimeSale;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->timeSaleStartDateTime;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->timeSaleEndDateTime;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isUnavailableForSearch;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->limitedPasswd;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isAvailableForMobile;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->isDepot;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->detailSellType;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->releaseDate;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->point;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->point->pointRate; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->point->pointRateStart; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->point->pointRateEnd; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventoryType; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->inventoryCount; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->childNoVertical; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->childNoHorizontal; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->optionNameVertical; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->optionNameHorizontal; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->isBackorderAvailable; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->normalDeliveryDateId; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->backorderDeliveryDateId; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->isBackorder; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->isRestoreInventoryFlag; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->images; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->images->image; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->images->image->imageUrl;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->tagIds; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventories->inventory->tagIds->tagId; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->verticalName; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->horizontalName; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventoryQuantityFlag; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemInventory->inventoryDisplayFlag; $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->asurakuDeliveryId;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->deliverySetId;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->sizeChartLinkCode;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->reviewDisp;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->medicine;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->medicine->medAttention;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->displayPriceId;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->categories;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->categories->categoryInfo;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->categories->categoryInfo->categorySetManageNumber;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->categories->categoryInfo->categoryId;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->categories->categoryInfo->isPluralItemPage;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->itemWeight;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->layoutCommonId;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->layoutMapId;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->textSmallId;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->lossLeaderId;  $item_i++;
$item_data[$item_i]["data"] = $obj->itemGetResult->item->textLargeId;  $item_i++;

$item_i = 0;

$item_data[$item_i]["name"] = "商品管理番号"; $item_i++;
$item_data[$item_i]["name"] = "商品番号"; $item_i++;
$item_data[$item_i]["name"] = "商品名";  $item_i++;
$item_data[$item_i]["name"] = "販売価格"; $item_i++;
$item_data[$item_i]["name"] = "全商品ディレクトリID";  $item_i++;
$item_data[$item_i]["name"] = "カタログID"; $item_i++;
$item_data[$item_i]["name"] = "カタログIDなしの理由";  $item_i++;
$item_data[$item_i]["name"] = "商品画像情報リスト";  $item_i++;
$item_data[$item_i]["name"] = "商品画像情報"; $item_i++;
$item_data[$item_i]["name"] = "商品画像URL";  $item_i++;
$item_data[$item_i]["name"] = "商品画像名（ALT）"; $item_i++;
$item_data[$item_i]["name"] = "PC用商品説明文"; $item_i++;
$item_data[$item_i]["name"] = "モバイル用商品説明文"; $item_i++;
$item_data[$item_i]["name"] = "スマートフォン用商品説明文";  $item_i++;
$item_data[$item_i]["name"] = "動画URL";  $item_i++;
$item_data[$item_i]["name"] = "Select/Checkbox用項目情報リスト";  $item_i++;
$item_data[$item_i]["name"] = "Select/Checkbox用項目情報"; $item_i++;
$item_data[$item_i]["name"] = "Select/Checkbox用項目名";  $item_i++;
$item_data[$item_i]["name"] = "選択肢スタイル";  $item_i++;
$item_data[$item_i]["name"] = "Select/Checkbox用選択肢情報リスト"; $item_i++;
$item_data[$item_i]["name"] = "Select/Checkbox用選択肢情報";  $item_i++;
$item_data[$item_i]["name"] = "Select/Checkbox用選択肢";  $item_i++;
$item_data[$item_i]["name"] = "タグIDリスト";  $item_i++;
$item_data[$item_i]["name"] = "タグID"; $item_i++;
$item_data[$item_i]["name"] = "PC用キャッチコピー"; $item_i++;
$item_data[$item_i]["name"] = "モバイル用キャッチコピー"; $item_i++;
$item_data[$item_i]["name"] = "PC用販売説明文"; $item_i++;
$item_data[$item_i]["name"] = "注文ボタン";  $item_i++;
$item_data[$item_i]["name"] = "資料請求ボタン";  $item_i++;
$item_data[$item_i]["name"] = "商品問い合わせボタン"; $item_i++;
$item_data[$item_i]["name"] = "再入荷のお知らせボタン";  $item_i++;
$item_data[$item_i]["name"] = "商品情報レイアウト";  $item_i++;
$item_data[$item_i]["name"] = "消費税";  $item_i++;
$item_data[$item_i]["name"] = "送料"; $item_i++;
$item_data[$item_i]["name"] = "代引き手数料"; $item_i++;
$item_data[$item_i]["name"] = "表示価格"; $item_i++;
$item_data[$item_i]["name"] = "注文受付数";  $item_i++;
$item_data[$item_i]["name"] = "個別送料"; $item_i++;
$item_data[$item_i]["name"] = "送料区分１";  $item_i++;
$item_data[$item_i]["name"] = "送料区分２";  $item_i++;
$item_data[$item_i]["name"] = "のし対応"; $item_i++;
$item_data[$item_i]["name"] = "期間限定販売フラグ";  $item_i++;
$item_data[$item_i]["name"] = "期間限定販売開始日";  $item_i++;
$item_data[$item_i]["name"] = "期間限定販売終了日";  $item_i++;
$item_data[$item_i]["name"] = "サーチ非表示"; $item_i++;
$item_data[$item_i]["name"] = "闇市パスワード";  $item_i++;
$item_data[$item_i]["name"] = "モバイル表示"; $item_i++;
$item_data[$item_i]["name"] = "倉庫指定"; $item_i++;
$item_data[$item_i]["name"] = "詳細販売種別"; $item_i++;
$item_data[$item_i]["name"] = "予約商品発売日";  $item_i++;
$item_data[$item_i]["name"] = "ポイント情報"; $item_i++;
$item_data[$item_i]["name"] = "ポイント変倍率";  $item_i++;
$item_data[$item_i]["name"] = "ポイント変倍適応期間（開始）"; $item_i++;
$item_data[$item_i]["name"] = "ポイント変倍適応期間（終了）"; $item_i++;
$item_data[$item_i]["name"] = "商品在庫情報"; $item_i++;
$item_data[$item_i]["name"] = "在庫タイプ（在庫種別）";  $item_i++;
$item_data[$item_i]["name"] = "在庫情報リスト";  $item_i++;
$item_data[$item_i]["name"] = "在庫情報"; $item_i++;
$item_data[$item_i]["name"] = "在庫数";  $item_i++;
$item_data[$item_i]["name"] = "項目選択肢別在庫用縦軸選択肢子番号";  $item_i++;
$item_data[$item_i]["name"] = "項目選択肢別在庫用横軸選択肢子番号";  $item_i++;
$item_data[$item_i]["name"] = "項目選択肢別在庫用縦軸選択肢"; $item_i++;
$item_data[$item_i]["name"] = "項目選択肢別在庫用横軸選択肢"; $item_i++;
$item_data[$item_i]["name"] = "項目選択肢別在庫用取り寄せ可能表示";  $item_i++;
$item_data[$item_i]["name"] = "在庫あり時納期管理番号";  $item_i++;
$item_data[$item_i]["name"] = "在庫切れ時納期管理番号";  $item_i++;
$item_data[$item_i]["name"] = "在庫切れ時の注文受付"; $item_i++;
$item_data[$item_i]["name"] = "在庫戻し設定"; $item_i++;
$item_data[$item_i]["name"] = "SKU画像情報リスト"; $item_i++;
$item_data[$item_i]["name"] = "SKU画像情報";  $item_i++;
$item_data[$item_i]["name"] = "SKU画像URL"; $item_i++;
$item_data[$item_i]["name"] = "SKUタグIDリスト"; $item_i++;
$item_data[$item_i]["name"] = "SKUタグID";  $item_i++;
$item_data[$item_i]["name"] = "項目選択肢別在庫用縦軸選択肢項目名";  $item_i++;
$item_data[$item_i]["name"] = "項目選択肢別在庫用横軸選択肢項目名";  $item_i++;
$item_data[$item_i]["name"] = "在庫数表示";  $item_i++;
$item_data[$item_i]["name"] = "項目選択肢別在庫用残り表示閾値";  $item_i++;
$item_data[$item_i]["name"] = "あす楽配送管理番号";  $item_i++;
$item_data[$item_i]["name"] = "配送方法セット管理番号";  $item_i++;
$item_data[$item_i]["name"] = "サイズ表リンクコード"; $item_i++;
$item_data[$item_i]["name"] = "レビュー表示"; $item_i++;
$item_data[$item_i]["name"] = "薬事情報"; $item_i++;
$item_data[$item_i]["name"] = "医薬品注意事項";  $item_i++;
$item_data[$item_i]["name"] = "二重価格文言ID"; $item_i++;
$item_data[$item_i]["name"] = "カテゴリ情報リスト";  $item_i++;
$item_data[$item_i]["name"] = "カテゴリ情報"; $item_i++;
$item_data[$item_i]["name"] = "カテゴリセット管理番号";  $item_i++;
$item_data[$item_i]["name"] = "カテゴリID"; $item_i++;
$item_data[$item_i]["name"] = "複数表示形式"; $item_i++;
$item_data[$item_i]["name"] = "表示優先度";  $item_i++;
$item_data[$item_i]["name"] = "ヘッダー・フッター・レフトナビのテンプレートID"; $item_i++;
$item_data[$item_i]["name"] = "共通説明文(小)のテンプレートID";  $item_i++;
$item_data[$item_i]["name"] = "目玉商品のテンプレートID";  $item_i++;
$item_data[$item_i]["name"] = "共通説明文(大)のテンプレートID";  $item_i++;




?>
<table>

  <?for ($item_i_i=0; $item_i_i < $item_i; $item_i_i++) { ?>
  <tr>
    <th><?=$item_data[$item_i_i]["name"]?></th>
    <td><?=$item_data[$item_i_i]["data"]?></td>
  </tr>
  <?}?>

</table>

<table id="ctrl_table">
  <tr>
    <th>操作</th>
    <td><a id="delete_a" href="/include/shuppin/rakuten/items/item_delete.php?itemUrl=<?=$seq?>" data="<?=$seq?>" target="_blank" >この商品を削除する</a></td>
  </tr>
</table>


<script type="text/javascript">

  var delete_seq = "";
  $("#delete_a").click(function(){
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
