<?php
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page
if($data["resultCode"] == "S0-0001"){
    $record["css"] = "background: #cfc; color: #111;";
} elseif ($data["resultCode"] == "E8-0001") {
    $record["css"] = "background: #fcc; color: #111;";
}


