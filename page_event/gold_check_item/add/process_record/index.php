<!-- Description
Occurs before the page is displayed. You can alter the displayed field values here.

Parameters
$values     - array of values to be displayed on the page.
              To access specific field value use $values["FieldName"]
$pageObject - an object of Page class representing the current page               -->


<?
$date = date("Y-m-d");
$values["trade_day"] = $date;
?>
