<?php
include $_SERVER["DOCUMENT_ROOT"].'/include/evacommon/header_inc.php';
?>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
window.SpeechRecognition = window.SpeechRecognition || webkitSpeechRecognition;
var recognition = new webkitSpeechRecognition();
recognition.lang = 'ja';

// 録音終了時トリガー
recognition.addEventListener('result', function(event){
    var text = event.results.item(0).item(0).transcript;
    $("#ctlSearchFor1").val(text);
}, false);

// 録音開始
function record()
{
    recognition.start();
}
</script>
