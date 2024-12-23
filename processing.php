<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $username = htmlspecialchars($_POST['username'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $password = htmlspecialchars($_POST['password'] ?? '');
    $terms = isset($_POST['terms']) ? 'Accepted' : 'Not Accepted';

   
    if (empty($username) || empty($email) || empty($password)) {
        echo "<p style='color: red;'>All fields are required.</p>";
        exit;
    }

    echo "<div style='text-align: center;'>
        <h2>Thank You for Registering!</h2>
        <p><strong>Name:</strong> $username</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Terms:</strong> $terms</p>
    </div>";
} else {
    echo "<p style='color: red;'>Invalid request method.</p>";
}
?>
