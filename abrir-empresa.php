<?php
$titulo_pagina = "Quero Abrir Minha Empresa";
$descricao_pagina = "Venha fazer uma parceria de sucesso!";
include('header.php');
include('contents/abrir-empresa.php')
?>
<div class="container py-6 position-relative">
    <h1 class="fw-bolder text-uppercase"><?= $titulo_pagina; ?></h1>
    <nav style="--bs-breadcrumb-divider: '»';" aria-label="breadcrumb">
        <ol class="breadcrumb fw-bolder text-uppercase">
            <li class="breadcrumb-item small"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active small" aria-current="page"><?= $titulo_pagina; ?></li>
        </ol>
    </nav>
</div>
<div class="bg-solid position-relative">
    <main class="container py-8">
        <p> Ter o próprio negócio é o sonho de muitos brasileiros, mas só em pensar nas etapas para abrir uma empresa, alguns já começam a ter pesadelos. Com o objetivo de ajudar futuros empreendedores que ainda não sabem por onde começar e incentivar aqueles que estão com receio, criamos o guia “Como abrir uma empresa? Passo a passo para tirar as ideias do papel”. </p>

        <div class="box p-3 p-md-6 rounded my-5">
            <div class="row g-5">
                <?php foreach ($etapasCadastro as $etapa): ?>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-auto text-align-center">
                                <div class="p-3 box">
                                    <i class="fas fa-fw fa-2x <?= $etapa['icone']; ?> text-primary"></i>
                                </div>
                            </div>
                            <div class="col text-align-center text-align-md-justify">
                                <h2 class="h4 fw-bolder m-0"><?= $etapa['titulo']; ?></h2>
                                <p class="small m-0"><?= $etapa['descricao']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <div class="box p-4 rounded">
            <div class="row gy-4 gy-lg-0 align-items-center">
                <div class="col">
                    <p class="text-tag"> Abra sua empresa agora!</p>
                    <h3 class="m-0 fw-bolder">Não fique com dúvidas, nós resolvemos tudo para você!</h3>
                </div>
                <div class="col-auto">
                    <a href="<?= whatsapp('Olá, Quero abrir minha empresa!') ?>" class="btn btn-default rounded-pill py-3 px-5 shadow-btn">falar com especialista</a>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('footer.php') ?>