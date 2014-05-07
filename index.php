<?php

// Initialize Spyc et YAML
require_once "spyc-master/spyc.php";
require_once "Data.php";

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

// Get the current day
    $CurrentDate = date("Y-m-d");
    $CurrentDate = strtotime($CurrentDate);

    $i = 0;

    // Listage et comparatif des dates
        foreach ($Data as $Day) {

        // Formatter les dates contenues dans le YML
            $Dayoff = date("Y-").$Data[$i]['date'];
            $Dayoff_DateTime = strtotime($Dayoff);

            if($CurrentDate < $Dayoff_DateTime){
                echo "Prochaine date : ".$Dayoff."<br />";
                echo "<b>".$Data[$i]['name']."</b>";
                break;
            }

            $i++;
        }


    ?>

	<script type="text/javascript" src="js/jquery/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>
