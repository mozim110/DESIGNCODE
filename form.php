<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db   = "design_orders";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit']))
    
    


    $client_name  = $_POST['client_name'];
    $client_email = $_POST['client_email'];
    $client_phone = $_POST['client_phone'];
    $service      = $_POST['service'];
    $details      = $_POST['details'];

    $query = "
        INSERT INTO orders
        (client_name, client_email, client_phone, service, details)
        VALUES
        ('$client_name', '$client_email', '$client_phone', '$service', '$details')
    ";

    $run = mysqli_query($conn, $query);

 if($run){
        echo "<script>alert('Message Sent Successfully');window.location='index.php';</script>";
    } else {
        echo "Error";
    }


?>
