<?php
require_once '../../classes/Pres.class.php';

$pres = new Pres();

$id = $_GET['id'];
$Presofficial = $pres->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($Presofficial);
