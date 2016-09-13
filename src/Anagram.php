<?php
    class Anagram{
        private $input;
        private $target_words;

        function anagram_check($input, $target_input)
        {
            $input_letters = str_split($input);
            $target_words = explode(" ", $target_input);
            sort($input_letters);
            $counter = 0;



            foreach ($target_words as $word)
            {
                $target_letters = str_split($word);
                // sort($target_letters);
                foreach ($target_letters as $target)
                {
                    foreach ($input_letters as $letter)
                    {
                        if ($letter === $target)
                        {
                            $counter++;
                            echo $counter;
                        }
                    }
                }
            }
            if ($counter >= count($input_letters))
            {
                // $anagram = implode("", $word);
                // echo $anagram . "is an anagram!";
                return true;
            }
            else if ($counter < count($input_letters)) {
                return false;
            }


        }
    }
 ?>
