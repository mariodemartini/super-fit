<!-- Include php rodapé e menus -->
<?php
include_once('include/header.html');
include_once('include/navbar.html');
include_once('include/sidebar.html');
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <!-- Div titulo principal-->
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">FICHA DE TREINO</h3></div>
                    <!-- Div barra de pesquisa -->
                    <form class="card-header inline-block form-inline mb-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <!-- Div do formulario principal -->
                    <div class="card-body">
                        <form>
                            <!-- Linha data e idade -->
                            <div class="row mb-3">
                                <div class="form-group col-md-2">
                                    <label for="inputData">DATA</label>
                                    <input type="date" class="form-control" id="inputData">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputData">NOME</label>
                                    <input type="text" class="form-control" id="inputData">
                                </div>
                                <div class="form-group col-sm-1">
                                    <label for="inputData">IDADE</label>
                                    <input type="number" class="form-control" id="inputData">
                                </div>
                            </div>
                            <br>
                            <!-- Navs semanas 1 a 6 -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link" id="nav-s1-tab" data-toggle="tab" href="#nav-s1" role="tab" aria-controls="nav-s1" aria-selected="false">Semana 01</a>
                                    <a class="nav-item nav-link" id="nav-s2-tab" data-toggle="tab" href="#nav-s2" role="tab" aria-controls="nav-s2" aria-selected="false">Semana 02</a>
                                    <a class="nav-item nav-link" id="nav-s3-tab" data-toggle="tab" href="#nav-s3" role="tab" aria-controls="nav-s3" aria-selected="false">Semana 03</a>
                                    <a class="nav-item nav-link" id="nav-s4-tab" data-toggle="tab" href="#nav-s4" role="tab" aria-controls="nav-s4" aria-selected="false">Semana 04</a>
                                    <a class="nav-item nav-link" id="nav-s5-tab" data-toggle="tab" href="#nav-s5" role="tab" aria-controls="nav-s5" aria-selected="false">Semana 05</a>
                                    <a class="nav-item nav-link" id="nav-s6-tab" data-toggle="tab" href="#nav-s6" role="tab" aria-controls="nav-s6" aria-selected="false">Semana 06</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <!-- dias da semana 1 -->
                                <div class="tab-pane fade" id="nav-s1" role="tabpanel" aria-labelledby="nav-s1-tab">
                                    <div class="row mb-3 mt-3 justify-content-center">
                                        <form action="">
                                            <div class="row mb-3">
                                                <div class="form-group mt-3 col-4">
                                                    <label for="formGroupExampleInput">Serie</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                </div>
                                                <div class="form-group mt-3 col-1">
                                                    <label for="formGroupExampleInput">%CG</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Navs dias -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link" id="nav-segunda-tab" data-toggle="tab" href="#nav-segunda" role="tab" aria-controls="nav-segunda" aria-selected="false">Segunda</a>
                                            <a class="nav-item nav-link" id="nav-terca-tab" data-toggle="tab" href="#nav-terca" role="tab" aria-controls="nav-terca" aria-selected="false">Terça</a>
                                            <a class="nav-item nav-link" id="nav-quarta-tab" data-toggle="tab" href="#nav-quarta" role="tab" aria-controls="nav-quarta" aria-selected="false">Quarta</a>
                                            <a class="nav-item nav-link" id="nav-quinta-tab" data-toggle="tab" href="#nav-quinta" role="tab" aria-controls="nav-quinta" aria-selected="false">Quinta</a>
                                            <a class="nav-item nav-link" id="nav-sexta-tab" data-toggle="tab" href="#nav-sexta" role="tab" aria-controls="nav-sexta" aria-selected="false">Sexta</a>
                                        </div>
                                    </nav>
                                    
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- Div segunda -->
                                        <div class="tab-pane fade" id="nav-segunda" role="tabpanel" aria-labelledby="nav-segunda-tab">
                                            <form action="">
                                                <div class="row mb-3 mt-3">
                                                    <div class="form-group mt-3 col-1">
                                                        <label for="formGroupExampleInput">GM</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                    <div class="form-group mt-3 col-4">
                                                        <label for="formGroupExampleInput">Exercicio</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                    <div class="form-group mt-3 col-1">
                                                        <label for="formGroupExampleInput">Carga</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Div terça -->
                                        <div class="tab-pane fade" id="nav-terca" role="tabpanel" aria-labelledby="nav-terca-tab">
                                            <form action="">
                                                <div class="row mb-3 mt-3">
                                                    <div class="form-group mt-3 col-1">
                                                        <label for="formGroupExampleInput">GM</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                    <div class="form-group mt-3 col-4">
                                                        <label for="formGroupExampleInput">Exercicio</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                    <div class="form-group mt-3 col-1">
                                                        <label for="formGroupExampleInput">Carga</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Div Quarta -->
                                        <div class="tab-pane fade" id="nav-quarta" role="tabpanel" aria-labelledby="nav-quarta-tab">
                                            <form action="">
                                                <div class="row mb-3 mt-3">
                                                    <div class="form-group mt-3 col-1">
                                                        <label for="formGroupExampleInput">GM</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                    <div class="form-group mt-3 col-4">
                                                        <label for="formGroupExampleInput">Exercicio</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                    <div class="form-group mt-3 col-1">
                                                        <label for="formGroupExampleInput">Carga</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Div quinta -->
                                        <div class="tab-pane fade" id="nav-quinta" role="tabpanel" aria-labelledby="nav-quinta-tab">
                                            <form action="">
                                                <div class="row mb-3 mt-3">
                                                    <div class="form-group mt-3 col-1">
                                                        <label for="formGroupExampleInput">GM</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                    <div class="form-group mt-3 col-4">
                                                        <label for="formGroupExampleInput">Exercicio</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                    <div class="form-group mt-3 col-1">
                                                        <label for="formGroupExampleInput">Carga</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Div sexta -->
                                        <div class="tab-pane fade" id="nav-sexta" role="tabpanel" aria-labelledby="nav-sexta-tab">
                                            <form action="">
                                                <div class="row mb-3 mt-3">
                                                    <div class="form-group mt-3 col-1">
                                                        <label for="formGroupExampleInput">GM</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                    <div class="form-group mt-3 col-4">
                                                        <label for="formGroupExampleInput">Exercicio</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                    <div class="form-group mt-3 col-1">
                                                        <label for="formGroupExampleInput">Carga</label>
                                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- dias semana 2 -->
                                <div class="tab-pane fade" id="nav-s2" role="tabpanel" aria-labelledby="nav-s2-tab">...</div>
                                <div class="tab-pane fade" id="nav-s3" role="tabpanel" aria-labelledby="nav-s3-tab">...</div>
                            </div>
                            
                            <br>    
                            <!-- Botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="button" class="btn btn-success"><a class="btn btn-success btn-block" href="#">Salvar</a></button>
                                <button type="button" class="btn btn-warning"><a class="btn btn-warning btn-block" href="#">Editar</a></button>
                                <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="treinos.php">Voltar</a></button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Include php rodapé -->
<?php
include_once('include/footer.html');
?>
