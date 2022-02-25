<?php include "cabecalho.php" ?>

<?php
/*Faz a busca dos dados*/
$bd = new SQLite3("filmes.db");
$sql = "SELECT * FROM filmes";
$filmes = $bd->query($sql);

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

<?php if(isset($_GET["msg"])) : ?>
    <script>
        M.toast({
            html: '<?= $_GET["msg"] ?>'
        });
    </script>
<?php endif  ?>

</html>
