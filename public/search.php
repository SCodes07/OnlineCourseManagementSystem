<?php
require_once "../config/db.php";
//Get the search text from URL
$query = $_GET['q'] ?? '';

$sql = "SELECT * FROM courses WHERE title LIKE ?";
$stmt = $pdo->prepare($sql);
//Execute with wildcard pattern
$stmt->execute(['%' . $query . '%']);

$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($courses) {
    foreach ($courses as $course) {
        echo "
        <div class='course-card'>
            <h3>{$course['title']}</h3>
            <p>{$course['description']}</p>
            <a href='course-details.php?id={$course['id']}' class='btn'>
                View Course
            </a>
        </div>
        ";
    }
//If no courses match   

} else {
    echo "<p>No courses found.</p>";
}
