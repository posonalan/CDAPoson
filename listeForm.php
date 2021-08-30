<div class="formulaire">
    <form action="index.php?action=listeAction&act=<?php echo $act; ?>" method="POST">
        <fieldset>
            <legend></i>Vos ville</legend>
            <label for="TitreVille"> Nom des ville :</label>
            <!--on renseigne la value dans l'input si on est en modif ou suppr -->
            <input type="text" name="nom" id="nom" maxlength="30" required <?php if ($act != "ajout") {
                                                                                                                echo 'value ="' . $p->getNom() . '"';
                                                                                                            }
                                                                                                            ?>>
            <!--  on met l'id dans un champ caché pour qu'il soit renseigné dans le $_POST au moment de la validation du formulaire  -->
            <?php if ($act != "ajout") {
                echo '<input type="text" name="idVille" id="idVille" hidden value ="' . $p->getIdVille() . '" >';
            }
            ?>

            <label for="numeroDepartement">Numero du departement  : </label>
            <input type="number" name="numeroDepartement" id="numeroDepartement" required <?php if ($act != "ajout") {
                                                                                                    echo 'value ="' . $p->getNumeroDepartement() . '"';
                                                                                                }
                                                                                                ?>>

            <label for="codePostal">Code postal : </label>
            <input type="number" name="codePostal" id="codePostal" required <?php if ($act != "ajout") {
                                                                                        echo 'value ="' . $p->getCodePostal() . '"';
                                                                                    }
                                                                                    ?>>

            <label for="descriptionOffreEmploi">date de la derniere mise a jour :</label>
            <input type="date" name="dateMiseAJour" id="dateMiseAJour" required <?php if ($act != "ajout") {
                                                                                                            echo 'value ="' . $p->getDateMiseAJour() . '"';
                                                                                                        } ?>>

        </fieldset>
        <div class="boutonADD">
            <!-- on change l'intitulé du bouton en fonction de l'action / pour ce projet on aurait besoin que de modifier -->
            <button type="submit" name="modifier"> <?php if ($act == "ajout") {
                                                        echo 'Ajouter';
                                                    } elseif ($act == "modif") {
                                                        echo 'Modifier';
                                                    } else {
                                                        echo "Supprimer";
                                                    }
                                                    ?></button>
            <a href="index.php?action=liste"> <button type="reset" name="annuler" class="annule"> Annuler</button></a>
        </div>

    </form>
</div>