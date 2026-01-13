<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $guests = $_POST['guests'];

    $sql = "INSERT INTO reservations (name,email,date,guests)
            VALUES ('$name','$email','$date','$guests')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Reservation Successful";
        echo "<br><a href='view.php'>View Reservations</a>";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>

