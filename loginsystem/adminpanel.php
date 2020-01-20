<?php
//sql database
$db =  mysqli_connect(
    'localhost',
    'root',
    '',
    'reservation_system');

$query = "
SELECT * 
FROM customer_data 
";

$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$users = [];

while($row = mysqli_fetch_assoc($result))
{
    // elke rij (dit is een album) wordt aan de array 'albums' toegevoegd.
    $users[] = $row;
}

mysqli_close($db);

$x = '';
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

<h1></h1>

<main class="main">
    <h2><a href="create.php">Create</a></h2>

    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Customer ID</th>
            <th>Username</th>
            <th>E-Mail</th>
            <th>Password</th>
            <th>Role</th>
            <th>Auth Level</th>
            <th>Last Name</th>
            <th>Customer Message</th>
            <th>Moderator Message</th>
            <th>Date Created</th>
            <th>Date Update</th>
        </tr>
        </thead>
        <body>
        <?php foreach ($users as $user) : $x++ ?>
            <?php $_POST['id'] = $user['id']; ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['customer_id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['password'] ?></td>
                <td><?= $user['role'] ?></td>
                <td><?= $user['auth_level'] ?></td>
                <td><?= $user['last_name'] ?></td>
                <td><?= $user['phone_number'] ?></td>
                <td><?= $user['birthdate'] ?></td>
                <td><?= $user['date_created'] ?></td>
                <td><?= $user['date_updated'] ?></td>
                <td><?= $user['last_online'] ?></td>
                <td><a href="<?php echo 'account.php?id='.$user['id'] ?>">Details</a> </td>
                <td><a href="<?php echo 'edit.php?id='.$user['id'] ?>">Edit</a> </td>
            </tr>

        <?php endforeach; ?>
        </body>
        <tfoot>
        <tr>
            <td colspan="7"></td>
        </tr>
        </tfoot>
    </table>

</main>

</body>
</html>
