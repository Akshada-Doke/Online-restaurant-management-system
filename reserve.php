<!DOCTYPE html>
<html>
<head>
    <title>Reserve Table</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <div class="card">
        <h2 class="page-title">Reserve a Table</h2>

        <form action="save.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="date" name="date" required>
            <input type="number" name="guests" placeholder="Guests" required>
            <button type="submit">Confirm Reservation</button>
        </form>
    </div>
</div>

<footer>© 2026 Spice Delight Restaurant</footer>

</body>
</html>

