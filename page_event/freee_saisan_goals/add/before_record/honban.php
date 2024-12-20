<?
// Parameters
// $values     - array of values to be written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $message    - place the message to be displayed into this variable.
// $inline     - equals to true when the Inline Add in process, false otherwise
// $pageObject - an object of Page class representing the current page


$nowtime = date("Y-m-d H:i:s");
$user_id = $_SESSION['uid'];
$current_page_pass = $_SERVER["REQUEST_URI"];

if($user_id != ""){
	/**********************************************************
	登録者
	**********************************************************/
	if($_SESSION['uid'] != ""){
		$values["created_by"] = $_SESSION['uid'];
	}

	/**********************************************************
	登録日
	**********************************************************/
	if($nowtime != ""){
		$values["created_at"] = $nowtime;
	}
}


$dept_group_id = $values["dept_group_id"];
$year_month = $values["year_month"];
$year_text = mb_substr($year_month, 0, 4);
$month_text = mb_substr($year_month, 4, 2);
$start_date = $year_text . "-" . $month_text . "-01";

$dept_sql = "SELECT *
  FROM mst_dept_group
  WHERE id = '{$dept_group_id}'
  LIMIT 1
  ";
$dept_rs = CustomQuery($dept_sql);

$dept_group_name = $dept_group_id;
while($dept_data = db_fetch_array($dept_rs)){
	$dept_group_name = $dept_data["name"];
}


$word = "[toall]\n";
$word .= "{$dept_group_name}の{$year_month}の目標値が新規作成されました。\n";
$word .= "https://rifa.life/evaProject/pl_statement/department?department_id={$dept_group_id}&start_date={$start_date}&is_after_added_in_house_sales=on";

$word = urlencode($word);

//メール送信
$subject = "{$dept_group_name}の{$year_month}の目標値が新規作成されました。";
$mail_body = $word;
$sendPostData = array("subject" => $subject, "text" => $mail_body);
$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

