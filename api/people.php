<?php

//Симуляция - обычно здесь программный код, 
//который извлекает данные из БД
$people = [
    array("firstName" => "Yuri", "lastName" => "Andrienko", "salary" => 123456 ),
    array("firstName" => "Vasya", "lastName" => "Pipkin", "salary" => 77777 ),
    array("firstName" => "Yulia", "lastName" => "Yulkina", "salary" => 300000 ),
    array("firstName" => "Andrey", "lastName" => "Andreeev", "salary" => 300000 ),
];

 //Ну, а фильтрация - вполне реальная:

$letters = strtolower($_REQUEST["letters"]);

$results = [];
foreach($people as $person) {
    if (str_starts_with(strtolower($person["lastName"]), $letters)) {
        array_push($results, $person);
    }
}

echo(json_encode($results));