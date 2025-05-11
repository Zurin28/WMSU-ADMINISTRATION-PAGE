<?php
require_once '../../classes/honorifics.class.php';

$honorificsObj = new Honorifics();

$id = $_GET['id'];
$honorifics = $honorificsObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($honorifics);
