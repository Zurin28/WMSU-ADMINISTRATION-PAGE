<?php
require_once '../../classes/OtherServices.class.php';

$otherServiceObj = new OtherServices();

$id = $_GET['id'];
$otherServices = $otherServiceObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($otherServices);
