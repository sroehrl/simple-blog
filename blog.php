<?php
require_once 'config.php';

$blog = $client->getArticle($_GET['slug']);

echo \Neoan3\Apps\Template::embraceFromFile('template/main.html', [
    'title' => $blog['name'],
    'main' => \Neoan3\Apps\Template::embraceFromFile('template/blog.html', $blog)

]);

