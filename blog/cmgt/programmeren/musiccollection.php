<?php
//Multi dimensional array with the music collection data
$x = 0;
$listOrder = ['#', 'Artist', 'Album', 'Year', 'Track', 'Views'];
$musicAlbums = [
    [
        '#' => 1,
        'Artist' => 'Foster The People',
        'Track' => 'Pumped Up Kicks',
        'Album' => 'Torches',
        'Year' => 2011,
        'Views'=> 400000000,
    ],
    [
        '#' => 2,
        'Artist' => "Smash Mouth",
        'Track' => "All Star",
        'Album' => "Astro Lounge",
        'Year' => 1999,
        'Views'=> 480000000,
    ],
    [
        '#' => 3,
        'Artist' => "Vektroid",
        'Track' => "Macintosh Plus",
        'Album' => "Floral Shoppe",
        'Year' => 2011,
        'Views'=> 0,
    ],
    [
        '#' => 3,
        'Artist' => "Shanguy",
        'Track' => "King of the Jungle",
        'Album' => "King of the Jungle",
        'Year' => 2018,
        'Views'=> 10600000,
    ],
    [
        '#' => 3,
        'Artist' => "333ak",
        'Track' => "Smoke",
        'Album' => "Droned Adventures",
        'Year' => 2019,
        'Views'=> "<1000",
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="/css/main.css" type="text/css" rel="stylesheet">
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
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Artist</th>
            <th>Track</th>
            <th>Albumr</th>
            <th>Year</th>
            <th>Spotify Plays</th>
        </tr>
        </thead>
        <body>
            <?php foreach ($musicAlbums as $item) : $x++ ?>
            <tr>
                <td><?= $item['#'] ?></td>
                <td><?= $item['Artist'] ?></td>
                <td><?= $item['Track'] ?></td>
                <td><?= $item['Album'] ?></td>
                <td><?= $item['Year'] ?></td>
                <td><?= $item['Views'] ?></td>
            </tr>
            <?php endforeach; ?>
        </body>
        <tfoot>
        <tr>
            <td colspan="6">&copy; My Music Collection</td>
        </tr>
        </tfoot>
    </table>
</main>

</body>
</html>
