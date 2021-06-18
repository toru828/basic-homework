<?php
$pageTitles = array(
    'home' => "Home",
    'login' => "Login",
    "profile" => "My Profile",
    "register" => "Register", // Page title for Regiser
    "changePassword" => "Change Passwword"
);
$pageTitle = isset($pageTitles[$module]) ? $pageTitles[$module] : null;

$userId = isset($_SESSION["login_user_id"]) ? $_SESSION["login_user_id"] : null;

$user = false;

if ($userId) {
    $sql = "SELECT id, username, email, fullname, password
    FROM users
    WHERE id = $userId
    LIMIT 0,1";

    $result = $mysql->query($sql);

    $user = $result->fetch_array() ?? false;
}

$fullname = $user['fullname'] ? $user['fullname'] : 'Guest';

$loginOrLogout = $user['fullname'] ? 'Logout' : 'Login';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet", href="./assets/css/index.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="./assets/js/index.js"></script>
  </head>
  <body>
    <header>
        <div id="logo">
            <h4>The logo<?php echo $userId; ?></h4>
        </div>
        <div id="slogan">The header slogan</div>
        <div id="form">
            <ul>
                <li>Hi <span><?php echo $fullname; ?></span></li>
                <li><a href=<?php if ($loginOrLogout === 'Login') {echo "javascript:void(0)";} else {echo "./index.php?m=logout";} ?> id="form1" onclick=<?php if ($loginOrLogout === 'Login'){echo "showLoginForm()";} ?>><?php echo $loginOrLogout ?></a></li>
            </ul>
            <form id="login" action="./index.php?m=login" method="post">
                <input type="text" name="username" placeholder="User name">
                <input type="password" id="login1" name="password" placeholder="Password">
                <i class="material-icons" id="passwordIcon" onclick="hidePassword()">remove_red_eye</i>
                <label><input type="checkbox" name="rememberUsername">Remember user name</label>
                <button type="submit" name="login">Login</button>
            </form>
            <form method="GET" id="search">
                <input type="text" name="keyword" />
                <i class="material-icons">search</i>
            </form>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <?php if ($loginOrLogout === 'Login') { ?>
            <li><a href="./index.php?m=register">Register</a></li>
            <?php } else { ?>
            <li><a href="./index.php?m=profile">My Profile</a></li>
            <li><a href="./index.php?m=changePassword">Change Password</a></li>
            <?php ;} ?>
        </ul>
    </nav>
