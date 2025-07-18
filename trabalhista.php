<?php
$titulo_pagina = "Obrigações Trabalhistas";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
include('header.php');
?>
<div class="container py-6 position-relative">
    <h1 class="fw-bolder text-uppercase"><?= $titulo_pagina; ?></h1>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
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
                <p>Sabemos como as obrigações trabalhistas podem ser desafiadoras, por isso oferecemos suporte completo para garantir que sua empresa esteja sempre em conformidade com a legislação. Cuidamos de todos os aspectos, desde o registro de funcionários até o recolhimento de encargos sociais, como FGTS e INSS.</p>
                <p>Entre nossos serviços, estão:</p>
                <ul>
                    <li>Registro de funcionários e elaboração da folha de pagamento;</li>
                    <li>Cálculo de férias, 13º salário e rescisões;</li>
                    <li>Recolhimento correto de impostos trabalhistas;</li>
                    <li>Cumprimento das normas de saúde e segurança do trabalho.</li>
                </ul>
                <p>Com nosso serviço de assessoria trabalhista, você evita multas e problemas judiciais, mantendo sua equipe motivada e sua empresa segura.</p>
                <a href="<?= whatsapp('Olá, estou entrando em contato pelo site!') ?>" class="btn btn-default rounded-pill py-3 px-5 shadow-btn mt-5">Venha fazer parte do <?= $escritorio ?></a>

            </div>
            <div class="col-lg-5 col-xl-4 order-lg-1">
                <div class="box-picture" style="--bs-color: var(--bs-primary)">
                    <div class="box-picture-image" style="--bs-background: url(../images/woman.jpg)"></div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('footer.php'); ?>