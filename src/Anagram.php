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

          sort($split_word_array);
          sort($array_of_letters);

          if ($array_of_letters === $split_word_array) {
            $output_word = $single_word;
            $output = $output_word;
            break; 
          }

          else { $error_message = "No anagrams found.";
                    $output = $error_message;
                }

        }
        var_dump($output);
        //
        // if ($output = "") {
        //   $error_message = "No anagrams found.";
        //   return $error_message;
        // }

        return $output;
      }

    }

?>
