<?php
    define("HOST","localhost");
    define("DATABASE","sumedh");
    define("USERNAME","root");
    define("PASSWORD","");
    /* Creating database connection */
    try {
        $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USERNAME, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->exec("SET NAMES 'utf8'");
        var_dump($pdo);
    } catch(PDOException $e) {
        die("ERROR : " . $e->getMessage());
    }
?>