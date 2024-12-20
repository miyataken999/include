<script>
$(window).load(function() {

  $description_append_btn = '';
  $description_append_btn += '<div class = "input_area">'
  $description_append_btn += '<div id="description_input_area">';
  $description_append_btn += 'メモの末尾に追加<input type="text" id="description_append_text">';
  $description_append_btn += '<div id="description_append_btn" class="btn btn-default">追加</div>';
  $description_append_btn += '</div>';
  $description_append_btn += '</div>';
  $(".rnr-hfiller").append($description_append_btn);


  $("#description_append_btn").click(function(){
    $description_append = $("#description_append_text").val();
    $description_area = $(".bs-sidebar-main").find(".form-control[id*='value_description_']");
    $description_area.each(function(index,el) {
      if($(el).val() != ''){
        $(el).val(' '+$(el).val()+$description_append);
      }else{
        $(el).val($(el).val()+$description_append);
      }
    });
  })
});


</script>