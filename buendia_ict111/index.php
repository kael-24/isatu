<?php
require 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
}
?>

<main>
    <form action="index.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Submit</button>
    </form>

    <p><a href="profile.php">Go to Profile</a></p>
</main>

<?php require 'footer.php'; ?>


        
 