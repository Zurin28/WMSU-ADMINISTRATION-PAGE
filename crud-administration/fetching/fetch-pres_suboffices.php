<?php
require_once('../../classes/presSubOffices.class.php');

$PresSubOfficesObj = new PresSubOffices();

$id = $_GET['id'];
$PresSubOffices = $PresSubOfficesObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($PresSubOffices);
