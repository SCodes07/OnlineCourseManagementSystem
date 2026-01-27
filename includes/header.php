<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LearnOnline | Online Courses</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header class="header">
    <div class="container header-flex">

        <div class="logo">
            <a href="index.php">Learn<span>Online</span></a>
        </div>

       <nav class="nav">
    <a href="index.php">Home</a>
    <a href="courses.php">Courses</a>

    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="my-courses.php">My Courses</a>

        <?php if ($_SESSION['role'] === 'admin'): ?>
            <a href="add-course.php">Add Course</a>
            <a href="admin-courses.php">Manage Courses</a>
        <?php endif; ?>
    <?php endif; ?>


</nav>

     <div class="auth">
    <?php if (isset($_SESSION['user_id'])): ?>

        <span class="user-name">
            <?= ucfirst($_SESSION['role']) ?> :
            <?= htmlspecialchars($_SESSION['user_name']) ?>
        </span>

        <a href="logout.php" class="btn-outline">Logout</a>

    <?php else: ?>
        <a href="login.php" class="btn-outline">Login</a>
        <a href="register.php" class="btn-primary">Join Free</a>
    <?php endif; ?>
</div>


    </div>
</header>

<main>
