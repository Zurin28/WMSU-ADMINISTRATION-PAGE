<?php
require_once('../../tools/functions.php');
require_once('../../classes/AssistantDirectors.class.php');

$id = $_GET['id'];
$name = $title ='';

$assistantDirectorObj = new AssistantDirectors();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);
    $honorifics = clean_input($_POST['honorifics']);

    // Set the properties of the Pres object
    $assistantDirectorObj->id = $id;
    $assistantDirectorObj->name = $name;
    $assistantDirectorObj->title = $title;
    $assistantDirectorObj->honorifics = $honorifics;

    if ($assistantDirectorObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
