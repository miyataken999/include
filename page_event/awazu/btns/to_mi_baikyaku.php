<?
// Put your code here.
$result["txt"] = $params["txt"]." world!";

// Put your code here.

$email_msg = "";
$email_msg.= "List of records";
$i=1;
$t_sql="";

while($data = $button->getNextSelectedRecord())
{

	$log = "";
	if($data["product_id"] !=""){
		$sql = "update shouhin set status = 32 where product_id = ".$data["product_id"];
		// $params["txt"] = $sql;
		$rs = CustomQuery($sql);

		$t_sql = $t_sql.$sql."<BR>";
	}
}

$result["txt"] = $params["txt"].$t_sql." 登録完了!";

?>