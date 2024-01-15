<?php
        function getRecipesById(PDO $pdo, int $id){
           $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
        }

        function getRecipes(PDO $pdo, int $limit = null){
            $sql = 'SELECT * FROM recipes ORDER BY RAND() DESC';
            if ($limit) {
                $sql .= ' LIMIT :limit';
            }
            $query = $pdo->prepare($sql);
            if($limit){
                $query->bindParam(':limit', $limit, PDO::PARAM_INT);
            }
            $query->execute();
            return  $query->fetchAll();
        }
    ?>