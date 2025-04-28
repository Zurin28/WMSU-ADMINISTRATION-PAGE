<?php
require_once('../../tools/functions.php');
require_once('../../classes/Directors.class.php');

$id = $_GET['id'];
$name = $title ='';

$directorsObj = new Directors();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);
    $honorifics = clean_input($_POST['honorifics']);

    // Set the properties of the Pres object
    $directorsObj->id = $id;
    $directorsObj->name = $name;
    $directorsObj->title = $title;
    $directorsObj->honorifics_id = $honorifics;

    if ($directorsObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
