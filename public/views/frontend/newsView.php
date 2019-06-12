<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Association Nacomed : Votre news</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="./css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <!-- Navigation -->
        <?php require('./public/views/header.php'); ?>

        <div class="container news-view">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                    <h1><?php echo $article->art_title(); ?></h1>
                    <span class="meta">Publié le : <?php echo $article->date_fr(); ?></span>
                    </div>
                </div>
            </div>

            <!-- Post Content -->
            <article>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <p><?php echo $article->art_content(); ?></p>
                        </div>
                    </div>
                </div>
            </article>

            <div id="add_com">
                <button>Ajouter un commentaire</button>
            </div>

            <form id="com_form" action="/nacomed/index.php?action=addComment" method="post">
                <div>
                    <label for="com_author">Pseudo : </label>
                    <input class="com_author" type="text" id="author" name="com_author" placeholder="Votre pseudo" required/>
                    <span id="missPseudo"></span>
                </div>

                <div>
                    <label for="com_content">Votre commentaire : </label>
                    <textarea class="com_content" id="content" name="com_content" placeholder="Votre commentaire" required></textarea>
                    <span id="missCom"></span>
                </div>

                <input type="hidden" id="art_id" name="art_id" value="<?php echo $article->art_id(); ?>" />

                <div>
                    <input id="com_submit_btn" type="submit" />
                </div>
            </form>

            <div id="comments">
                <p class="com_heading">Commentaires du billet :</p>
                    <?php foreach ($comments as $comment) {
                        $censoredCommentClass = $comment->com_report_number() > 0 ? "comment_censored" : "";
                        $censoredSpanClass = $comment->com_report_number() > 0 ? "span_censored" : "";
                    ?>
                        <div class="comment_content <?= $censoredCommentClass ?>">
                            <p class="com_text"><?php echo $comment->com_content(); ?></br></br>
                                Posté par : <?php echo $comment->com_author(); ?></br>
                                le : <?php echo $comment->com_date_fr(); ?></br>
                                <input type="button" class="report_com_btn" value="Signaler" id="<?php echo $comment->com_id(); ?>"/>
                            </p>
                            <span class="<?= $censoredSpanClass ?>"></span>
                        </div></br>
                    <?php } ?>
            </div>

            <div id="modal_com" class="modal">
                <div class="modal_content">
                    <p id="modal_text"></p>
                </div>
            </div>
        </div>

        <?php require('./public/views/footer.php'); ?>

        <!-- JavaScript files-->
        <script src="./js/scroll_nav.js"></script>
        <script src="./js/commentAdder.js"></script>
        <script src="/nacomed/js/reportCom.js"></script>
        <script src="./js/controllers/newsView.js"></script>

    </body>
</html>