<?php
include 'admin_check.php';
include 'db.php';
$result = $conn->query("SELECT * FROM reservations");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2 class="page-title">Reservation List</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Guests</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['date'] ?></td>
            <td><?= $row['guests'] ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<footer>Admin Dashboard</footer>

</body>
</html>

