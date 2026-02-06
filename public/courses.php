<?php
require_once "../config/db.php";

include "../includes/header.php";

//SQL to fetch all courses with instructor name
$sql = "SELECT courses.*, instructors.name AS instructor_name
    FROM courses
    LEFT JOIN instructors
    ON courses.instructor_id = instructors.id
    ORDER BY courses.created_at DESC";
    
$stmt = $pdo->query($sql);
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<section class="courses">
    <h2>Available Courses</h2>

    <!-- Search input -->
<div class="search-box">
    <input
        type="text"
        id="search"
        placeholder="Search courses..."
        autocomplete="off"
    >
</div>


    <!-- Courses list (USED BY BOTH PHP & AJAX) -->
    <div class="course-list" id="courseResults">

        <?php if (count($courses) > 0): ?>
            <?php foreach ($courses as $course): ?>
                <div class="course-card">
                    <h3><?= htmlspecialchars($course['title']) ?></h3>
                    <p><strong>Instructor:</strong>
    <?= $course['instructor_name'] ?? 'Not assigned' ?>
</p>
                    <p><?= htmlspecialchars($course['description']) ?></p>
                    <a href="course-details.php?id=<?= $course['id'] ?>" class="btn">
                        View Course
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No courses available.</p>
        <?php endif; ?>

    </div>
</section>

<script src="../assets/js/main.js"></script>

<?php include "../includes/footer.php"; ?>
