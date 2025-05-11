<?php
require_once '../../classes/designation_vp.class.php';

$id = $_GET['id'] ?? $_POST['id'] ?? null;
if ($id) {
    $designationVp = new DesignationVp();
    $designation = $designationVp->fetchRecord($id);
    if ($designation) {
        echo json_encode([
            'designation' => $designation['designation']
        ]);
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode([]);
}
