<!DOCTYPE html>
<html>

<head>
    <title>Exercise 4</title>
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
     * create a roster for the school and 
     * display each list in alphabetical order.
     * @param Array $arr
     * @return Array $total_score 
     *
     */
    function create_roster($students): void
    {
        // Sort the students by grade and name
        usort($students, function ($a, $b) {
            // if the grades are the same, sort by name
            if ($a['grade'] == $b['grade']) {
                return strcmp($a['name'], $b['name']);
            }
            // sort by grade
            return $a['grade'] - $b['grade'];
        });

        // initialize roster array
        $roster = [];

        // iterate over the students and transform to $roster array
        foreach ($students as $student) {
            $grade = $student['grade'];
            // add the grade to the roster if it doesn't exist
            if (!isset($roster[$grade])) {
                $roster[$grade] = [];
            }
            // add the student to the roster
            $roster[$grade][] = $student['name'];
        }

        // Print the roster
        foreach ($roster as $grade => $names) {
            echo '<br>' . "Grade $grade" . '<br>';
            foreach ($names as $name) {
                echo '&emsp;' . "$name" . '<br>';
            }
        }
    }

    /**
        Test Cases
    */
    $students = [
        ['name' => 'Ana', 'grade' => 1],
        ['name' => 'Bert', 'grade' => 1],
        ['name' => 'Ernie', 'grade' => 1],
        ['name' => 'Andy', 'grade' => 2],
        ['name' => 'Bob', 'grade' => 2],
        ['name' => 'David', 'grade' => 2],
    ];
    create_roster($students);
    ?>

</body>

</html>