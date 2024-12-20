<?php
class eventclass_kit_confirm  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeEdit"]=true;

		$this->events["BeforeInsert"]=true;

		$this->events["ProcessValuesEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/kit_confirm/edit/before_record/index.php';

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Insert Record
function BeforeInsert(&$rawvalues, &$values, &$pageObject, &$message)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.


include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/kit_confirm/import/before_record/index.php';


return true;
;		
} // function BeforeInsert

		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesEdit(&$values, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/kit_confirm/edit/process_record_values/index.php';

;		
} // function ProcessValuesEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
