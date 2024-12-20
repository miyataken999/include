<?php 
$is_today_search = false;
if(isset($_GET["q"])){
  if($_GET["q"] == "(ching_created_at~between~".date("Y-m-d")."~date11~".date("Y-m-d").")"){
    $is_today_search = true;
  }
}

if($is_today_search === false){
?>
<style type="text/css">
.today_search_btn {
    font-size: 36px;
    background: #bb0000;
    padding: 10px 500px;
    border-color: #d10000;
    color: #fff;
    letter-spacing: 10px;
    display: block;
    margin: 10px auto;
    font-weight: bold;
}
.today_search_alert {
    font-size: 20px;
    text-align: center;
}
body{
  background: #111;
}
span[data-brick="recordcontrol"] a.btn {
    display: none;
}
.today_search_OK_alert{
  display: none;
}
</style>
<?php
}else{
?>
<style type="text/css">
.today_search_btn {
  display: none;
}
.today_search_alert{
  display: none;
}
</style>
<?php
}
?>



<style type="text/css">
td span[id*='kinyuukikan'] {
    display: block;
    width: max-content;
    max-width: 200px;
}
span[data-brick="recordcontrol"] > button + button + a {
    display: block;
    float: right;
    background: #ff0;
    border: 5px solid #111;
    color: #111;
    padding: 5px 70px;
    font-size: 20px;
    line-height: 1;
}
span[data-brick="recordcontrol"] > button + button + a:hover {
    background: #f00;
}
.seiyakulink .btn{
  margin: 1rem;
  padding: 1rem 5rem;
}
.copy_btn, .hankaku_copy_btn {
  margin-top: 0.5rem;
  padding: 0.2rem 1rem;
  border: 1px solid #333;
  width: max-content;
  background: #fff;
}
.copy_btn.clicked, .hankaku_copy_btn.clicked{
  background-color: #888;
  cursor: not-allowed;
}
.other_text_wrap{
  border: 1px solid #c0c332;
  background: #ffff5f;
  padding: 4px;
  color: #333;
  font-size: 14px;
}
</style>



