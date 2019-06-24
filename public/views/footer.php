<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  <div class="text-center">
    <p>ATTENTION : SITE EN CONSTRUCTION. LES INFORMATIONS CONCERNANT LES MISSIONS ET LES EMBARQUEMENTS SONT POUR LE MOMENT FICTIVES. POUR TOUTE QUESTION CONTACTEZ-NOUS (PAGE CONTACT)</p>
  </div>
  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright :
    <a href="./index.php?action=displayContact"> NACOMED</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<div id="modal_logout" class="modal">
    <div class="modal_content">
        <p id="modal_text">A bientôt <?php echo $sessionUser; ?></p>
    </div>
</div>

<!-- JavaScript files--> 
<script src="./vendor/jquery/jquery/jquery.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./js/signOut.js"></script>
<script src="./js/controllers/signOut.js"></script>