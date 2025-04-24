<?php

require_once('../../classes/bor.class.php');

$id = $_GET['id'];
$boardobj = new Board();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $title_bor = $_POST['title_bor'];
    $rank = $_POST['rank'];
    $honorifics = $_POST['honorifics'];

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
    if ($boardobj->edit($id, $name, $title_bor, $file_name, $rank, $honorifics)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
?>
