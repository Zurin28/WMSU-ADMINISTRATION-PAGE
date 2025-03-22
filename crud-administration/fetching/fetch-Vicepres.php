<?php
require_once '../../classes/Vicepres.class.php';

$vicePres = new VicePres();

$id = $_GET['id'];
$VicePresofficial = $vicePres->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($VicePresofficial);
