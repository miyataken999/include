<?php
class eventclass_users_group_memberships  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["BeforeEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/users_group_memberships/add/before_record/index.php';

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.

include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/users_group_memberships/edit/before_record/index.php';

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
