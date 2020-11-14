<?php

namespace Applications\Test\Controllers;

use Tuxxedo\Controller;

class Index extends Controller
{
	public function hello() : void
	{
		echo 'Hello World', \PHP_EOL;
	}

	public function displayNews(int $id) : void
	{
		printf('Displaying news article with id %d', $id);
	}
}