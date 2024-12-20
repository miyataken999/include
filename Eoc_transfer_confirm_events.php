<?php
class eventclass_Eoc_transfer_confirm  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeOut"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/Eoc_transfer_confirm/list/after_record/index.php';

;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Export Record
function BeforeOut(&$data, &$values, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/Eoc_transfer_confirm/export/before_record/index.php';

return true;
;		
} // function BeforeOut

		
		
		
		
		
		
//	onscreen events







}
?>
