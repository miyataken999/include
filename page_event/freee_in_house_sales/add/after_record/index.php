<?php 
// Description
// Occurs after new record was added

// Parameters
// $values     - array of values has been written to the database.
//               To access specific field value use $values["FieldName"].
//               "dict" is an alternate name for this parameter.              
// $keys       - array of key field values of a new record
//               To access specific field value use $values["KeyFieldName"].              
// $inline     - equals to true when the Inline Add in process, false otherwise.              
// $pageObject - an object of Page class representing the current page  


// evaProjectへリクエストして処理

$id = $keys["id"];
exec("curl http://rifa.life/evaProject/in_house_sales/update/freee_saisanhyou/{$id}", $result);


