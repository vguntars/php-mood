<?php
// functions/dataGet.lib.php
function dataGet(string $fileName, bool $descON)
{
    $rowsInput = [];
    $rows = [];
    $rowsInput = @file($fileName);
    if (!isset($rowsInput[0])) return $rows;
    $rCount = count($rowsInput) -1;
    if ($descON) {//DESC
for ($i = $rCount; $i >= 0; $i--) {
    $rows[] = array_merge(array('recNum'=>($i + 1)), json_decode($rowsInput[$i], true));
}
    } else {//ASC
for ($i = 0; $i <= $rCount; $i++) {
    $rows[] = array_merge(array('recNum'=>($i + 1)), json_decode($rowsInput[$i], true));
}
    }
    return $rows;
}
?>
