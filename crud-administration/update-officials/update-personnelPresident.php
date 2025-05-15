<?php

require_once ('../../classes/personnel.class.php');
require_once('../../tools/functions.php');

$id = $_GET['id'];
$personnelName = $presSuboffice_id = $personnel_honorifics_id = '';
$personnelObj = new Personnel();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $PersonnelName = clean_input($_POST['PersonnelName']);
    $presSuboffice_id = clean_input($_POST['presidentSubOffice']);
    $personnel_honorifics_id = clean_input($_POST['honorifics']);

    // Set the properties of the Pres object
    $personnelObj->id = $id;
    $personnelObj->PersonnelName = $PersonnelName;
    $personnelObj->presSuboffice_id = $presSuboffice_id;
    $personnelObj->personnel_honorifics_id = $personnel_honorifics_id;

    if ($personnelObj->editPersonnelPres($id, $PersonnelName, $presSuboffice_id, $personnel_honorifics_id)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
