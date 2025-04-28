<?php
require_once('../../tools/functions.php');
require_once('../../classes/UniversityBoardSecretary.class.php');

$id = $_GET['id'];
$name = $title ='';

$uniBoardSecretaryObj = new UniversityBoardSecretary();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);
    $honorifics = clean_input($_POST['honorifics']);

    // Set the properties of the Pres object
    $uniBoardSecretaryObj->id = $id;
    $uniBoardSecretaryObj->name = $name;
    $uniBoardSecretaryObj->title = $title;
    $uniBoardSecretaryObj->honorifics = $honorifics;

    if ($uniBoardSecretaryObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
