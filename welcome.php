<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "<div style='text-align: center;'>
        <h1>Welcome, $name!</h1>
        <p>You have successfully logged in or signed up.</p>
        <p><strong>Email:</strong> $email</p>
        <a href='logout.php'>Logout</a>
    </div>";
} else {
    header("Location: login.php");
    exit;
}
?>
