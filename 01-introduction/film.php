<?php
// Vérifier si l'âge est soumis
if (isset($_POST['submit'])) {
    $age = (int)$_POST['age']; // Récupérer l'âge à partir du formulaire

    // Vérifier l'âge et indiquer le film correspondant
    if ($age < 13) {
        echo "Vous pouvez aller voir 'Action Man'.<br>";
    } elseif ($age >= 13 && $age <= 18) {
        echo "Vous pouvez aller voir 'Matrix'.<br>";
    } else {
        echo "Vous pouvez aller voir 'Evil Dead'.<br>";
    }
}
?>

<form method="post">
    <label for="age">Veuillez entrer votre âge :</label>
    <input type="number" id="age" name="age" required>
    <input type="submit" name="submit" value="Envoyer">
</form>
