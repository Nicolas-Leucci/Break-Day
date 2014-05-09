<?php

function date_fr($format) {

    $texte_en = array(
        "Monday", "Tuesday", "Wednesday", "Thursday",
        "Friday", "Saturday", "Sunday", "January",
        "February", "March", "April", "May",
        "June", "July", "August", "September",
        "October", "November", "December"
    );
    $texte_fr = array(
        "Lundi", "Mardi", "Mercredi", "Jeudi",
        "Vendredi", "Samedi", "Dimanche", "Janvier",
        "F&eacute;vrier", "Mars", "Avril", "Mai",
        "Juin", "Juillet", "Ao&ucirc;t", "Septembre",
        "Octobre", "Novembre", "D&eacute;cembre"
    );

    $date_fr = str_replace($texte_en, $texte_fr, $format);

    return $date_fr;
}
