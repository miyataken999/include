<link rel="stylesheet" href="/include/page_event/saisun/edit/styletest.css">

<style type="text/css">
.rnr-b-editbuttons.last_flag a:focus{
    border: 5px solid #fe6f49!important;
    font-weight: bold!important;
    background-color: #111!important;
    font-size: 20px!important;
    color: #fff!important;
}
.rnr-b-editbuttons.last_flag{
    background: #fff!important;
    border: 5px solid #111;
}
#resetButton1{
    display: none;
}
</style>


<style type="text/css">
    body.sateiErrorNow{
        background: #ff0!important;
    }
    body.sateiErrorNow #edit1_satei_error_0 {
        border: 2px solid #000;
        color: #111;
        font-weight: bold;
    }
    body.errorNow{
        background: #f00!important;
    }
    body.errorNow #edit1_errors_0 {
        background: #fe0;
        color: #111;
        font-size: 30px!important;
        padding: 5px 20px!important;
        position: fixed;
        top: 10px;
        width: 600px!important;
        text-align: center;
        left: 50%;
        transform: translateX(-50%);
        border: 5px solid #111;
        font-weight: bold;
        z-index: 11111;
    }
    body.errorNow #value_errors_1{
        height: 40px!important;

    }
    #edit1_logo_0 , #edit1_parts_0 , #edit1_guarantee_0 {
        text-align: center;
    }
    #edit1_logo_0 input , #edit1_parts_0 input , #edit1_guarantee_0 input {
        text-align: center;
        display: block;
    }


