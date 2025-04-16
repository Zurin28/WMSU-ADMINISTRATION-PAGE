<?php
require_once('../../tools/functions.php');
require_once('../../classes/ExternalStudiesUnit.class.php');

$id = $_GET['id'];
$name = $title ='';

$externalStudiesUnitObj = new ExternalStudiesUnit();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);
    $honorifics = clean_input($_POST['honorifics']);

    // Set the properties of the Pres object
    $externalStudiesUnitObj->id = $id;
    $externalStudiesUnitObj->name = $name;
    $externalStudiesUnitObj->title = $title;
    $externalStudiesUnitObj->honorifics = $honorifics;

    if ($externalStudiesUnitObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
