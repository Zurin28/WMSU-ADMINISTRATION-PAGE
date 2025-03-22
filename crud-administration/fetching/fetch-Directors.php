<?php
require_once '../../classes/Directors.class.php';

$directorsObj = new Directors();

$id = $_GET['id'];
$directors = $directorsObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($directors);
