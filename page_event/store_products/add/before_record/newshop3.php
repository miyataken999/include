<?


// Place event code here.
// Use "Add Action" button to add code snippets.
//	$sql = "UPDATE store_products SET DT_UP_DATE = '".date("Y-m-d H:i:s")."' where product_id = ".$product_id;
//  $rs = CustomQuery($sql);
//  $sql = "UPDATE store_products SET REG_AUTHER = ".$_SESSION['uid']." where product_id = ".$product_id;
//  $rs = CustomQuery($sql);


$values['satei_hi'] = date("Y-m-d H:i:s");
$values['satei_by'] = $_SESSION['uid'];
$values['registrator_id'] = $_SESSION['uid'];

// print $_SESSION['uid'];

// $values['comment'] = "ファイル読み込みテストbefore_record";



