<?php
// Connect to the database
$host = "database-1.cyj4ppjzlsat.us-east-2.rds.amazonaws.com";
$port = 5432;
$dbname = "postgres";
$user = "postgres";
$password = "postgres2023$";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Failed to connect to the database.";
    exit;
}

// Retrieve user data if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = ucwords(strtolower($_POST['fname']));
    $lname = ucwords(strtolower($_POST['lname']));
    $zipcode = $_POST['zipcode'];

    $sql = "SELECT billing_zipcode FROM purchases WHERE first_name='$fname' AND last_name='$lname' AND billing_zipcode='$zipcode'";
    $result = pg_query($conn, $sql);

    if (!$result) {
        echo "Failed to retrieve data from the database.";
        exit;
    }

    if (pg_num_rows($result) > 0) {
        // Process the refund
        // ...

        // Display a success message
        echo "<p>Refund requested. Your account will be credited shortly, " . $fname . ".</p>";
    } else {
        // Display an error message
        echo "<p>User data not found. Refund request cannot be processed.</p>";
    }
}

// Close the database connection
pg_close($conn);
?>