<script type="text/javascript">
window.onload = function(){
  var addhtml = "<div class='seiyakulink rnr-c rnr-ch rnr-c-column'><a class='btn btn-primary' href='https://rifa.life/evaProject/seiyakumachi'>成約待ち一覧</a></div>"
              + "<a class='btn btn-primary today_search_btn' href='https://rifa.life/shop5/Eoc_transfer_confirm_list.php?q=(ching_created_at~between~<?php echo date("Y-m-d"); ?>~date11~<?php echo date("Y-m-d"); ?>)' >本日の買取備考に絞り込む</a>"
              + "<div class='alert alert-warning today_search_alert'>当日の買取備考に絞り込んでいません。<br>最初に絞り込んでから振込作業を行ってください。</div>"
              + "<div class='alert alert-info today_search_OK_alert'>当日の買取備考に絞り込まれています。</div>"
  var add_target = jQuery(".bs-sidebar-screenbound.bs-minwidth")
  add_target.prepend(addhtml)
  // 以下4つにクリップボードコピーボタンを付ける
  // 　1-1．金融機関コード
  // 　1-2．支店コード
  // 　1-3．口座番号
  // 　1-4．成約金額　※1-Bを以て

  var copy_btn = "<a class='btn btn-default copy_btn kinnyuukikan_code_copy'>金融機関コードコピー</a>";
  copy_btn += "<a class='btn btn-default copy_btn shiten_code_copy'>支店コードコピー</a>";
  copy_btn += "<a class='btn btn-default copy_btn kouzabangou_copy'>口座番号コピー</a>";
  // copy_btn += "<a class='btn btn-default copy_btn kigou_copy'>記号コピー</a>";
  // copy_btn += "<a class='btn btn-default copy_btn bangou_copy'>番号コピー</a>";
  copy_btn += "<a class='btn btn-default hankaku_copy_btn'>半角フリガナコピー</a>";
  jQuery("td.rnr-field-text[data-field='kinyuukikan']").append(copy_btn)


  var copy_btn = "<a class='btn btn-default copy_btn satei_sougaku_copy'>コピー</a>";
  jQuery("td.rnr-field-number[data-field='satei_sougaku']").append(copy_btn)

  // var copy_btn = "<a class='btn btn-default copy_btn kaibi_sougaku_copy'>コピー</a>";
  // jQuery("td.rnr-field-number[data-field='kaibi_sougaku']").append(copy_btn)

  /**
   * モーダルからコピー
   */
  jQuery(document).on("click", ".modal_copy_btn", function(){
    // $(".hankaku_copy_btn[other_text]")
    // clicked 
    let copy_val = $(this).attr("copytext")
    if(navigator.clipboard){
      navigator.clipboard.writeText(copy_val);
      if(copy_val == ""){
        alert("『" + copy_val + "』をコピーしましたが、内容が空欄です。");
      }
    }else{
      alert("お使いのブラウザではコピー機能が動いていません。");
    }
    let copy_ecc_id = $(this).siblings(".modal_ecc_id").attr("copy_ecc_id")
    let target_td = $(".bs-gridrow .bs-gridcell[data-field='ecc_id'] span[val='"+copy_ecc_id+"']");
    let target_tr = target_td.parents(".bs-gridrow");
    target_tr.find(".bs-gridcell[data-field='kinyuukikan'] .hankaku_copy_btn").addClass("clicked")
    jQuery("#copyModal").modal('hide');

  })

  /**
   * 半角フリガナコピー
   */
  jQuery(document).on("click", ".hankaku_copy_btn", function(){
    if(jQuery(this).hasClass("clicked")){
      return false;
    }
    if(jQuery(this).attr("hankaku_kana") != jQuery(this).attr("other_text")){
      let ecc_id = $(this).parents(".bs-gridrow").find(".bs-gridcell[data-field='ecc_id'] span").attr("val");
      $(".modal_ecc_id").attr("copy_ecc_id", ecc_id)
      $(".modal_ecc_id").html(ecc_id)

      $(".modal_btn_1").attr("copytext", jQuery(this).attr("other_text"))
      $(".modal_btn_1 span").html(jQuery(this).attr("other_text"))

      $(".modal_btn_2").attr("copytext", jQuery(this).attr("hankaku_kana"))
      $(".modal_btn_2 span").html(jQuery(this).attr("hankaku_kana"))

      jQuery("#copyModal").modal();
    }
    var copy_val = jQuery(this).siblings("span").find('.hankaku_box').attr("hankaku")
    let eoc_name = jQuery(this).parents(".bs-gridcell").siblings(".bs-gridcell[data-field='name1']").find("span").text()
    let alert_msg = "";
    if(navigator.clipboard){
      alert_msg += "[" + copy_val + "]をコピーしました。"
      // if(next_msg != ""){
      //   alert_msg += "\n次は「" + next_msg + "」をコピーしてください。"
      // }

      alert_msg = "「"+eoc_name+"」様\n" + alert_msg
      // alert(alert_msg)
      navigator.clipboard.writeText(copy_val);
      if(copy_val == ""){
        alert("『" + copy_val + "』をコピーしましたが、内容が空欄です。");
      }
    }else{
      alert("お使いのブラウザではコピー機能が動いていません。");
    }

  })

  /** 
   * コピーボタンの処理
   */
  jQuery(document).on("click", ".copy_btn", function(){
    if(jQuery(this).hasClass("clicked")){
      return false;
    }
    jQuery(this).addClass("clicked");


    var span_val = jQuery(this).siblings('span').attr("val")
    var span_val_array = span_val.split("\n")

    let alert_msg = "";
    let next_msg = "";

    if(jQuery(this).hasClass('kinnyuukikan_code_copy')){
      var copy_str = "●金融機関コード"
      alert_msg = "金融機関コード"
      next_msg = "支店コード"
    }else if(jQuery(this).hasClass('shiten_code_copy')){
      var copy_str = "●支店コード"
      alert_msg = "支店コード"
      next_msg = "口座番号"
    }else if(jQuery(this).hasClass('kouzabangou_copy')){
      var copy_str = "●口座番号"
      alert_msg = "口座番号"
      next_msg = "査定総額"
    }else if(jQuery(this).hasClass('kigou_copy')){
      var copy_str = "●記号"
      alert_msg = "記号"
      next_msg = ""
    }else if(jQuery(this).hasClass('bangou_copy')){
      var copy_str = "●番号"
      alert_msg = "番号"
      next_msg = ""
    }else if(jQuery(this).hasClass('satei_sougaku_copy')){
      var copy_str = ""
      alert_msg = "査定総額"
      next_msg = ""
    }else if(jQuery(this).hasClass('kaibi_sougaku_copy')){
      var copy_str = ""
      alert_msg = "買備"
      next_msg = ""
    }else {
      return false;
    }

    let eoc_name = jQuery(this).parents(".bs-gridcell").siblings(".bs-gridcell[data-field='name1']").find("span").text()

    for (var i = 0; i < span_val_array.length; i++) {
      var item = span_val_array[i]
      // console.log(item)
      if(item.indexOf(copy_str) > -1){
        var str = item.replaceAll(copy_str, '')
        str = str.replaceAll(':', '')
        
        if(navigator.clipboard){
          alert_msg += "[" + str + "]をコピーしました。"
          if(next_msg != ""){
            alert_msg += "\n次は「" + next_msg + "」をコピーしてください。"
          }

          alert_msg = "「"+eoc_name+"」様\n" + alert_msg
          // alert(alert_msg)
          navigator.clipboard.writeText(str);
          if(str == ""){
            alert("『" + copy_str + "』をコピーしましたが、内容が空欄です。");
          }
        }
        break;
      }else if(copy_str === ""){
        if(navigator.clipboard){
          navigator.clipboard.writeText(item);
        }
        break;
      }
    };
  })

  // 半角フリガナ作成
  $(".bs-gridcell[data-field='name2']").each(function(index, el){
    let furigana = $(el).find("span").attr("val");
    let hankaku = mb_convert_kana(furigana, "k");
    hankaku = hankaku.replace("　", " ");
    hankaku = hankaku.replace("ｬ", "ﾔ");
    hankaku = hankaku.replace("ｮ", "ﾖ");
    hankaku = hankaku.replace("ｯ", "ﾂ");
    let hankaku_html = "<div class='hankaku_box' hankaku='" + hankaku + "'>●半角フリガナ：" + hankaku + "</div>";
    let record_id = $(el).attr("data-record-id");
    jQuery("#edit" + record_id + "_kinyuukikan").append(hankaku_html);
  })


  // 半角フリガナとその他が違ったらHTML操作
  $("td[data-field='kinyuukikan'] > span").each(function(index, el){
  let kinyuukikan = $(el).attr("val")
  let kinyuukikan_array = kinyuukikan.split("\n")
  let hankaku_kana = '';
  let other_text = '';
  let find_str = '●旧姓/新姓/その他';
  for (let i = 0; i < kinyuukikan_array.length; i++) {
    if(kinyuukikan_array[i].indexOf(find_str) > -1){
      other_text = kinyuukikan_array[i].replaceAll(find_str + ':', '')
    }
  };
  hankaku_kana = $(el).find(".hankaku_box").attr("hankaku")

  if(other_text != ""){
    if(other_text != hankaku_kana){
      let other_text_html = '<div class="other_text_wrap">' + '●旧姓/新姓/その他:' + other_text + '</div>';
      let html = $(el).html().replace('●旧姓/新姓/その他:' + other_text, other_text_html);
      $(el).html(html)
      $(el).siblings(".hankaku_copy_btn").attr("other_text", other_text).attr("hankaku_kana", hankaku_kana)
    }
  }

})



}






