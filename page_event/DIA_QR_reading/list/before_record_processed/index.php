<?php
// Description
// Occurs before record is processed
// Return true if you like to display row in the list, return false otherwise
//
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $pageObject - an object of Page class representing the current page


include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/function/qr_replace.php";
$data = qr_replace($data);
$data["color"] = $data["color_ref"]



// include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/function/qr_replace.php";
// $replace_data = qr_replace($values);
// if($replace_data["clarity"] != ''){
//   $str = $replace_data["clarity"];
//   if($str == 'vs1'){
//     $values["clarity"] = '3';
//   }
// }

 ?>
