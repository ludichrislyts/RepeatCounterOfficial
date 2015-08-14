<?php
	class CountRepeat
	{
		function getWordCount($word, $string)
		{
			$count = 0;
			$words_to_search = explode(" ", $string);
			if (in_array($word, $words_to_search)){
				++$count;
				return $count;
			}
		}
	}
?>
