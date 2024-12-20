<?php
// echo 1111111111111;
$request_uri =  $_SERVER["REQUEST_URI"];
// echo $request_uri;
?>

<style type="text/css">
td.bs-gridcell[data-field="Apparaiser"] span {
    width: 150px;
}
</style>
<script type="text/javascript">
// console.log("aaaaaaaaaaaaaa");
var insert_selector = ".bs-sidebar-screenbound .rnr-rowcontainer div[data-container='add_delete']"
var insert_html = "<a class='use_satei_btn' href = 'https://rifa.life/shop5/market_product_performance_original_list.php?q=(use_satei~equals~on~checkbox)'>査定使用</a>"
$(window).load(function(){
  $(insert_selector).append(insert_html)
  // var location_href = location.href;
  // console.log(location_href);
  // if(location_href.match())

  jQuery("[data-field=disp_ichiba_img]").hide();
  jQuery("[data-field=ichiba_meeting_month]").hide();
  jQuery("[data-field=ichiba_meeting_name]").hide();
  jQuery("[data-field=shouhin_comment]").hide();
  jQuery("[data-field=item_name]").hide();
  jQuery("[data-field=yahoo_kataban]").hide();
  jQuery("[data-field=market_category_id]").hide();
  jQuery("[data-field=market_sub_category_id1]").hide();
  jQuery("[data-field=market_gold_property]").hide();
  jQuery("[data-field=market_shape]").hide();
  jQuery("[data-field=box_id]").hide();
  jQuery("[data-field=yahoo_condition2]").hide();


  $(document).keydown(function(event){
    // クリックされたキーのコード
    var list_keyCode = event.keyCode;
    if(list_keyCode == 113 ){
      market_togtog();
    }

  });

})
function market_togtog(){
  jQuery("[data-field=disp_ichiba_img]").toggle();
  jQuery("[data-field=ichiba_meeting_month]").toggle();
  jQuery("[data-field=ichiba_meeting_name]").toggle();
  jQuery("[data-field=shouhin_comment]").toggle();
  jQuery("[data-field=item_name]").toggle();
  jQuery("[data-field=yahoo_kataban]").toggle();
  jQuery("[data-field=market_category_id]").toggle();
  jQuery("[data-field=market_sub_category_id1]").toggle();
  jQuery("[data-field=market_gold_property]").toggle();
  jQuery("[data-field=market_shape]").toggle();
  jQuery("[data-field=box_id]").toggle();
  jQuery("[data-field=yahoo_condition2]").toggle();
}
function isNumber(val){
  var regexp = new RegExp(/^[0-9]+(\.[0-9]+)?$/);
  return regexp.test(val);
}

// charagai | (floor((【zeinuki】-((【Gram】-((【Parent_stone】+【Aside_stone】)*0.2))*【price_per_gram】)-((【ichiba_melee_gai】*1000)*【Aside_stone】))/【Parent_stone】))
$(document).on('change', '.bs-gridcell[data-field="zeinuki"] span span input', function(){
  $zeinuki = $(this).val();

  // $this_parent = $(this).parent().parent().parent().parent();
  $data_record_id = $(this).parents('.bs-gridcell[data-field="zeinuki"]').attr('data-record-id')
  $aside_stone = $('.bs-gridcell[data-field="Aside_stone"][data-record-id="' + $data_record_id + '"] span').text()
  $aside_stone = $aside_stone.replaceAll(",","")
  if($aside_stone == ""){
    $aside_stone = 0
  }
  $aside_stone = parseFloat($aside_stone)
  $parent_stone = $('.bs-gridcell[data-field="Parent_stone"][data-record-id="' + $data_record_id + '"] span').text()
  $parent_stone = $parent_stone.replaceAll(",","")
  if($parent_stone == ""){
    $parent_stone = 0
  }
  $parent_stone = parseFloat($parent_stone)
  $gram = $('.bs-gridcell[data-field="Gram"][data-record-id="' + $data_record_id + '"] span').text()
  $gram = $gram.replaceAll(",","")
  if($gram == ""){
    $gram = 0
  }
  $gram = parseFloat($gram)
  $price_per_parent_stone = $('.bs-gridcell[data-field="price_per_parent_stone"][data-record-id="' + $data_record_id + '"] span').text()
  $price_per_parent_stone = $price_per_parent_stone.replaceAll(",","")
  if($price_per_parent_stone == ""){
    $price_per_parent_stone = 0
  }
  $price_per_parent_stone = parseFloat($price_per_parent_stone)
  $price_per_aside_stone = $('.bs-gridcell[data-field="price_per_aside_stone"][data-record-id="' + $data_record_id + '"] span').text()
  $price_per_aside_stone = $price_per_aside_stone.replaceAll(",","")
  if($price_per_aside_stone == ""){
    $price_per_aside_stone = 0
  }
  $price_per_aside_stone = parseFloat($price_per_aside_stone)
  $price_per_gram = $('.bs-gridcell[data-field="price_per_gram"][data-record-id="' + $data_record_id + '"] span').text()
  $price_per_gram = $price_per_gram.replaceAll(",","")
  if($price_per_gram == ""){
    $price_per_gram = 0
  }
  $price_per_gram = parseFloat($price_per_gram)
  $ichiba_melee_gai = $('.bs-gridcell[data-field="ichiba_melee_gai"][data-record-id="' + $data_record_id + '"] span span input').text()
  $ichiba_melee_gai = $ichiba_melee_gai.replaceAll(",","")
  if($ichiba_melee_gai == ""){
    $ichiba_melee_gai = 0
  }
  $ichiba_melee_gai = parseFloat($ichiba_melee_gai)

  if($parent_stone > 0){
    $calc = ($zeinuki - (($gram - (($parent_stone + $aside_stone) * 0.2)) * $price_per_gram) - (( $ichiba_melee_gai * 1000) * $aside_stone))/ $parent_stone
    $calc = Math.floor($calc);
    if($calc > 0){
      $('.bs-gridcell[data-field="charagai"][data-record-id="' + $data_record_id + '"] span span input').val($calc)
    }
  }
  // if(($zeinuki > 0) && ($gram > 0)){
  //   $gram_gai = Math.floor($zeinuki / $gram);
  //   $('.bs-gridcell[data-field="gramgai"][data-record-id="' + $data_record_id + '"] span span input').val($gram_gai)
  // }
})


</script>

<style type="text/css">
.use_satei_btn {
  display: inline-block;
  padding: 1em 3em;
  text-decoration: none;
  border-radius: 3px;
  font-weight: bold;
  color: #FFF;
  background-image: linear-gradient(-45deg, #FFC796 0%, #FF6B95 100%);
  transition: .4s;
  margin: 0 3em;
}

.use_satei_btn:hover {
  background-image: linear-gradient(-60deg, #ff5858 0%, #f09819 100%);
  color: #FFF;
  text-decoration: none;
}



</style>
