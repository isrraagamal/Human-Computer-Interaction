<?php

define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "university");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");


try {
    $dsn = "mysql:host=" . DATABASE_HOST . ";dbname=" . DATABASE_NAME;
    $pdo = new PDO($dsn, DATABASE_USER, DATABASE_PASSWORD);

} catch (PDOException $e) {
    echo $e . "<br>";
}

?>