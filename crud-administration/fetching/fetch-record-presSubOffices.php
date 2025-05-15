<?php
    require_once('../../classes/personnel.class.php');

    $presidentSubOfficeObj = new Personnel();

    $presidentSubOffice = $presidentSubOfficeObj->fetchPresidentSuboffices();

    header('Content-Type: application/json');
    echo json_encode($presidentSubOffice);
?>
