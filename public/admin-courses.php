<?php
session_start();
require_once "../config/db.php";

// Admin check
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit;
}
//SQL query to fetch courses
$sql = "SELECT * FROM courses ORDER BY created_at DESC";
$stmt = $pdo->query($sql);
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

include "../includes/header.php";
?>

<section class="courses">
    <h2>Manage Courses</h2>

    <table>
        <tr>
            <th>Title</th>
            <th>Level</th>
            <th>Duration</th>
            <th>Action</th>
        </tr>

        <?php foreach ($courses as $course): ?>
            <tr>
                <td><?= htmlspecialchars($course['title']) ?></td>
                <td><?= htmlspecialchars($course['level']) ?></td>
                <td><?= htmlspecialchars($course['duration']) ?></td>
                <td>
                    <a href="edit-course.php?id=<?= $course['id'] ?>">Edit</a>
                    |
                    <a href="delete-course.php?id=<?= $course['id'] ?>"
   class="delete-link"
   onclick="return confirm('Are you sure?')">
    Delete
</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>

<?php include "../includes/footer.php"; ?>
