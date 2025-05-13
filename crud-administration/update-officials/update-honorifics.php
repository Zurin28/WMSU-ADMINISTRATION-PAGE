<?php
require_once('../../tools/functions.php');
require_once('../../classes/honorifics.class.php');

$id = $_GET['id'];
$name = $short ='';

$honorificsObj = new Honorifics();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $short = clean_input($_POST['short']);

    // Set the properties of the Honorifics object
    $honorificsObj->id = $id;  
    $honorificsObj->name = $name;
    $honorificsObj->short = $short;

    if ($honorificsObj->edit($id, $name, $short)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
