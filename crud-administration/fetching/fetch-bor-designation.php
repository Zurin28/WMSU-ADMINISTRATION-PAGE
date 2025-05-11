<?php
require_once '../../classes/designation_bor.class.php';

$id = $_GET['id'] ?? $_POST['id'] ?? null;
if ($id) {
    $designationBor = new DesignationBor();
    $designation_bor = $designationBor->fetchdesignation_bor($id);
    if ($designation_bor) {
        echo json_encode([
            'designation_bor' => $designation_bor['designation_bor']
        ]);
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode([]);
}
