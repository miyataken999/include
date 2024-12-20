<style>
    .bs-sidebar-main .table-bordered {
        width: max-content !important;
    }
    .saishuuka_alert {
        font-size: 30px;
    }
    .sagawa_yubin_master{
        width: max-content;
        padding: 5px;
        text-align: left;
    }
    .sagawa_yubin_master_ttl{
        background-color: #fff;
        padding: 2px;
        line-height: 1;
        color: #111;
    }
</style>

<script type="text/javascript">
$(window).load(function() {
    $add_html = '';

    $add_html += '<div class="alert alert-warning saishuuka_alert" >';
    $add_html += '<h3>１７時以降は依頼集荷のAPIは翌日対応できません。その場合は直接営業所へ連絡してください。</h3>';
    $add_html += '城北店 0120-333-603<br>※１７時ギリギリでも危ないので、１６時半過ぎたら直接連絡してください。';
    $add_html += '<br>土日・祝などに緊急の場合：SGシステム関東支店：03-3768-8711';
    $add_html += '</div>';

    $add_html += '<a class="btn btn-primary" href="https://rifa.life/shop5/sagawa_api_results_list.php?q=(send_at~between~<?php echo date("Y-m-d 17:00:00"); ?>~date11~<?php echo date("Y-m-d 23:59:59"); ?>)">本日の17時以降の送信に絞り込む</a>';

  $(".bs-sidebar-main > .bs-sidebar-screenbound + div ").append($add_html);
})
</script>
