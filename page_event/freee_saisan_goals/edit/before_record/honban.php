<?
// Parameters
// $values     - array of values to be written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $where      - WHERE clause that points to the edited record. Example: ID=19
// $oldvalues  - array with existing field values. To access specific column value use
//               $oldvalues["FieldName"]
// $keys       - array of key column values that point to the edited record. To access
//               specific key column use $keys["KeyFieldName"]
// $message    - place the message to be displayed into this variable.
// $inline     - equals to true when the Inline Edit in process, false otherwise
// $pageObject - an object of Page class representing the current page



$nowtime = date("Y-m-d H:i:s");
$user_id = $_SESSION['uid'];


if($user_id != ""){
	/**********************************************************
	更新者
	**********************************************************/
	if($_SESSION['uid'] != ""){
		$values["updated_by"] = $_SESSION['uid'];
	}

	/**********************************************************
	登録日
	**********************************************************/
	if($nowtime != ""){
		$values["updated_at"] = $nowtime;
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
$word .= "{$dept_group_name}の{$year_month}の目標値が更新されました。\n";
$word .= "https://rifa.life/evaProject/pl_statement/department?department_id={$dept_group_id}&start_date={$start_date}&is_after_added_in_house_sales=on";

$word = urlencode($word);

//メール送信
$subject = "{$dept_group_name}の{$year_month}の目標値が更新されました。";
$mail_body = $word;
$sendPostData = array("subject" => $subject, "text" => $mail_body);
$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

