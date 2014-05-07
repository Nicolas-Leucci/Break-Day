<?php
function Easter(){
    // Date de Pâques
    $GMT = 2*60*60;
    $EasterDate = gmdate("Y-m-d", easter_date(date("Y"))+$GMT);
    return $EasterDate;
}

function Ascension(){
    // Date de l'Ascension, 40 jours après Pâques
    $Days40 = 960*60*60;
    $AscensionDate = gmdate("Y-m-d", easter_date(2015)+$Days40);
    return $AscensionDate;
}
