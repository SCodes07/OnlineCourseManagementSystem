<?php
session_start();
require_once "../config/db.php";

/* Login check */
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

/* Admin only */
if ($_SESSION['role'] !== 'admin') {
    echo "<p style='text-align:center;color:red;'>Access denied. Admin only.</p>";
    exit;
}

$message = "";

/* Fetch instructors for dropdown */
$instructors = $pdo->query("SELECT * FROM instructors")->fetchAll(PDO::FETCH_ASSOC);

/* Handle form submission */
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title         = trim($_POST['title']);
    $description   = trim($_POST['description']);
    $duration      = trim($_POST['duration']);
    $level         = trim($_POST['level']);
    $instructor_id = $_POST['instructor_id'];

    if ($title && $description && $instructor_id) {

        $sql = "INSERT INTO courses 
                (title, description, duration, level, instructor_id)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $title,
            $description,
            $duration,
            $level,
            $instructor_id
        ]);

        $message = "Course added successfully!";
    } else {
        $message = "All fields are required.";
    }
}
?>

<?php include "../includes/header.php"; ?>

     <?php if ($_SESSION['role'] === 'admin'): ?>
    <div class="admin-actions">
        <a href="add_instructor.php" class="admin-btn">Add Instructor</a>
    </div>
<?php endif; ?>

<section class="auth-section">
    <h2>Add New Course</h2>

    <?php if ($message): ?>
        <p style="text-align:center; color:green;">
            <?= htmlspecialchars($message) ?>
        </p>
    <?php endif; ?>

    <form method="post" class="auth-form">

        <label>Course Title</label>
        <input type="text" name="title" required>

        <label>Description</label>
        <textarea name="description" rows="4" required></textarea>

        <label>Duration</label>
        <input type="text" name="duration" placeholder="e.g. 8 Weeks">

        <label>Level</label>
        <select name="level" required>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
        </select>

        <label>Instructor</label>
        <select name="instructor_id" required>
            <option value="">Select Instructor</option>
            <?php foreach ($instructors as $inst): ?>
                <option value="<?= $inst['id'] ?>">
                    <?= htmlspecialchars($inst['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit" class="btn">Add Course</button>
    </form>
</section>

<?php include "../includes/footer.php"; ?>
