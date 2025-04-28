<?php
require_once('../../tools/functions.php');
require_once('../../classes/GraduateSchoolHead.class.php');

$id = $_GET['id'];
$name = $title ='';

$graduateSchoolHeadObj = new GraduateSchoolHead();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);
    $honorifics = clean_input($_POST['honorifics']);

    // Set the properties of the Pres object
    $graduateSchoolHeadObj->id = $id;
    $graduateSchoolHeadObj->name = $name;
    $graduateSchoolHeadObj->title = $title;
    $graduateSchoolHeadObj->honorifics = $honorifics;

    if ($graduateSchoolHeadObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
