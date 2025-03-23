<?php
require_once('../../tools/functions.php');
require_once('../../classes/CampusAdministrators.class.php');

$id = $_GET['id'];
$name = $title ='';

$campusAdminObj = new CampusAdministrators();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);

    // Set the properties of the Pres object
    $campusAdminObj->id = $id;
    $campusAdminObj->name = $name;
    $campusAdminObj->title = $title;

    if ($campusAdminObj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
