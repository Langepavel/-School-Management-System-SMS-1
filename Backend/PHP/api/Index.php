<?php
// Allow all domains to access this API
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Handle the request method (GET, POST, etc.)
$request_method = $_SERVER['REQUEST_METHOD'];

// The sample data (you can replace this with a database or other logic)
$sample_data = [
    'status' => 'success',
    'message' => 'Welcome to our API!',
    'data' => 'sample_data',
];

switch ($request_method) {
    case 'GET':
        // Handle GET requests
        echo json_encode($sample_data);
        break;
    
    case 'POST':
        // Handle POST requests
        $input_data = json_decode(file_get_contents('php://input'), true);
        // Do something with input_data, e.g., store it in a database
        $response = [
            'status' => 'success',
            'message' => 'Data received',
            'data' => $input_data,
        ];
        echo json_encode($response);
        break;

    default:
        // Handle unsupported request methods
        header("HTTP/1.1 405 Method Not Allowed");
        echo json_encode([
            'status' => 'error',
            'message' => 'Method Not Allowed'
        ]);
        break;
}
