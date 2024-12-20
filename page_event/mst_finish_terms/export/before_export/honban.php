<?php
// Description
// Occurs before record is exported
// Use this event to modify record before it is exported.
//
// Parameters
// $data       - array of values selected from the database table
// $values     - array of values to be written to the export
//               file
// $pageObject - an object of Page class representing the current page
//

$values["cost"] = str_replace(',','',$values["cost"]);
