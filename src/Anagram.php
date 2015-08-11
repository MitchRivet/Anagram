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

          $split_word = str_split($single_word);
          if(in_array($array_of_letters, $split_word))
          {
            $output_word = $single_word;
            $output .= $output_word;
          } else { $error_message = "No anagrams found.";
                    $output .= $error_message;

          }

        }

        return $output;
      }

    }

?>
