<!DOCTYPE html>
<html>

<head>
    <title>Exercise 1</title>
    <style>
        * {
            font-family: monospace;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php

    /**
     * translates a text to Pig Latin and back.
     *
     * @param String $text
     * @return String $result 
     *
     */
    function pig_latin_translator($text): string
    {
        // Array map function to translate each word
        $result_array = array_map(
            // interates initial array
            function ($word) {
                return (substr($word, -2) == "ay") ?
                    //  if word ends with "ay" then remove "ay" and move last letter to the first
                    substr($word, -3, 1) . substr($word, 0, -3)
                    :
                    // if word does not end with "ay" then move first letter to end and add "ay"
                    substr($word, 1) . substr($word, 0, 1) . "ay";
            },
            explode(" ", strtolower($text)) // uses input string to create initial array
        );

        // returns string with first letter capitalized using the result array
        return ucfirst(implode(" ", $result_array));
    }

    /**
        Test Cases
    */
    $text = "The quick brown fox";
    $pig_latin_text = pig_latin_translator($text);
    echo $pig_latin_text;  // Output: "Hetay uickqay rownbay oxfay"

    $pig_latin_text = "Ackpay ymay oxbay ithway ivefay ozenday iquorlay ugsjay";
    $text = pig_latin_translator($pig_latin_text);
    echo "<br>" . $text;  // Output: "Pack my box with five dozen liquor jugs"
    ?>

</body>

</html>