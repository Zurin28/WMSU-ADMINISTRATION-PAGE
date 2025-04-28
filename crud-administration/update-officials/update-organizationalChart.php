<?php

require_once('../../classes/organizationalChart.class.php');

$id = $_GET['id'];
$organizationalChartObj = new OrganizationalChart();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $description = $_POST['description'];

    $file_name = null; // Default to null if no image is provided

    // Check if an image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $file_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = '../../images/' . $file_name;

        // Move uploaded file to the 'images' folder
        if (!move_uploaded_file($tempname, $folder)) {
            echo json_encode(['status' => 'error', 'message' => 'Failed to upload the image.']);
            exit;
        }
    }

    // Perform the update (with or without image)
    if ($organizationalChartObj->edit($id, $file_name, $description)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
?>
