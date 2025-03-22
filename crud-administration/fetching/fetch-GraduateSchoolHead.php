<?php
require_once '../../classes/GraduateSchoolHead.class.php';

$graduateSchoolHeadObj = new GraduateSchoolHead();

$id = $_GET['id'];
$graduateSchoolHeads = $graduateSchoolHeadObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($graduateSchoolHeads);
