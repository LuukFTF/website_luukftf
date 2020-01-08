<?php

//variables
$artist = '';
$track = '';
$album = '';
$year = '';
$views = '';
$length = '';
$comments = '';
$tc = '';

$ok = '';

//variable setting from POST_GET
if (isset($_POST['submit'])) {
    $ok = true;

    if (!isset($_POST['artist']) || $_POST['artist'] === '') {
        $ok = false;
    } else {
        $artist = $_POST['artist'];
    };
    if (!isset($_POST['track']) || $_POST['track'] === '') {
        $ok = false;
    } else {
        $track = $_POST['track'];
    };
    if (!isset($_POST['album']) || $_POST['album'] === '') {
        $ok = false;
    } else {
        $album = $_POST['album'];
    };
    if (!isset($_POST['year']) || $_POST['year'] === '') {
        $ok = false;
    } else {
        $year = $_POST['year'];
    };
    if (!isset($_POST['views']) || $_POST['views'] === '') {
        $ok = false;
    } else {
        $views = $_POST['views'];
    };
    if (!isset($_POST['length']) || $_POST['length'] === '') {
        $ok = false;
    } else {
        $length = $_POST['length'];
    };
    if (!isset($_POST['comments']) || $_POST['comments'] === '') {
        $ok = false;
    } else {
        $comments = $_POST['comments'];
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
        <p>Artist: <input type="text" name="artist" value='<?=htmlspecialchars($artist, ENT_QUOTES)?>'</p>
        <p>Track: <input type="text" name="track" value='<?=htmlspecialchars($track, ENT_QUOTES)?>'></p>
        <p>Album: <input type="text" name="album" value='<?=htmlspecialchars($album, ENT_QUOTES)?>'></p>
        <p>Year Released: <input type="text" name="year" value='<?=htmlspecialchars($year, ENT_QUOTES)?>'></p>
        <p>Spotify Plays: <input type="text" name="views" value='<?=htmlspecialchars($views, ENT_QUOTES)?>'></p>
        <p>Length: <input type="text" name="length" value='<?=htmlspecialchars($length, ENT_QUOTES)?>'></p>
        <p>Comments: <textarea name="comments"><?=htmlspecialchars($comments, ENT_QUOTES)?></textarea></p>
        <p><input type="checkbox" name="tc" value="ok" value='<?=htmlspecialchars($tc, ENT_QUOTES)?>'> I accept the terms &amp; conditions </p>
        <input type="submit" name="submit" value="Add Track">
    </form>

    <div class="container">
        <?php
        if ($ok === true) {
            printf('
            <p>Artist</p>
            <h2>%s</h2>
            <p>Track</p>
            <h2>%s</h2>
            <p>Album</p>
            <h2>%s</h2>
            <p>Year</p>
            <h2>%s</h2>
            <p>Spotify Plays</p>
            <h2>%s Plays</h2>
            <p>Length</p>
            <h2>%s Minutes</h2>
            <p>Comments</p>
            <h2>%s</h2>
            <p>Terms and Conditions</p>
            <h2>%s</h2>
            ',
            htmlspecialchars($artist, ENT_QUOTES),
            htmlspecialchars($track, ENT_QUOTES),
            htmlspecialchars($album, ENT_QUOTES),
            htmlspecialchars($year, ENT_QUOTES),
            htmlspecialchars($views, ENT_QUOTES),
                htmlspecialchars($length, ENT_QUOTES),
            htmlspecialchars($comments, ENT_QUOTES),
            htmlspecialchars($tc, ENT_QUOTES)
        );}
        ?>
    </div>

</main>


</body>
</html>