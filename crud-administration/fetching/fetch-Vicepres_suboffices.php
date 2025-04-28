<?php
require_once('../../classes/vicepresSubOffices.class.php');

$vicepresSubOfficesObj = new VicepresSubOffices();

$id = $_GET['id'];
$vicepresSubOffices = $vicepresSubOfficesObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($vicepresSubOffices);
