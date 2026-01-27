<?php
session_start();
require_once "../config/db.php";
$instructors = $pdo->query("SELECT * FROM instructors")->fetchAll();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: admin-courses.php");
    exit;
}

$sql = "SELECT * FROM courses WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$course = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$course) {
    header("Location: admin-courses.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $level = $_POST['level'];
    $instructor_id = $_POST['instructor_id'];


    $update = "UPDATE courses SET title=?, description=?, duration=?, level=?, instructor_id=? WHERE id=?";
    $stmt = $pdo->prepare($update);
    $stmt->execute([$title, $description, $duration, $level, $id]);


    header("Location: admin-courses.php");
    exit;
}

include "../includes/header.php";
?>

<section class="auth-section">
    <h2>Edit Course</h2>

    <form method="post" class="auth-form">
        <label>Title</label>
        <input type="text" name="title" value="<?= $course['title'] ?>" required>

        <label>Description</label>
        <textarea name="description" required><?= $course['description'] ?></textarea>

        <label>Instructor</label>
<select name="instructor_id">
<?php foreach ($instructors as $inst): ?>
    <option value="<?= $inst['id'] ?>"
        <?= $inst['id'] == $course['instructor_id'] ? 'selected' : '' ?>>
        <?= $inst['name'] ?>
    </option>
<?php endforeach; ?>
</select>

        <label>Duration</label>
        <input type="text" name="duration" value="<?= $course['duration'] ?>">

        <label>Level</label>
        <select name="level">
            <option <?= $course['level']=="Beginner"?"selected":"" ?>>Beginner</option>
            <option <?= $course['level']=="Intermediate"?"selected":"" ?>>Intermediate</option>
            <option <?= $course['level']=="Advanced"?"selected":"" ?>>Advanced</option>
        </select>

        <button class="btn">Update Course</button>
    </form>
</section>

<?php include "../includes/footer.php"; ?>
