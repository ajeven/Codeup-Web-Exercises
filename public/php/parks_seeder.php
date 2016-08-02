<?php
require_once 'parks_migration.php';

$parks = [
    ['name' => 'Acadia',       'location' => 'Maine',       'date_established' => '1919/02/26', 'area_in_acres' => '47389.67'],
    ['name' => 'Big Bend',     'location' => 'Texas', 	    'date_established' => '1944/06/12', 'area_in_acres' => '801163.21'],
    ['name' => 'Capitol Reef', 'location' => 'Utah',        'date_established' => '1971/12/18', 'area_in_acres' => '241904.26'],
    ['name' => 'Denali',       'location' => 'Alaska',      'date_established' => '1917/02/26', 'area_in_acres' => '4740911.72'],
    ['name' => 'Everglades',   'location' => 'Florida',     'date_established' => '1934/05/30', 'area_in_acres' => '1508537.90'],
    ['name' => 'Grand Teton',  'location' => 'Whyoming',    'date_established' => '1929/02/26', 'area_in_acres' => '309004.66'],
    ['name' => 'Hot Springs',  'location' => 'Arkansas',    'date_established' => '1921/03/04', 'area_in_acres' => '554975'],
    ['name' => 'Isle Royale',  'location' => 'Michigan',    'date_established' => '1940/04/03', 'area_in_acres' => '571790.11'],
    ['name' => 'Joshua Tree',  'location' => 'California',  'date_established' => '1994/10/31', 'area_in_acres' => '789745.47'],
    ['name' => 'Olympic',      'location' => 'Washington',  'date_established' => '1938/06/29', 'area_in_acres' => '922650.86'],
    ['name' => 'Shenandoah',   'location' => 'Virginia',    'date_established' => '1926/05/22', 'area_in_acres' => '199045.23'],
];

foreach ($parks as $key => $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) 
    VALUES ('{$parks[$key]['name']}', '{$parks[$key]['location']}', '{$parks[$key]['date_established']}', '{$parks[$key]['area_in_acres']}')";
   
    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}