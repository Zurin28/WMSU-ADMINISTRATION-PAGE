<?php

require_once('../../tools/functions.php');
require_once('../../classes/designation_vp.class.php');

$id = $_GET['id'];
$designation = '';
$designation_vpObj = new DesignationVp();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $designation = clean_input($_POST['designation']);

    // Set the properties of the DesignationBor object
    $designation_vpObj->id = $id;  
    $designation_vpObj->designation = $designation;

    if ($designation_vpObj->edit($id, $designation)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}