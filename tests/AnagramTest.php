<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_findAnagram_singleLetterError()
        {
            //Arrange
            $test_Anagram = new Anagram; 
            $input = "a";

            //Act
            $result = $test_Anagram->findAnagram($input);

            //Assert
            $this->assertEquals("No anagrams found.", $result);
        }

        // function test_findAnagram_twoLetter()
        // {
        //     //Arrange
        //     $test_AnagramTest = new AnagramTest;
        //     $input
        // }
    }
?>
