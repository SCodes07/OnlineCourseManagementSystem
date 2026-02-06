<?php
session_start();
require_once "../config/db.php";

$message = "";
//Check request method
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Get user input
    $email    = trim($_POST["email"]);
    $password = $_POST["password"];

    //Fetch user from database
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    //fetch result
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    //Password verification
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
