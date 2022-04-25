<!DOCTYPE html>
<html>
<head>
	<title>Crude</title>
	<meta charset="utf-8">
</head>
<body>
    <form action="<?= base_url().'etudiant/actualiser'?>/<?php echo $etudiant->numero?>" method="POST">
        <h1>Etudiant</h1></br>
        <label>Nom de l'étudiant</label></br>
        <input type="text" value="<?php echo $etudiant->nom ?>" name="nom"></br>
        <label>prénom de l'étudiant</label></br>
        <input type="text" value="<?php echo $etudiant->prenom ?>" name="prenom"></br>
        <label>classe de l'étudiant</label></br>
        <input type="text" value="<?php echo $etudiant->classe ?>" name="classe"></br></br>
        <button name="valider">valider</button>
    </form>
</body>
</html>