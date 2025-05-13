<?php

require_once('../../tools/functions.php');
require_once('../../classes/designation_bor.class.php');

$id = $_GET['id'];
$designation = '';
$designation_borObj = new DesignationBor();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $designation = clean_input($_POST['designation']);

    // Set the properties of the DesignationBor object
    $designation_borObj->id = $id;  
    $designation_borObj->designation = $designation;

    if ($designation_borObj->edit($id, $designation)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}