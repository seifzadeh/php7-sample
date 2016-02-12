<?php

// $data = isset($_GET['data'])?$_GET['data']:'nobody';
// $data = $_GET['data'] ?? 'nobody';

$data= $_GET['data'] ?? $_POST['data'] ?? 'nobody';

echo $data;
?>