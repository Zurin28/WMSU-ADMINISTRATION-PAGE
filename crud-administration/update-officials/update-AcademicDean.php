<?php
require_once('../../tools/functions.php');
require_once('../../classes/AcademicDean.class.php');

$id = $_GET['id'];
$name = $title ='';

$academicDeanObj = new AcademicDean();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);

    // Set the properties of the Pres object
    $academicDeanObj->id = $id;
    $academicDeanObj->name = $name;
    $academicDeanObj->title = $title;

    if ($academicDeanObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
