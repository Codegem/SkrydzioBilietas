<?php
$date = date("Y-m-d");
$galiojimas = strtotime($date."+ 7 days");
$kaina = 60;
$bagazas = 30;
$masyvas = [
    'skrydzionr' => [1, 2, 3, 4, 5],
    'iskur' => ['Kaunas', 'Vilnius', 'Klaipeda', 'Talinas'],
    'ikur' => ['Vienna', 'Paryzius', 'Roma', 'NewYork', 'Frankfurt'],
    'bagazas' => [20, 30, 40]
];