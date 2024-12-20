<table class="issei_soushin_Eoc_list">
    <tr>
        <th colspan="2">顧客check</th>
        <td colspan="2">
            <input type="checkbox" id="kokyaku_check" class="form-control">
        </td>
        <th colspan="2">Fromアドレス</th>
        <td colspan="2">
            <input type="text" class="form-control" id="from_addrInput" name="from_addrInput" value="<?=$from_addr?>" readonly>
        </td>

    </tr>
<?php

$issei_pdo = new pdo_connect;
$issei_soushin_Eoc = $issei_pdo->select_many("SELECT * from Eoc where {$flag_name}=1");

$Eoc_i = 1;
foreach($issei_soushin_Eoc as $Eoc){
?>
    <tr>
        <td><?=$Eoc_i;?></td>
        <th>顧客名</th>
        <td><?=$Eoc['name1']?></td>
        <th>顧客SEQ</th>
        <td><?=$Eoc['ecc_id']?></td>
        <th>Toアドレス</th>
        <td><?=$Eoc["mail1"]?></td>
        <th>Ccアドレス</th>
        <td><?=$Eoc["mail2"]?></td>
    </tr>
<?php
$Eoc_i++;
}
?>
</table>
<style>
    .issei_soushin_Eoc_list {
        margin: 0 auto 20px;
        border: 1.1px solid #ccc;
    }
    .issei_soushin_Eoc_list th, .issei_soushin_Eoc_list td{
        padding: 5px;
        border: 1px solid #fafafa;
    }
    .issei_soushin_Eoc_list th{
        font-weight: normal;
        background: #2196f3;
        text-align: center;
        color: #fff;
    }
    .issei_soushin_Eoc_list td{
        text-align: left;
    }
</style>