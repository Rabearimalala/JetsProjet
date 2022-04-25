<!DOCTYPE html>
<html>
<head>
	<title>Crude</title>
	<meta charset="utf-8">
</head>
<body>
    <form action="<?= base_url().'etudiant/create'?>" method="POST">
        <h1>Etudiant</h1></br>
        <label>Nom de l'étudiant</label></br>
        <input type="text" name="nom"></br>
        <label>prénom de l'étudiant</label></br>
        <input type="text" name="prenom"></br>
        <label>classe de l'étudiant</label></br>
        <input type="text" name="classe"></br></br>
        <button name="valider">Ajouter</button>
    </form>
</body>
</html>