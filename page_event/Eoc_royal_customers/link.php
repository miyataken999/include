<?php
$mail_query = "SELECT 
b.send_at,
b.subject
FROM analysisMail_send_logs as a
LEFT JOIN analysisMail_send_emails as b on a.send_mail_id = b.send_mail_id
WHERE 
send_TO = '{$data['mail1']}'
or
send_TO = '{$data['mail2']}'
group by b.send_mail_id
order by send_at desc
limit 20
";


$mail_rs = CustomQuery($mail_query);
$mail_html = "";
$mail_count = 0;
while ($mail_data = db_fetch_array($mail_rs)) {
    $mail_html .= "<tr>";
    $mail_html .= "    <td><div>{$mail_data['send_at']}</div></td>";
    $mail_html .= "    <td><div>{$mail_data['subject']}</div></td>";
    $mail_html .= "</tr>";
    $mail_count++;
} // end while
if($mail_html !== ""){
    $mail_html = "
            <table class='mailmaga_logs_table table'>
                <tr>
                    <th colspan='2'>メルマガ配信履歴</th>
                </tr>
                <tr>
                    <th>送信日時</th>
                    <th>件名</th>
                </tr>
                {$mail_html}
            </table>
    ";
}


$html = file_get_contents($_SERVER["DOCUMENT_ROOT"]. "/include/page_event/Eoc_royal_customers/link_script.php", true);

$html = str_replace('{$value}', $value, $html);
$html = str_replace('{$ecc_id}', $data["ecc_id"], $html);

$chart_id = date("His") . rand(0, 100000000000000000);
$html = str_replace("{{ chart_id }}", $chart_id, $html);
$html = str_replace("@rate_selling_count_EC", $data["rate_selling_count_EC"] * 100, $html);
$html = str_replace("@rate_selling_count_ichiba", $data["rate_selling_count_ichiba"] * 100, $html);

$chart_id_syubetsu = date("His") . rand(0, 100000000000000000);
$html = str_replace("{{ chart_id_syubetsu }}", $chart_id_syubetsu, $html);
$html = str_replace("@rate_type_count_K", $data["rate_type_count_K"] * 100, $html);
$html = str_replace("@rate_type_count_D", $data["rate_type_count_D"] * 100, $html);
$html = str_replace("@rate_type_count_J", $data["rate_type_count_J"] * 100, $html);
$html = str_replace("@rate_type_count_W", $data["rate_type_count_W"] * 100, $html);
$html = str_replace("@rate_type_count_B", $data["rate_type_count_B"] * 100, $html);
$html = str_replace("@rate_type_count_H", $data["rate_type_count_H"] * 100, $html);
$html = str_replace("@rate_type_count_other", $data["rate_type_count_other"] * 100, $html);

$html = str_replace("{{ mail_html }}", $mail_html, $html); 




$value = $html;
