<?php
require_once('../../tools/functions.php');
require_once('../../classes/OtherServices.class.php');

$id = $_GET['id'];
$name = $title ='';

$otherServiceObj = new OtherServices();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);

    // Set the properties of the Pres object
    $otherServiceObj->id = $id;
    $otherServiceObj->name = $name;
    $otherServiceObj->title = $title;

    if ($otherServiceObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
