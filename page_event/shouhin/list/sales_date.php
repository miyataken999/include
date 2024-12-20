<?php
// $value - a value to be displayed on the page.
// Example:
// $value = strtoupper($value);
//
// $data - array with all field values.
// Example:
// $value = $data["FirstName"].$data["LastName"];
// where FirstName and LastName are actual field names.

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//買取額抜き表示処理　　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
if(($value == "")or($value == null)or($value == "0000-00-00 00:00:00")){
  // $value = $data['kanryou_henbi'];
  $value = $data['kanryou_henbi'];
}

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//買取額抜き表示処理　　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
