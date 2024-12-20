<?php

$html = "<a class='btn btn-primary' href='https://rifa.life/evaProject/sagawa/shuukairaiform/{$value}'>再集荷</a>";

$yuubin = $data["iraiYubin"];
$html .= "<a class='btn btn-default' href='https://www.post.japanpost.jp/cgi-zip/zipcode.php?zip={$yuubin}'>郵便番号チェック</a>";

$url = "https://rifa.life/refastaProject/get_sagawa_address?yubin={$yuubin}";
$res = file_get_contents($url);

$address_html = "<div class='alert alert-info sagawa_yubin_master'><div class='sagawa_yubin_master_ttl'>佐川郵便番号マスタ</div>{$res}</div>";

$html .= $address_html;

$value = $html;