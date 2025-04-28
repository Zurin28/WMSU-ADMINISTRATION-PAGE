<?php
require_once('../../tools/functions.php');
require_once('../../classes/SectionChiefs.class.php');

$id = $_GET['id'];
$name = $title ='';

$sectionChiefObj = new SectionChiefs();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);
    $honorifics = clean_input($_POST['honorifics']);

    // Set the properties of the Pres object
    $sectionChiefObj->id = $id;
    $sectionChiefObj->name = $name;
    $sectionChiefObj->title = $title;
    $sectionChiefObj->honorifics = $honorifics;

    if ($sectionChiefObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
