<?php
require_once 'config.php';

$blog = $client->getArticle($_GET['slug']);

echo \Neoan3\Apps\Template::embraceFromFile('blog.html', $blog);
