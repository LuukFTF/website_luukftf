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

<main>
    <p>
        <?php
        echo "My first PHP script!";
        ?>
    </p>

    <p><a href="week1.txt">Source Code</a></p>

    <div>
        <h1> Opdracht 1.1 - Datum en tijd</h1>
        <hr/>

        <p>
            <?php
            $nextWeek = time() + (7 * 24 * 60 * 60);
            // 7 days; 24 hours; 60 mins; 60 secs
            echo 'Now:       '. date('Y-m-d') ."</br>";
            echo 'Next Week: '. date('Y-m-d', $nextWeek)  ."</br>";
            echo date('D-d-S-W-a A-U-T')
            ?>
        </p>

        <h2><?php echo 'Het is vandaag '.date('d F Y') ?></h2>
        <p>

        </p>

        <h2><?php echo 'Het is vandaag '.date('Y-m-d') ?></h2>
        <p>

        </p>

        <h2><?php echo 'Het is nu '.date('g').' uur en '.date('i').' minuten' ?></h2>
        <p>

        </p>

        <h2><?php echo 'De exacte tijd is '.date('H:i:s:u:v e') ?></h2>
        <p>

        </p>
    </div>
</main>




</body>
</html>




