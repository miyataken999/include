<?php
class eventclass_sateibutuichiran  extends eventsBase
{
	function __construct()
	{
	// fill list of events

//	onscreen events
		$this->events["shouhin_snippet11"] = true;

	}

//	handlers
//	onscreen events
function shouhin_snippet11(&$params)
{
include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/saisun/edit/script.php";
// Put your code here.
//echo "Your message";
;
}







}
?>
