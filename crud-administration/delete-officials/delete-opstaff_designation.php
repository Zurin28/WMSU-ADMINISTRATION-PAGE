<?php
require_once '../../classes/designation_opstaff.class.php';

$designationOpstaff = new DesignationOpstaff();

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];

    // Perform the deletion
    $isDeleted = $designationOpstaff->delete_designationOpstaff($id);

    if ($isDeleted) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Designation ID is required']);
} 