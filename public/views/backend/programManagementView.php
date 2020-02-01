<?php $title = 'Association Nacomed : Mise à jour des infos du programme du navire'; ?>
<?php $meta_description = 'Mise à jour des infos du programme du navire'; ?>

<?php ob_start(); ?>

<div class=container>
    <div class="row welcome-program">
        <div class="col-lg-12 text-center">
            <header>
                <h2>Bienvenue sur la page de gestion du programme du bateau<h2>
            </header>
            <p class="font-italic">
                Renseignez les informations relatives au programme du bateau : 
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="form-group" id="program-form" method="post" action="/nacomed/index.php?action=addProgInfos">
                <label for="month">Sélectionner un mois</label>
                    <select name="month" id="month">
                        <option id="jan" value="prog_jan">Janvier</option>
                        <option id="feb" value="prog_feb">Février</option>
                        <option id="mar" value="prog_mar">Mars</option>
                        <option id="apr" value="prog_apr">Avril</option>
                        <option id="may" value="prog_may">Mai</option>
                        <option id="jun" value="prog_jun">Juin</option>
                        <option id="jul" value="prog_jul">Juillet</option>
                        <option id="aug" value="prog_aug">Aout</option>
                        <option id="sep" value="prog_sep">Septembre</option>
                        <option id="oct" value="prog_oct">Octobre</option>
                        <option id="nov" value="prog_nov">Novembre</option>
                        <option id="dec" value="prog_dec">Décembre</option>
                    </select><br>
                <label for="week">Sélectionner un numéro de semaine</label>
                    <select name="week" id="week">
                        <option id="week1">1</option>
                        <option id="week2">2</option>
                        <option id="week3">3</option>
                        <option id="week4">4</option>
                    </select><br>
                <label for="mission">Mission :</label><input class="form-control" type="text" id="mission" name="mission" placeholder="Infos de mission" value=""/><br>
                <label for="details-mission">Détails de mission :</label><input class="form-control" type="text" id="details-mission" name="details-mission" placeholder="Détails de mission" value="" /><br>
                <label for="location">Localisation :</label><input class="form-control" type="text" id="location" name="location" placeholder="Localisation" value="" /><br>
                <label for="available-beds">Nombre de banette(s) disponible(s) :</label><input class="form-control" type="text" id="available-beds" name="available-beds" placeholder="nombre de banettes" value="" /><br>
                <label for="comments">Remarques :</label><input class="form-control" type="text" id="comments" name="comments" placeholder="Remarques" value="" /><br>
                <input type="submit" id="progFormSubmit" value="Envoyer" />
                <input type="button" id="delProg" value="Supprimer" />
            </form>
        </div>
    </div>

    <div id="modal_prog" class="modal">
        <div class="modal_content">
        <span class="close">&times;</span>
            <p id="modal_text"></p>
            <div id="buttons">
                <button id="yes">Oui</button>
                <button id="no">Non</button>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutBack.php'); ?>

<!-- JavaScript files-->
<script src="./js/programInfosAdder.js"></script>
<script src="./js/controllers/programInfosAdder.js"></script>