<?php 
    require_once('templates/header.php');
    require_once('lib/recipe.php');

?>
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <h1 class="title-recipes">Listes des recettes</h1>
</div>

<!-- Recipes -->
<div class="row d-flex justify-content-center gap-3">
    <?php foreach ($recipes as $key => $recipe) { ?>
    <?php include('templates/recipes_partials.php') ?>
    <?php } ?>

    <?php 
        require_once('templates/footer.php')
    ?>