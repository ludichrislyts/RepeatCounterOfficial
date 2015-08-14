<?php
	class CountRepeat
	{
		function getWordCount($word, $string)
		{
			$count = 0;
			$lower_case_word = strtolower($word);
			$lower_case_string = strtolower($string);
			//remove non-alphas
			$lower_case_string = preg_replace("/[^a-z^]/", " ", $lower_case_string);
			//turn string into word array
			$words_to_search = explode(" ", $lower_case_string);
			var_dump($words_to_search);
			if (in_array($lower_case_word, $words_to_search)){
				//count occurrences of words, create assoc word/freq array
				$condensed_array = array_count_values($words_to_search);
				var_dump($condensed_array);
				//get frequency value from word
				$count = $condensed_array[$lower_case_word];
				return $count;
			}
		}
	}
?>