</style>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function(){

    aacd_check();

    $("#value_country_of_origin_1").change(function(){
        aacd_check();
    })
    $("#value_zipper_1").change(function(){
        aacd_check();
    })
    $("#value_serial_number_1").focusout(function(){
        aacd_check();
    })



function aacd_check(){
    //原産国、ファスナー、機番。対応ブランドのみ判定
    var errortext = "";
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/satei/aacd_brand.php";
if(in_array($values['product_num'],$aacd_brandArray_country)){
?>
    if($("#value_country_of_origin_1").val() == ""){
        errortext += "原産国を選択してください。";
    }
<?
}


if(in_array($values['product_num'],$aacd_brandArray_zipper)){
?>
    if($("#value_zipper_1").val() == ""){
        errortext += "\n金具（ファスナー）を選択してください。";
    }
<?
}
?>

    var serial_number = "";
    serial_number = $("#value_serial_number_1").val();

    if(serial_number == ""){
        errortext += "\n機番を入力してください。";
    }

    if(errortext == ""){
        $("body").removeClass("errorNow");
        $("#value_errors_1").val("");
    }else{
        $("body").addClass("errorNow");
        $("#value_errors_1").val(errortext);
    }
}



<?
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//査定抜けエラー
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

    //■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
    //satei_checkの関数作成
    //■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
?>
    function satei_check(){
        var errortext = "";

    <?
    $sate_ck_sql = "SELECT name FROM mst_satei_error WHERE (sub_category_id1={$values['sub_category_id1']}) OR ( category_id={$values['category_id']} AND sub_category_id1='' ) OR (yahoo_junle={$values['product_num']}) ";
    $sate_ck_rs = CustomQuery($sate_ck_sql);

    while($sate_ck_data = db_fetch_array($sate_ck_rs)){
        $sate_ck_id = $sate_ck_data["name"];
        $err_sql = "SELECT field_name , error_text FROM mst_satei_error_item WHERE id={$sate_ck_id} LIMIT 1";
        $err_rs = CustomQuery($err_sql);
        while($err_data = db_fetch_array($err_rs)){
            $check_field = $err_data["field_name"];
            $check_txt = $err_data["error_text"];
    ?>
            if($("#value_<?=$check_field?>_1").val() == ""){
                errortext += "<?=$check_txt?>";
            }
    <?
        }//end while
    }//end while


    ?>
        if(errortext == ""){
            $("body").removeClass("sateiErrorNow");
            $("#value_satei_error_1").val("");
        }else{
            $("body").addClass("sateiErrorNow");
            $("#value_satei_error_1").val(errortext);
        }


    }//end satei_check

    satei_check();

    <?
    //■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
    //focusoutのスイッチ作成
    //■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
    $sate_ck_rs = CustomQuery($sate_ck_sql);
    while($sate_ck_data = db_fetch_array($sate_ck_rs)){
        $sate_ck_id = $sate_ck_data["name"];
        $err_sql = "SELECT field_name , error_text FROM mst_satei_error_item WHERE id={$sate_ck_id} LIMIT 1";
        $err_rs = CustomQuery($err_sql);
        while($err_data = db_fetch_array($err_rs)){
            $check_field = $err_data["field_name"];
            $check_txt = $err_data["error_text"];
    ?>
        $("#value_<?=$check_field?>_1").focusout(function(){
            satei_check();
        })
    <?
        }//end while
    }//end while

    ?>
<?
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// END 査定抜けエラー
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
?>








<?
$Ring_size = $values["Ring_size"];
?>

$("#value_stamp_1").focus();
<?
if($values["errors"] != ""){
?>
    $("body").addClass("errorNow");
    $("#value_country_of_origin_1").focus();
<?
}
?>


    $("div[data-container='fields']").attr("id","content_field");
    var id_content_field = $("#content_field");
    $("div[data-fieldname='yahoo_size']").prepend('<div id="size_in_ttl">サイズ詳細</div><div id="size_in" class="form-group"></div>');



    $("#value_yahoo_sozai_1").css("height","50px");
    $("#value_yahoo_color_1").css("height","50px");



//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//サイズajax
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
    var false_flag = "";
    var value_id = "";
    var text2 = "";
    var size_res = "";
    var size_height = "";
    //$("#value_yahoo_size_1").empty();

get_size_table();
$("#value_sub_category_id1_1").change(function(){
    get_size_table();
});

function get_size_table(){
    value_id = $("#value_sub_category_id1_1").val();

    $.ajax({
        type: "POST",
        url: "/include/page_event/saisun/edit/size_get.php",
        data:"sub_cate="+value_id,
        success: function(msg){
            size_res = msg[0]["res_size"];
            $("#size_in").html(size_res);
            false_flag = size_res;


                //全てのtabindex消去
                $("#size_in").find("input , select , textarea").attr("tabindex","");



            if(false_flag != 0){
                $("#value_yahoo_size_1").focus(function(){
                        var txt = "<table><tbody>";
                        jQuery('#size_in tr').each(function (i, elem) {
                          txt = txt + "<tr>";
                          c = jQuery('.aa')[i].value;
                          txt = txt + jQuery(elem).html().replace("value=\"\"","value=\""+c+"\"");
                          txt = txt + "</tr>";
                        })
                        txt = txt + "</tbody></table>";
                        $("#value_size_table_1").html(txt);

                    text2 = "";
                    $("#size_in").find(".aa").each(function(index){
                        title = jQuery(this).attr("data-title");
                        union = jQuery(this).attr("data-union");
                        line_break = jQuery(this).attr("data-line-break");
                        categoryTitle = jQuery(this).attr("data-category-title");
                        if(union == undefined){
                            union = "";
                        }
                        if(jQuery(this).val() !=""){
                            if(line_break == undefined){
                                text = title + jQuery(this).val() + union + '\r\n';
                            }else if(line_break == "onbreak"){
                                text = '\r\n' + title + jQuery(this).val() + union + '\r\n';
                            }else if(line_break == "front-on-back-off"){
                                text = '\r\n' + title + jQuery(this).val() + union;
                            }else{
                                text = title + jQuery(this).val() + union;
                            }
                            text2 = text2 + text;
                        }else{
                            if(categoryTitle != undefined){
                                if(line_break == "onbreak"){
                                    text = '\r\n' + categoryTitle;
                                }else if(line_break == "title"){
                                    text = categoryTitle + '\r\n';
                                }else{
                                    text = categoryTitle;
                                }
                                text2 = text2 + text;
                            }
                        }
                    });

                    if(value_id != 67 && value_id != 90 && value_id != 66){
                        text2 = "[サイズ(以下約)]"+'\r\n'+text2;
                    }

                    if(text2.match('\r?\n\r?\n')){
                        text2 = text2.replace(/\r?\n\r?\n/g, '\r\n');
                        //console.log(text2);
                    }
                    //$("#value_yahoo_size_1").empty();

                    if($("#value_yahoo_size_1").val() == ""){
                        $("#value_yahoo_size_1").val(text2);

                        $("textarea").css("lineHeight","20px");//init
                        $("textarea").on("keyup",function(evt){
                            if(evt.target.scrollHeight != "undefined"){
                                if(evt.target.scrollHeight > evt.target.offsetHeight){
                                    $(evt.target).height(evt.target.scrollHeight);
                                }
                            }
                        });
                    }
                });
            };
            //enterで送信しない様にする処理
            return false;
        }
    });
};
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//end サイズajax
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★


$("#value_remark_1").focus(function(){
    $val_daikate = $("#value_category_id_1").val();
    if($val_daikate == 6){
        if($(this).val() == ""){
            $(this).val("※表記サイズはあくまでも目安です。メーカーや素材の性質等により誤差がありますので予めご了承ください。");
        }
    }
})



// $(".form-group[data-fieldname='raku_title']").prepend("<div id='raku_err_moji'></div>");
$raku_check_param = "";
jQuery("#value_raku_title_1").focusout(function(){
    var this_val = $(this).val();
    if(this_val.match($raku_check_param)){
        $(".fieldcontrol_raku_title").removeClass('error_box');
        $("#raku_err_moji").html("楽天パラメータOK").addClass("ok_raku_para").removeClass("ng_raku_para");
        jQuery("#saveButton1").show();
    }else{
        $(".fieldcontrol_raku_title").addClass('error_box');
        $("#raku_err_moji").html("楽天パラメータ<br>"+$raku_check_param+"<br>が入ってません。").removeClass("ok_raku_para").addClass("ng_raku_para");
        jQuery("#saveButton1").hide();
    }
})

var season = "";

//onclickイベント
jQuery("#value_yahoo_title_1").focusin(function(){
    title_in();
});
function title_in(){

    if(jQuery("#value_yahoo_size_1").val() == ""){
        jQuery("#value_yahoo_size_1").val(text2);
    }
    //表記サイズ、カラー、型番、SEQを楽天タイトル、Yタイトルに足す
    <?
    if($Ring_size == ""){
    ?>
    $data_size = jQuery("#size_in").find(".aa[data-title*='表記サイズ']").val();
    <?
    }else{
    ?>
    $data_size = "";
    <?
    }
    ?>
    if($data_size == undefined){
        $data_size = "";
    }
    if($data_size != ""){
        $data_size = "/"+$data_size;
    }
    //console.log("表記サイズ:"+$data_size);
    $yaho_ttl = jQuery("#value_yahoo_title_1").val();
    $raku_ttl = jQuery("#value_raku_title_1").val();

    $color_val = jQuery("#value_yahoo_color_1").val();
    if($color_val != ""){
        $color_val = "/"+$color_val;
    }
    $kataban_val = jQuery("#value_yahoo_kataban_1").val();
        if($kataban_val != ""){
            $kataban_val = "/"+$kataban_val;
        }
    $seq_val = jQuery("#value_product_id_1").val();

    if($color_val == undefined){
        $color_val = "";
    }
    if($kataban_val == undefined){
        $kataban_val = "";
    }
    $kataban_val_only = $kataban_val;

    $stamp_val = jQuery("#value_stamp_1").val();
    if($stamp_val == undefined){
        $stamp_val = "";
    }
    if($stamp_val != ""){
        $stamp_val = "/"+$stamp_val;
        $kataban_val = $stamp_val+$kataban_val;
    }

    season = $(".aa[data-title*='シーズン'] option:selected").text();
    season = season.replace(/\s+/g, "");
    // console.log(season);
    if(season != ""){
        $season_result = "【"+season+"】";
        $("#value_season_1").val($season_result);
    }else{
        $season_result = "";
    }


    //性別
    $yahoo_sex = $("#value_yahoo_sex_1").val();
    if($yahoo_sex == 1){
        $yahoo_sex_mark = "【♂】";
        $yahoo_sex_jp = "【メンズ】";
    }else if($yahoo_sex == 2){
        $yahoo_sex_mark = "【♀】";
        $yahoo_sex_jp = "【レディース】";
    }else if($yahoo_sex == 3){
        $yahoo_sex_mark = "【♂♀】";
        $yahoo_sex_jp = "【ユニセックス】";
    }

    //コンディション
    $condi_rank = "【"+$("#value_yahoo_condition2_1").val()+"】";
    if($condi_rank == "【】"){$condi_rank = "";}

    $seq = $("#readonly_value_product_id_1").text();
    if($seq == "【】"){$seq = "";}


    $display_value_product_num_1_val = $("#display_value_product_num_1").val();
    $display_value_product_num_1_val = $display_value_product_num_1_val.replace("'","’");
    // console.log($display_value_product_num_1_val);
    $value_product_num_1_val = $("#value_product_num_1").val();

    if($value_product_num_1_val == 631){
        $brand_eimei = "";
    }else if ( $display_value_product_num_1_val.match(/\//)) {
        $product_num_split = $display_value_product_num_1_val.split("/");
        $brand_eimei = "/" + $product_num_split[1];
    }else{
        $brand_eimei = "";
    }


    //宝飾、服飾で分ける...宝飾を定義
    $val_daikate = $("#value_category_id_1").val();
    if(($val_daikate == 18) ||
        ($val_daikate == 19) ||
        ($val_daikate == 20) ||
        ($val_daikate == 21) ||
        ($val_daikate == 22) ||
        ($val_daikate == 23) ||
        ($val_daikate == 25) ||
        ($val_daikate == 26) ||
        ($val_daikate == 27) ||
        ($val_daikate == 28) ||
        ($val_daikate == 50) ||
        ($val_daikate == 51)
        ){
        $housyoku = "yes";
    }else{
        $housyoku = "no";
    }

    if($housyoku == "yes"){
        $yaho_ttl_param = $data_size + $color_val + $brand_eimei;
        // $raku_ttl_param = $data_size + $kataban_val_only + $color_val + $brand_eimei + $season_result + $yahoo_sex_mark + $condi_rank + $yahoo_sex_jp + "【中古】" + "■" + $seq_val;
        $raku_ttl_param = $data_size + $color_val + $brand_eimei + $season_result + $yahoo_sex_mark + $condi_rank + $yahoo_sex_jp + "【中古】" + "■" + $seq_val;
        $raku_check_param = $season_result + $yahoo_sex_mark + $condi_rank + $yahoo_sex_jp + "【中古】" + "■" + $seq_val;
    }else{
        // $yaho_ttl_param = $data_size + $color_val + $kataban_val_only + $brand_eimei;
        // $raku_ttl_param = $data_size + $kataban_val + $color_val + $brand_eimei + $season_result + $yahoo_sex_mark + $condi_rank + $yahoo_sex_jp + "【中古】" + "■" + $seq_val;
        $yaho_ttl_param = $data_size + $color_val + $brand_eimei;
        $raku_ttl_param = $data_size + $color_val + $brand_eimei + $season_result + $yahoo_sex_mark + $condi_rank + $yahoo_sex_jp + "【中古】" + "■" + $seq_val;
        $raku_check_param = $season_result + $yahoo_sex_mark + $condi_rank + $yahoo_sex_jp + "【中古】" + "■" + $seq_val;
    }



    if($yaho_ttl.match(/\■/)){}else{
        $yaho_ttl = $yaho_ttl + $yaho_ttl_param + " 翌日配送可■" + $seq_val;
    }
    if($raku_ttl.match(/\■/)){}else{
        $raku_ttl = $raku_ttl + $raku_ttl_param;
    }

    jQuery("#value_yahoo_title_1").val($yaho_ttl);
    jQuery("#value_raku_title_1").val($raku_ttl);

};



//Yタイトル文字数エラー
function strLength(strSrc){
    len = 0;
    strSrc = escape(strSrc);
//alert(strSrc);
    for(i = 0; i < strSrc.length; i++){
            if(strSrc.charAt(i) == "%"){
                    if(strSrc.charAt(++i) == "u"){
                            i += 3;
                            len += 1.0;
                    } else {
                        len += 0.5
                    }
                    i++;
            } else {
                len += 0.5
            }
    }
    return len;
}


jQuery("#value_yahoo_title_1").keyup(function(){
    all_str_length();
});

//ストア内検索用キーワード文字数エラー
jQuery("#value_search_keyword_1").keyup(function(){
    all_str_length();
});

//楽天タイトル文字数エラー
jQuery("#value_raku_title_1").keyup(function(){
    all_str_length();
});

$("input").focusin(function(){
    all_str_length();
})
$("textarea").focusin(function(){
    all_str_length();
})



function all_str_length(){
    var str;
    var _str;
    var res;

    str = jQuery("#value_yahoo_title_1").val();
    _str = strLength(str);

   if(_str>64){
        jQuery(".form-group[data-fieldname='yahoo_title'] ").find(".control-label").html("<font color=red size=5>文字数オーバー<br>Yタイトル"+_str + "/６４文字</font>");
        res = 'no';
   }else{
        jQuery(".form-group[data-fieldname='yahoo_title'] ").find(".control-label").html("Yタイトル"+_str + "/６４文字");
   }



    str = jQuery("#value_raku_title_1").val();
    str = str.replace("\n","");

    _str = strLength(str);

    if(_str>100){
        jQuery(".form-group[data-fieldname='raku_title'] ").find(".control-label").html("<font color=red size=5>文字数オーバー<br>楽天タイトル"+_str + "/１００文字</font>");
        res = 'no';
    }else{
        jQuery(".form-group[data-fieldname='raku_title'] ").find(".control-label").html("楽天タイトル"+_str + "/１００文字");
    }




    str = jQuery("#value_search_keyword_1").val();

    _str = strLength(str);

    if(_str>13){
        jQuery(".form-group[data-fieldname='search_keyword'] ").find(".control-label").html("<font color=red size=5>文字数オーバー<br>ストア内ワード"+_str + "/１３文字</font>");
        res = 'no';
    }else{
        jQuery(".form-group[data-fieldname='search_keyword'] ").find(".control-label").html("ストア内ワード"+_str + "/１３文字");
    }


    if(res == 'no'){
        jQuery("#saveButton1").hide();
    }else{
        // jQuery("#saveButton1").show();
    }

}






//付属品のデフォルトは、なし(写真に写っているもの以外は付属致しません)
var fuzoku_val = $("#value_yahoo_fuzokuhin_1").val();
if(fuzoku_val == ""){
$("#value_yahoo_fuzokuhin_1").val("なし(付属品については記載があるもの、お写真に撮っているもののみ付属します。併せてご確認をお願い致します。)");
}


//アイテム名反映
$("#value_goods_title_1").focusin(function(){
    var goods_title_val = $(this).val();
    if(goods_title_val == ""){
    $(this).val($("#value_raku_title_1").val());
    }
})

//コンディション詳細反映
if($("#value_yahoo_condition1_1").val() == ""){
    var cond_tmp = $("#value_condition_details_1").val();
    $("#value_yahoo_condition1_1").val(cond_tmp);
}


//++++++++++++++++++++++++++++++++++++++++++++
//楽ジャンないとき査定人に戻させるアラート
//++++++++++++++++++++++++++++++++++++++++++++
var val_raku_tenponai_1 = $("#value_raku_hyoujisaki_category_1").val();
if(val_raku_tenponai_1 == ""){
    alert("楽ジャンが入ってません。査定人に戻してください。");
}


//++++++++++++++++++++++++++++++++++++++++++++
//ストア内キーワードの後に保存ボタンへタブ移動
//++++++++++++++++++++++++++++++++++++++++++++
$("#value_search_keyword_1").focusout(function(){
    $("#saveButton1").focus();
})
$(".rnr-b-editbuttons a").focus(function(){
    $(this).parent().parent().addClass("last_flag");
})
$(".rnr-b-editbuttons a").focusout(function(){
    $(this).parent().parent().removeClass("last_flag");
})





});//end window.load
</script>
