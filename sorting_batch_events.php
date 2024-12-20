<?php
class eventclass_sorting_batch  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["ProcessValuesEdit"]=true;

		$this->events["BeforeOut"]=true;

		$this->events["BeforeInsert"]=true;

		$this->events["AfterImport"]=true;

		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeProcessRowList"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/shouhin/add/after_record/index.php";
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/shouhin/add/before_record/index.php";

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/shouhin/add/process_record_values/index.php";
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

// include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/shouhin/edit/after_record/index.php";
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
// include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/shouhin/edit/before_record/index.php";
return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesEdit(&$values, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/sorting_batch/edit/process_record_values/index.php";
;		
} // function ProcessValuesEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Export Record
function BeforeOut(&$data, &$values, &$pageObject)
{

		// Place event code here.
// Use "Add Action" button to add code snippets.

return true;

;		
} // function BeforeOut

		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Insert Record
function BeforeInsert(&$rawvalues, &$values, &$pageObject, &$message)
{

		// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeInsert

		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After Import Finished
function AfterImport($count, $skipCount, &$pageObject)
{

		
// include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/shouhin/import/after_import/index.php';
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterImport

		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/sorting_batch/list/after_record/index.php';

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/sorting_batch/list/before_record_processed/index.php';
return true;
;		
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
