<?php
header('Content-Type: application/json');

// Allow cross-origin requests
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: GET, POST, OPTIONS'); 
header('Access-Control-Allow-Headers: Content-Type, Authorization'); 
require_once '../../config/config.php';
require_once '../../models/Flight.php';



// Initialize the Flight class
$flightModel = new Flight($mysqli);

// Get the request data
$data = json_decode(file_get_contents("php://input"), true);

// Create a new flight
$response = $flightModel->create($data);

header('Content-Type: application/json');
echo json_encode($response);