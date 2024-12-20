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
  #tagsel_area .tag_box {
      float: left;
      padding: 5px 10px;
      border: 1px solid #dcdcdc;
      margin: 5px;
      width: 400px;
  }
  #tagsel_area{
      overflow: hidden;
      background-color: #fff;
      padding: 10px;
      border: 1px solid #111;
  }
  #rakutag_res {
      width: 1000px;
      border: 1px solid #111;
      overflow-wrap: break-word;
  }
</style>



<?
if($_GET["genreId"] != ""){
  $genreId = htmlspecialchars($_GET["genreId"]);
}else{
  $genreId = 303656;
}
if($_GET["product_id"] != ""){
  $product_id = htmlspecialchars($_GET["product_id"]);
}else{
  $product_id = 1;
}

// ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

// $seq_query = " SELECT category_id , sub_category_id1 , yahoo_sex , product_num , raku_title , yahoo_sinaban , status FROM shouhin WHERE product_id={$product_id}";
$seq_query = " SELECT product_num , yahoo_condition2 FROM shouhin WHERE product_id={$product_id}";

$seq_sql = mysql_query('SET NAMES utf8');
$seq_sql = mysql_query($seq_query);
$seq_result = mysql_fetch_assoc($seq_sql);

$product_num = $seq_result["product_num"];
$yahoo_condition2 = $seq_result["yahoo_condition2"];

$seq_query = " SELECT rakutag_id FROM mst_brand WHERE id={$product_num}";

$seq_sql = mysql_query('SET NAMES utf8');
$seq_sql = mysql_query($seq_query);
$seq_result = mysql_fetch_assoc($seq_sql);

$rakutag_id = $seq_result["rakutag_id"];


?>

<div id="tagsel_area">
  <form action="./get.php" method="get" accept-charset="utf-8">
    楽天ディレクトリID
    <input type="text" name="genreId" value="<?=$genreId?>" disabled>
  </form>
<?
// エラー出力する場合
// ini_set( 'display_errors', 1 );


//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//認証部分作成
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
include_once $_SERVER["DOCUMENT_ROOT"]."/include/shuppin/rakuten/code/key.php";


//リクエストパラメータ
$rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/navigation/genre/tag/get?";
$request = "genreId={$genreId}";
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


$res_status = $obj->navigationGenreTagGetResult->status;
$requestId = $obj->status;
$genreName = $obj->navigationGenreTagGetResult->genre->genreName;
$tagGroups = $obj->navigationGenreTagGetResult->genre->tagGroups->tagGroup;
$array_condtion = array("aaa");
array_unshift($tagGroups,$array_condtion);
$tagGroups_count = count($tagGroups);

// print "<pre>".var_dump($requestId)."</pre>";

if($res_status == "Success"){
  print "楽天タグ情報取得成功！";
}else{
  print "楽天タグ情報取得失敗・・・ジャンルIDを入れてください。";
}
?>
<div id="junle_ttl">
genreName=<?=$genreName?>
</div>
楽天タグID結果欄(32個までです)
<div id="rakutag_res">

</div>

<?
for ($i=0; $i < $tagGroups_count; $i++) {
  $tagGroupId[$i] = $tagGroups[$i]->tagGroupId;
  $tagGroupName[$i] = $tagGroups[$i]->tagGroupName;
  $tag[$i] = $tagGroups[$i]->tags->tag;
  $tag_count[$i] = count($tag[$i]);

if($i == 0){
?>
  <div class="tag_box">
    <div class="tag_title" data="">中古品コンディション</div>
    <select id="rakutag_<?=$i?>">
      <option value="9000001">選択してください。</option>
      <option value="9000007\/9000001" <?if($yahoo_condition2 == "N"){?>selected<?}?> >N</option>
      <option value="9000002\/9000001" <?if($yahoo_condition2 == "S"){?>selected<?}?> >S</option>
      <option value="9000004\/9000001" <?if($yahoo_condition2 == "A"){?>selected<?}?> >A</option>
      <option value="9000005\/9000001" <?if($yahoo_condition2 == "B"){?>selected<?}?> >B</option>
      <option value="9000005\/9000001" <?if($yahoo_condition2 == "C"){?>selected<?}?> >C</option>
    </select>
  </div>
<?
}
?>

<div class="tag_box">
  <div class="tag_title" data="<?=$tagGroupId[$i]?>"><?=$tagGroupName[$i]?></div>
  <select id="rakutag_<?=$i+1?>">
    <option value="">選択してください。</option>
<?
  for ($ii=0; $ii < $tag_count[$i]; $ii++) {
    $tagId[$i][$ii] = $tag[$i][$ii]->tagId;
    $tagName[$i][$ii] = $tag[$i][$ii]->tagName;

    if($tagGroupName[$i] == "ブランド"){
      if($rakutag_id != ""){
        if($rakutag_id == $tagId[$i][$ii]){
          $selected = "selected";
        }else{
          $selected = "";
        }
      }
    }

?>
    <option value="<?=$tagId[$i][$ii]?>" <?=$selected?> ><?=$tagName[$i][$ii]?></option>
<?
  }
?>
  </select>
</div>
<?
}
?>
</div>

<script type="text/javascript">
var rakutag_res = "";
$("#tagsel_area").find("select").change(function(){
  rakutag_gattai();
})

  rakutag_gattai();

function rakutag_gattai() {
  $count = 0;
  rakutag_res = "";
  <?
  for ($i=0; $i < $tagGroups_count; $i++) {
  ?>
  var val_rakutag_<?=$i?> = $("#rakutag_<?=$i?>").val();
  if(val_rakutag_<?=$i?> == "undefined"){
    val_rakutag_<?=$i?> = "";
  }

  if(val_rakutag_<?=$i?> != ""){
    if(rakutag_res == ""){
      rakutag_res = val_rakutag_<?=$i?>;
    }else{
      //32個まで
      if($count < 32){
        rakutag_res += "\\/"+val_rakutag_<?=$i?>;
      }
    }
    $count++;
  }

  <?
  }
  ?>
  // console.log(rakutag_res);
  // if(rakutag_res == ""){
  //   location.reload();
  // }
  $("#rakutag_res").html(rakutag_res);
  rakutag_res = "";
}
</script>
