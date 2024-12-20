<?
// phpinfo();
ini_set("display_errors",1);
exit();

date_default_timezone_set('Asia/Tokyo');

include_once "/public_html/common/lib/google-api-php-client-master/src/Google/autoload.php";

define('CREDENTIALS_PATH', 'client_secret.json');
define('SPREADSHEET_ID',   '1QmVkSlCVip6IDu5QWBUzRJvtqqUto_a8f418As6LqLU');

putenv('GOOGLE_APPLICATION_CREDENTIALS='.CREDENTIALS_PATH);
$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->addScope(Google_Service_Sheets::SPREADSHEETS);
$client->setApplicationName('test');

$service = new Google_Service_Sheets($client);

// B2:B3 を更新
// $value = new Google_Service_Sheets_ValueRange();
// $value->setValues([ 'values' => [ 'aaaa', 'bbbb' ] ]);
// $response = $service->spreadsheets_values->update(SPREADSHEET_ID, 'シート1!B2', $value, [ 'valueInputOption' => 'USER_ENTERED' ] );

// A1:D5 の範囲を取得
// $response = $service->spreadsheets_values->get(SPREADSHEET_ID, 'シート1!A1:D5');
$response = $service->spreadsheets_values->get(SPREADSHEET_ID, 'シート1!A1');
foreach ($response->getValues() as $index => $cols) {
    echo sprintf('#%d >> "%s"', $index+1, implode('", "', $cols)).PHP_EOL;
}
