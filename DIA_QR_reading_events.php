<?php
class eventclass_DIA_QR_reading  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessRowList"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/DIA_QR_reading/list/before_record_processed/index.php';
return true;
;		
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
