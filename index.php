<?php
require_once 'config.php';

$articles = $client->getArticleList(['author' => 'neoan']);


echo \Neoan3\Apps\Template::embraceFromFile('list.html', ['articles'=>$articles]);
