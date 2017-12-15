<?php


//Récupérer la liste des logement
//@return arrayListe des logements


function getAllLogements() : array {
    $liste_logements [0] = [
        "titre" => "Gare sud",
        "prix" => 445000,
        "image" => "property-01.jpg",
        "date_creation" => new DateTime("2017-06-12"),
        "type" => "Appartement",
        "superficie" => 320,
        "nb_chambres" => 2
    ];


    $liste_logements [1] = [
        "titre" => "Brequigny",
        "prix" => 210000,
        "image" => "property-02.jpg",
        "date_creation" => new DateTime("2017-09-12"),
        "type" => "Appartement",
        "superficie" => 260,
        "nb_chambres" => 1
    ];


    $liste_logements [2] = [
        "titre" => "Arsenal",
        "prix" => 360000,
        "image" => "property-03.jpg",
        "date_creation" => new DateTime("2017-09-15"),
        "type" => "Appartement",
        "superficie" => 160,
        "nb_chambres" => 2
    ];
    return $liste_logements ;
}
