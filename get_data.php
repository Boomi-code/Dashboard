<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$data = [
    'enrollment' => [
        'years' => ['2015', '2016', '2017', '2018', '2019', '2020', '2021'],
        'counts' => [500, 550, 580, 620, 700, 750, 800]
    ],
    'gender' => [
        'male' => 540,
        'female' => 620
    ],
    'subjects' => [
        'names' => ['Math', 'Science', 'English', 'History', 'Art'],
        'scores' => [85, 78, 82, 76, 90]
    ],
    'ratio' => [
        'students' => 1160,
        'teachers' => 58
    ]
];

echo json_encode($data);
?>