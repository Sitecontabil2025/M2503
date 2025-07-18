<?php
$titulo_pagina = "Quero Trocar de Contador";
$descricao_pagina = "Venha fazer uma parceria de sucesso!";
include('header.php');
include('contents/trocar-contador.php')
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
    <main class="container py-8 position-relative">

        <p> Mais praticidade e tranquilidade! Acompanhe tudo o que acontece na contabilidade de sua empresa de forma segura. Deixe a burocracia por nossa conta e tenha mais tempo para cuidar do seu negócio. </p>

        <div class="box p-3 p-md-6 rounded my-5">
            <div class="row g-5 text-align-center">
                <?php foreach ($beneficios as $item): ?>
                    <div class="col-lg-4">
                        <i class="fa-2x <?= $item['icone']; ?> p-3 box text-primary"></i>
                        <h2 class="h4 fw-bolder my-4"><?= $item['titulo']; ?></h2>
                        <p class="small m-0"><?= $item['descricao']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <div class="row my-8">
            <?php foreach ($etapas as $item): ?>
                <div class="col-md text-center">
                    <div class="mb-3 box text-primary d-flex align-items-center justify-content-center mx-auto" style="width:100px; height:100px; border-radius:50%;">
                        <i class="fa-2x <?= $item['icone']; ?>"></i>
                    </div>
                    <h2 class="h4 fw-bolder my-4"><?= $item['titulo']; ?></h2>
                    <p class="small"><?= $item['descricao']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>


        <div class="box p-4 rounded">
            <div class="row gy-4 gy-lg-0 align-items-center">
                <div class="col">
                    <p class="text-tag"> Troque agora mesmo de contador!</p>
                    <h3 class="m-0 fw-bolder">Não fique com dúvidas, nós resolvemos tudo para você!</h3>
                </div>
                <div class="col-auto">
                    <a href="<?= whatsapp('Olá, Quero trocar de contador!') ?>" class="btn btn-default rounded-pill py-3 px-5 shadow-btn">falar com especialista</a>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include 'footer.php' ?>