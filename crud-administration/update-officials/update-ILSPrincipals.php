<?php
require_once('../../tools/functions.php');
require_once('../../classes/ILSPrincipals.class.php');

$id = $_GET['id'];
$name = $title ='';

$ILSPrincipalsObj = new ILSPrincipals();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);

    // Set the properties of the Pres object
    $ILSPrincipalsObj->id = $id;
    $ILSPrincipalsObj->name = $name;
    $ILSPrincipalsObj->title = $title;

    if ($ILSPrincipalsObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
