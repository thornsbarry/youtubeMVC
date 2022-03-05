<?php

require "config.php";
require "vendor/autoload.php";

use Models\Database;
use Controllers\Users;
use Controllers\Articles;

$dt = new Database();

//$user = Users::create_user("Bob");
///$user = Articles::create_article("title", 1);

$users = Users::show_users();
//var_dump($user->name);
foreach($users as $user) {
	echo $user->name."<br>";
	foreach($user->articles as $article) {
		echo $article->title.'<br>';
	}
}

