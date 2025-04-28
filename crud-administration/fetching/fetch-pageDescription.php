<?php
require_once '../../classes/pageDescription.class.php';

$pageDescriptionObj = new PageDescription();

$id = $_GET['id'];
$pageDescription = $pageDescriptionObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($pageDescription);
