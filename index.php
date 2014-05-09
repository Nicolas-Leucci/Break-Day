<?php
setlocale(LC_TIME, 'fr_FR');

// Initialize Spyc et YAML
require_once "spyc-master/spyc.php";
require_once "Data.php";
require_once "french.php";

// Get the current day
    $CurrentDate = date("Y-m-d");
    $CurrentDate_str = strtotime($CurrentDate);

// The next weekend day
    $IsWeekend = date("w", strtotime($CurrentDate));
    while($IsWeekend != 0 && $IsWeekend != 6){
        $IsWeekend++;
    }
    $tmp = $IsWeekend - date("w");

    $NextWeekend_design =  date("l j F", strtotime('+'.$tmp.'days'));
    $NextWeekend_str = strtotime(date("Y-m-d", strtotime('+'.$tmp.'days')));

// Next weekend by default
    $Nextdayoff_Date = "<p class=\"nextday text\">".date_fr($NextWeekend_design)."</p>";
    $Nextdayoff_Name = "<p class=\"dayname text\">Weekend</p>";

// Is there a day off before weekend ?
    $i = 0;

    foreach ($Data as $Day) {

    // Get the YML date and compare with current day
        $Dayoff = date("Y-").$Data[$i]['date'];
        $Dayoff_DateTime = strtotime($Dayoff);
        $Dayoff_design = date("l j F", $Dayoff_DateTime);

        if($Dayoff_DateTime > $CurrentDate_str && $Dayoff_DateTime < $NextWeekend_str){
            $Nextdayoff_Date = "<p class=\"nextday text\">".date_fr($Dayoff_design)."</p>";
            $Nextdayoff_Name = "<a href=\"".$Data[$i]['url']."\"><p class=\"dayname text\">".$Data[$i]['name']."</p></a>";
            break;
        }

        $i++;
    }

?>
<!DOCTYPE html>
<html>
<head>
<title>Break-Day</title>
<meta charset="utf-8" />
<meta name="author" content="LEUCCI Nicolas" />
<link rel="stylesheet" href="css/main.css" />
<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
<link rel="start" title="Accueil" href="index.php" />
<link rel="icon" type="image/png" href="img/favicon.ico" />
</head>
	<body>


    <div class="header text">

        <b>Break-Day</b><br /><br />
        @<a href="http://nicolasleucci.fr">Nicolas Leucci</a>


    </div>

    <div class="outback">

        <div class="innerback">

            <div class="content">

                <p class="date">

                    <p class="title text">Reposons nous ce:</p>
                    <?php
                        echo $Nextdayoff_Date;
                    ?>

                    <p class="title text">Car c'est:</p>
                    <?php
                        echo $Nextdayoff_Name;
                    ?>
                </p>
            </div>

        </div>

    </div>

    <div class="time text">

        Nous sommes le
        <br /><br /><b>
        <?php
            echo date_fr(date("l j F Y", time()))
        ?></b>

    </div>


	<script type="text/javascript" src="js/jquery/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.backstretch.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>
