<div class="card" style="width: 18rem;">
    <img src="assets/images/cigale-olive.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $recipe["titre"] ?></h5>
        <p class="card-text"><?= $recipe["description"] ?></p>
        <a href="recette.php?id=<?=$key?>" class="btn btn-primary">Voir la recette</a>
    </div>
</div>