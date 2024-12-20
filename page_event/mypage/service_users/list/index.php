<?php
// $value - a value to be displayed on the page.
// Example:
// $value = strtoupper($value);

// $data - array with all field values.
// Example:
// $value = $data["FirstName"].$data["LastName"];
// where FirstName and LastName are actual field names.
// include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/eoc/list/events/index.php';

// $user_sql = "SELECT first_name from users where user_id = {$val} limit 1";
// $user_rs = CustomQuery($user_sql);
// $user_data = db_fetch_array($user_rs);
// user_data["first_name"]

// $display_name = $data["display_name"];
// $user_name = $data["user_name"];
// $user_name_kana = $data["user_name_kana"];
include_once "style.php";
// extract($data);

function check_disp($val)
{
  if($val == 1){
    return "<img src='images/check_yes.gif' border='0'>";
  }else{
    return "<img src='images/check_no.gif' border='0'>";
  }
}
function date_disp($val)
{
  if($val == ''){
    return '---';
  }else{
    return date("y/m/d H:i:s", strtotime($val));
  }
}

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

$data["address_1"] = decrypt_mypage($data["address_1"]);
$data["address_2"] = decrypt_mypage($data["address_2"]);
$data["address_3"] = decrypt_mypage($data["address_3"]);
$data["address_4"] = decrypt_mypage($data["address_4"]);
$data["user_name"] = decrypt_mypage($data["user_name"]);
$data["user_name_kana"] = decrypt_mypage($data["user_name_kana"]);
$data["user_tel"] = decrypt_mypage($data["user_tel"]);




ob_start();
include "temp.html";
$html = ob_get_contents();
ob_end_clean();

$data["emaillogin_lock"] = check_disp($data["emaillogin_lock"]);
$data["email_verified"] = check_disp($data["email_verified"]);
$data["multi_factor"] = check_disp($data["multi_factor"]);


$data["emaillogin_lock_time"] = date_disp($data["emaillogin_lock_time"]);
$data["created_at"] = date_disp($data["created_at"]);
$data["updated_at"] = date_disp($data["updated_at"]);



foreach ($data as $key => $value) {
  $target = "{! {$key} !}";
  $html = str_replace($target, $value, $html);


  $target = "{{ {$key} }}";
  $value = htmlspecialchars($value, ENT_QUOTES, 'utf8');
  $html = str_replace($target, $value, $html);
}

if($data["ecc_id"] != ''){
  $link = "<a target='_blank' href='https://rifa.life/shop5/Eoc_list.php?q=(ecc_id~equals~{$data['ecc_id']})'>EVA 顧客一覧({$data['ecc_id']})</a>";
  $link .= "<a
              class='btn btn-primary'
              target='_blank'
              href='https://rifa.life/evaProject/mypage/service_users/eoc_relation/{$data["id"]}'
            >身分証確認</a>";
}else{
  $link = "<div class='btn'>EVA未連携</div>";
  // $link .= "<a
  //             class='btn btn-warning'
  //             target='_blank'
  //             href='http://rifa.life/lounge_API/evaeva/id_file_confirm.php?user_id={$data["id"]}'
  //           >EVA連携する(old)</a>";
  $link .= "<a
              class='btn btn-primary'
              target='_blank'
              href='https://rifa.life/evaProject/mypage/service_users/eoc_relation/{$data["id"]}'
            >EVA連携する</a>";


}


  $html = str_replace('{{ ecc_link }}', $link, $html);





  $sql = "SELECT * from idfile_check where service_user_id = {$data["id"]} order by id desc";
  $rs = CustomQuery($sql);


  $identification_html = '';

  while($id_result = db_fetch_array($rs)){
    $identification_html .= '<tr>';
    $time = date("y/m/d H:i:s", strtotime($id_result["created_at"]));
    $identification_html .= "<td>{$time}</td>";
    $identification_html .= "<td>{$id_result["upload_method"]}</td>";
    $upload_by = $id_result["upload_by"];
    if($upload_by != ''){
      $user_sql = "SELECT fullname from internet.users where user_id = '{$upload_by}' limit 1";
      $user_rs = CustomQuery($user_sql);
      $user_data = db_fetch_array($user_rs);
      $upload_by = $user_data["fullname"];
    }else{
      $upload_by = '';
    }
    $identification_html .= "<td>{$upload_by}</td>";
    $identification_html .= "<td>{$id_result["result"]}</td>";
    $identification_html .= '</tr>';

  }

  if($identification_html != ''){
    // $add_html = "<div class = 'box_ttl'>身分証アップ状況</div>";
    $add_html .= '<div class="box_scrollbar">';
    $add_html =  '<table>';
    $add_html .= '<tr>';
    $add_html .= '<th>日時</th>';
    $add_html .= '<th>投稿方法</th>';
    $add_html .= '<th>投稿者</th>';
    $add_html .= '<th>結果</th>';
    $add_html .= '</tr>';

    $identification_html = $add_html.$identification_html;
    $identification_html .= '</table>';
    $identification_html .= '</div>';
  }


  $html = str_replace('{{ identification_html }}', $identification_html, $html);



  $sql = "SELECT COUNT(id) as 'ct' from idfile_check_images where service_user_id = {$data["id"]} order by id desc";
  $rs = CustomQuery($sql);
  $result = db_fetch_array($rs);
  $idfile_check_images_ct = $result["ct"];
  if($idfile_check_images_ct == ''){
    $idfile_check_images_ct = 0;
  }
  $html = str_replace('{{ idfile_check_images_ct }}', $idfile_check_images_ct, $html);



  $sql = "SELECT COUNT(event_id) as 'ct' from events where user_id = {$data["id"]} order by event_id desc";
  $rs = CustomQuery($sql);
  $result = db_fetch_array($rs);
  $error_ct = $result["ct"];
  if($error_ct == ''){
    $error_ct = 0;
  }
  $html = str_replace('{{ error_ct }}', $error_ct, $html);





  $value = $html;
