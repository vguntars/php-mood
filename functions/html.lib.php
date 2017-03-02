<?php
// functions/html.lib.php

function render_nav(array $menu_lang, array $menu_cfg): string {
// in navi.view.php
  $res = '';
  foreach ($menu_cfg as $k=>$v) {
    $res .= '<li class="left"><a class="navi';
    if ($k === 'home') $res .= ' hover-navi' ;
    $res .= '" href="' . $v . '">';
    $res .= $menu_lang[$k] . '</a></li>';
  }
  return $res;
}

function render_langs(array $langs_cfg, string $lang): string {
// in navi.view.php
  $res = '';
  foreach ($langs_cfg as $k=>$v){
     $res .= '<option value="' . $k . '"';
     if ($k === $lang) $res .= ' selected ';
     $res .= '>' . $v . '</option>';
  }
  return $res;
}

function render_admin_msgDataTable(array $data): string {
// in admin/admin.view.php
  $res = '<table class="table-msgdata">';
  $res .= create_table_header($data[0]);
  foreach ($data as $v) $res .= create_table_row($v);
  $res .= '</table>';
  return $res;
}

function create_table_header($initDataRow): string {
  $res .= '<tr>';
  if (isset($initDataRow)) {
    foreach ($initDataRow as $k=>$v) $res .= '<th>' .$k. '</th>';
  }else{
    $res .= '<th>Pieprasītie dati nav atrasti...</th>';
  }
  $res .= '</tr>';
  return $res;
}

function create_table_row($DataRow): string {
  $res .= '<tr>';
  foreach ($DataRow as $v) $res .= '<td>' .$v. '</td>';
  $res .= '</tr>';
  return $res;
}

?>
