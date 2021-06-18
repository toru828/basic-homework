<?php
$sql = "SELECT *
        FROM users;";
?>

<div id="main">
    <div id="main-content">
    <?php if(!$user) { ?>
        <h3>Welcome to the website! Login to see users list</h3>
    <?php ;} else {
        try {
                $result = $mysql->query($sql);
            } catch (Exception $e) {
                echo "<p>Error: $e->getMessage() </p>";
            } ?>
        <h3>Users List</h3>
        <table>
        <tr>
        <th>id</th>
        <th>username</th>
        <th>fullname</th>
        <th>email</th>
        </tr>
        <?php while ($row = $result->fetch_array()) { ?>
        <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['fullname'] ?></td>
        <td><?php echo $row['email'] ?></td>
        </tr>
        <?php } ?>
        </table>
    <?php } ?>
    </div>
    <?php require __DIR__ . '/partials/sidebar.php' ?>
</div>