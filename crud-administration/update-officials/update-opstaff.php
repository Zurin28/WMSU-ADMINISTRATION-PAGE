<?php
require_once('../../tools/functions.php');
require_once('../../classes/opstaff.class.php');

$id = $_GET['id'];
$name = $title = $page_link = '';

$opstaffobj = new OpStaff();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);
    $page_link = clean_input($_POST['page_link']);
    $honorifics = clean_input($_POST['honorifics']);

    // Set the properties of the Pres object
    $opstaffobj->id = $id;
    $opstaffobj->name = $name;
    $opstaffobj->title = $title;
    $opstaffobj->page_link = $page_link;
    $opstaffobj->honorifics = $honorifics;

    if ($opstaffobj->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
