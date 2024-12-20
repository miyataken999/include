
<script type="text/javascript">
$(window).load(function() {
  $link_btn = '';

  $link_btn += '<div id="ikkatsu_open_btn" class="rnr-button btn btn-default" >全て開く</div>';
  $link_btn += '<div id="ikkatsu_btn" class="rnr-button btn btn-default" >一括単価反映</div>';

  $(".bs-sidebar-screenbound .rnr-rowcontainer div[data-container='add_delete']").append($link_btn);


  document.getElementById('ikkatsu_open_btn').onclick = function(){
    document.getElementById('chooseAll_1').click()
    document.getElementById('edit_selected1').click()
  }

  document.getElementById('ikkatsu_btn').onclick = function(){
    $id_cell = $('table[data-brick="grid"] .bs-gridrow .bs-gridcell[data-field=id]')
    $id_cell.each(function(index, el) {
      //idの固有連番を取得、抜き出す
    	$this_id_num = $(this).attr("data-record-id");
    	$name_val = $("#value_name_"+$this_id_num).val();
    	$date_selctor_input = $("#date_selctor_input").val();
    	$tanka_data = $date_selctor_input+':'+$name_val;
    	$kinsyou_tanka = $("#jigane_table tr[data='"+$tanka_data+"'] .price").attr("data");
    	$netjapan_flag = document.getElementById("net_japan_flag").innerHTML;
    	if(($netjapan_flag == "on") && (($this_id_num == 4) || ($this_id_num == 19) || ($this_id_num == 29))){
    		$kinsyou_tanka = parseInt($kinsyou_tanka) + 1;
    	}
  		$("#value_unit_"+$this_id_num).val($kinsyou_tanka);
      //伝票重量が空、nullじゃないとき伝票重量と金性単価をかける
      $gram_2 = $("#value_gram_2_"+$this_id_num).val();
      if($gram_2 != null || $gram_2 != ""){
        $price = $kinsyou_tanka * $("#value_gram_2_"+$this_id_num).val()
      }else{
        $price = $kinsyou_tanka * $("#value_gram_"+$this_id_num).val()
      }
      $("#value_price_"+$this_id_num).val(parseInt($price))
    });
  }
})


</script>
