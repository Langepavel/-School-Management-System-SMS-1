<?php
// Allow all domains to access this API
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Database connection details
$servername = "localhost";  // MySQL username
$username = "root";         // MySQL username
$password = "";             // MySQL password (empty if none)
$dbname = "team1";          // Database name

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle the request method (GET, POST, etc.)
$request_method = $_SERVER['REQUEST_METHOD'];

// // Data to be returned (this can be replaced with actual data from a database)

// $sample_data = [
//     'status' => 'success',
//     'message' => 'Welcome to the User API!',
//     'data' => 'sample_user_data',
// ];

// Routes array
$routes = [
    '/user' => 'User.php',       // Route to User.php
    '/product' => 'Product.php', // Route to Product.php
    '/about' => 'About.php',     // Route to About.php
];

// Get the request URI
$request_uri = $_SERVER['REQUEST_URI'];

// Check if the requested URI exists in the routes array
if (array_key_exists($request_uri, $routes)) {
    // Include the corresponding PHP file for that route
    include($routes[$request_uri]);
    // Don't close the connection here if it's being used in the included script
} else {
    // If the route does not exist, show a 404 page
    echo json_encode([
        'status' => 'error',
        'message' => 'Route not found',
    ]);
}

// Close the database connection after all logic is completed
// $conn->close();
?>
