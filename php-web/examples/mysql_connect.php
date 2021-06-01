<!DOCTYPE html>
<head>
    <title>PHP MySQL</title>
</head>
<body>
    <p>
        <?php
            $connection = new mysqli("localhost", "root", "kakakaimg800", "php_web");
            if ($connection->connect_error != null) {
                echo "Failed to connect to MYSQL: " . $connection->connect_error;
            } else {
                echo "Connected to MYSQL succesfully";
                $connection->close();
            }
        ?>
    </p>
</body>
</html>