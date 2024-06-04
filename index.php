<?php
error_reporting(E_ALL);
session_start();

include_once "./views/header.php";
// router

$page = $_POST["page"] ?? 0;

try {
    switch ($page) {
        case '0':
            include "login.php";
            break;
        case "1":
            $email = $_POST['email'] ?? '';
            if ($email == '') {
                echo '<p>Отсуттсвует email</p>';
                echo '<a href="/">Назад</a>';
                include_once "./views/footer.php";
                exit();
            }
            $_SESSION['email'] = $email;
            include "page1.php";
            break;
        case "2":
            include "page2.php";
            break;
        case "3":
            include "page3.php";
            break;
        case "4":
            include "result.php";
            break;
        default:
            include "NOT_FOUND.php";
            break;
        }
} catch (Exception $e) {
    var_dump($e);
}

// end router
include_once "./views/footer.php";









































