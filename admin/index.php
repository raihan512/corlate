<?php 
    require_once('functions/function.php');
    needLogged();
    get_header();
    get_sidebar()
?>
<div class="row">
    <div class="col-md-12 main_content">
         Welcome Mr. <?= $_SESSION['name']; ?>
    </div>
</div>

<?php
get_footer();
?>
