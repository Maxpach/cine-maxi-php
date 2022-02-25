<?php include "cabecalho.php" ?>

<?php

$bd = new SQLite3("filmes.bd");
$sql = "SELECT * FROM filmes";
$filmes = $bd->query($sql);



$filme1= [  "titulo"=>"Vingadores",
            "nota"=> 8.7,
            "sinopse"=> "Homem de Ferro, Capitão América, Hulk, Thor, Viúva Negra e Gavião Arqueiro formam o time dos sonhos de Fury, mas eles precisam aprender a colocar os egos de lado e agir como um grupo em prol da humanidade.",
            "poster" => "https://www.themoviedb.org/t/p/w300/qJQknP1F9R4pS5qiOuvpIUuWam4.jpg"
];



$filme2= [  "titulo"=>"Batman vs Superman",
            "nota"=> 9.9,
            "sinopse"=> "Temendo que as ações de um super-herói divino não tenham sido controladas, o formidável e vigoroso vigilante de Gotham City enfrenta o salvador mais reverenciado e moderno de Metrópolis, enquanto o mundo luta com o tipo de herói que realmente precisa.",
            "poster" => "https://www.themoviedb.org/t/p/w300/doiUtOHzcxXFl0GVQ2n8Ay6Pirx.jpg"
];



$filme3= [  "titulo"=>"O Incrível Hulk",
            "nota"=> 10,
            "sinopse"=> "Vivendo escondido e longe de Betty Ross, a mulher que ama, o cientista Bruce Banner busca um meio de retirar a radiação gama que está em seu sangue. ",
            "poster" => "https://www.themoviedb.org/t/p/w300/jPu8yiadqgzwFPGKJmGo637ASVP.jpg"
];



$filme4= [  "titulo"=>"O Espetacular Homem-Aranha",
            "nota"=> 8.0,
            "sinopse"=> "Peter Parker está tentando saber mais sobre sua origem. Ele encontra uma pasta que pertenceu ao seu pai e quer descobrir por que seus pais desapareceram. ",
            "poster" => "https://www.themoviedb.org/t/p/original/sLWUtbrpiLp23a0XDSiUiltdFPJ.jpg"
];



$filme5= [  "titulo"=>"Os Mercenários 2",
            "nota"=> 8.8,
            "sinopse"=> "O grupo de mercenários se unem para evitar que um criminoso roube uma grande quantidade de plutônio, que possibilitaria a produção de armas nucleares. ",
            "poster" => "https://www.themoviedb.org/t/p/w300/ihKsZZYMbyHXC1L7s90WDLITdC5.jpg"
];


$filme6= [  "titulo"=>"Batman",
            "nota"=> 7,0,
            "sinopse"=> "Bruce Wayne é um jovem bilionário da cidade de Gotham City, Nova Jersey, que também age secretamente como o vigilante noturno Batman após o assassinato dos seus pais.",
            "poster" => "https://www.themoviedb.org/t/p/w300/rvtdN5XkWAfGX6xDuPL6yYS2seK.jpg"
];

//$filmes = [$filme1, $filme2, $filme3, $filme4, $filme5, $filme6]; 


?>


<body>

    <!--HEAD-->
    <nav class="nav-extended blue-grey lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="./galeria.php">Galeria</a></li>
                <li><a href="./cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CINEMAX</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent blue-grey darken-4">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <!--CARD-->
        <div class="row">
        <!--outomatizado /*($i=0; $i<count($filmes); $i++) { 
                    $filme = $filmes[$i];*/
            ?php foreach($filmes as $filme)--> 
            
            <?php while ($filme = $filmes->fetchArray()) : ?>        
                <div class="col s12 m6 l3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?= $filme["poster"]?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light red">
                            <i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">                 
                            <i class="material-icons amber-text">star</i><?= $filme["nota"]?>
                        </p>
                        <span class="card-title"> <?= $filme["titulo"]?> </span>
                        <p><?= $filme["sinopse"]?></p>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
        </div>
    </div>
    <!--Botão
    <a href="#" class="waves-effect waves-light btn">Button</a>-->

</body>
</html>