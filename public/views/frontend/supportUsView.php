<?php $title = 'Association Nacomed : Nous soutenir'; ?>
<?php $meta_description = 'Page pour soutenir l\'association Nacomed : les dons'; ?>
<?php $og_title = 'Association Nacomed : Nous soutenir'; ?>

<!-- Open Graph Data Facebook -->
<meta property="og:title" content="Association Nacomed : Nous soutenir" />
<meta property="og:description" content="Page pour soutenir l'association Nacomed : les dons" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.nacomed.fr/index.php?action=displaySupport" />
<meta property="og:image" content="https://zupimages.net/up/20/05/nxfx.png" />
<meta property="og:image:alt" content="Logo de l'association Nacomed" />

<?php ob_start(); ?>

<<<<<<< HEAD
<!-- <div class="donation">
    <p>A VENIR : VOUS POURREZ SOUTENIR L'ASSOCIATION EN FAISANT DES DONS</p>
</div> -->

<iframe id="haWidget" allowtransparency="true" src="https://www.helloasso.com/associations/nacomed/adhesions/bulletin-d-adhesion-a-nacomed/widget-bouton" style="width:100%;height:70px;border:none;"></iframe>

<iframe class="helloForm" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/nacomed/formulaires/1/widget" style="width:100%;height:750px;border:none;" onload="window.scroll(0, this.offsetTop)"></iframe>
=======
<iframe id="haWidget" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/nacomed/formulaires/1/widget" style="width:100%;height:750px;border:none;" onload="window.scroll(0, this.offsetTop)"></iframe>
>>>>>>> ccdf36be80b1fdff0c6b6953ba9a51ca97115416

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutFront.php'); ?> 