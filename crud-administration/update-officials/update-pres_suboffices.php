<?php
require_once('../../tools/functions.php');
require_once('../../classes/presSubOffices.class.php');

$id = $_GET['id'];
$office = $office_head ='';

$PresSubOfficesObj = new PresSubOffices();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $office = clean_input($_POST['office']);
    $office_head = clean_input($_POST['office_head']);
    $honorifics = clean_input($_POST['honorifics']);
    $description = clean_input($_POST['description']);
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

    // Set the properties of the Pres object
    $PresSubOfficesObj->id = $id;
    $PresSubOfficesObj->office = $office;
    $PresSubOfficesObj->office_head = $office_head;
    $PresSubOfficesObj->honorifics = $honorifics;
    $PresSubOfficesObj->file_name = $file_name; // Set the image property
    $PresSubOfficesObj->description = $description;

    if ($PresSubOfficesObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
