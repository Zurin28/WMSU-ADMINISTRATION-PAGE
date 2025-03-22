<?php
require_once('../../tools/functions.php');
require_once('../../classes/AssociateDean.class.php');

$id = $_GET['id'];
$name = $title ='';

$associateDeanObj = new AssociateDean();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);

    // Set the properties of the Pres object
    $associateDeanObj->id = $id;
    $associateDeanObj->name = $name;
    $associateDeanObj->title = $title;

    if ($associateDeanObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
