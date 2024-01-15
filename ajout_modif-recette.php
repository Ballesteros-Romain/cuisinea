<?php 
    require_once('templates/header.php');
    require_once('lib/recipe.php');
    require_once('lib/tools.php');
    require_once('lib/category.php');

    $errors = [];
    $messages = [];

    if (isset($_POST['saveRecipe'])){

        // if (isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] != '') {
        //     $checkImage = getimagesize($_FILES['file']['tmp_name']);    
        //     if($checkImage !== false){
        //         move_uploaded_file($_FILES['file']['tmp_name'], );
        //     } else {
        //         $errors[] = 'Le fichier doit être une image';
        //     }
        // }

        $res = saveRecipe($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instructions'], null);

        if($res){
            $messages[] = 'La recette à bien été enregistré';
        } else {
            $errors[] = 'La recette n\'a pas été sauvegardé'
;        }
    }

    $categories = getCategories($pdo)
    
    ?>
<h1>Ajouter une recette</h1>

<?php foreach ($messages as $message) { ?>
<div class="alert alert-success m-auto text-center" style="width: 50%;">
    <?= $message ?>
</div>
<?php }  ?>

<?php foreach ($errors as $error) { ?>
<div class="alert alert-danger m-auto text-center" style="width: 50%;">
    <?= $error ?>
</div>
<?php }  ?>

<div style="margin-left: 50px; width: 50%" class="mt-5 m-auto">
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="rounded form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control"
                style="resize: none;"></textarea>
        </div>
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredients</label>
            <textarea name="ingredients" id="ingredients" cols="30" rows="5" class="form-control"
                style="resize: none;"></textarea>
        </div>
        <div class="mb-3">
            <label for="instructions" class="form-label">Instructions</label>
            <textarea name="instructions" id="instructions" cols="30" rows="5" class="form-control"
                style="resize: none;"></textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categories</label>
            <select name="category" id="category" class="form-select">
                <?php foreach ($categories as $categorie) { ?>
                <option value="<?= $categorie['id'] ?>"><?= $categorie['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Image</label>
            <input type="file" name="file" id="file">
        </div>
        <input type="submit" value="Enregistrer" name="saveRecipe" class="btn btn-primary">
    </form>
</div>

<?php require_once('templates/footer.php'); ?>