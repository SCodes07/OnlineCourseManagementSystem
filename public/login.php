<?php
session_start();
require_once "../config/db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email    = trim($_POST["email"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {

        // Login success
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_name"] = $user["name"];
        $_SESSION["role"] = $user["role"];

        header("Location: index.php");
        exit;

    } else {
        $message = "Invalid email or password!";
    }
}
?>

<?php include "../includes/header.php"; ?>

<section class="auth-section">
    <h2>Login</h2>

    <?php if ($message): ?>
        <p style="color:red; text-align:center;">
            <?= $message ?>
        </p>
    <?php endif; ?>

    <form class="auth-form" method="post">
        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit" class="btn">Login</button>

        <p class="auth-link">
            Don’t have an account?
            <a href="register.php">Register</a>
        </p>
    </form>
</section>

<?php include "../includes/footer.php"; ?>
