<?php
require_once '../../classes/AssistantDirectors.class.php';

$assistantDirectorObj = new AssistantDirectors();

$id = $_GET['id'];
$assistantDirectors = $assistantDirectorObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($assistantDirectors);
