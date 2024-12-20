<?



// Place event code here.
// Use "Add Action" button to add code snippets

if($values['updated_at'] == "")
$values['updated_at'] = date("Y/m/d");
if($values['create_at'] == "")
$values['create_at'] = date("Y/m/d");

$values['label_output_single'] = $values['product_id'].$values['title'];

/***********************************************************************
descriptionへの反映処理で、更新毎の書き込みを上書きに変更。
************************************************************************/

//$values["description"] = " ".$values["Finish"]." ".$values["Destination_selling"].
//" ".$values["accessories"]." ".$values["description"];//." ".$values["priority"]." ".$values["A_storage"];


