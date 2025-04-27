<?php
require_once '../../classes/organizationalChart.class.php';

$organizationalChartObj = new OrganizationalChart();

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];

    // Perform the deletion
    $isDeleted = $organizationalChartObj->delete_organizationalChart($id);

    if ($isDeleted) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Organizational chart ID is required']);
}