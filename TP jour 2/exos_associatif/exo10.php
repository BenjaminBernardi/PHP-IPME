<?php

$menu = [
    'Google' => 'https://google.fr',
    'Amazon' => 'https://www.amazon.fr/',
    'Spotify' => 'https://open.spotify.com/intl-fr',
    'Youtube' => 'https://www.youtube.com/'
];

?>

<nav>
    <ul>
        <?php foreach ($menu as $label => $ref) : ?>
        <li><a href=<?=$ref?>><?=$label?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
