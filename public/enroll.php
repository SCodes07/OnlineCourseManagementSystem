<?php
session_start();
require_once "../config/db.php";

//Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

//Check if course ID is provided
if (!isset($_GET['id'])) {
    header("Location: courses.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$course_id = $_GET['id'];

// Check if user is already enrolled
$checkSql = "SELECT * FROM enrollments WHERE user_id = ? AND course_id = ?";
$checkStmt = $pdo->prepare($checkSql);
$checkStmt->execute([$user_id, $course_id]);

if ($checkStmt->rowCount() > 0) {
    header("Location: course-details.php?id=$course_id&msg=already");
    exit;
}

// Enroll user
$sql = "INSERT INTO enrollments (user_id, course_id) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id, $course_id]);

header("Location: course-details.php?id=$course_id&msg=success");
exit;
