<?php

    $array[] = array('date' => '01-01','name' => 'Jour de l\'an', 'url' => 'http://fr.wikipedia.org/wiki/Jour_de_l%27an');

//Lundi de Pâques
    $GMT = 26*60*60;
    $EasterDate = gmdate("m-d", easter_date(date("Y"))+$GMT);
    $array[] = array('date' => $EasterDate,'name' => 'Lundi de Pâques', 'url' => 'http://fr.wikipedia.org/wiki/P%C3%A2ques');

    $array[] = array('date' => '05-01','name' => 'Fête du travail', 'url' => 'http://fr.wikipedia.org/wiki/F%C3%AAte_du_Travail');

// Ascension, 40 jours après Pâques
    $Days40 = 960*60*60;
    $AscensionDate = gmdate("m-d", easter_date(date("Y"))+$Days40);

    if($AscensionDate < '05-08'){
        $array[] = array('date' => $AscensionDate,'name' => 'Jeudi de l\'Ascension', 'url' => 'http://fr.wikipedia.org/wiki/Ascension_%28f%C3%AAte%29');
        $array[] = array('date' => '05-08','name' => 'Armistice 8 Mai 1945', 'url' => 'http://fr.wikipedia.org/wiki/Seconde_Guerre_mondiale');
    } else {
        $array[] = array('date' => '05-08','name' => 'Armistice 8 Mai 1945', 'url' => 'http://fr.wikipedia.org/wiki/Seconde_Guerre_mondiale');
        $array[] = array('date' => $AscensionDate,'name' => 'Jeudi de l\'Ascension', 'url' => 'http://fr.wikipedia.org/wiki/Ascension_%28f%C3%AAte%29');
    }

// Pentecôte, 50 jours après Pâques
    $Days50 = 1224*60*60;
    $PentecoteDate = gmdate("m-d", easter_date(date("Y"))+$Days50);
    $array[] = array('date' => $PentecoteDate,'name' => 'Lundi de la Pentecôte', 'url' => 'http://fr.wikipedia.org/wiki/Pentec%C3%B4te');

    $array[] = array('date' => '07-14','name' => 'Fête nationale', 'url' => 'http://fr.wikipedia.org/wiki/F%C3%AAte_nationale_fran%C3%A7aise');
    $array[] = array('date' => '08-15','name' => 'Assomption', 'url' => 'http://fr.wikipedia.org/wiki/Assomption_de_Marie');
    $array[] = array('date' => '11-01','name' => 'La Toussaint', 'url' => 'http://fr.wikipedia.org/wiki/Toussaint');
    $array[] = array('date' => '11-11','name' => 'Armistice', 'url' => 'http://fr.wikipedia.org/wiki/Armistice_de_1918');
    $array[] = array('date' => '12-25','name' => 'Noël', 'url' => 'http://fr.wikipedia.org/wiki/No%C3%ABl');

// Create YAML '$Data'
$yaml = Spyc::YAMLDump($array);
$Data = Spyc::YAMLLoad($yaml);
