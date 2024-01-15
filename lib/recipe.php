<?php
    $recipes =[
        ["titre" => "Mousse au chocolat", 'description' => 'lorem40', 'image' => 'assets/images/cigale-olive.jpg'],
        ["titre" => "salade de chèvre", 'description' => 'lorem40', 'image' => 'assets/images/cigale-olive.jpg'],
        ["titre" => "gratin dauphinois", 'description' => 'lorem40', 'image' => 'assets/images/cigale-olive.jpg'],
    ];

        function getRecipesById(PDO $pdo, int $id){
           $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
        }
    ?>