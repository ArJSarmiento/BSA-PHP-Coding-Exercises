<!DOCTYPE html>
<html>
<head>
    <title>Exercise 5</title>
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
     * takes a list of strings an prints them, one per line, 
     * in a rectangular frame.
     *
     * @param Array $arr
     * @return Null
     *
     */
    function compute_score($arr): void
    {
        // get the length of the longest string
        $max_len = 0;
        foreach ($arr as $item) {
            $max_len = max($max_len, strlen($item));
        }

        // prints the top border
        echo '*' . str_repeat('*', $max_len + 2) . '*' . '<br>';

        // print the strings
        foreach ($arr as $item) {
            echo '*' . ' ' . $item . str_repeat('&nbsp;', $max_len - strlen($item)) . ' ' . '*' . '<br>';
        }

        // print the bottom border
        echo '*' . str_repeat('*', $max_len + 2) . '*' . '<br>';
    }

    /**
        Test Cases
    */
    $arr = [
        'Hello',
        'World',
        'in',
        'a',
        'frame'
    ];

    compute_score($arr);
    
    ?>

</body>
</html>