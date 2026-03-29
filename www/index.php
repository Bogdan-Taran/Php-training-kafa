<?php
$array1 = [
    'element_1' => [
        'element_1_1' => [
            'element_1_1_1' => [
                'element_1_1_1_1',
                'element_1_1_1_2',
                'element_1_1_1_3'
            ],
            'element_1_1_2' => [
                'element_1_1_2_1',
                'element_1_1_2_2',
            ]
        ],
        'element_1_2' => 'value_1_2'
    ],
    'element_2' => 'value_2',
    'element_3' => [],
];
$array1['element_1']['element_1_1']['element_1_1_1'] = 'new element';
print_r($array1);
?>
