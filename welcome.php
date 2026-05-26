<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

include 'header.inc';
?>

<h2>Welcome Page</h2>

<p>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>

<p>Your login was successful.</p>

<?php include 'footer.inc'; ?>