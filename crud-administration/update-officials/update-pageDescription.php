<?php
require_once('../../tools/functions.php');
require_once('../../classes/pageDescription.class.php');

$id = $_GET['id'];
$description ='';

$pageDescriptionObj = new PageDescription();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $description = clean_input($_POST['description']);

    // Set the properties of the Pres object
    $pageDescriptionObj->id = $id;
    $pageDescriptionObj->description = $description;

    if ($pageDescriptionObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
