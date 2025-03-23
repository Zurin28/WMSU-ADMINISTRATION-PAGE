<?php
require_once '../../classes/ExternalStudiesUnit.class.php';

$externalStudiesUnitObj = new ExternalStudiesUnit();

$id = $_GET['id'];
$externalStudiesUnits = $externalStudiesUnitObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($externalStudiesUnits);
