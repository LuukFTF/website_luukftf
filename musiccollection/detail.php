<?php
    // ?id=1
    if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        header('location: index.php');
    }


//Multi dimensional array with the music collection data
$x = 0;
$listOrder = ['id', 'Artist', 'Album', 'Year', 'Track', 'Views', 'Length'];
$musicAlbums = [
    [
        'id' => 0,
        'Artist' => 'Rick Astley',
        'Track' => 'Never Gonna Give You Up',
        'Album' => 'You Need Somebody',
        'Year' => 1987,
        'Views' => 200000000,
        'Length' => 3,
    ],
    [
        'id' => 1,
        'Artist' => 'Foster The People',
        'Track' => 'Pumped Up Kicks',
        'Album' => 'Torches',
        'Year' => 2011,
        'Views' => 400000000,
        'Length' => 4,
    ],
    [
        'id' => 2,
        'Artist' => "Smash Mouth",
        'Track' => "All Star",
        'Album' => "Astro Lounge",
        'Year' => 1999,
        'Views' => 480000000,
        'Length' => 3,
    ],
    [
        'id' => 3,
        'Artist' => "Vektroid",
        'Track' => "Macintosh Plus",
        'Album' => "Floral Shoppe",
        'Year' => 2011,
        'Views' => 3000000,
        'Length' => 7,
    ],
    [
        'id' => 4,
        'Artist' => "Shanguy",
        'Track' => "King of the Jungle",
        'Album' => "King of the Jungle",
        'Year' => 2018,
        'Views' => 11000000,
        'Length' => 2.7,
    ],
    [
        'id' => 5,
        'Artist' => "333ak",
        'Track' => "Void",
        'Album' => "Droned Adventures",
        'Year' => 2019,
        'Views' => "<1000",
        'Length' => 3.3,
    ],
    [
        'id' => 6,
        'Artist' => "Muse",
        'Track' => "Psycho",
        'Album' => "Drones",
        'Year' => 2015,
        'Views' => "123000000",
        'Length' => 5.3,
    ],
    [
        'id' => 7,
        'Artist' => "Avicii",
        'Track' => "The Nights",
        'Album' => "The Nights",
        'Year' => 2014,
        'Views' => "500000000",
        'Length' => 2.9,
    ],
    [
        'id' => 8,
        'Artist' => "Joost",
        'Track' => "Joost Klein 2",
        'Album' => "1983",
        'Year' => 2019,
        'Views' => "800000",
        'Length' => 2.1,
    ],
    [
        'id' => 9,
        'Artist' => "MGMT",
        'Track' => "Electric Feel",
        'Album' => "Oracular Spectacular",
        'Year' => 2007,
        'Views' => "300000000",
        'Length' => 3.8,
    ],
    [
        'id' => 10,
        'Artist' => "De Staat",
        'Track' => "Tie Me Down",
        'Album' => "Bubble Gum",
        'Year' => 2019,
        'Views' => "700000",
        'Length' => 2.1,
    ],
];


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

    <div class="container">
        <?php printf('
            <p>id<p/>
            <h2>%s</h2>
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
            ',
            $id,
            $musicAlbums[$id]['Artist'],
            $musicAlbums[$id]['Track'],
            $musicAlbums[$id]['Album'],
            $musicAlbums[$id]['Year'],
            $musicAlbums[$id]['Views'],
            $musicAlbums[$id]['Length'],
        )?>
    </div>




</main>


</body>
</html>