<?php

require_once('../../classes/bor.class.php');

$id = $_GET['id'];
$boardobj = new Board();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $title_id = $_POST['designation_bor'];
    $rank = $_POST['rank'];
    $honorifics = $_POST['honorifics'];

    $representedby_name = $_POST['representedby_name'];
    $representedby_honorifics = $_POST['representedby_honorifics'];

    $file_name = null;
    $representedby_file_name = null;

    // Upload main image
    if (!empty($_FILES['image']['name'])) {
        $file_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = '../../images/' . $file_name;

        if (!move_uploaded_file($tempname, $folder)) {
            echo json_encode(['status' => 'error', 'message' => 'Failed to upload the main image.']);
            exit;
        }
    }

    // Upload representedby image
    if (!empty($_FILES['representedby_image']['name'])) {
        $representedby_file_name = $_FILES['representedby_image']['name'];
        $tempname2 = $_FILES['representedby_image']['tmp_name'];
        $folder2 = '../../images/' . $representedby_file_name;

        if (!move_uploaded_file($tempname2, $folder2)) {
            echo json_encode(['status' => 'error', 'message' => 'Failed to upload the represented by image.']);
            exit;
        }
    }

    // Call the edit method (make sure this accepts and handles all values)
    if ($boardobj->edit(
        $id,
        $name,
        $title_id,
        $file_name,
        $rank,
        $honorifics,
        $representedby_name,
        $representedby_honorifics,
        $representedby_file_name
    )) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }

    exit;
}
