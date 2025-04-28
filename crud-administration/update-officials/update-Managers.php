<?php
require_once('../../tools/functions.php');
require_once('../../classes/Managers.class.php');

$id = $_GET['id'];
$name = $title ='';

$managerObj = new Managers();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);
    $honorifics = clean_input($_POST['honorifics']);

    // Set the properties of the Pres object
    $managerObj->id = $id;
    $managerObj->name = $name;
    $managerObj->title = $title;
    $managerObj->honorifics = $honorifics;

    if ($managerObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
