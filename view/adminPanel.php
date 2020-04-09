<!--
Auteur : Kevin Vaucher
Date : 27.03.2020
Description : Projet Rent A Snow ICT-151
Version : 1.0
-->


<?php
ob_start();
$title = "RentASnow - Admin Panel"; // titre de la page
?>

<h2>Page d'administration</h2>
<br>
<?php
foreach ($users as $user) { // Foreach pour afficher chaque utilisateur, son ID et un bouton pour le supprimer
    ?>
    <table border="1px" class="table">
        <th>Nom d'utilisateur</th>
        <th>ID</th>
        <th>Supprimer l'utilisateur</th>
    <tr>
        <td><?= $user['username'] ?></td>
        <td><?= $user['id'] ?></td>
        <td><a href="index.php?action=delUsers&id=<?= $user['id'] ?>">
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </a></td>
    </tr>
    </table>
<?php } ?>
<?php
$content = ob_get_clean();
require_once 'gabarit.php';
?>

