<?php
if ($loginOrLogout === 'Login') {
    header('Location: index.php?m=login');
}

$x = 0;

if (!empty($_POST)) {
    $currentPassword = md5($_POST['currentPassword']);
    $newPassword = md5($_POST['newPassword']);
    $confirmNewPassword = md5($_POST['confirmNewPassword']);
    $userId = $user['id'];

    if ($currentPassword === $user['password'] && $newPassword === $confirmNewPassword) {
        $sql = "UPDATE users
        SET password = '$newPassword'
        WHERE id = '$userId'";

        try {
            $result = $mysql->query($sql);
        } catch (Exception $e) {
            echo "<p>Error: $e->getMessage()</p>";
        }
    }
}

// If there is wrong, make a announcement


?>

<div id="main">
    <div id="main-content">
        <h3>Change Password</h3>
        <?php if (!empty($_POST)){
            if (md5($_POST['currentPassword']) !== $user['password']) {
                echo '<p>Current password is wrong</p>';
                $x = 1;}
            if (md5($_POST['newPassword']) !== md5($_POST['confirmNewPassword'])) {
                echo '<p>Confirm new password is wrong<p>';
                $x = 1;}
        ;} ?>
        <?php if (empty($_POST) || $x === 1) {?>
            
            <form method="post" class="form-register">
                <p>
                    <label>Current Password: </label>
                    <input type="password" name="currentPassword" />
                </p>
                <p>
                    <label>New Password: </label>
                    <input type="password" name="newPassword" />
                </p>
                <p>
                    <label>Confirm New Password: </label>
                    <input type="password" name="confirmNewPassword" />
                </p>
                <p><input type="submit" value="Change Password" /></p>
            </form>
        <?php } elseif (!empty($_POST) && $x === 0) { ?>
            <p>Changed the passowrd!</p>
        <?php ;} ?>
    </div>
    <?php require __DIR__. '/partials/sidebar.php'; ?>
</div>