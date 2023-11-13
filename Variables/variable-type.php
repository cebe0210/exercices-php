<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable_types</title>
</head>
<body>
    <?php
        $nom = "Cédric";
        $age = 38;
        $yeux = "bleus";
        $famille = array(
            0 => 'Liliane',
            1 => 'Vanessa',
            2 => 'Juliette',
            3 => 'Armand',);
        $faim = true;
        if ($faim == true){
            $msgfaim = "Oui je veux bien une glace";
        }
        else {
            $msgfaim = "non pas pour l'instant";
        }
    ?>

    <p>Salut! Mon nom est <?php echo $nom ?>.</p>
    <p>J'ai <?php echo $age ?> ans. </p>
    <p>Mes yeux sont <?php echo $yeux ?>.</p>
    <p>La permiere personne de ma famille est <?php echo $famille[0] ?>. </p>
    <p>Ai-je faim? <?php echo $msgfaim ?>. </p>
    
</body>
</html>