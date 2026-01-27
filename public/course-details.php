<?php
require_once "../config/db.php";
include "../includes/header.php";

if (!isset($_GET['id'])) {
    echo "<p>Course not found.</p>";
    include "../includes/footer.php";
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM courses WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$course = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$course) {
    echo "<p>Course not found.</p>";
    include "../includes/footer.php";
    exit;
}
?>

<section class="course-details">
    <h2><?= htmlspecialchars($course['title']) ?></h2>
    <?php if (isset($_GET['msg'])): ?>
    <?php if ($_GET['msg'] === 'success'): ?>
        <p style="color:green;">You have successfully enrolled!</p>
    <?php elseif ($_GET['msg'] === 'already'): ?>
        <p style="color:orange;">You are already enrolled in this course.</p>
    <?php endif; ?>
<?php endif; ?>


    <p><?= htmlspecialchars($course['description']) ?></p>

    <ul class="course-info">
        <li><strong>Duration:</strong> <?= $course['duration'] ?></li>
        <li><strong>Level:</strong> <?= $course['level'] ?></li>
        <li><strong>Instructor:</strong> <?= $course['instructor'] ?></li>
    </ul>

    <a href="enroll.php?id=<?= $course['id'] ?>" class="btn">
        Enroll Now
    </a>
</section>

<?php include "../includes/footer.php"; ?>
