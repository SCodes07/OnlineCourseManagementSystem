<?php
session_start();
require_once "../config/db.php";

//Admin authorization check
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit;
}

//Get course ID from URL
$id = $_GET['id'] ?? null;

if ($id) {
    $sql = "DELETE FROM courses WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}

header("Location: admin-courses.php");
exit;
