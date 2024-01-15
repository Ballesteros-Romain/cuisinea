<?php 
    require_once('templates/header.php');
    require_once('lib/recipe.php');
?>
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/images/cigale-olive.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
            width="300" height="300" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">cuicienea pour dossier pro</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most
            popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
            extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-secondary btn-lg px-4 me-md-2">Recettes</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
    </div>
</div>

<!-- Recipes -->
<div class="row d-flex justify-content-center gap-3">
    <?php foreach ($recipes as $key => $recipe) { ?>
    <?php include('templates/recipes_partials.php') ?>
    <?php } ?>

    <?php 
        require_once('templates/footer.php')
    ?>