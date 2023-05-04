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

// Insert data into the database if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = ucwords(strtolower($_POST['fname']));
    $lname = ucwords(strtolower($_POST['lname']));
    $zipcode = $_POST['zipcode'];
    $coins = $_POST['coins'];

    $sql = "INSERT INTO purchases (first_name, last_name, billing_zipcode, coins)
        VALUES (INITCAP('$fname'), INITCAP('$lname'), '$zipcode', '$coins')";
    $result = pg_query($conn, $sql);

    if (!$result) {
        echo "Failed to insert data into the database.";
        exit;
    }

    // Display the HTML code after successful insertion
    echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>Thank you for your purchase!</title>
            <style>
                body {
                    background-image: url(\'index2background.jpg\');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                }
            </style>
        </head>
        <body>
            <h1>Thank you for your purchase, ' . $fname . '!</h1>
            <p>You have purchased ' . $coins . ' coins. We will bill your account ending in ' . substr($zipcode, -4) . '.</p>
            <a href="index.html">Go back to home</a>
        </body>
        </html>
    ';

}

// Close the database connection
pg_close($conn);
?>