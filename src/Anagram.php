<?php
    class Anagram{
        private $input;
        private $target_words;

        function anagram_check($input, $target_words)
        {
            $input_letters = str_split($input);
            $target_letters = str_split($target_words);
            sort($input_letters);
            sort($target_letters);

            if ($input_letters === $target_letters)
            {
                return true;
            }
            else {
                return false;
            }
        }
    }
 ?>
