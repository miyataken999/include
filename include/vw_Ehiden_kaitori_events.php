<?php
class eventclass_vw_Ehiden_kaitori  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeOut"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Export Record
function BeforeOut(&$data, &$values, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
/*
foreach($values as $key=>$val){
if($key!='Ehide_goirainusi_jyuusho_1'||$key!='Ehide_goirainusi_jyuusho_1'||$key!='Ehide_goirainusi_jyuusho_1'){
	$values[$key] = mb_convert_kana($val, 'KVRN');
} 
}
*/

include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc/export/before_export_record/index.php";


return true;
;		
} // function BeforeOut

		
		
		
		
		
		
//	onscreen events







}
?>
