<?php
include 'DBConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    if ($stmt->execute([$username, $email, $password])) {
        echo "User registered successfully.";
    } else {
        echo "Error registering user.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
</head>
<body>

<h2>Register</h2>
<form method="POST" action="">
   <label for="username">Username:</label><br>
   <input type="text" id="username" name="username" required><br><br>
   <label for="email">Email:</label><br>
   <input type="email" id="email" name="email" required><br><br>
   <label for="password">Password:</label><br>
   <input type="password" id="password" name="password" required><br><br>
   <input type="submit" value="Register">
</form>

</body>
</html>
