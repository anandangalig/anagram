<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_one_letter_true()
        {
            // Arrange
            $input = "I";
            $target_words = "I";
            $test_Anagram = new Anagram($input, $target_words);

            // Act
            $test_Anagram->anagram_check();
            $result = $test_Anagram->getMatchedWords();
            $desired_result = ['I'];

            // Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_one_letter_false()
        {
            // Arrange
            $input = "I";
            $target_words = "a";
            $test_Anagram = new Anagram($input, $target_words);

            // Act
            $test_Anagram->anagram_check();
            $result = $test_Anagram->getMatchedWords();
            $desired_result = [];

            // Assert
            $this->assertEquals($desired_result, $result);
        }
        function test_one_compatible_word_true()
        {
            // Arrange
            $input = "listen";
            $target_words = "silent";
            $test_Anagram = new Anagram($input, $target_words);

            // Act
            $test_Anagram->anagram_check();
            $result = $test_Anagram->getMatchedWords();
            $desired_result = ['silent'];

            // Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_one_compatible_word_false()
        {
            // Arrange
            $input = "listen";
            $target_words = "orange";
            $test_Anagram = new Anagram($input, $target_words);

            // Act
            $test_Anagram->anagram_check();
            $result = $test_Anagram->getMatchedWords();
            $desired_result = [];

            // Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_partial_compatibility_true()
        {
            // Arrange
            $input = "low";
            $target_words = "slow";
            $test_Anagram = new Anagram($input, $target_words);

            // Act
            $test_Anagram->anagram_check();
            $result = $test_Anagram->getMatchedWords();
            $desired_result = ['slow'];

            // Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_partial_compatibility_false()
        {
            // Arrange
            $input = "low";
            $target_words = "fast";
            $test_Anagram = new Anagram($input, $target_words);

            // Act
            $test_Anagram->anagram_check();
            $result = $test_Anagram->getMatchedWords();
            $desired_result = [];

            // Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_multiple_words_true()
        {
            // Arrange
            $input = "low";
            $target_words = "slow below belt lower tangerine";
            $test_Anagram = new Anagram($input, $target_words);

            // Act
            $test_Anagram->anagram_check();
            $result = $test_Anagram->getMatchedWords();
            $desired_result = ['slow', 'below', 'lower'];

            // Assert
            $this->assertEquals($desired_result, $result);
        }
    }
 ?>
