<div id="isEoc_trader_master" data="on"></div>
<?php
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/shop5/")){
  if(stristr($current_page_pass, "kin_satei_list.php")){
    include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/kin_satei/list_page_script.php';
  }elseif((stristr($current_page_pass, "satei_of_brand1"))or(stristr($current_page_pass, "satei_of_jewelry_list.php"))){
    include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/satei/after_load_js.php';
  }else{
  }
}else{
  if(stristr($current_page_pass, "kin_satei_list.php")){
    include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/kin_satei/list_page_script_test.php';
  }elseif((stristr($current_page_pass, "satei_of_brand1"))or(stristr($current_page_pass, "satei_of_jewelry_list.php"))){
    include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/satei/after_load_js_tamiya.php';
  }else{
  }
}



 ?>
<style type ="text/css">
.sateimeisai_box .btn-gold{
  display: none;
}
.sateimeisai_box .btn-blue{
  display: none;
}
.sateimeisai_box .btn-green-gold{
  display: none;
}
.sateimeisai_box .btn-red{
  display: none;
}
.sateimeisai_box .btn-seiyaku{
  display: none;
}
.sateimeisai_box .btn-taiki{
  display: none;
}
.sateimeisai_box .btn-primary{
  display: none;
}
</style>
