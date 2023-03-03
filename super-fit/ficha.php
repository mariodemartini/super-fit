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
                            <!-- Semanas 1 a 6 -->
                            <div class="row mb-3">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s1-tab" data-toggle="tab" href="#nav-s1" role="tab" aria-controls="nav-s1" aria-selected="false">Semana 01</a>
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s2-tab" data-toggle="tab" href="#nav-s2" role="tab" aria-controls="nav-s2" aria-selected="false">Semana 02</a>
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s3-tab" data-toggle="tab" href="#nav-s3" role="tab" aria-controls="nav-s3" aria-selected="false">Semana 03</a>
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s4-tab" data-toggle="tab" href="#nav-s4" role="tab" aria-controls="nav-s4" aria-selected="false">Semana 04</a>
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s5-tab" data-toggle="tab" href="#nav-s5" role="tab" aria-controls="nav-s5" aria-selected="false">Semana 05</a>
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s6-tab" data-toggle="tab" href="#nav-s6" role="tab" aria-controls="nav-s6" aria-selected="false">Semana 06</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- semana 1 -->
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
                                                <a class="nav-item nav-link bg-info text-white" id="nav-segunda-tab" data-toggle="tab" href="#nav-segunda" role="tab" aria-controls="nav-segunda" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca-tab" data-toggle="tab" href="#nav-terca" role="tab" aria-controls="nav-terca" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta-tab" data-toggle="tab" href="#nav-quarta" role="tab" aria-controls="nav-quarta" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta-tab" data-toggle="tab" href="#nav-quinta" role="tab" aria-controls="nav-quinta" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta-tab" data-toggle="tab" href="#nav-sexta" role="tab" aria-controls="nav-sexta" aria-selected="false">Sexta</a>
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
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
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
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
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
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
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
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
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
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- semana 2 -->
                                    <div class="tab-pane fade" id="nav-s2" role="tabpanel" aria-labelledby="nav-s2-tab">
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
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link bg-info text-white" id="nav-segunda2-tab" data-toggle="tab" href="#nav-segunda2" role="tab" aria-controls="nav-segunda2" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca2-tab" data-toggle="tab" href="#nav-terca2" role="tab" aria-controls="nav-terca2" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta2-tab" data-toggle="tab" href="#nav-quarta2" role="tab" aria-controls="nav-quarta2" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta2-tab" data-toggle="tab" href="#nav-quinta2" role="tab" aria-controls="nav-quinta2" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta2-tab" data-toggle="tab" href="#nav-sexta2" role="tab" aria-controls="nav-sexta2" aria-selected="false">Sexta</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Div segunda -->
                                            <div class="tab-pane fade" id="nav-segunda2" role="tabpanel" aria-labelledby="nav-segunda2-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div terça -->
                                            <div class="tab-pane fade" id="nav-terca2" role="tabpanel" aria-labelledby="nav-terca2-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div Quarta -->
                                            <div class="tab-pane fade" id="nav-quarta2" role="tabpanel" aria-labelledby="nav-quarta2-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div quinta -->
                                            <div class="tab-pane fade" id="nav-quinta2" role="tabpanel" aria-labelledby="nav-quinta2-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div sexta -->
                                            <div class="tab-pane fade" id="nav-sexta2" role="tabpanel" aria-labelledby="nav-sexta2-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- semana 3 -->
                                    <div class="tab-pane fade" id="nav-s3" role="tabpanel" aria-labelledby="nav-s3-tab">
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
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link bg-info text-white" id="nav-segunda3-tab" data-toggle="tab" href="#nav-segunda3" role="tab" aria-controls="nav-segunda3" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca3-tab" data-toggle="tab" href="#nav-terca3" role="tab" aria-controls="nav-terca3" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta3-tab" data-toggle="tab" href="#nav-quarta3" role="tab" aria-controls="nav-quarta3" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta3-tab" data-toggle="tab" href="#nav-quinta3" role="tab" aria-controls="nav-quinta3" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta3-tab" data-toggle="tab" href="#nav-sexta3" role="tab" aria-controls="nav-sexta3" aria-selected="false">Sexta</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Div segunda -->
                                            <div class="tab-pane fade" id="nav-segunda3" role="tabpanel" aria-labelledby="nav-segunda3-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div terça -->
                                            <div class="tab-pane fade" id="nav-terca3" role="tabpanel" aria-labelledby="nav-terca3-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div Quarta -->
                                            <div class="tab-pane fade" id="nav-quarta3" role="tabpanel" aria-labelledby="nav-quarta3-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div quinta -->
                                            <div class="tab-pane fade" id="nav-quinta3" role="tabpanel" aria-labelledby="nav-quinta3-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div sexta -->
                                            <div class="tab-pane fade" id="nav-sexta3" role="tabpanel" aria-labelledby="nav-sexta3-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- semana 4 -->
                                    <div class="tab-pane fade" id="nav-s4" role="tabpanel" aria-labelledby="nav-s4-tab">
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
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link bg-info text-white" id="nav-segunda4-tab" data-toggle="tab" href="#nav-segunda4" role="tab" aria-controls="nav-segunda4" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca4-tab" data-toggle="tab" href="#nav-terca4" role="tab" aria-controls="nav-terca4" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta4-tab" data-toggle="tab" href="#nav-quarta4" role="tab" aria-controls="nav-quarta4" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta4-tab" data-toggle="tab" href="#nav-quinta4" role="tab" aria-controls="nav-quinta4" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta4-tab" data-toggle="tab" href="#nav-sexta4" role="tab" aria-controls="nav-sexta4" aria-selected="false">Sexta</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Div segunda -->
                                            <div class="tab-pane fade" id="nav-segunda4" role="tabpanel" aria-labelledby="nav-segunda4-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div terça -->
                                            <div class="tab-pane fade" id="nav-terca4" role="tabpanel" aria-labelledby="nav-terca4-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div Quarta -->
                                            <div class="tab-pane fade" id="nav-quarta4" role="tabpanel" aria-labelledby="nav-quarta4-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div quinta -->
                                            <div class="tab-pane fade" id="nav-quinta4" role="tabpanel" aria-labelledby="nav-quinta4-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div sexta -->
                                            <div class="tab-pane fade" id="nav-sexta4" role="tabpanel" aria-labelledby="nav-sexta4-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- semana 5 -->
                                    <div class="tab-pane fade" id="nav-s5" role="tabpanel" aria-labelledby="nav-s5-tab">
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
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link bg-info text-white" id="nav-segunda5-tab" data-toggle="tab" href="#nav-segunda5" role="tab" aria-controls="nav-segunda5" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca5-tab" data-toggle="tab" href="#nav-terca5" role="tab" aria-controls="nav-terca5" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta5-tab" data-toggle="tab" href="#nav-quarta5" role="tab" aria-controls="nav-quarta5" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta5-tab" data-toggle="tab" href="#nav-quinta5" role="tab" aria-controls="nav-quinta5" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta5-tab" data-toggle="tab" href="#nav-sexta5" role="tab" aria-controls="nav-sexta5" aria-selected="false">Sexta</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Div segunda -->
                                            <div class="tab-pane fade" id="nav-segunda5" role="tabpanel" aria-labelledby="nav-segunda5-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div terça -->
                                            <div class="tab-pane fade" id="nav-terca5" role="tabpanel" aria-labelledby="nav-terca5-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div Quarta -->
                                            <div class="tab-pane fade" id="nav-quarta5" role="tabpanel" aria-labelledby="nav-quarta5-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div quinta -->
                                            <div class="tab-pane fade" id="nav-quinta5" role="tabpanel" aria-labelledby="nav-quinta5-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div sexta -->
                                            <div class="tab-pane fade" id="nav-sexta5" role="tabpanel" aria-labelledby="nav-sexta5-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- semana 6 -->
                                    <div class="tab-pane fade" id="nav-s6" role="tabpanel" aria-labelledby="nav-s6-tab">
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
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link" id="nav-segunda6-tab" data-toggle="tab" href="#nav-segunda6" role="tab" aria-controls="nav-segunda6" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca6-tab" data-toggle="tab" href="#nav-terca6" role="tab" aria-controls="nav-terca6" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta6-tab" data-toggle="tab" href="#nav-quarta6" role="tab" aria-controls="nav-quarta6" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta6-tab" data-toggle="tab" href="#nav-quinta6" role="tab" aria-controls="nav-quinta6" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta6-tab" data-toggle="tab" href="#nav-sexta6" role="tab" aria-controls="nav-sexta6" aria-selected="false">Sexta</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Div segunda -->
                                            <div class="tab-pane fade" id="nav-segunda6" role="tabpanel" aria-labelledby="nav-segunda6-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div terça -->
                                            <div class="tab-pane fade" id="nav-terca6" role="tabpanel" aria-labelledby="nav-terca6-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div Quarta -->
                                            <div class="tab-pane fade" id="nav-quarta6" role="tabpanel" aria-labelledby="nav-quarta6-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div quinta -->
                                            <div class="tab-pane fade" id="nav-quinta6" role="tabpanel" aria-labelledby="nav-quinta6-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div sexta -->
                                            <div class="tab-pane fade" id="nav-sexta6" role="tabpanel" aria-labelledby="nav-sexta6-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Semanas 7 a 12 -->
                            <div class="row mb-3">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s7-tab" data-toggle="tab" href="#nav-s7" role="tab" aria-controls="nav-s7" aria-selected="false">Semana 07</a>
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s8-tab" data-toggle="tab" href="#nav-s8" role="tab" aria-controls="nav-s8" aria-selected="false">Semana 08</a>
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s9-tab" data-toggle="tab" href="#nav-s9" role="tab" aria-controls="nav-s9" aria-selected="false">Semana 09</a>
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s10-tab" data-toggle="tab" href="#nav-s10" role="tab" aria-controls="nav-s10" aria-selected="false">Semana 10</a>
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s11-tab" data-toggle="tab" href="#nav-s11" role="tab" aria-controls="nav-s11" aria-selected="false">Semana 11</a>
                                        <a class="nav-item nav-link bg-secondary text-white" id="nav-s12-tab" data-toggle="tab" href="#nav-s12" role="tab" aria-controls="nav-s12" aria-selected="false">Semana 12</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- dias da semana 7 -->
                                    <div class="tab-pane fade" id="nav-s7" role="tabpanel" aria-labelledby="nav-s7-tab">
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
                                                <a class="nav-item nav-link bg-info text-white" id="nav-segunda7-tab" data-toggle="tab" href="#nav-segunda7" role="tab" aria-controls="nav-segunda7" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca7-tab" data-toggle="tab" href="#nav-terca7" role="tab" aria-controls="nav-terca7" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta7-tab" data-toggle="tab" href="#nav-quarta7" role="tab" aria-controls="nav-quarta7" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta7-tab" data-toggle="tab" href="#nav-quinta7" role="tab" aria-controls="nav-quinta7" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta7-tab" data-toggle="tab" href="#nav-sexta7" role="tab" aria-controls="nav-sexta7" aria-selected="false">Sexta</a>
                                            </div>
                                        </nav>
                                
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Div segunda -->
                                            <div class="tab-pane fade" id="nav-segunda7" role="tabpanel" aria-labelledby="nav-segunda7-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div terça -->
                                            <div class="tab-pane fade" id="nav-terca7" role="tabpanel" aria-labelledby="nav-terca7-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div Quarta -->
                                            <div class="tab-pane fade" id="nav-quarta7" role="tabpanel" aria-labelledby="nav-quarta7-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div quinta -->
                                            <div class="tab-pane fade" id="nav-quinta7" role="tabpanel" aria-labelledby="nav-quinta7-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div sexta -->
                                            <div class="tab-pane fade" id="nav-sexta7" role="tabpanel" aria-labelledby="nav-sexta7-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- dias semana 8 -->
                                    <div class="tab-pane fade" id="nav-s8" role="tabpanel" aria-labelledby="nav-s8-tab">
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
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link bg-info text-white" id="nav-segunda8-tab" data-toggle="tab" href="#nav-segund8" role="tab" aria-controls="nav-segunda8" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca8-tab" data-toggle="tab" href="#nav-terca8" role="tab" aria-controls="nav-terca8" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta8-tab" data-toggle="tab" href="#nav-quarta8" role="tab" aria-controls="nav-quarta8" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta8-tab" data-toggle="tab" href="#nav-quinta8" role="tab" aria-controls="nav-quinta8" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta9-tab" data-toggle="tab" href="#nav-sexta9" role="tab" aria-controls="nav-sexta9" aria-selected="false">Sexta</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Div segunda -->
                                            <div class="tab-pane fade" id="nav-segunda8" role="tabpanel" aria-labelledby="nav-segunda8-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div terça -->
                                            <div class="tab-pane fade" id="nav-terca8" role="tabpanel" aria-labelledby="nav-terca8-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div Quarta -->
                                            <div class="tab-pane fade" id="nav-quarta8" role="tabpanel" aria-labelledby="nav-quarta8-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div quinta -->
                                            <div class="tab-pane fade" id="nav-quinta8" role="tabpanel" aria-labelledby="nav-quinta8-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div sexta -->
                                            <div class="tab-pane fade" id="nav-sexta8" role="tabpanel" aria-labelledby="nav-sexta8-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- semana 9 -->
                                    <div class="tab-pane fade" id="nav-s9" role="tabpanel" aria-labelledby="nav-s9-tab">
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
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link bg-info text-white" id="nav-segunda9-tab" data-toggle="tab" href="#nav-segunda9" role="tab" aria-controls="nav-segunda9" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca9-tab" data-toggle="tab" href="#nav-terca9" role="tab" aria-controls="nav-terca9" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta9-tab" data-toggle="tab" href="#nav-quarta9" role="tab" aria-controls="nav-quarta9" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta9-tab" data-toggle="tab" href="#nav-quinta9" role="tab" aria-controls="nav-quinta9" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta9-tab" data-toggle="tab" href="#nav-sexta9" role="tab" aria-controls="nav-sexta9" aria-selected="false">Sexta</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Div segunda -->
                                            <div class="tab-pane fade" id="nav-segunda9" role="tabpanel" aria-labelledby="nav-segunda9-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div terça -->
                                            <div class="tab-pane fade" id="nav-terca9" role="tabpanel" aria-labelledby="nav-terca9-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div Quarta -->
                                            <div class="tab-pane fade" id="nav-quarta9" role="tabpanel" aria-labelledby="nav-quarta9-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div quinta -->
                                            <div class="tab-pane fade" id="nav-quinta9" role="tabpanel" aria-labelledby="nav-quinta9-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div sexta -->
                                            <div class="tab-pane fade" id="nav-sexta9" role="tabpanel" aria-labelledby="nav-sexta9-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- semana 10 -->
                                    <div class="tab-pane fade" id="nav-s10" role="tabpanel" aria-labelledby="nav-s10-tab">
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
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link bg-info text-white" id="nav-segunda10-tab" data-toggle="tab" href="#nav-segunda10" role="tab" aria-controls="nav-segunda10" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca10-tab" data-toggle="tab" href="#nav-terca10" role="tab" aria-controls="nav-terca10" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta10-tab" data-toggle="tab" href="#nav-quarta10" role="tab" aria-controls="nav-quarta10" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta10-tab" data-toggle="tab" href="#nav-quinta10" role="tab" aria-controls="nav-quinta10" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta10-tab" data-toggle="tab" href="#nav-sexta10" role="tab" aria-controls="nav-sexta10" aria-selected="false">Sexta</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Div segunda -->
                                            <div class="tab-pane fade" id="nav-segunda10" role="tabpanel" aria-labelledby="nav-segunda10-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div terça -->
                                            <div class="tab-pane fade" id="nav-terca10" role="tabpanel" aria-labelledby="nav-terca10-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div Quarta -->
                                            <div class="tab-pane fade" id="nav-quarta10" role="tabpanel" aria-labelledby="nav-quarta10-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div quinta -->
                                            <div class="tab-pane fade" id="nav-quinta10" role="tabpanel" aria-labelledby="nav-quinta10-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div sexta -->
                                            <div class="tab-pane fade" id="nav-sexta10" role="tabpanel" aria-labelledby="nav-sexta10-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- semana 11 -->
                                    <div class="tab-pane fade" id="nav-s11" role="tabpanel" aria-labelledby="nav-s11-tab">
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
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link bg-info text-white" id="nav-segunda11-tab" data-toggle="tab" href="#nav-segunda11" role="tab" aria-controls="nav-segunda11" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca11-tab" data-toggle="tab" href="#nav-terca11" role="tab" aria-controls="nav-terca11" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta11-tab" data-toggle="tab" href="#nav-quarta11" role="tab" aria-controls="nav-quarta11" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta11-tab" data-toggle="tab" href="#nav-quinta11" role="tab" aria-controls="nav-quinta11" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta11-tab" data-toggle="tab" href="#nav-sexta11" role="tab" aria-controls="nav-sexta11" aria-selected="false">Sexta</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Div segunda -->
                                            <div class="tab-pane fade" id="nav-segunda11" role="tabpanel" aria-labelledby="nav-segunda11-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div terça -->
                                            <div class="tab-pane fade" id="nav-terca11" role="tabpanel" aria-labelledby="nav-terca11-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div Quarta -->
                                            <div class="tab-pane fade" id="nav-quarta11" role="tabpanel" aria-labelledby="nav-quarta11-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div quinta -->
                                            <div class="tab-pane fade" id="nav-quinta11" role="tabpanel" aria-labelledby="nav-quinta11-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div sexta -->
                                            <div class="tab-pane fade" id="nav-sexta11" role="tabpanel" aria-labelledby="nav-sexta11-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- semana 12 -->
                                    <div class="tab-pane fade" id="nav-s12" role="tabpanel" aria-labelledby="nav-s12-tab">
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
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link bg-info text-white" id="nav-segunda12-tab" data-toggle="tab" href="#nav-segunda12" role="tab" aria-controls="nav-segunda12" aria-selected="false">Segunda</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-terca12-tab" data-toggle="tab" href="#nav-terca12" role="tab" aria-controls="nav-terca12" aria-selected="false">Terça</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quarta12-tab" data-toggle="tab" href="#nav-quarta12" role="tab" aria-controls="nav-quarta12" aria-selected="false">Quarta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-quinta12-tab" data-toggle="tab" href="#nav-quinta12" role="tab" aria-controls="nav-quinta12" aria-selected="false">Quinta</a>
                                                <a class="nav-item nav-link bg-info text-white" id="nav-sexta12-tab" data-toggle="tab" href="#nav-sexta12" role="tab" aria-controls="nav-sexta12" aria-selected="false">Sexta</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <!-- Div segunda -->
                                            <div class="tab-pane fade" id="nav-segunda12" role="tabpanel" aria-labelledby="nav-segunda12-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div terça -->
                                            <div class="tab-pane fade" id="nav-terca12" role="tabpanel" aria-labelledby="nav-terca12-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div Quarta -->
                                            <div class="tab-pane fade" id="nav-quarta12" role="tabpanel" aria-labelledby="nav-quarta12-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div quinta -->
                                            <div class="tab-pane fade" id="nav-quinta12" role="tabpanel" aria-labelledby="nav-quinta12-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Div sexta -->
                                            <div class="tab-pane fade" id="nav-sexta12" role="tabpanel" aria-labelledby="nav-sexta12-tab">
                                                <form action="">
                                                    <div class="row mb-3 mt-3">
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">GM</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-4">
                                                            <label for="formGroupExampleInput">Exercicio</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Carga</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                        <div class="form-group mt-3 col-1">
                                                            <label for="formGroupExampleInput">Feedback</label>
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                            <input ype="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
