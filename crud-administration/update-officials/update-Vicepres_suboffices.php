<?php
require_once('../../tools/functions.php');
require_once('../../classes/vicepresSubOffices.class.php');

$id = $_GET['id'];
$office = $office_head = $office_of_vp_in ='';

$vicepresSubOfficesObj = new VicepresSubOffices();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $office = clean_input($_POST['office']);
    $office_head = clean_input($_POST['office_head']);
    $office_of_vp_in = clean_input($_POST['office_of_vp_in']);
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

    // Set the properties of the VicePres object
    $vicepresSubOfficesObj->id = $id;
    $vicepresSubOfficesObj->office = $office;
    $vicepresSubOfficesObj->office_head = $office_head;
    $vicepresSubOfficesObj->office_of_vp_in = $office_of_vp_in;
    $vicepresSubOfficesObj->honorifics = $honorifics;
    $vicepresSubOfficesObj->file_name = $file_name; // Set the image property
    $vicepresSubOfficesObj->description = $description;


    if ($vicepresSubOfficesObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
