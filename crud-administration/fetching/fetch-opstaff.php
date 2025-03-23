<?php
require_once '../../classes/opstaff.class.php';

$opstaffobj = new OpStaff();

$id = $_GET['id'];
$opstaffs = $opstaffobj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($opstaffs);
