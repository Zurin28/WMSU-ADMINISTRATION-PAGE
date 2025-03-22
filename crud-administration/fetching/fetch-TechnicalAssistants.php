<?php
require_once '../../classes/TechnicalAssistants.class.php';

$techAssistObj = new TechnicalAssistants();

$id = $_GET['id'];
$techAssists = $techAssistObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($techAssists);
