<?php
require_once '../../classes/ILSPrincipals.class.php';

$ILSPrincipalsObj = new ILSPrincipals();

$id = $_GET['id'];
$ILSPrincipals = $ILSPrincipalsObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($ILSPrincipals);
