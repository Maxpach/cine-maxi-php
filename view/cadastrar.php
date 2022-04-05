
<?php include "cabecalho.php" ?>

<body>


    <!--HEAD-->
    <nav class="nav-extended blue-grey lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/">Galeria</a></li>
                <li><a href="/novo">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center ">
            <h1 class="cine">CINEMAX</h1>
        </div>
    </nav>

    <div class="row">
        <form method="POST" enctype="multipart/form-data">
            <div class="col s6 offset-s3">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Cadastrar Filme</span>
                        
                        <!--Input titulo -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" required>
                                <label for="titulo">Titulo do Filme</label>
                            </div>
                        </div>

                        <!--Input sinopse -->
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea" name="sinopse" ></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </div>

                        <!--Input nota -->
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" required >
                                <label for="nota">Nota</label>
                            </div>
                        </div>
                    </div>

                    <!--Input capa -->
                    <div class="file-field input-field ">
                        <div class="btn amber lighten-2 black-text">
                            <span>Capa</span>
                            <input type="file" name="poster_file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="poster">
                        </div>
                    </div>

                    <!--button voltar -->
                    <div class="card-action">
                        <a class="btn waves-effect waves-light btn grey" href="/">Cancelar</a>
                        <button type="submit" href="#" class="waves-effect waves-light btn amber darken">Confirmar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

 