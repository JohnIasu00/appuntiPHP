<?php

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php 

        $recipes = [
            [
                'title' => 'Cassoulet',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => false,
            ],
            [
                'title' => 'Escalope milanaise',
                'recipe' => '',
                'author' => 'mathieu.nebra@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Salade Romaine',
                'recipe' => '',
                'author' => 'laurene.castor@exemple.com',
                'is_enabled' => false,
            ],
        ];
        
        foreach($recipes as $recipe) {
            echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] ;
             echo '<br />';
        }

        echo '-------------------------------------------------------------------<br />';
        echo '<br />';
        echo 'utilizzo della ward < pre > e il print_r';

        $recipes = [
            [
                'title' => 'Cassoulet',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => true,
            ],
            [
                'title' => 'Couscous',
                'recipe' => '',
                'author' => 'mickael.andrieu@exemple.com',
                'is_enabled' => false,
            ],
        ];

        echo '<pre>';
        print_r($recipes);
        echo '</pre>';

        
        ?>
    </ul>
</body>
</html>