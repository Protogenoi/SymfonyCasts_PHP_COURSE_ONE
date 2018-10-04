<?php

function get_pets($limit = null)
{

    $config = require 'config.php';

    $pdo = new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_pass']
    );
    // THIS IS A HUGE SECURITY FLAW - TODO - WE WILL FIX THIS!
    $query = 'SELECT * FROM pet';
    if ($limit) {
        $query = $query . ' LIMIT ' . $limit;
    }
    $result = $pdo->query($query);
    $pets = $result->fetchAll();

    return $pets;

}

function save_pets($petsToSave)
{

    $json = json_encode($petsToSave, JSON_PRETTY_PRINT);
    file_put_contents('data/pets.json', $json);

}