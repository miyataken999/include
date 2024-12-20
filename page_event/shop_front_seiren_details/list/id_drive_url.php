<?php 
if($data['google_drive_id'] != ""){
    $idArray = explode("\n", trim($data['google_drive_id']));
    $value = '';
    foreach($idArray as $google_id){
        $value .= '<a href="https://drive.google.com/file/d/' . $google_id . '" target="_blank">Googleドライブ</a><br>';
    }
    
}
