<!-- Include php cabeçalho e barras -->
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
                    <!-- Div do Titulo da página -->
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">RESULTADOS</h3></div>
                     <!-- Div menu -->
                     <div class="card-header text-center">
                        <a class="btn btn-info btn-block" href="anamnese.php"><button type="button" class="btn btn-info btn-lg">ANAMNESE</button></a>
                        
                        <a class="btn btn-info btn-block" href="medidas.php"><button type="button" class="btn btn-info btn-lg">MEDIDAS</button></a>
                        
                        <a class="btn btn-info btn-block" href="forca-rep.php"><button type="button" class="btn btn-info btn-lg">FORÇA</button></a>
                        
                        <a class="btn btn-info btn-block" href="vo-esteira.php"><button type="button" class="btn btn-info btn-lg">VO2</button></a>
                        
                        <a class="btn btn-info btn-block" href="resultados.php"><button type="button" class="btn btn-info btn-lg">RESULTADOS</button></a>
                    </div>
                    <!-- Div barra de pesquisa -->
                    <form class="card-header inline-block form-inline mb-3">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Pesquisar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <!-- Div do conteudo principal -->
                    <div class="card-body">
                        <form>
                            <!-- Div data e idade -->
                            <div class="row mb-3">
                                <div class="form-group col-md-2">
                                    <label for="inputData">DATA</label>
                                    <input type="date" class="form-control" id="inputData">
                                </div>
                                <div class="form-group col-md-7">
                                    <label for="inputNome">NOME</label>
                                    <input type="text" class="form-control" id="inputNome">
                                </div>
                                <div class="form-group col-sm-1">
                                    <label for="inputIdade">IDADE</label>
                                    <input type="number" class="form-control" id="inputIdade">
                                </div>
                            </div>
                            <!-- Div titulos das colunas -->
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-2 my-4 bg-dark text-white text-center">ATUAL</div>
                                <div class="col-sm-2 my-4 bg-dark text-white text-center">DIFERENÇA</div>
                                <div class="col-sm-2 my-4 bg-dark text-white text-center">CLASSIFICAÇÃO</div>
                            </div>
                            <!-- Linha compativo peso -->
                            <div class="row d-flex justify-content-center">
                                <ul class="col-sm-2 list-group">
                                    <li class="list-group-item">Peso (kg)</li>
                                </ul>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="Kg">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="Kg">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="text" placeholder="">
                                </div>
                            </div>
                            <!-- Linha compativo imc -->
                            <div class="row d-flex justify-content-center">
                                <ul class="col-sm-2 list-group">
                                    <li class="list-group-item">IMC</li>
                                </ul>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="Kg/m2">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="Kg/m2">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="text" placeholder="">
                                </div>
                            </div>
                            <!-- Linha Abdomen -->
                            <div class="row d-flex justify-content-center">
                                <ul class="col-sm-2 list-group">
                                    <li class="list-group-item">Abdomen</li>
                                </ul>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" placeholder="cm">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" placeholder="cm">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="text" placeholder="">
                                </div>
                            </div>
                            <!-- Linha RCQ -->
                            <div class="row d-flex justify-content-center">
                                <ul class="col-sm-2 list-group">
                                    <li class="list-group-item">RCQ</li>
                                </ul>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" placeholder="cm">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" placeholder="cm">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="text" placeholder="">
                                </div>
                            </div>
                            <!-- Linha compativo % gordura -->
                            <div class="row d-flex justify-content-center">
                                <ul class="col-sm-2 list-group">
                                    <li class="list-group-item">% Gordura</li>
                                </ul>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="%">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="%">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="text" placeholder="">
                                </div>
                            </div>
                            <!-- Linha compativo % massa magra -->
                            <div class="row d-flex justify-content-center">
                                <ul class="col-sm-2 list-group">
                                    <li class="list-group-item">% Massa Magra</li>
                                </ul>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="%">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="%">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="text" placeholder="">
                                </div>
                            </div>
                            <!-- Linha compativo peso massa gorda -->
                            <div class="row d-flex justify-content-center">
                                <ul class="col-sm-2 list-group">
                                    <li class="list-group-item">M. Gorda (kg)</li>
                                </ul>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="Kg">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="Kg">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="text" placeholder="">
                                </div>
                            </div>
                            <!-- Linha compativo peso massa muscular -->
                            <div class="row d-flex justify-content-center">
                                <ul class="col-sm-2 list-group">
                                    <li class="list-group-item">M. Muscular (kg)</li>
                                </ul>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="Kg">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="Kg">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="text" placeholder="">
                                </div>
                            </div>
                            <!-- Linha compativo VO2 maximo -->
                            <div class="row d-flex justify-content-center">
                                <ul class="col-sm-2 list-group">
                                    <li class="list-group-item">VO² Máximo</li>
                                </ul>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="mL/kg·min">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="number" step="0.01" placeholder="mL/kg·min">
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control p-2" type="text" placeholder="">
                                </div>
                            </div>
                            <!-- Div dos botões de salvar -->
                            <div class="mt-4 mb-0">
                                <button type="button" class="btn btn-secondary"><a class="btn btn-secondary btn-block" href="avaliacao.php">Voltar</a></button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Include php rodapé -->
<?php
include_once('include/footer.html');
?>
