<?php
    require_once('../../classes/designation_bor.class.php');

    $designation_borObj = new DesignationBor();

    $designation = $designation_borObj->fetchRecord($id);

    header('Content-Type: application/json');
    echo json_encode($designation);
?>
