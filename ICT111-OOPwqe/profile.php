<?php
//require 'config.php';
require 'header.php';

// Check if session variables are set
$name = isset($_SESSION['name']) ? $_SESSION['name'] : DEFAULT_NAME;
$email = isset($_SESSION['email']) ? $_SESSION['email'] : DEFAULT_EMAIL;

// Handle reset
if (isset($_POST['reset'])) {
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    header("Location: profile.php");
    exit;
}
?>

<main>
    <h2>User Profile</h2>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>

    <form action="profile.php" method="POST">
        <button type="submit" name="reset">Reset Profile</button>
    </form>
    
    <p><a href="index.php">Back to Home</a></p>
</main>

<?php require 'footer.php'; ?>

