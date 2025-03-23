<?php
require_once('../../tools/functions.php');
require_once('../../classes/Coordinators.class.php');

$id = $_GET['id'];
$name = $title ='';

$coordinatorObj = new Coordinators();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);

    // Set the properties of the Pres object
    $coordinatorObj->id = $id;
    $coordinatorObj->name = $name;
    $coordinatorObj->title = $title;

    if ($coordinatorObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
