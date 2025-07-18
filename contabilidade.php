<?php
$titulo_pagina = "Contabilidade Completa";
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
                <p>Nossa empresa oferece Contabilidade Completa, um serviço abrangente que cuida de todos os aspectos financeiros e fiscais da sua empresa. Além de garantir o cumprimento de todas as obrigações tributárias e contábeis, proporcionamos uma visão detalhada da saúde financeira do seu negócio.</p>
                <p>Com a nossa Contabilidade Completa, você terá:</p>
                <ul>
                    <li>Relatórios contábeis precisos (balanço patrimonial, DRE, etc.);</li>
                    <li>Apuração e pagamento de impostos;</li>
                    <li>Controle de fluxo de caixa;</li>
                    <li>Gestão de folha de pagamento e encargos trabalhistas;</li>
                    <li>Planejamento tributário para redução de impostos.</li>
                </ul>
                <p>Deixe que nossa equipe de especialistas cuide dessa parte, enquanto você foca no crescimento do seu negócio.</p>
                <a href="<?= whatsapp('Olá, estou entrando em contato pelo site!') ?>" class="btn btn-default rounded-pill py-3 px-5 shadow-btn mt-5">Venha fazer parte do <?= $escritorio ?></a>
            </div>
            <div class="col-lg-5 col-xl-4 order-lg-1">
                <div class="box-picture" style="--bs-color: var(--bs-primary)">
                    <div class="box-picture-image" style="--bs-background: url(../images/businesswoman-working-with-her-laptop.jpg)"></div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('footer.php'); ?>