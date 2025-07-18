<?php
$titulo_pagina = "Migrar MEI para ME";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
include('header.php');
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
        <div class="row">
            <div class="col-lg-7">
                <p>Se você está expandindo seu negócio, nossa empresa está pronta para auxiliar na troca de MEI para ME. Essa transição é importante para empresas que ultrapassaram o limite de faturamento do MEI ou precisam contratar mais de um funcionário.</p>
                <p>Nosso serviço de migração inclui:</p>
                <ul>
                    <li>Abertura e regularização da sua Microempresa (ME);</li>
                    <li>Escolha do melhor regime tributário (Simples Nacional, Lucro Presumido ou Lucro Real);</li>
                    <li>Organização da contabilidade completa da sua empresa;</li>
                    <li>Suporte na emissão de notas fiscais e cumprimento de novas obrigações acessórias;</li>
                    <li>Orientação para contratação de mais funcionários, conforme a necessidade do negócio.</li>
                </ul>
                <p>Conte com nossa expertise para realizar essa mudança de forma segura e dentro da lei, garantindo o crescimento do seu empreendimento sem complicações.</p>
                <a href="<?= whatsapp('Olá, estou entrando em contato pelo site!') ?>" class="btn btn-default rounded-pill py-3 px-5 shadow-btn mt-5">Venha fazer parte do <?= $escritorio ?></a>
            </div>
            <div class="col-lg-5 col-xl-4 order-lg-1">
                <div class="box-picture" style="--bs-color: var(--bs-primary)">
                    <div class="box-picture-image" style="--bs-background: url(../images/header_city_front.png)"></div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('footer.php'); ?>