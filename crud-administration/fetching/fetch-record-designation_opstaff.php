<?php
    require_once('../../classes/designation_opstaff.class.php');

    $designation_opstaffObj = new DesignationOpstaff();
    $designation_opstaff = $designation_opstaffObj->fetchRecord($id);

    header('Content-Type: application/json');
    echo json_encode($designation_opstaff);
?>
