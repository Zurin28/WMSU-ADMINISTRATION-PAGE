<?php
require_once('../../tools/functions.php');
require_once('../../classes/presSubOffices.class.php');

$id = $_GET['id'];
$office = $office_head ='';

$PresSubOfficesObj = new PresSubOffices();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $office = clean_input($_POST['office']);
    $office_head = clean_input($_POST['office_head']);
    $honorifics = clean_input($_POST['honorifics']);

    // Set the properties of the Pres object
    $PresSubOfficesObj->id = $id;
    $PresSubOfficesObj->office = $office;
    $PresSubOfficesObj->office_head = $office_head;
    $PresSubOfficesObj->honorifics = $honorifics;

    if ($PresSubOfficesObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
