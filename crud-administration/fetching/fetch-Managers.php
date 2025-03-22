<?php
require_once '../../classes/Managers.class.php';

$managerObj = new Managers();

$id = $_GET['id'];
$managers = $managerObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($managers);
