<?php
require_once '../../classes/organizationalChart.class.php';

$organizationalChartObj = new OrganizationalChart();

$id = $_GET['id'];
$organizationalChart = $organizationalChartObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($organizationalChart);
