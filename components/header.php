<?php

error_reporting(0);

$php_self = explode('/', $_SERVER['PHP_SELF']);
$php_self = $php_self[count($php_self) - 1];

switch ($php_self) {
    case 'contact.php':
        $contact = true;
        break;
    case 'index.php':
        $index = true;
        break;

    default:
        $index = true;
        break;
}

?>

<header>
    <nav>
        <ul>
            <li>
                <h2>Gamers Freedom</h2>
            </li>
            <li><a href="index.php" class="<?= $index ? 'active' : '' ?>">Home</a></li>
            <li>
                <details>
                    <summary>
                        <a href="gamers_room.html">Gamers Room</a>
                    </summary>
                    <ul>
                        <li><a href="gamers_room.html#video">Video Games</a></li>
                        <li><a href="gamers_room.html#board">Board Games</a></li>
                        <li><a href="gamers_room.html#card">Card Games</a></li>
                        <li><a href="gamers_room.html#team">Team Games</a></li>
                    </ul>
                </details>
            </li>
            <li><a href="about_gamers.html">About the Gamers</a></li>
            <li><a href="about_me.html">About Me</a></li>
            <li><a href="contact.php" class="<?= $contact ? 'active' : '' ?>">Get in touch</a></li>
        </ul>
    </nav>
</header>