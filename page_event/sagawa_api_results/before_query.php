<?php
// Description
// Occurs before SQL query executed
// Use this event if you like to modify default SQL query on the page.
// Avoid editing strSQL parameter, modify strWhereClause and strOrderBy instead.

// Parameters
// $strSQL         - SQL query being to be executed.                   
// $strWhereClause - WHERE clause applied to the SQL query. Example: "active=1"                  
// $strOrderBy     - ORDER BY query applied to the SQL query.Example: "ORDER BY
//                   LastName,FirstName"                  
// $pageObject     - an object of Page class representing the current page   

$url = "https://rifa.life/evaProjectAPI/sagawa/api/move";
echo file_get_contents($url);
