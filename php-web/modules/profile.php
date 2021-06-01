<?php
if ($loginOrLogout === 'Login') {
    header('Location: index.php');
}
?>

<!-- MAIN content -->
<div id="main">
    <div id="main-content">
        <h3>My profile</h3>
        <p><?php echo "ID: " . $user['id']; ?></p>
        <p><?php echo "Fullname: " . $user['fullname'] ?></p>
        <p><?php echo "Username: " . $user['username'] ?></p>
        <p><?php echo "Email: " . $user['email'] ?></p>
    </div>
    <!-- embed sidbar.php -->
    <?php require __DIR__. '/partials/sidebar.php'; ?>
</div>
