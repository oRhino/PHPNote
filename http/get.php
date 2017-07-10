<?php

$data = array(

'tid' => 100,
'name' => 'Rhino的技术博客',
'site' => 'www.soulmater.cn'
);

$response = array(
 'code' => 200,
 'message' => 'success for request',
 'data' => $data,
);
echo json_encode($response);