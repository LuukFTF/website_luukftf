<?php


//variables
$id = '';
$customer_id = '';
$username = '';
$email = '';
$password = '';
$role = '';
$auth_level = '';
$name = '';
$last_name = '';
$phone_number = '';
$birthdate = '';
$woonplaats = '';
$date_created = '';
$date_updated = '';
$last_online = '';

$tc = '';



//variable setting from POST_GET
if (isset($_POST['submit'])) {
$ok = true;

if (!isset($_POST['customer_id']) || $_POST['customer_id'] === '') {
$ok = false;
} else {
$customer_id = $_POST['customer_id'];
};
if (!isset($_POST['username']) || $_POST['username'] === '') {
$ok = false;
} else {
$username = $_POST['username'];
};
if (!isset($_POST['email']) || $_POST['email'] === '') {
$ok = false;
} else {
$email = $_POST['email'];
};
if (!isset($_POST['password']) || $_POST['password'] === '') {
$ok = false;
} else {
$password = $_POST['password'];
};
if (!isset($_POST['role']) || $_POST['role'] === '') {
$ok = false;
} else {
$role = $_POST['role'];
};
if (!isset($_POST['auth_level']) || $_POST['auth_level'] === '') {
$ok = false;
} else {
$auth_level = $_POST['auth_level'];
};
if (!isset($_POST['name']) || $_POST['name'] === '') {
$ok = false;
} else {
$last_name = $_POST['name'];
};
if (!isset($_POST['last_name']) || $_POST['last_name'] === '') {
$ok = false;
} else {
$last_name = $_POST['last_name'];
};
if (!isset($_POST['phone_number']) || $_POST['phone_number'] === '') {
$ok = false;
} else {
$phone_number = $_POST['phone_number'];
};
if (!isset($_POST['birthdate']) || $_POST['birthdate'] === '') {
$ok = false;
} else {
$birthdate = $_POST['birthdate'];
};
if (!isset($_POST['date_created']) || $_POST['date_created'] === '') {
$ok = false;
} else {
$date_created = $_POST['date_created'];
};
if (!isset($_POST['date_updated']) || $_POST['date_updated'] === '') {
$ok = false;
} else {
$date_updated = $_POST['date_updated'];
};
if (!isset($_POST['last_name']) || $_POST['last_name'] === '') {
$ok = false;
} else {
$last_name = $_POST['last_name'];
};
if (!isset($_POST['woonplaats']) || $_POST['woonplaats'] === '') {
$ok = false;
} else {
$woonplaats = $_POST['woonplaats'];
};
if (!isset($_POST['last_online']) || $_POST['last_online'] === '') {
$ok = false;
} else {
$last_online = $_POST['last_online'];
};
if (!isset($_POST['tc']) || $_POST['tc'] === '') {
$ok = false;
} else {
$tc = $_POST['tc'];
};
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="/css/main.css" type="text/css" rel="stylesheet">
    <link href="music_collection.css" type="text/css" rel="stylesheet">
    <title>Account Register Page</title>
</head>
<body>
<!--header-->
<?php include '../header.php'; ?>


<main class="main">

    <h1>Login Page</h1>

    <form
        action=""
        method="post"
    <p>Username: <input type="text" name="username" value='<?=$username?>'></p>
    <p>E-Mail: <input type="text" name="email" value='<?=$email?>'></p>
    <p>Password: <input type="password" name="password" value='<?=$password?>'></p>
    <input type="submit" name="submit" value="Register">
    </form>


</main>


</body>
</html>