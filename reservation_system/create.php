<?php

$host       = "localhost";
$database   = "reservation_system";
$user       = "root";
$password   = "";

$db = mysqli_connect($host, $user, $password, $database)
or die("Error: " . mysqli_connect_error());;



//variables
$id = '';
$id_customer = '';
$email = '';
$massage_type = '';
$date = '';
$begin_time = '';
$ending_time = '';
$status = '';
$message_customer = '';
$message_moderator = '';
$date_created = '';
$date_updated = '';

$tc = '';

//variable setting from POST_GET
if (isset($_POST['submit'])) {
    $ok = true;

    if (!isset($_POST['id_customer']) || $_POST['id_customer'] === '') {
        $ok = false;
    } else {
        $id_customer = $_POST['id_customer'];
    };
    if (!isset($_POST['email']) || $_POST['email'] === '') {
        $ok = false;
    } else {
        $email = $_POST['email'];
    };
    if (!isset($_POST['massage_type']) || $_POST['massage_type'] === '') {
        $ok = false;
    } else {
        $massage_type = $_POST['massage_type'];
    };
    if (!isset($_POST['date']) || $_POST['date'] === '') {
        $ok = false;
    } else {
        $date = $_POST['date'];
    };
    if (!isset($_POST['begin_time']) || $_POST['begin_time'] === '') {
        $ok = false;
    } else {
        $begin_time = $_POST['begin_time'];
    };
    if (!isset($_POST['ending_time']) || $_POST['ending_time'] === '') {
        $ok = false;
    } else {
        $ending_time = $_POST['ending_time'];
    };
    if (!isset($_POST['status']) || $_POST['status'] === '') {
        $ok = false;
    } else {
        $status = $_POST['status'];
    };
    if (!isset($_POST['message_customer']) || $_POST['message_customer'] === '') {
        $ok = false;
    } else {
        $message_customer = $_POST['message_customer'];
    };
    if (!isset($_POST['message_moderator']) || $_POST['message_moderator'] === '') {
        $ok = false;
    } else {
        $message_moderator = $_POST['message_moderator'];
    };
    if (!isset($_POST['tc']) || $_POST['tc'] === '') {
        $ok = false;
    } else {
        $tc = $_POST['tc'];
    };
}


if (isset($_POST['submit'])) {

    if (empty($errors)) {
        $query = "
            INSERT INTO reservations (id_customer, email, massage_type, date, begin_time, ending_time, status, message_customer, message_moderator, date_created, date_updated)
            VALUES ($id_customer, '$email', $massage_type, '$date', '$begin_time', '$ending_time', $status, '$message_customer', '$message_moderator', '$date_created', '$date_updated')";

        $result = mysqli_query($db, $query)
        or die('Error: ' . $query);
    }

    if ($result) {
        echo 'Added Successfully!';
        exit;
    } else {
        $errors[] = 'Oepsie Woopsie Database Qwerie: ' . mysqli_error($db);
    }

    mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="/css/main.css" type="text/css" rel="stylesheet">
    <link href="music_collection.css" type="text/css" rel="stylesheet">
    <title>LuukFTF's Website</title>
</head>
<body>
<header class="header">
    <nav>
        <ul class="menu">
            <h1 class="logo">LuukFTF</h1>
            <li class="menu-item"><a href="/home.html">Home</a></li>
            <li class="menu-item"><a class="linkto" href="#">About</a></li>
            <li class="menu-item"><a href="/social.html">Social Links</a></li>
            <li class="menu-item"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">News</a></li>
            <li class="menu-item"><a id="contact" href="#">Contact</a></li>
            <li class="menu-item"><a href="/sandbox.php">Sandbox</a></li>
            <li class="menu-item"><a href="/blog">Blog</a></li>
            <li class="menu-item"><a href="/test.html">Test</a></li>
            <li class="menu-item"><a href="/test.html">Test</a></li>
            <li class="menu-item"><a href="/test.html">Test</a></li>
        </ul>
    </nav>
</header>


<main class="main">
    <form
        action=""
        method="post"
        <p>Customer ID: <input type="text" name="id_customer" value='<?=htmlspecialchars($id_customer, ENT_QUOTES)?>'</p>
        <p>E-Mail: <input type="text" name="email" value='<?=htmlspecialchars($email, ENT_QUOTES)?>'></p>
        <p>Massage type: <input type="text" name="massage_type" value='<?=htmlspecialchars($massage_type, ENT_QUOTES)?>'></p>
        <p>Date: <input type="date" name="date" value='<?=htmlspecialchars($date, ENT_QUOTES)?>'></p>
        <p>Begin Time: <input type="time" name="begin_time" value='<?=htmlspecialchars($begin_time, ENT_QUOTES)?>'></p>
        <p>Ending Time: <input type="time" name="ending_time" value='<?=htmlspecialchars($ending_time, ENT_QUOTES)?>'></p>
        <p>Status: <input type="text" name="status" value='<?=htmlspecialchars($status, ENT_QUOTES)?>'></p>
        <p>Customer Message: <textarea name="message_customer"><?=htmlspecialchars($message_customer, ENT_QUOTES)?></textarea></p>
        <p>Moderator Message: <textarea name="message_moderator"><?=htmlspecialchars($message_moderator, ENT_QUOTES)?></textarea></p>
        <p>Date Created: <input type="date" name="date_created" value='<?=htmlspecialchars($date_created, ENT_QUOTES)?>'></p>
        <p>Date Updated: <input type="date" name="date_updated" value='<?=htmlspecialchars($date_updated, ENT_QUOTES)?>'></p>
        <p><input type="checkbox" name="tc" value="ok" value='<?=htmlspecialchars($tc, ENT_QUOTES)?>'> I accept the terms &amp; conditions </p>
        <input type="submit" name="submit" value="Add Track">
    </form>




</main>


</body>
</html>