<?php
require_once '../../classes/bor.class.php';

$id = $_GET['id'] ?? $_POST['id'] ?? null;

    $bor = new Board();
    $member = $bor->fetchRecord($id);

    header('Content-Type: application/json');
    echo json_encode($member);