<?php

?>
<table>
    <tr>
        <th>numéro</th>
        <th>nom</th>
        <th>prénom</th>
        <th>classe</th>
        <th>Action</th>
    </tr>
    
    <?php 
        foreach ($etudiant as $etu):
    ?>
    <tr>
        <td><?php echo $etu->numero?></td>
        <td><?php echo $etu->nom?></td>
        <td><?php echo $etu->prenom?></td>
        <td><?php echo $etu->classe?></td>
        <td><a href="<?= base_url().'etudiant/modif'?>/<?php echo $etu->numero?>">modifier</a><a href="<?= base_url().'etudiant/supprimer'?>/<?php echo $etu->numero?>">supprimer</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="<?= base_url().'etudiant/ajout'?>"><button name="valider">AJOUTER</button></a>