function mb_convert_kana(text, option) {
  //PHPのmb_convert_kanaを再現。
  var katahan, kanazen, hirazen, mojilength, i, re;
  katahan = ["ｶﾞ", "ｷﾞ", "ｸﾞ", "ｹﾞ", "ｺﾞ", "ｻﾞ", "ｼﾞ", "ｽﾞ", "ｾﾞ", "ｿﾞ", "ﾀﾞ", "ﾁﾞ", "ﾂﾞ", "ﾃﾞ", "ﾄﾞ", "ﾊﾞ", "ﾊﾟ", "ﾋﾞ", "ﾋﾟ", "ﾌﾞ", "ﾌﾟ", "ﾍﾞ", "ﾍﾟ", "ﾎﾞ", "ﾎﾟ", "ｳﾞ", "ｰ", "ｧ", "ｱ", "ｨ", "ｲ", "ｩ", "ｳ", "ｪ", "ｴ", "ｫ", "ｵ", "ｶ", "ｷ", "ｸ", "ｹ", "ｺ", "ｻ", "ｼ", "ｽ", "ｾ", "ｿ", "ﾀ", "ﾁ", "ｯ", "ﾂ", "ﾃ", "ﾄ", "ﾅ", "ﾆ", "ﾇ", "ﾈ", "ﾉ", "ﾊ", "ﾋ", "ﾌ", "ﾍ", "ﾎ", "ﾏ", "ﾐ", "ﾑ", "ﾒ", "ﾓ", "ｬ", "ﾔ", "ｭ", "ﾕ", "ｮ", "ﾖ", "ﾗ", "ﾘ", "ﾙ", "ﾚ", "ﾛ", "ﾜ", "ｦ", "ﾝ", "ｶ", "ｹ", "ﾜ", "ｲ", "ｴ", "ﾞ", "ﾟ"];
  kanazen = ["ガ", "ギ", "グ", "ゲ", "ゴ", "ザ", "ジ", "ズ", "ゼ", "ゾ", "ダ", "ヂ", "ヅ", "デ", "ド", "バ", "パ", "ビ", "ピ", "ブ", "プ", "ベ", "ペ", "ボ", "ポ", "ヴ", "ー", "ァ", "ア", "ィ", "イ", "ゥ", "ウ", "ェ", "エ", "ォ", "オ", "カ", "キ", "ク", "ケ", "コ", "サ", "シ", "ス", "セ", "ソ", "タ", "チ", "ッ", "ツ", "テ", "ト", "ナ", "ニ", "ヌ", "ネ", "ノ", "ハ", "ヒ", "フ", "ヘ", "ホ", "マ", "ミ", "ム", "メ", "モ", "ャ", "ヤ", "ュ", "ユ", "ョ", "ヨ", "ラ", "リ", "ル", "レ", "ロ", "ワ", "ヲ", "ン", "ヵ", "ヶ", "ヮ", "ヰ", "ヱ", "゛", "゜"];
  hirazen = ["が", "ぎ", "ぐ", "げ", "ご", "ざ", "じ", "ず", "ぜ", "ぞ", "だ", "ぢ", "づ", "で", "ど", "ば", "ぱ", "び", "ぴ", "ぶ", "ぷ", "べ", "ぺ", "ぼ", "ぽ", "ヴ", "ー", "ぁ", "あ", "ぃ", "い", "ぅ", "う", "ぇ", "え", "ぉ", "お", "か", "き", "く", "け", "こ", "さ", "し", "す", "せ", "そ", "た", "ち", "っ", "つ", "て", "と", "な", "に", "ぬ", "ね", "の", "は", "ひ", "ふ", "へ", "ほ", "ま", "み", "む", "め", "も", "ゃ", "や", "ゅ", "ゆ", "ょ", "よ", "ら", "り", "る", "れ", "ろ", "わ", "を", "ん", "か", "け", "ゎ", "ゐ", "ゑ", "゛", "゜"];
  mojilength = katahan.length;
  //r:「全角」英字を「半角」に変換します。
  //a:「全角」英数字を「半角」に変換します。
  if(option.match(/[ra]/)) {
    text = text.replace(/[Ａ-ｚ]/g, function ($0) {
      return String.fromCharCode(parseInt($0.charCodeAt(0)) - 65248);
    });
  }
  //R:「半角」英字を「全角」に変換します。
  //A:「半角」英数字を「全角」に変換します
  if(option.match(/[RA]/)) {
    text = text.replace(/[A-z]/g, function ($0) {
      return String.fromCharCode(parseInt($0.charCodeAt(0)) + 65248);
    });
  }
  //n:「全角」数字を「半角」に変換します。
  //a:「全角」英数字を「半角」に変換します。
  if(option.match(/[na]/)) {
    text = text.replace(/[０-９]/g, function ($0) {
      return String.fromCharCode(parseInt($0.charCodeAt(0)) - 65248);
    });
  }
  //N:「半角」数字を「全角」に変換します。
  //A:「半角」英数字を「全角」に変換します
  if(option.match(/[NA]/)) {
    text = text.replace(/[0-9]/g, function ($0) {
      return String.fromCharCode(parseInt($0.charCodeAt(0)) + 65248);
    });
  }
  //s:「全角」スペースを「半角」に変換します。
  if(option.match(/s/)) {
    text = text.replace(/　/g, " ");
  }
  //S:「半角」スペースを「全角」に変換します。
  if(option.match(/S/)) {
    text = text.replace(/ /g, "　");
  }
  //k:「全角カタカナ」を「半角カタカナ」に変換します。
  if(option.match(/k/)) {
    for(i = 0; i < mojilength; i++) {
      re = new RegExp(kanazen[i], "g");
      text = text.replace(re, katahan[i]);
    }
  }
  //K:「半角カタカナ」を「全角カタカナ」に変換します。
  //V:濁点付きの文字を一文字に変換します。"K", "H" と共に使用します。
  if(option.match(/K/)) {
    if(!option.match(/V/)) {
      text = text.replace(/ﾞ/g, "゛");
      text = text.replace(/ﾟ/g, "゜");
    }
    for(i = 0; i < mojilength; i++) {
      re = new RegExp(katahan[i], "g");
      text = text.replace(re, kanazen[i]);
    }
  }
  //h:「全角ひらがな」を「半角カタカナ」に変換します。
  if(option.match(/h/)) {
    for(i = 0; i < mojilength; i++) {
      re = new RegExp(hirazen[i], "g");
      text = text.replace(re, katahan[i]);
    }
  }
  //H:「半角カタカナ」を「全角ひらがな」に変換します。
  //V:濁点付きの文字を一文字に変換します。"K", "H" と共に使用します。
  if(option.match(/H/)) {
    if(!option.match(/V/)) {
      text = text.replace(/ﾞ/g, "゛");
      text = text.replace(/ﾟ/g, "゜");
    }
    for(i = 0; i < mojilength; i++) {
      re = new RegExp(katahan[i], "g");
      text = text.replace(re, hirazen[i]);
    }
  }
  //c:「全角カタカナ」を「全角ひらがな」に変換します。
  if(option.match(/c/)) {
    for(i = 0; i < mojilength; i++) {
      re = new RegExp(kanazen[i], "g");
      text = text.replace(re, hirazen[i]);
    }
  }
  //C:「全角ひらがな」を「全角カタカナ」に変換します。
  if(option.match(/C/)) {
    for(i = 0; i < mojilength; i++) {
      re = new RegExp(hirazen[i], "g");
      text = text.replace(re, kanazen[i]);
    }
  }
  return text;
}
















</script>

<div class="modal fade" id="copyModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
				<h4 class="modal-title">旧姓/新姓/その他とフリガナが違います。コピーする内容を選択してください</h4>
			</div>
			<div class="modal-body">
        顧客SEQ：<span class="modal_ecc_id"></span>
        <br>
        <br>
        <a class="btn btn-default modal_copy_btn modal_btn_1" copytext="">「旧姓/新姓/その他：<span></span>」</a>
        <br>
        <br>
        <a class="btn btn-default modal_copy_btn modal_btn_2" copytext="" >「半角フリガナ：<span></span>」</a>
			</div>
		</div>
	</div>
</div>