<?php
require_once '../../classes/designation_opstaff.class.php';

$id = $_GET['id'] ?? $_POST['id'] ?? null;
if ($id) {
    $designationOpstaff = new DesignationOpstaff();
    $designation = $designationOpstaff->fetchRecord($id);
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
