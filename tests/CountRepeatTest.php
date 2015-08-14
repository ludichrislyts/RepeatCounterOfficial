<?php
	require_once "src/CountRepeat.php";

	class CountRepeatTest extends PHPUnit_Framework_TestCase
	{
		//first test
		function test_findSingleLetterSingleLetter()
		{
			//Arrange
			$test = new CountRepeat;
			$input_word = "A";
			$input_string = "A";

			//Act
			$result = $test->getWordCount($input_word, $input_string);
			$answer = 1;

			//Assert
			$test->assertEquals($answer, $result);
		}
	}
?>
