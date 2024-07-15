<?php
header('Content-Type: application/json');

// Allow cross-origin requests
header('Access-Control-Allow-Origin: *'); // Allows requests from any origin
header('Access-Control-Allow-Methods: GET, POST, OPTIONS'); // Allowed methods
header('Access-Control-Allow-Headers: Content-Type, Authorization'); // Allowed headers

// Include the configuration file and Booking model
require '../../config/config.php'; // Adjust the path as necessary
require '../../models/flight.php'; // Adjust the path as necessary

// Create a database connection
$mysqli = getDBConnection();

// Create a Booking object with the database connection
$Flight = new Flight($mysqli);

$response = $Flight->getallFlights();


echo json_encode($response);

?>
