
<?php
    require_once('../../classes/designation_bor.class.php');

    $designation_borObj = new DesignationBor();

    $designation_bor = $designation_borObj->fetchdesignation_bor();

    header('Content-Type: application/json');
    echo json_encode($designation_bor);
?>
