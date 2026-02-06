<?php
require_once "../config/db.php";

$message = "";
//Check form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
//Read and clean form inputs
    $name     = trim($_POST["name"]);
    $email    = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm  = $_POST["confirm_password"];
//password match validation
    if ($password !== $confirm) {
        $message = "Passwords do not match!";
    } else {
        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
//Execute inside try-catch
        try {
            $stmt->execute([$name, $email, $hashedPassword]);
            $message = "Registration successful! You can login now.";
        } catch (PDOException $e) {
            $message = "Email already exists!";
        }
    }
}
?>

<?php include "../includes/header.php"; ?>

<section class="auth-section">
    <h2>Create Account</h2>
//Display message (if exists)
    <?php if ($message): ?>
        <p style="color:red; text-align:center;">
            <?= $message ?>
        </p>
    <?php endif; ?>

    <form class="auth-form" method="post">
        <label>Full Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <button type="submit" class="btn">Register</button>

        <p class="auth-link">
            Already have an account?
            <a href="login.php">Login</a>
        </p>
    </form>
</section>

<?php include "../includes/footer.php"; ?>
