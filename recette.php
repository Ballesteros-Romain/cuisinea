<?php 
    require_once('templates/header.php');
    require_once('lib/recipe.php');
    require_once('lib/tools.php');
    // var_dump($recipes[$id]);


    $id = (int)$_GET['id'];
    $recipe = getRecipesById($pdo, $id);

    $ingredients = linesToArray($recipe['ingredients']);
    $instructions = linesToArray($recipe['instructions']);

    if (isset($_GET['id'])) {
    $recipeId = $_GET['id'];
    $success = deleteRecipe($pdo, $recipeId);
}
?>
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <h1 class="title-recipes"><?= $recipe['title'] ?> </h1>
</div>

<!-- Recipes -->
<div class="py-5">
    <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4"><?= $recipe['description']?></p>

        <div class="col-lg-6 ">
            <h2 class="mb-4">Ingeredients</h2>
            <ul class="list-group">
                <?php foreach ($ingredients as $key => $ingeredient) {?>
                <li class="list-group-item"><?= $ingeredient; ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-lg-6 ">
            <h2 class="mb-4 mt-5">Instructions</h2>
            <ol class="list-group">
                <?php foreach ($instructions as $key => $instruction) {?>
                <li class="list-group-item"><?= $instruction; ?></li>
                <?php } ?>
            </ol>
        </div>
    </div>
</div>
<!-- <form method="POST">
    <a href="recettes.php?id=<?= $recipe['id']; ?>" name="deleted"
        class="btn btn-danger d-flex justify-content-center">Supprimer</a>
</form> -->
<form method="POST">
    <input type="hidden" name="recipeId" value="<?= $recipe['id']; ?>">
    <button type="submit" name="deleteRecipe" class="btn btn-danger d-flex justify-content-center">Supprimer</button>
</form>



<?php 
        require_once('templates/footer.php')
    ?>