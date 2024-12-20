<?php 
// Parameters
// $values     - array of values has been written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.              
// $where      - WHERE clause that points to the edited record. Example: ID=19              
// $oldvalues  - array with replaced field values. To access specific column value use
//               $oldvalues["FieldName"]              
// $keys       - array of key column values that point to the edited record. To access
//               specific key column use $keys["KeyFieldName"]              
// $inline     - equals to true when the Inline Edit in process, false otherwise              
// $pageObject - an object of Page class representing the current page              



// evaProjectへリクエストして処理

$id = $keys["id"];
exec("curl http://rifa.life/evaProject/in_house_sales/update/freee_saisanhyou/{$id}", $result);


