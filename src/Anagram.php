<?php


    class Anagram
    {
        function findAnagram($input_word)
      {
        include "new_anagram_library.php";

        $library = explode("\n", $new_library);
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
          $no_space = array(" ");

          if ($array_of_letters === $split_word_array)
          // if (array_intersect($array_of_letters, $split_word_array))
          {
            // $matching_words = in_array($input_word, $library);
            $output_word = $single_word;
            $output = $output_word;
            // $output = implode(" ", $matching_words);
            break;
          }

          elseif (array_intersect($array_of_letters, $numbers)) {
            $number_message = "Please enter a single word.";
            $output = $number_message;
            break;
          }
          elseif (array_intersect($array_of_letters, $no_space))
          {
            $number_message = "Please enter a single word.";
            $output = $number_message;
            break;
          }

          else { $error_message = "No anagrams found.";
                    $output = $error_message;
                }

        }

        return $output;
      }

    }

?>
