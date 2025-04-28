
<?php

require_once('../../tools/functions.php');
require_once('../../classes/Pres.class.php');

$id = $_GET['id'];
$name = $title = $title_bor = $page_link = $rank = '';

$pres = new Pres();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);
    $title_bor = clean_input($_POST['title']);
    $page_link = clean_input($_POST['page_link']);
    $rank = clean_input($_POST['rank']);
    $honorifics = clean_input($_POST['honorifics']);

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
    if ($pres->edit($id, $name, $title, $title_bor, $page_link, $file_name, $rank, $honorifics)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
?>
