<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification URL</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    
    <?php

    if (isset($_GET['startDate']) && isset($_GET['endDate'])) {

        $startDate = $_GET['startDate'];
        $endDate = $_GET['endDate'];
        
        echo "date de début : " . $startDate . "<br>";
        echo "date de fin : " . $endDate;

    } 
    else {

        echo "les paramètres de date sont invalides";

    }

    // Sur le même modèle PHP, vous devez récupérer les variables PHP que vous aurez envoyés via la méthode GET de votre fomulaire de manière à obtenir : url_verif.php?language=PHP&server=LAMP
    ?>

</body>
</html>