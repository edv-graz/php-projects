<?php

$my_data = [
    'SO' => 'sonntag',
    'MO' => 'nontag',
    'DI' => 'dienstag',
    'MI' => 'mittwoch',
    'DO' => 'donnerstag',
    'FR' => 'freitag',
    'SA' => 'samstag'
];
function debugging(&$data)
{
    array_splice($data, 0, 1);
    foreach ($data as $day) {
        echo $day . '<br>';
    }
    $data['SO'] = 'sonntag';
}
debugging($my_data);

