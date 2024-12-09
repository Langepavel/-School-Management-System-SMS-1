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

// Data to be returned (this can be replaced with actual data from a database)
$sample_data = [
    'status' => 'success',
    'message' => 'Welcome to the User API!',
    'data' => 'sample_user_data',
];

switch ($request_method) {
    case 'GET':
        // Handle GET requests for retrieving user data
        $sql = "SELECT id, name FROM users"; // Sample query to get users
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $users = [];
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;  // Add each user to the array
            }
            // Return user data
            echo json_encode([
                'status' => 'success',
                'message' => 'User data retrieved successfully',
                'data' => $users,
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'No users found',
            ]);
        }
        break;

    case 'POST':
        // Handle POST requests for creating a new user
        $input_data = json_decode(file_get_contents('php://input'), true);

        // Check if the input data is valid and not null
        if ($input_data && isset($input_data['name']) && isset($input_data['phone_number'])) {
            $name = $input_data['name'];
            $phone_number = $input_data['phone_number'];

            // Commented out: Store data into the database (this part is disabled for now)
            /*
            $sql = "INSERT INTO users (name, phone_number) VALUES ('$name', '$phone_number')";
            if ($conn->query($sql) === TRUE) {
                echo json_encode([
                    'status' => 'success',
                    'message' => 'New user created successfully',
                    'data' => $input_data,
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Failed to create user',
                ]);
            }
            */

            // Instead of storing, we return the received data as a success response
            echo json_encode([
                'status' => 'success',
                'message' => 'New user data received',
                'data' => $input_data,
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Invalid or missing user data',
            ]);
        }
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

// Close the database connection
$conn->close();
?>
