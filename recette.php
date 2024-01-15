<?php 
    require_once('templates/header.php');
    require_once('lib/recipe.php');
    $id = $_GET['id'];
    // var_dump($recipes[$id]);
?>
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <h1 class="title-recipes">Recette de <?= $recipes[$id]['titre'] ?> </h1>
</div>

<!-- Recipes -->
<div class="py-5">
    <h1 class="display-5 fw-bold"><?= $recipes[$id]['titre'] ?></h1>
    <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most
            popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
            extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Je commande</button>
            <button type="button" class="btn btn-outline-light btn-lg px-4">Secret</button>
        </div>
    </div>
</div>

<?php 
        require_once('templates/footer.php')
    ?>