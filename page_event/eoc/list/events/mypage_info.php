<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";

$display_data_column_arr = array(
  'id' => "マイページID",
  'user_name_kana' => 'フリガナ',
  'user_name' => '名前',
  'user_tel' => '電話',
  'email' => 'メアド',
  'disabled' => 'アカウント停止',
  'emaillogin_lock' => 'ロック状態',
  'emaillogin_lock_time' => 'ロック期限'
  // 'address1',
  // 'address2',
  // 'address3',
  // 'address4',
);


$idfile_check_arr = array(
  'created_at',
  'upload_method',
  'result',
  'is_comfirmed',
  'comfirmed_at'
);

// $html .= "<td>111111111</td>";
$pdo_connect_mypage = new pdo_connect_mypage;
$pdo_mypage = $pdo_connect_mypage->pdo();
// $mypage_sql = "SELECT * FROM `service_users` WHERE `ecc_id` = ? LIMIT 1";
// $array = array($ecc_id);
// $mypage_stmt = $pdo_mypage->prepare($mypage_sql);
// $mypage_stmt->execute($array);
// $mypage_rs = $mypage_stmt->fetch(PDO::FETCH_OBJ);
// $data_th = "";
// $data_td = "";
// // foreach($mypage_rs as $val){
// if($mypage_rs != false){
//   foreach ($display_data_column_arr as $column_key => $column_val) {
//     if(
//       ($column_key == "id")
//       OR($column_key == "disabled")
//       OR($column_key == "emaillogin_lock")
//       OR($column_key == "emaillogin_lock_time")
//     ){
//       $mypage_val = $mypage_rs->$column_key;
//     }else{
//       $mypage_val = decrypt_mypage($mypage_rs->$column_key);
//     }
//     $data_th .= "<th>{$column_val}</th>";
//     if(
//       ($column_key == "emaillogin_lock")
//       OR($column_key == "disabled")
//     ){
//       if($mypage_val > 0){
//         $data_td .= "<td><span><img src='images/check_yes.gif'></span></td>";
//       }else{
//         $data_td .= "<td><span><img src='images/check_no.gif'></span></td>";
//       }
//     }else{
//       $data_td .= "<td>{$mypage_val}</td>";
//     }
//
//   }
//   // $html .= "<td>$val</td>";
// // }
//   $url = "https://rifa.life/mypage_eva//service_users_list.php?q=(id~contains~{$mypage_rs->id})";
//   $count = count($display_data_column_arr);
//   $link_colspan = $count-1;
//   $html .= "<table class='mypage_account_info'>";
//   $html .= "<tr class = 'mypage_info_ttl'><th colspan = $count>mypage連携アカウント情報</th></tr>";
//   $html .= "<tr class = 'mypage_info_column'>$data_th</tr>";
//   $html .= "<tr class = 'mypage_info_data'>$data_td</tr>";
//   $html .= "<tr class = 'mypage_info_data'><th>mypageEVAリンク</th><td colspan = $link_colspan><a href= '{$url}'>{$url}</a></td></tr>";
//   $html .= "<table>";
// }


$idfile_check_sql = "SELECT * FROM `idfile_check` WHERE `ecc_id` = ? ORDER BY `id` DESC LIMIT 3";
$array = array($ecc_id);

// $idfile_check_stmt = $pdo_connect_mypage->pdo()->prepare($idfile_check_sql);
// $idfile_check_stmt->execute($array);
// $idfile_check_rs = $idfile_check_stmt->fetchAll(PDO::FETCH_OBJ);
$idfile_check_html = "<table class = 'idfile_check_info'>";
$idfile_check_html .= "<tr><th colspan=5>【身分証アップ状況】<a href = 'https://rifa.life/evaProject/mypage/id_fileupload/ecc_id/{$ecc_id}'>身分証アップ画面リンク</a></th></tr></div>";
// if($idfile_check_rs != false){
//   $idfile_check_html .= "<tr>";
//   $idfile_check_html .= "<th>作成日</th>";
//   $idfile_check_html .= "<th>アップ方法</th>";
//   $idfile_check_html .= "<th>結果</th>";
//   $idfile_check_html .= "<th>最終承認</th>";
//   $idfile_check_html .= "<th>最終承認日</th>";
//   $idfile_check_html .= "</tr>";
//   $idfile_check_html .= "<div id = 'idfile_scrollbar'>";
//   foreach ($idfile_check_rs as $idfile_check) {
//     $idfile_check_html .= "<tr  class = 'mypage_info_data'>";
//     foreach ($idfile_check_arr as $idfile_check_val) {
//       $display_val = $idfile_check->$idfile_check_val;
//       if($idfile_check_val == "result"){
//         if($display_val == "approved"){
//           $display_val = "承認";
//         }elseif($display_val == "denied"){
//           $display_val = "否認";
//         }
//       }elseif($idfile_check_val == "upload_method"){
//         if($display_val == "evaProject.id_fileup"){
//           $display_val = "手動UP";
//         }elseif($display_val == "mypage.idFileUpload"){
//           $display_val = "マイページUP";
//         }
//       }
//       $idfile_check_html .= "<td>{$display_val}</td>";
//     }
//     $idfile_check_html .= "</tr>";
//   }
// }
$idfile_check_html .= "</table>";
if($idfile_check_html != ''){
  $html .= $idfile_check_html;
}
?>

<style type="text/css">
.idfile_check_info td {
  background: #fff;
}
.idfile_check_info th {
  font-weight: normal;
  background: #cae4f1;
}
.idfile_check_info th, .idfile_check_info td {
  border: 1px solid #888;
  padding: 0.5rem;
  text-align: left;
}
</style>



<?



/*
function decrypt_mypage($val)
{
  $base_uri = "https://rifa.life";
  $endpoint = "/refasta_master/api/crypt_func/decrypt";
  // POSTデータ
  $data = array(
      "data" => $val
  );
  // $data = http_build_query($data, "", "&");
  $data = json_encode($data);
  // header
  $header = array(
      "Content-Type: application/json",
      "Content-Length: ".strlen($data)
  );
  $context = array(
      "http" => array(
          "method"  => "POST",
          "header"  => implode("\r\n", $header),
          "content" => $data
      )
  );
  return file_get_contents($base_uri.$endpoint, false, stream_context_create($context));
}
*/
