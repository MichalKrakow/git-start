<?php


class ClassName extends AnotherClass
{
	
	function __construct(argument)
	{

	}

	public function someCrazyHeavyStuff()
	{
		$some = getSome('get some');
		return $some;
	}

	public function frontAddedMe()
	{
		return 'why would he do that...';
	}

	public function whatTheFrontIsDoingThere()
	{
		return "hope it dont sucks";
	}

	public function here(){
		return frontAddedMe();
	}
}