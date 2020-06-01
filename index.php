<?php
require_once 'config.php';

$articles = [];
$articles = $client->getArticleList(['author' => 'neoan']);


echo \Neoan3\Apps\Template::embraceFromFile('template/main.html', [
    'title' => 'My blog',
    'main' => \Neoan3\Apps\Template::embraceFromFile('template/list.html', [
        'articles'=>$articles
    ])

]);
