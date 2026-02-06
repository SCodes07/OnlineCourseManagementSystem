<?php
session_start();
require_once "../config/db.php";

// Check login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Fetch enrolled courses
$sql = "
    SELECT courses.*
    FROM enrollments
    JOIN courses ON enrollments.course_id = courses.id
    WHERE enrollments.user_id = ?
";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
//Fetch all results
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

include "../includes/header.php";
?>

<section class="courses">
    <h2>My Courses</h2>

    <div class="course-list">
        <?php if (count($courses) > 0): ?>
            <?php foreach ($courses as $course): ?>
                <div class="course-card">
                    <h3><?= htmlspecialchars($course['title']) ?></h3>
                    <p><?= htmlspecialchars($course['description']) ?></p>

                    <a href="course-details.php?id=<?= $course['id'] ?>" class="btn">
                        View Course
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>You have not enrolled in any courses yet.</p>
        <?php endif; ?>
    </div>
</section>

<?php include "../includes/footer.php"; ?>
