<?
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page


// var_dump($row);

// https://xlinesoft.com/phprunner/docs/change_the_cell_background_color.htm
if($data["authorize_check"]==1){
  $record["css"] = "background:#0F0;color:#555";
}else{
  $record["css"] = "background:#FFF;color:#555";
}



$record["gram_2_css"] = "background: #ff0;";

?>
