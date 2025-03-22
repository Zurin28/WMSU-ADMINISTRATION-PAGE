<?php
require_once('../../tools/functions.php');
require_once('../../classes/Chairpersons.class.php');

$id = $_GET['id'];
$name = $title ='';

$chairpersonObj = new Chairpersons();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);

    // Set the properties of the Pres object
    $chairpersonObj->id = $id;
    $chairpersonObj->name = $name;
    $chairpersonObj->title = $title;

    if ($chairpersonObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
