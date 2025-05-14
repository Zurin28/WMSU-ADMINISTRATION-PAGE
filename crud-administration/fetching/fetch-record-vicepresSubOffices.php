<?php
    require_once('../../classes/personnel.class.php');

    $vicepresidentSubOfficeObj = new Personnel();

    $vicepresidentSubOffice = $vicepresidentSubOfficeObj->fetchVicePresidentSuboffices();

    header('Content-Type: application/json');
    echo json_encode($vicepresidentSubOffice);
?>
