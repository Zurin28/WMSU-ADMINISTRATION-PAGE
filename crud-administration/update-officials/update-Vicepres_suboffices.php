<?php
require_once('../../tools/functions.php');
require_once('../../classes/vicepresSubOffices.class.php');

$id = $_GET['id'];
$office = $office_head = $office_of_vp_in ='';

$vicepresSubOfficesObj = new VicepresSubOffices();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $office = clean_input($_POST['office']);
    $office_head = clean_input($_POST['office_head']);
    $office_of_vp_in = clean_input($_POST['office_of_vp_in']);
    $honorifics = clean_input($_POST['honorifics']);

    // Set the properties of the VicePres object
    $vicepresSubOfficesObj->id = $id;
    $vicepresSubOfficesObj->office = $office;
    $vicepresSubOfficesObj->office_head = $office_head;
    $vicepresSubOfficesObj->office_of_vp_in = $office_of_vp_in;
    $vicepresSubOfficesObj->honorifics = $honorifics;

    if ($vicepresSubOfficesObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
