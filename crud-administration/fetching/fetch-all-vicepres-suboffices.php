<?php
require_once('../../classes/vicepresSubOffices.class.php');

$vicepresSubOfficesObj = new VicepresSubOffices();
$subOffices = $vicepresSubOfficesObj->fetchAll();

header('Content-Type: application/json');
echo json_encode($subOffices);
?>
