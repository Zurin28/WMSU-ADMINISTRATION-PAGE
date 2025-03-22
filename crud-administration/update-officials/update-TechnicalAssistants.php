<?php
require_once('../../tools/functions.php');
require_once('../../classes/TechnicalAssistants.class.php');

$id = $_GET['id'];
$name = $title ='';

$techAssistObj = new TechnicalAssistants();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);

    // Set the properties of the Pres object
    $techAssistObj->id = $id;
    $techAssistObj->name = $name;
    $techAssistObj->title = $title;

    if ($techAssistObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
