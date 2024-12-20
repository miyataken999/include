<?php
$url = $_SERVER["REQUEST_URI"];
// echo $uid;
$uid = $_SESSION["UserData"]["user_id"];
// if(stristr($url,"/shop5test/")){
  // echo 111111111111111111111111111111111;
?>
<script type="text/javascript">
// if(typeof jQuery != "undefined"){ //jQueryの読み込み確認
//     $(function(){
//         alert('jQuery is ready.')
//     });
// }

function clearInputVal(){
  $("#product_id_area").val('');
  $("#box_id").val('');
}


$(window).load(function() {
  $link_btn = '';
  $link_btn += '<form id="print_form" target="_blank" action="https://rifa.life/lounge_API/brother/print_nyuko.php" method="post">';
  $link_btn += '<table>';
  $link_btn += '<tr><td>自動出力</td>';
  $link_btn += '<td><input type="radio" name="enter_role" value="off">on</td>';
  $link_btn += '<td><input type="radio" name="enter_role" value="on">off</td></tr>';
  $link_btn += '<tr><td>ボックスID</td>';
  $link_btn += '<td>';
  $link_btn += '<input type="text" name="box_id" id="box_id" value="" placeholder="ひとつずつで。">';
  $link_btn += '</td></tr>';
  $link_btn += '<tr><td>プリンタ</td>';
  $link_btn += '<td>';
  $link_btn += '<select name="printer" style="width: auto!important;">';
  $link_btn += '<option value="3">梱包デスクのプリンター</option>';
  $link_btn += '<option value="4">庶務側のプリンター</option>';
  $link_btn += '</select>';
  $link_btn += '</td></tr>';
  $link_btn += '<tr><td>SEQ</td>';
  $link_btn += '<td>';
  $link_btn += '<textarea name="product_id_area" id="product_id_area" rows="3" cols="30" placeholder="ボックスIDを入力したらSEQを入力しても反映されません。改行区切りでどうぞ。"></textarea>';
  $link_btn += '</td></tr>';

  $link_btn += '<tr><td><input type="submit" name="" value="入庫ラベル発行"></td></tr>';
  $link_btn += '</table>';
  $link_btn += '<input type="hidden" name="user_id" value="<?=$uid?>" readonly>';
  $link_btn += '</form>';
// $link_btn += '</div>';

  $(".rnr-hfiller").append($link_btn);
  let submit_flag = '';
  $("#product_id_area").keyup(function(e){
    //ラジオボタンオブジェクトを取得する
    var enter_role = document.getElementsByName("enter_role");
    //取得したラジオボタンオブジェクトから選択されたものを探し出す
    var enter_role_result;
    for(var i=0; i<enter_role.length; i++){
      if(enter_role[i].checked){
        //選択されたラジオボタンのvalue値を取得する
        enter_role_result = enter_role[i].value;
        break;
      }
    }
    console.log(enter_role_result);
    console.log("aaa");
    if(submit_flag == ''){
      submit_flag = 1;
    }else{
      //
    }
    console.log(e.keyCode)
    if(e.keyCode == 13){
      if(enter_role_result=='on'){
        console.log("yes");
      }else{
        $("#print_form").submit();
      }
    }
  })
  $("#print_form").submit(function(event) {
		setTimeout(clearInputVal, 2000);
		$("#product_id_area").focus();
    submit_flag = '';
	});
})
</script>

<style ="text/css">
.print_batch_form{
  padding-left: 15px;
}
</style>
<?php
// }
?>
