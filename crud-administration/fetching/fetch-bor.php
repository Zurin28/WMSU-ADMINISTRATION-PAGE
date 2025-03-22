<?php
require_once '../../classes/bor.class.php';

$boardobj = new Board();

$id = $_GET['id'];
$member = $boardobj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($member);
