
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP Basic</title>
</head>
<body>
    <h3>Pages test Lamp basic enviroment</h3>
    <ul>
        <li><a href="phpinfo.php">php info</a></li>
        <li><a href="testdb.php">test mysqli</a></li>
        <li><a href="testpdo.php">test pdo-mysql</a></li>
        <li><a href="http://localhost:8001" target="_blank">phpMyAdmin</a></li>
        <li>
            <?php
                require_once 'mysqlconfig.php';
                echo "mysql host: $host, username: $username, password: $password, database: $dbname";
            ?>
        </li>
    </ul> 
</body>
</html>