<?php

// Créer un tableau contenant toutes les dates
    $array[] = array('date' => '01-01','name' => 'Jour de l\'an');

// Dâte du Lundi de Pâques
    $GMT = 26*60*60;
    $EasterDate = gmdate("m-d", easter_date(date("Y"))+$GMT);
    $array[] = array('date' => $EasterDate,'name' => 'Lundi de Pâques');

    $array[] = array('date' => '05-01','name' => 'Fête du travail');

// Date de l'Ascension, 40 jours après Pâques
    $Days40 = 960*60*60;
    $AscensionDate = gmdate("m-d", easter_date(date("Y"))+$Days40);

    if($AscensionDate < '05-08'){
        $array[] = array('date' => $AscensionDate,'name' => 'Jeudi de l\'Ascension');
        $array[] = array('date' => '05-08','name' => 'Armistice 8 Mai 1945');
    } else {
        $array[] = array('date' => '05-08','name' => 'Armistice 8 Mai 1945');
        $array[] = array('date' => $AscensionDate,'name' => 'Jeudi de l\'Ascension');
    }

    // Date de la Pentecôte, 50 jours après Pâques
    $Days50 = 1224*60*60;
    $PentecoteDate = gmdate("m-d", easter_date(date("Y"))+$Days50);
    $array[] = array('date' => $PentecoteDate,'name' => 'Lundi de la Pentecôte');


    $array[] = array('date' => '07-14','name' => 'Fête nationale');
    $array[] = array('date' => '08-15','name' => 'Assomption');
    $array[] = array('date' => '11-01','name' => 'La Toussaint');
    $array[] = array('date' => '11-11','name' => 'Armistice');
    $array[] = array('date' => '12-25','name' => 'Noël');

// Prochain jour est un weekend ?



// Créer et charger le YAML $Data
$yaml = Spyc::YAMLDump($array);
$Data = Spyc::YAMLLoad($yaml);
var_dump($yaml);
