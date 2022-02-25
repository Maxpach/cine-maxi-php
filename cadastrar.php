<<<<<<< HEAD
<?php include "cabecalho.php" ?>

<body>


    <!--HEAD-->
    <nav class="nav-extended blue-grey lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center ">
            <h1 class="cine">CINEMAX</h1>
        </div>
    </nav>

    <div class="row">
        <form action="inserirFilme.php">
            <div class="col s6 offset-s3">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Cadastrar Filme</span>
                        
                        <!--Input titulo -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo">
                                <label for="titulo">Titulo do Filme</label>
                            </div>
                        </div>

                        <!--Input sinopse -->
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </div>

                        <!--Input nota -->
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="nota" type="number" step=",1" min=0 max=10 class="validate">
                                <label for="nota">Nota</label>
                            </div>
                        </div>
                    </div>

                    <!--Input capa -->
                    <div class="file-field input-field ">
                        <div class="btn amber lighten-1 black-text">
                            <span>Capa</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>

                    <!--button voltar -->
                    <div class="card-action">
                        <a class="btn waves-effect waves-light btn grey" href="galeria.php">Cancelar</a>
                        <button type="submit" href="#" class="waves-effect waves-light btn amber darken">Confirmar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

=======
<?php include "cabecalho.php" ?>

<body>


    <!--HEAD-->
    <nav class="nav-extended blue-grey lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center " >
            <h1 class="cine">CINEMAX</h1>
        </div>
    </nav>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Cadastrar Filme</span>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate">
                            <label for="titulo">Titulo do Filme</label>
                        </div>
                    </div>

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s4">
                        <input id="nota" type="number" step=",1" min=0 max=10 class="validate">
                        <label for="nota">Nota</label>
                    </div>
                </div>
            </div>

            <div class="file-field input-field ">
                <div class="btn amber lighten-1 black-text" >
                    <span>Capa</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>


            <div class="card-action">
                <a class="btn waves-effect waves-light btn grey" href="galeria.php">Cancelar</a>
                <a href="#" class="waves-effect waves-light btn amber darken">Confirmar</a>
            </div>
        </div>
    </div>
    </div>

</body>

>>>>>>> 871034ef4032488f38db7598e1e0244ae021310c
</html>