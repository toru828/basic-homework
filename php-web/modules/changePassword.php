<?php
if ($loginOrLogout === 'Login') {
    header('Location: index.php?m=login');
}

$x = 0;
$message = [];

if (!empty($_POST)) {
    $currentPassword = md5($_POST['currentPassword']);
    $newPassword = md5($_POST['newPassword']);
    $confirmNewPassword = md5($_POST['confirmNewPassword']);
    $userId = $user['id'];

    if ($currentPassword !== $user['password']) {
        array_push($message, "Current password is wrong");
        $x = 1;
    } 
    
    if ($newPassword !== $confirmNewPassword) {
        array_push($message, "Confirm new password is wrong");
        $x = 1;
    }
    
    if ($x === 0) {
        $sql = "UPDATE users
        SET password = '$newPassword'
        WHERE id = '$userId'";

        try {
            $result = $mysql->query($sql);
        } catch (Exception $e) {
            array_push($message, $e->getMessage());
        }
    }
}

?>

<div id="main">
    <div id="main-content">
        <h3>Change Password</h3>
        <?php foreach($message as $message) {
            echo "<p>$message</p>";
        }
        ?>
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
