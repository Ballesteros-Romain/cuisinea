<?php 
    require_once('templates/header.php');
    require_once('lib/recipe.php');
    require_once('lib/tools.php');
    require_once('lib/config.php');
 
    $recipes = getRecipes($pdo, _HOME_RECIPES_LIMIT_)
?>
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/images/cigale-olive.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
            width="300" height="300" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">cuisinea pour dossier pro</h1>
        <p class="lead">ceci est juste un texte de test</p>
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