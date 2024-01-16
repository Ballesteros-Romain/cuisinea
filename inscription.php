<?php 
    require_once('templates/header.php');
    require_once('lib/user.php');

    $errors = [];
    $messages = [];

    

    if(isset($_POST['addUser'])){
        $res = addUser($pdo, $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password']);
        if($res){
            $messages[] = 'Merci pour votre inscription';
        } else {
            $errors[] = 'une erreur s\'est produite';
        }
    }
?>

<h1 class="text-center">Inscription</h1>
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
            <label for="first_name" class="form-label">Prénom</label>
            <input type="first_name" name="first_name" id="first_name" class="rounded form-control">
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Nom</label>
            <input type="last_name" name="last_name" id="last_name" class="rounded form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="rounded form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control">

            <input type="submit" value="inscription" name="addUser" class="btn btn-primary me-2 mt-4"></input>
    </form>
</div>


<?php require_once('templates/footer.php'); ?>