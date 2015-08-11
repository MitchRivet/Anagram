<?php


    class Anagram
    {
        function findAnagram($input_word)
      {
        include "anagram_library.php";

        $array_of_letters = str_split($input_word);
        $output = "";

        foreach ($library as $single_word)
        {

          $split_word_array = str_split($single_word);
          $numbers = array("1", "2", "3", "4", "5",
          "6", "7", "8", "9", "0") ;
          sort($numbers);
          sort($split_word_array);
          sort($array_of_letters);

          if ($array_of_letters === $split_word_array) {
            $output_word = $single_word;
            $output = $output_word;
            break;
          }
          elseif (array_intersect($array_of_letters, $numbers)) {
            $number_message = "Please enter a single word.";
            $output = $number_message;
            break;
          }

          else { $error_message = "No anagrams found.";
                    $output = $error_message;
                }

        }
        var_dump($output);

        return $output;
      }

    }

?>
