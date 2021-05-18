<?php

    require "class/DB.php";

    DB::connect(); // otevři spojení s DB
    $records = DB::fetchQueryToArray("SELECT * FROM autor WHERE prijmeni LIKE 'W%';"); // načti dotaz do pole
//    $records = DB::fetchAll(DB::query("SELECT * FROM autor WHERE prijmeni LIKE 'W%';"));
    var_dump($records); // vypiš obsah proměnné
    DB::close(); // ukonči spojení s DB
?>