<?php
require_once '../../classes/SectionChiefs.class.php';

$sectionChiefObj = new SectionChiefs();

$id = $_GET['id'];
$sectionChief = $sectionChiefObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($sectionChief);
