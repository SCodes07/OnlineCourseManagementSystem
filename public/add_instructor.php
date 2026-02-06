<?php
session_start();
require_once "../config/db.php";
//Admin authorization check
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit;
}
//Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("INSERT INTO instructors (name, email) VALUES (?, ?)");
    $stmt->execute([$name, $email]);
}
//Retrieve instructors list
$instructors = $pdo->query("SELECT * FROM instructors")->fetchAll();
include "../includes/header.php"
?>
<h2>Manage Instructors</h2>

<form method="post">
    <input type="text" name="name" placeholder="Instructor Name" required>
    <input type="email" name="email" placeholder="Email">
    <button>Add Instructor</button>
</form>

<hr>

<ul>
<?php foreach ($instructors as $inst): ?>
    <li><?= htmlspecialchars($inst['name']) ?> (<?= $inst['email'] ?>)</li>
<?php endforeach; ?>
</ul>

<?php include "../includes/footer.php" ?>
