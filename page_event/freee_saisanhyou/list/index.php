<?php
// $value - a value to be displayed on the page. 
// Example:
// $value = strtoupper($value);

// $data - array with all field values. 
// Example:
// $value = $data["FirstName"].$data["LastName"];
// where FirstName and LastName are actual field names.

$target_id = $value;
// $data_url = "https://rifa.life/shop5test/freee_deal_join_manual_journal__details_list.php?q=(id~equals~{$target_id})";
$data_url = "https://rifa.life/shop5test/freee_saisanhyou_list.php?masterkey1={$target_id}&mastertable=freee_deal_join_manual_journal__details";

$value = "<a href={$data_url}>{$target_id}</a>";

// $value = 12334;