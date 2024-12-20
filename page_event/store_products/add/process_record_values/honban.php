<?

// Place event code here.
// Use "Add Action" button to add code snippets.

//$html = file_get_html('http://www.google.com/');

// Find all images
//foreach($html->find('img') as $element)
//       echo $element->src . '<br>';

// Find all links
//foreach($html->find('a') as $element)
//       echo $element->href . '<br>';

$values["description"] .= " ".$values["Finish"]." ".$values["Destination_selling"].
" ".$values["accessories"]." ".$values["description"];//." ".$values["priority"]." ".$values["A_storage"];

if($values['updated_at'] == "")
$values['updated_at'] = date("Y/m/d");
if($values['create_at'] == "")
$values['create_at'] = date("Y/m/d");

if($values['satei_hi'] == "")
$values['satei_hi'] = date("Y/m/d H:i:s");
if($values['kaitory_hi'] == "")
$values['kaitory_hi'] = date("Y/m/d H:i:s");


$values['satei_by'] = $_SESSION["uid"];
//$values['kaitori_by'] = $_SESSION["uid"];


// $values['comment'] = "ファイル読み込みテストprocess_record";
