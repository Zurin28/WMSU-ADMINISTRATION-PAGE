<?php
require_once '../../classes/UniversityBoardSecretary.class.php';

$uniBoardSecretaryObj = new UniversityBoardSecretary();

$id = $_GET['id'];
$uniBoardSecretarys = $uniBoardSecretaryObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($uniBoardSecretarys);
