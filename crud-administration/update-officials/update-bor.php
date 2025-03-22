<?php

require_once('../../classes/bor.class.php');

$id = $_GET['id'];
$boardobj = new Board();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $file_name = '';

    if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = '../../images/' . $file_name;
        move_uploaded_file($tempname, $folder);
    }

    $boardobj->edit($id, $name, $title, $file_name);
    echo json_encode(['status' => 'success']);
    exit;
}
?>
