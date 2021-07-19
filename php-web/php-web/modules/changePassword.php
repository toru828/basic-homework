<?php
if ($loginOrLogout === 'Login') {
    header('Location: index.php?m=login');
}

if (!empty($_POST)) {
    $currentPassword = md5($_POST['currentPassword']);
    $newPassword = md5($_POST['newPassword']);
    $confirmNewPassword = md5($_POST['confirmNewPassword']);
    $userId = $user['id'];
    if ($currentPassword === $user['password'] || $newPassword === $confirmNewPassword) {
        $sql = "UPDATE users
        SET password = '$newPassword'
        WHERE id = '$userId'";
    }
}
?>

<div id="main">
    <div id="main-content">
        <h3>Change Password</h3>
        <?php if (empty($_POST)) {?>
            <form method="post" class="form-register">
                <p>
                    <label>Current Password: </label>
                    <input type="text" name="currentPassword" />
                </p>
                <p>
                    <label>New Password: </label>
                    <input type="text" name="newPassword" />
                </p>
                <p>
                    <label>Confirm New Password: </label>
                    <input type="text" name="confirmNewPassword" />
                </p>
                <p><input type="submit" value="Change Password" /></p>
            </form>
        <?php ;} elseif (md5($_POST['currentPassword']) !== $user['password'] || md5($_POST['newPassword']) !== md5($_POST['confirmNewPassword'])) {?>
            <p><?php if (md5($_POST['currentPassword']) !== $user['password']) { echo 'Current password is wrong';} ?></p>
            <p><?php if (md5($_POST['newPassword']) !== md5($_POST['confirmNewPassword'])) { echo 'Confirm new password is wrong';} ?></p>
            <form method="post" class="form-register">
                <p>
                    <label>Current Password: </label>
                    <input type="text" name="currentPassword" />
                </p>
                <p>
                    <label>New Password: </label>
                    <input type="text" name="newPassword" />
                </p>
                <p>
                    <label>Confirm New Password: </label>
                    <input type="text" name="confirmNewPassword" />
                </p>
                <p><input type="submit" value="Change Password" /></p>
            </form>
        <?php ;} else { ?>
            <p>Changed the passowrd!</p>
        <?php ;} ?>
    </div>
    <?php require __DIR__. '/partials/sidebar.php'; ?>
</div>