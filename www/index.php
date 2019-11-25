<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dev</title>
    <link rel="stylesheet" href="./style.css"/>
</head>
<body>
    <?php
        $mysql = new mysqli(
            "mysql",
            "root",
            "example",
            "db_default"
        );

        echo "MySQL Server info: ".$mysql->host_info;
    ?>
</body>
</html>
