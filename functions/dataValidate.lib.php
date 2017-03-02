<?php
// functions/dataValidate.lib.php
function dataValidating(array $data){
$data_cfg = include '../config/data.config.php';
  $dataOk = [];
  $dataErr = [];
  foreach ($data as $k => $v) {
    if (isset($data_cfg[$k])) {
      $v = trim((string)$v);
      $dataOk[$k] = $v;
      foreach ($data_cfg[$k] as $validationName => $parameter) {
        $f = 'validate_' . $validationName;
        if (!call_user_func($f, $v, $parameter)){
          $dataErr[$k] = 'err_' . $validationName;
          break;
        }
      }
    }
  }
  $ret['data'] = $dataOk;
  $ret['err'] = $dataErr;
  return $ret;
}

function validate_required(string $value, $parameter){
  $parameter = (boolean)$parameter;
  if (!$parameter) return true;
  if (strlen($value) === 0) return false;
  return true;
}
function validate_minlength(string $value, $parameter){
  $parameter = (integer)$parameter;
  if ($parameter < 0) return true;
  if (strlen($value) < $parameter) return false;
  return true;
}
function validate_format(string $value, $parameter){
  $parameter = (string)$parameter;
  switch ($parameter) {
    case 'email':
      if (filter_var($value, FILTER_VALIDATE_EMAIL)) return true;
      break;
    }
  return false;
}
?>
