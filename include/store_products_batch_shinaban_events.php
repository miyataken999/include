<?php
class eventclass_store_products_batch_shinaban  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessImport"]=true;

		$this->events["AfterImport"]=true;


//	onscreen events
		$this->events["store_products_batch_snippet1"] = true;

	}

//	handlers

		
		
		
		
		
		
		
		
				// Import page: Before process
function BeforeProcessImport(&$pageObject)
{

		
set_time_limit(0);


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessImport

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After Import Finished
function AfterImport($count, $skipCount, &$pageObject)
{

		
//$sql = "update shouhin set category_id = 9999 where category_id is null";
//CustomQuery($sql);


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterImport

		
		
		
		
		
		
		
//	onscreen events
function store_products_batch_snippet1(&$params)
{
// Put your code here.
echo '<select style="" name="all_check" id="all_check" size="1">
<option selected="" value="">選択して下さい。</option>';
$rs = CustomQuery("select goods_status,goods_id from _goods_status2 order by sort asc");
$list="";
while($data = db_fetch_array($rs)){
	echo "<option value='{$data[goods_id]}'>{$data[goods_status]}</option>";
}
echo '</select>';

;
}







}
?>
