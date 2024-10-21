<?php
// Database connection settings
$host = 'localhost';
$dbname = 'your_database_name';  // Replace with your database name
$username = 'your_username';  // Replace with your database username
$password = 'your_password';  // Replace with your database password

// Create a new connection using MySQLi or PDO
try {
    // Using PDO (recommended)
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);
    
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully!";
} catch (PDOException $e) {
    // In case of error, display the error message
    echo "Connection failed: " . $e->getMessage();
}
?>
