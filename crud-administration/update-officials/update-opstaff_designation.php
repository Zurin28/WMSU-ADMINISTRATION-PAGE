<?php

require_once('../../tools/functions.php');
require_once('../../classes/designation_opstaff.class.php');
$id = $_GET['id'];
$designation = '';
$designation_opstaffObj = new DesignationOpstaff();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $designation = clean_input($_POST['designation']);

    // Set the properties of the DesignationBor object
    $designation_opstaffObj->id = $id;  
    $designation_opstaffObj->designation = $designation;

    if ($designation_opstaffObj->edit($id, $designation)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}