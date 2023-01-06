<!DOCTYPE html>
<html>

<head>
    <title>Exercise 3</title>
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
     * compute a total score based on array of integers
     *
     * @param Array $arr
     * @return Int $total_score 
     *
     */
    function compute_score($arr): int
    {
        // initialize total score
        $total_score = 0;

        // iterate through array of integers
        foreach ($arr as $item) {
            if ($item == 8) // add 5 if item is 8
                $total_score += 5;
            elseif ($item % 2 == 0)  // add 1 if item is even
                $total_score++;
            else // add 1 if item is odd
                $total_score += 3;
        }

        return $total_score;
    }

    /**
        Test Cases
    */
    $list1 = [1, 2, 3, 4, 5];
    $list2 = [8, 5, 2];
    echo compute_score($list1);
    echo '<br>' . compute_score($list2);
    ?>

</body>

</html>