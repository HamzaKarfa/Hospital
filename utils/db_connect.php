<?php 


try {
    $pdo = new PDO('mysql:host=localhost;dbname=hospital;charset=utf8','root','', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (\Throwable $th) {
    die('erreur db');
}