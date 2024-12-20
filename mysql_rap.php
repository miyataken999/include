<?
// グローバルスコープで$linkを宣言
$link = null;

// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(0);
// グローバル変数 $link を宣言
global $link;

// データベース接続のラッパー関数
function mysql_connect($host, $username, $password, $new_link = false, $client_flags = 0) {
    global $link;  // グローバル変数を使用
    // mysqli_connect()で接続
    $link = mysqli_connect($host, $username, $password);
    if (!$link) {
        die('接続に失敗しました: ' . mysqli_connect_error());
    }
    return $link;
}

// データベース選択のラッパー関数
function mysql_select_db($dbname) {
    global $link;  // グローバル変数を使用
    // mysqli_select_db()でデータベース選択
    if (!mysqli_select_db($link, $dbname)) {
        die('データベース選択に失敗しました: ' . mysqli_error($link));
    }
    return true;
}

// クエリ実行のラッパー関数
function mysql_query($query) {
    global $link;  // グローバル変数を使用
    // 接続が確立されているか確認
    if (!$link) {
        die('データベース接続が確立されていません。');
    }
    
    // クエリ実行
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('クエリ実行に失敗しました: ' . mysqli_error($link));
    }
    return $result;
}

// 結果を連想配列で取得するラッパー関数
function mysql_fetch_assoc($result) {
   //print($result); 
	return mysqli_fetch_assoc($result);
}

// 結果を配列で取得するラッパー関数
function mysql_fetch_array($result, $resulttype = MYSQLI_BOTH) {
    return mysqli_fetch_array($result, $resulttype);
}

// 接続終了のラッパー関数
function mysql_close() {
    global $link;  // グローバル変数を使用
    return mysqli_close($link);
}

// mysql_error() 関数のラッパー
function mysql_error() {
    global $link;  // グローバル変数を使用

    // 接続ハンドルが有効かどうか確認
    if ($link) {
        return mysqli_error($link);  // エラーメッセージを取得
    } else {
        return "No MySQL connection available.";  // 接続がない場合のエラーメッセージ
    }
}


?>



