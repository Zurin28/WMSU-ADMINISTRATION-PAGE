<?php
require_once '../../classes/AssistantDirectors.class.php';

$assistantDirectorObj = new AssistantDirectors();

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];

    // Perform the deletion
    $isDeleted = $assistantDirectorObj->deleteOfficial($id);

    if ($isDeleted) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'official ID is required']);
}