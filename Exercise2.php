<!DOCTYPE html>
<html>

<head>
    <title>Exercise 2</title>
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
     * combines two lists by alternatingly taking elements
     *
     * @param Array $arr1
     * @param Array $arr2 
     * @return Array 
     *
     */
    function combine($arr1, $arr2): array
    {
        // initialize result array
        $result_array = [];
        // get higher length between two arrays
        $max_len = max(count($arr1), count($arr2));

        // iterate through the arrays using $max_len
        for ($i = 0; $i < $max_len; $i++) {
            // add $arr1 element to result array if exists
            if (isset($arr1[$i])) {
                $result_array[] = (string) $arr1[$i];
            }

            // add $arr2 element to result array if exists
            if (isset($arr2[$i])) {
                $result_array[] = (string) $arr2[$i];
            }
        }

        return $result_array;
    }

    /**
        Test Cases
    */
    $list1 = ['a', 'b', 'c'];
    $list2 = [1, 2, 3];
    $combined_list = combine($list1, $list2);
    echo '[' . implode(',', $combined_list) . ']'; // Output: [a, 1, b, 2, c, 3]
    ?>

</body>

</html>