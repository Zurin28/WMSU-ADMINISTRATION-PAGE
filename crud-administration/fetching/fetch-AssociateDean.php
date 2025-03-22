<?php
require_once '../../classes/AssociateDean.class.php';

$associateDeanObj = new AssociateDean();

$id = $_GET['id'];
$associateDeans = $associateDeanObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($associateDeans);
