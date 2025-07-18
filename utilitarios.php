<?php
$titulo_pagina = "Utilitários";
include "header.php"
?>
<section class="bg-tertiary">
    <div class="container py-6 position-relative">
        <h1 class="fw-bolder text-white text-uppercase"><?= $titulo_pagina; ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $titulo_pagina; ?></li>
            </ol>
        </nav>
    </div>
</section>
<main class="container py-8">
    <div class="row gy-4">
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="certidoes.php" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Certidões Negativas</strong><br>
                    Certidões em âmbito Federal, consultas do Simples e etc.</p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="modelos-documentos.php" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Modelos de Documentos</strong><br>
                    Contratos, Declarações, Editais, Procurações e etc.</p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="agendas.php" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Agendas de Obrigações</strong><br>
                    Agendas Trabalhista, Estaduais e Federal.</p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="facilitador.php" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Facilitador Contábil</strong><br>
                    Regulamento ICMS, ISS, Legislação e Secretarias.</p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="formularios.php" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Formulários Diversos</strong><br>
                    Instrução DARF, Comprovantes, Tabelas de CNPJ e muito mais.</p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="tabelas.php" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Tabelas Práticas</strong><br>
                    Recolhimentos, Simples, Imposto de Renda e Alíquotas.</p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="links.php" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Links Úteis</strong><br>
                    Diversos links escolhidos para facilitar seu dia a dia.</p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="http://www.sintegra.gov.br/" target="_blank" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Sintegra</strong><br>
                    Facilita o fornecimento dos contribuintes aos fiscos estaduais.</p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="http://www.previdencia.gov.br/" target="_blank" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Previdência Social</strong><br>
                    Oferece proteção contra diversos riscos econômicos.</p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="http://www.brasil.gov.br/" target="_blank" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Portal Brasil</strong><br>
                    Agregador de conteúdos dos ministérios e secretarias.</p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="http://www.sebrae.com.br" target="_blank" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Sebrae</strong><br>
                    Auxilia o desenvolvimento de micro e pequenas empresas.</p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="http://www.pgfn.fazenda.gov.br/" target="_blank" class="box-utilitarios">
                <i class="far fa-check-square"></i>
                <p class="m-0"><strong>Procuradoria-Geral</strong><br>
                    Realiza o controle jurídico e de legalidade da União.</p>
            </a>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>