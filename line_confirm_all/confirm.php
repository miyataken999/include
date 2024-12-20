<?php
$ecc_id_text = htmlspecialchars($_POST["ecc_id_text"],ENT_QUOTES);
$ecc_id_array = explode(",",$ecc_id_text);
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/lib/function.php";
ini_set('display_errors',1);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
    h3{
        font-size: 25px;
        margin: 30px 0;
        text-align: center;
    }
    table{
      margin:auto;
    }
    th, td {
      width:400px;
      border: 1px solid;
      text-align: center;
    }
    tr:nth-child(odd) {
        background-color: #f9f9f9;
    }
    tr:nth-child(even) {
        background-color: #FDFDFD;
    }
    .return_btn{
      padding: 1rem 2rem;
      width: max-content;
      font-size: 18px;
      margin: 10px auto;
    }
</style>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <div class="container">
    <h3>LINE本確チェック顧客リスト</h3>
    <table>
      <tr>
        <th>顧客SEQ</th>
        <th>顧客氏名</th>
        <th>メールアドレス</th>
      </tr>

<?
// $ecc_id_text = 4460;
// var_dump($ecc_id_array);
$pdo = new pdo_connect;

$where = '';
$ecc_id_success = array();
$ecc_id_failed = array();

function querywhere($array){
  $where = '';
  for ($i=0; $i < count($array); $i++) {
    $ecc_id = $array[$i];
    if($ecc_id == ""){
      continue;
    }
    $ecc_id = str_replace("_success","",$ecc_id);
    $ecc_id = str_replace("_failed","",$ecc_id);
    if($where != ''){
      $where .= ' OR ';
    }
    $where .=  " ecc_id = ".$ecc_id;
  }
  return $where;
}

for ($ecc_i=0; $ecc_i < count($ecc_id_array); $ecc_i++) {
  $tmp = $ecc_id_array[$ecc_i];// = 4460_success
  if($tmp == ""){
    continue;
  }
  $ecc_id_tmp_array = explode("_", $tmp); // = [0]->4460, [1]->success
  $ecc_id = $ecc_id_tmp_array[0];
  $ecc_id_status = $ecc_id_tmp_array[1];

  if($ecc_id_status == 'success'){
    $ecc_id_success[] = $ecc_id;
  }else{
    $ecc_id_failed[] = $ecc_id;
  }//end if

}// end for

$ecc_line_id = querywhere($ecc_id_array);
$ecc_success = querywhere($ecc_id_success);
$ecc_failed = querywhere($ecc_id_failed);

if($ecc_line_id != ""){
  $ecc_line_sql = "SELECT `ecc_id`, `name1`, `mail1`, `line_chat_url` FROM Eoc WHERE ($ecc_line_id) AND (`line_check`= 1) ";
}else{
  $ecc_line_sql = "";
}
if($ecc_success != ""){
  $ecc_success_sql = "SELECT `ecc_id`, `name1`, `mail1`, `line_chat_url` FROM Eoc WHERE ($ecc_success)";
}else{
  $ecc_success_sql = "";
}

if($ecc_failed != ""){
  $ecc_failed_sql = "SELECT `ecc_id`, `name1`, `mail1`, `line_chat_url` FROM Eoc WHERE ($ecc_failed)";
}else{
  $ecc_failed_sql = "";
}

$pdo_array = array();
if($ecc_line_sql != ""){
  $pdo_array = $pdo->select_many($ecc_line_sql);
}
foreach ($pdo_array as $key => $value) {
    $seq = $value["ecc_id"];
    $name = $value["name1"];
    $mail = $value["mail1"];
    $line_chat_url = $value["line_chat_url"];
    if($line_chat_url != ''){
      $line_chat_url = "<a target='_blank' href='{$line_chat_url}' >{$line_chat_url}</a>";
    }else{
      $line_chat_url = "";
    }
?>
        <tr>
          <td><?=$seq?></td>
          <td><?=$name?></td>
          <td><?=$mail?></td>
        </tr>
        <tr>
          <td style="background: #0f0;">LINEチャット</td>
          <td colspan=2><?=$line_chat_url?></td>
        </tr>
<?
}//end foreach
?>
    </table>
    <h3>送信成功</h3>
    <table>
      <tr>
        <th>顧客SEQ</th>
        <th>顧客氏名</th>
        <th>メールアドレス</th>
      </tr>
  <?
  $pdo_array = array();
  if($ecc_success_sql != ""){
    $pdo_array = $pdo->select_many($ecc_success_sql);
  }
  foreach ($pdo_array as $key => $value) {
      $seq = $value["ecc_id"];
      $name = $value["name1"];
      $mail = $value["mail1"];
  ?>
          <tr>
            <td><?=$seq ?></td>
            <td><?=$name ?></td>
            <td><?=$mail ?></td>
          </tr>
<?
}
?>

    </table>

    <h3>送信失敗</h3>
    <table>
      <tr>
        <th>顧客SEQ</th>
        <th>顧客氏名</th>
        <th>メールアドレス</th>
      </tr>
  <?

  $pdo_array = array();
  if($ecc_failed_sql != ""){
    $pdo_array= $pdo->select_many($ecc_failed_sql);
  }
  foreach ($pdo_array as $key => $value) {
      $seq = $value["ecc_id"];
      $name = $value["name1"];
      $mail = $value["mail1"];
  ?>
          <tr>
            <td><?=$seq ?></td>
            <td><?=$name ?></td>
            <td><?=$mail ?></td>
          </tr>
<?
}
?>

    </table>

    <div style="text-align: center;">
      <a class="return_btn btn btn-primary" href="/shop5/Eoc_transfer_confirm_list.php">振込確認画面</a>
    </div>
  </div>
</body>
</html>
