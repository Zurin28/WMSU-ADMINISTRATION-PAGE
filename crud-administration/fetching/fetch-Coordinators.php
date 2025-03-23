<?php
require_once '../../classes/Coordinators.class.php';

$coordinatorObj = new Coordinators();

$id = $_GET['id'];
$coordinators = $coordinatorObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($coordinators);
