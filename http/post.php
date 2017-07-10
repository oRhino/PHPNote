<?php
 
$type = $_POST['type'];
$data = '';
 
if (isset($type) && is_numeric($type) && $type >= 0) {
  if ($type == 1) {
    $data = array(
      'type' => $type, 
      'name' => 'Rhino的技术博客',
      'site' => 'www.soulmater.cn');
  } else if ($type == 2) {
    $data = array(
      'type' => $type, 
      'name' => '公众号：Rhino的技术博客',
      'site' => 'weixin search: lovejun1993');
  } 
 
  $response = array(
    'code'  => 200, 
    'message' => 'success for request',
    'data'  => $data,
    );
 
  echojson_encode($response);
  return;
} 
 
$response = array(
  'code'  => 999, 
  'message' => 'argument error for request',
  'data'  => $data,
  );
 
echojson_encode($response);