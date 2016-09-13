<?php
    class Anagram{
        private $input;
        private $target_words;
        private $matched_words;

        function __construct($input, $target_words)
        {
            $this->input = $input;
            $this->target_words = $target_words;
            $this->matched_words = [];
        }

        function getInput()
        {
            return $this->input;
        }
        function setInput($new_input)
        {
            $this->input = (string) $new_input;
        }

        function getTargetWords()
        {
            return $this->target_words;
        }
        function setTargetWords($new_target_words)
        {
            $this->target_words = (string) $new_target_words;
        }

        function getMatchedWords()
        {
            return $this->matched_words;
        }
        function setMatchedWords($new_matched_words)
        {
            $this->matched_words = (string) $new_matched_words;
        }


        function anagram_check()
        {
            $input_letters = str_split($this->input);
            $target_words = explode(" ", $this->target_words);
            $matched_words = [];

            foreach ($target_words as $word)
            {
                $counter = 0;
                $target_letters = str_split($word);
                foreach ($target_letters as $target)
                {
                    foreach ($input_letters as $letter)
                    {
                        if ($letter === $target)
                        {
                            $counter++;
                        }
                    }
                }
                if ($counter >= count($input_letters))
                {
                    array_push($this->matched_words, $word);
                }
            }
        }
    }
 ?>
