<?php
// functions/dataSave.lib.php
function dataSave(array $data, string $lang, bool $ignoreErr , bool $messageOK){
  $msg_lang = include '../lang/' .$lang. '/messages.lang.php';
  if (!$ignoreErr && count($data['err']) > 0){
    $contact_lang = include '../lang/' .$lang. '/contact.lang.php';
    errMessage($data['err'], $contact_lang, $msg_lang);
    return;
  }
  $row =[
    'name' => $data['data']['VardsUzvards'],
    'email' => $data['data']['Epasts'],
    'message' => $data['data']['TavsJautajums'],
  ];
  $row = json_encode($row) . "\n";
  file_put_contents('../database/contact/contact_message.txt', $row, FILE_APPEND);
  if ($messageOK) msg($msg_lang['inputOK']);
}

function errMessage (array $err, array $contact_lang, array $msg_lang){
  $msgText = $msg_lang['inputERR'] . '\n\n';
  foreach ($err as $k => $v) {
    $field = $k;
    if(isset($contact_lang[$k])) $field = $contact_lang[$k];
    $err = '...Unknown error...';
    if (isset($msg_lang[$v])) $err = $msg_lang[$v];
    $msgText .= $field . ' : '. $err . '\n';
  }
  msg($msgText);
}
?>
