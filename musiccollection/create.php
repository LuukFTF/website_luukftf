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

//variable setting from POST_GET
if (isset($_POST['submit'])) {
    if (isset($_POST['artist'])) {
        $artist = $_POST['artist'];
    };
    if (isset($_POST['track'])) {
        $track = $_POST['track'];
    };
    if (isset($_POST['album'])) {
        $album = $_POST['album'];
    };
    if (isset($_POST['year'])) {
        $year = $_POST['year'];
    };
    if (isset($_POST['views'])) {
        $views = $_POST['views'];
    };
    if (isset($_POST['length'])) {
        $length = $_POST['length'];
    };
    if (isset($_POST['comments'])) {
        $comments = $_POST['comments'];
    };
    if (isset($_POST['tc'])) {
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
        <p>Artist: <input type="text" name="artist"></p>
        <p>Track: <input type="text" name="track"></p>
        <p>Album: <input type="text" name="album"></p>
        <p>Year Released: <input type="text" name="year"></p>
        <p>Spotify Plays: <input type="text" name="views"></p>
        <p>Length: <input type="text" name="length"></p>
        <p>Comments: <textarea name="comments"></textarea></p>
        <p><input type="checkbox" name="tc" value="ok"> I accept the terms &amp; conditions </p>
        <input type="submit" name="submit" value="Add Track">
    </form>

    <div class="container">
        <?php printf('
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
            $artist,
            $track,
            $album,
            $year,
            $views,
            $length,
            $comments,
            $tc
        );
        ?>
    </div>

</main>


</body>
</html>