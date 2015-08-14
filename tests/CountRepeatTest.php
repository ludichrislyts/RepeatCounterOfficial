<?php
	require_once "src/CountRepeat.php";

	class CountRepeatTest extends PHPUnit_Framework_TestCase
	{
		//first test
		function()
		{
			//Arrange
			 $test = new CountRepeat;

			//Act
			 $result = $test->getWordCount("");
			 $answer = 1;

			//Assert
			->assertEquals(, );

		}
	}
?>
