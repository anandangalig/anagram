<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_one_letter_true()
        {
            // Arrange
            $test_Anagram = new Anagram;
            $input = "I";
            $target_words = "I";

            // Act
            $result = $test_Anagram->anagram_check($input, $target_words);

            // Assert
            $this->assertEquals(true, $result);
        }

        function test_one_letter_false()
        {
            // Arrange
            $test_Anagram = new Anagram;
            $input = "I";
            $target_words = "a";

            // Act
            $result = $test_Anagram->anagram_check($input, $target_words);

            // Assert
            $this->assertEquals(false, $result);
        }
        //NOTE : not working with multiple words
        function test_one_compatible_word_true()
        {
            // Arrange
            $test_Anagram = new Anagram;
            $input = "listen";
            $target_words = "silent";

            // Act
            $result = $test_Anagram->anagram_check($input, $target_words);

            // Assert
            $this->assertEquals(true, $result);
        }

        function test_one_compatible_word_false()
        {
            // Arrange
            $test_Anagram = new Anagram;
            $input = "listen";
            $target_words = "orange";

            // Act
            $result = $test_Anagram->anagram_check($input, $target_words);

            // Assert
            $this->assertEquals(false, $result);
        }

        //NOTE : not working with multiple words
        function test_partial_compatibility_true()
        {
            // Arrange
            $test_Anagram = new Anagram;
            $input = "low";
            $target_words = "slow";

            // Act
            $result = $test_Anagram->anagram_check($input, $target_words);

            // Assert
            $this->assertEquals(true, $result);
        }

        function test_partial_compatibility_false()
        {
            // Arrange
            $test_Anagram = new Anagram;
            $input = "low";
            $target_words = "fast";

            // Act
            $result = $test_Anagram->anagram_check($input, $target_words);

            // Assert
            $this->assertEquals(false, $result);
        }

        function test_multiple_words_true()
        {
            // Arrange
            $test_Anagram = new Anagram;
            $input = "low";
            $target_words = "slow below belt lower tangerine";

            // Act
            $result = $test_Anagram->anagram_check($input, $target_words);

            // Assert
            $this->assertEquals(true, $result);
        }
    }
 ?>
