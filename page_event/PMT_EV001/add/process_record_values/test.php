<?


// Place event code here.
// Use "Add Action" button to add code snippets.


// Place event code here.
// Use "Add Action" button to add code snippets.

// Place event code here.
// Use "Add Action" button to add code snippets.

if($values['DA_RESPONSIBLE'] == "")
$values['DA_RESPONSIBLE'] = $_SESSION["uid"];

if($values['DA_RESPONSIBLE'] == "")
$values['DA_RESPONSIBLE'] = $_SESSION["uid"];

//DA_REGISTERED_PERSON
if($values['DA_REGISTEREDPERSON'] == "")
$values['DA_REGISTEREDPERSON'] = $_SESSION["uid"];

//DA_UPDATEDBY
if($values['DA_UPDATEDBY'] == "")
$values['DA_UPDATEDBY'] = $_SESSION["uid"];

if($values['DA_UPDATEDDATE'] == "")
$values['DA_UPDATEDDATE'] = date("Y/m/d H:i:s");

if($values['DA_REGISTRATIONDATE'] == "")
$values['DA_REGISTRATIONDATE'] = date("Y/m/d H:i:s");

if($values['DA_THESPECIFICATIONSSETTINGSUN'] == "")
$values['DA_THESPECIFICATIONSSETTINGSUN'] = date("Y/m/d H:i:s");


//if($values['DA_COMPLETECHANGEDATE'] == "")
//$values['DA_COMPLETECHANGEDATE'] = date("Y/m/d H:i:s");
?>
