<?php

$studentGrades = [
    'student_1' => ['Math' => 80, 'English' => 85, 'Science' => 90],
    'student_2' => ['Math' => 85, 'English' => 90, 'Science' => 95],
    'student_3' => ['Math' => 70, 'English' => 60, 'Science' => 50],
];
function calculateAverage($studentGrades) {
    $averageGrades = [];
    foreach ($studentGrades as $student => $grades) {
        $averageGrade = array_sum($grades) / count($grades);
        $averageGrades[$student] = $averageGrade;
    }
    array_walk($averageGrades, function ($value, $key) {
        echo "Average grade for $key : $value \n";
    });
}
calculateAverage($studentGrades);