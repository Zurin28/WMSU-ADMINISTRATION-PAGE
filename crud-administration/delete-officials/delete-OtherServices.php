<?php
require_once '../../classes/OtherServices.class.php';

$otherServiceObj = new OtherServices();

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];

    // Perform the deletion
    $isDeleted = $otherServiceObj->deleteOfficial($id);

    if ($isDeleted) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'official ID is required']);
}