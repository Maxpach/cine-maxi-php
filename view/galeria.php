<!--UTILIZANDO MATERIALIZE-->
<?php include "cabecalho.php" ?>

<?php
/*Faz a busca dos dados*/
//session_start();

require_once "./util/Mensagem.php";


$controller = new FilmesController();
$filmes = $controller->index();
?>


<body>

    <!--HEAD-->
    <nav class="nav-extended blue-grey lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/">Galeria</a></li>
                <li><a href="/novo">Cadastrar</a></li>
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
            
            <?php foreach($filmes as $filme) : ?>        
                <div class="col s12 m6 l3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?= $filme->poster ?>">
                        <button class="btn-fav btn-floating halfway-fab waves-effect waves-light red" data-id="<?= $filme->id ?>" >
                            <i class="material-icons"><?= ($filme->favorito)?"favorite":"favorite_border"?></i>
                        </button>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">                 
                            <i class="material-icons amber-text">star</i><?= $filme->nota ?>
                        </p>
                        <span class="card-title"> <?= $filme->titulo ?> </span>
                        <p><?= $filme->sinopse ?></p>
                        <button class="waves-effect waves-light btn-small rigth red accent-2 btn-delete" data-id="<?= $filme->id ?>"><i class="material-icons">delete</i></button>
                    </div>

                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <!--Bot??o
    <a href="#" class="waves-effect waves-light btn">Button</a>-->
    <?=Mensagem::mostrar(); ?>      
    
    <script>
        document.querySelectorAll(".btn-fav").forEach(btn => {
            btn.addEventListener("click", (e) => {
                const id = btn.getAttribute("data-id")
                fetch(`/favoritar/${id}` )
                .then(response => response.json())
                .then(response => {
                    if(response.success === "ok"){
                        if (btn.querySelector("i").innerHTML === "favorite"){
                            btn.querySelector("i").innerHTML = "favorite_border"
                        }else{
                            btn.querySelector("i").innerHTML = "favorite"
                        }
                    }
                })
                .catch( erro => {
                    M.toast({html: 'Erro ao favoritar'})
                })
                
            });
        });


        document.querySelectorAll(".btn-delete").forEach(btn => {
            btn.addEventListener("click", (e) => {
                const id = btn.getAttribute("data-id")
                const requestConfig = { method: "DELETE", header: new Headers()}
                fetch(`/filmes/${id}`, requestConfig)
                .then(response => response.json())
                .then(response => {
                    if(response.success === "ok"){
                        const card = btn.closest(".col")
                        card.classList.add("fadeOut")
                        setTimeout(() => card.remove(), 1000)
                        }
                    })
                    .catch( erro => {
                        M.toast({html: 'Erro ao apagar'})
                })
                
            });
        });
    </script>

</body>

</html>
