<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site HEI</title>
    <link rel="stylesheet" href="css/hei.css">
    <link rel="icon" href="images/Logo.png" type="image/x-icon">
</head>
<body>
    <div class="all">
    <header>
        <div>
        <h1>Inscription au concours d'entrée L1</h1>
        <p>Payez 40 000Ar par Mvola au 034 94 041 16 (Fiharintsoa) et notez sa référence</p>
        <p>Remplissez les champ ci-dessous</p>
    </div>
    </header>
<input type="text" name="prenom" id="prenom" class="prenom" placeholder="Prénom"> 
<input type="text" name="fprenom" id="fprenom" class="fprenom" placeholder="Nom de famille">
<input type="email" name="mail" id="mail" class="mail" placeholder="E-mail">
<input type="number" name="phone" id="phone"class="phone" placeholder="Téléphone">  <br>
<br> 
<label for="cin"class="description">CIN ou Acte de naissance</label>
<input type="file" name="cin" id="cin"> <br>

<label for="photo"class="description">Photo d'identité récente</label>
<input type="file" name="cin" id="cin"> <br>

<label for="fiche"class="description">Fiche de renseignement</label>
<input type="file" name="cin" id="cin"> <br>

<input type="number" name="mvola" id="mvola" class="mvola" placeholder="N° référence Mvola">

<br> <br>
<label for="bulletin"class="cin">Bulletin de la Terminale ou Bac</label>
<input type="file" name="cin" id="cin"> <br>
<br>

<input type="submit" value="S'inscrire" class="inscri">
<br> <br>
<script src="js/HEI.js"></script>
</div>
</body>
</html>