<?php
    $mysql = new mysqli(
        "mysql",
        "root",
        "example",
        "db_default"
    );

    echo "MySQL Server info: ".$mysql->host_info;
?>
