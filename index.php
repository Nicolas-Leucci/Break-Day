<?php

// Initialize Spyc et YAML
    require_once "spyc-master/spyc.php";
    $Data = Spyc::YAMLLoad('Data-day.yml');

// Get the current day
    $CurrentDate = date("Y-m-d");
    $CurrentDate = strtotime($CurrentDate);
?>
<!DOCTYPE html>
<html>
<head>
<title>DayOff - When is my next break ?</title>
<meta charset="utf-8" />
<meta name="author" content="LEUCCI Nicolas" />
<link rel="stylesheet" href="css/main.css" />
<link rel="start" title="Accueil" href="index.php" />
<link rel="icon" type="image/png" href="img/favicon.ico" />
</head>
	<body>

    <?php

    $i = 0;
    foreach ($Data as $Day) {

    $Dayoff = date("Y-").$Data[$i]['date'];
    $Dayoff_DateTime = strtotime($Dayoff);

        if($CurrentDate < $Dayoff_DateTime){
            echo "<font color=\"green\">".$Dayoff."</font><br />";

        }
        else{
            echo "<font color=\"red\">".$Dayoff."</font><br />";
        }

        $i++;
    }


    ?>

	<script type="text/javascript" src="js/jquery/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>
