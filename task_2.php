<?php
$events = [
    [
        'date' => '2019-12',
        'event' => 'name1'
    ],
    [
        'date' => '2019-12',
        'event' => 'name2'
    ],
    [
        'date' => '2019-11',
        'event' => 'name3'
    ],
    [
        'date' => '2019-11',
        'event' => 'name4'
    ],
    [
        'date' => '2020-10',
        'event' => 'name5'
    ],
    [
        'date' => '2020-10',
        'event' => 'name6'
    ],
    [
        'date' => '2020-11',
        'event' => 'name5'
    ],
    [
        'date' => '2020-11',
        'event' => 'name6'
    ],
    [
        'date' => '2020-12',
        'event' => 'name7'
    ],
    [
        'date' => '2020-12',
        'event' => 'name8'
    ],
    [
        'date' => '2020-12',
        'event' => 'name9'
    ],
];

$eventsSorts = [];



foreach ($events as $key => $value) {

    $eventsNames = [];
    foreach ($events as $keyQ => $valueQ) {
        if ($valueQ['date'] === $value["date"]) {
            $eventsNames[] = $valueQ["event"];
        }

    }
    $date = explode("-", $value["date"]);

    $year = $date[0];
    $month = $date[1];
    $eventsSorts[$year][$month] = $eventsNames;

}

var_dump($eventsSorts);