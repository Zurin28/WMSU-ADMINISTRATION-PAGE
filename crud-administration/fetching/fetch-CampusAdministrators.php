<?php
require_once '../../classes/CampusAdministrators.class.php';

$campusAdminObj = new CampusAdministrators();

$id = $_GET['id'];
$campusAdmins = $campusAdminObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($campusAdmins);
