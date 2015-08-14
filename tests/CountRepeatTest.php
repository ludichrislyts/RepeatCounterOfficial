<?php
	require_once "src/CountRepeat.php";

	class CountRepeatTest extends PHPUnit_Framework_TestCase
	{
		//spec 1 test
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
			$this->assertEquals($answer, $result);
		}
		//spec 2 test
		function test_twoSingleLetterSingleTwoLetter()
		{
			//Arrange
			$test = new CountRepeat;
			$input_word = "If";
			$input_string = "If";

			//Act
			$result = $test->getWordCount($input_word, $input_string);
			$answer = 1;

			//Assert
			$this->assertEquals($answer, $result);
		}
	}
?>
