<?php
require_once '../../classes/AcademicDean.class.php';

$academicDeanObj = new AcademicDean();

$id = $_GET['id'];
$academicDeans = $academicDeanObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($academicDeans);
