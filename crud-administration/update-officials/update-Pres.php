<?php
require_once('../../tools/functions.php');
require_once('../../classes/Pres.class.php');

$id = $_GET['id'];
$name = $title = $page_link = '';

$pres = new Pres();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clean_input($_POST['name']);
    $title = clean_input($_POST['title']);
    $page_link = clean_input($_POST['page_link']);

    // Set the properties of the Pres object
    $pres->id = $id;
    $pres->name = $name;
    $pres->title = $title;
    $pres->page_link = $page_link;

    if ($pres->edit()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong when updating the record.']);
    }
    exit;
}
