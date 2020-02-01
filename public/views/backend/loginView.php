<?php $title = 'Association Nacomed : Page de connexion à l\'espace d\'administration'; ?>
<?php $meta_description = 'Page de connexion à l\'espace d\'administration'; ?>

<?php ob_start(); ?>

<div class="container login-div">
    <div class="row mgmt">
        <div class="col-lg-12 text-center">
            <header>
                <h1>Espace de connexion</h1>
            </header>

            <p class="font-italic lead">
                Veuillez rentrer vos identifiants pour vous connecter
            </p>
        </div>
    </div>

    <div>
        <form class="text-center" id="login_form" action="./index.php?action=adminLogin" method="post">
            <label for="user">Login : </label>
            <input class="form-control" type="text" id="user_login" name="user" required /><br/>
            <label for="password">Mot de passe : </label>
            <input class="form-control" type="password" id="user_password" name="password" required /><br/>
            <input id="login_btn" type="submit" value="Se connecter" />
        </form>
    </div>

</div>

<div id="modal_login" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>  
        <p id="modal_text"></p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutBack.php'); ?>

<!-- JavaScript files-->
<script src="./js/login.js"></script>
<<<<<<< HEAD
<script src="./js/controllers/login.js"></script>
=======
<script>$(function() {
            var login = Object.create(loginValid);
            login.init();
        });
</script>
>>>>>>> ccdf36be80b1fdff0c6b6953ba9a51ca97115416
