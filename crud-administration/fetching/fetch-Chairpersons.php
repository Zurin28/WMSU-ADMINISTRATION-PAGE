<?php
require_once '../../classes/Chairpersons.class.php';

$chairpersonObj = new Chairpersons();

$id = $_GET['id'];
$chairpersons = $chairpersonObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($chairpersons);
