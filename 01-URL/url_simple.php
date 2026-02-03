<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <h2>Vérifier des données</h2>
    <form action="url_verif.php" method="GET" class="form-joueur">
        
        <label for="startDate">Date de début</label>    
        <input type="date" name="startDate">
    
        <label for="endDate">Date de Fin</label>    
        <input type="date" name="endDate">
        
        <button type="submit">Send</button>
    </form>

</body>

</html>