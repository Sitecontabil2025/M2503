<?php
$titulo_pagina = "Assessoria Empressarial";
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
                <p>Nossa empresa oferece assessoria empresarial completa, ajudando sua empresa a melhorar sua gestão, otimizar processos e alcançar resultados mais expressivos. Atuamos em diversas áreas, garantindo que seu negócio esteja em conformidade com as leis e preparado para crescer.</p>
                <p>Oferecemos:</p>
                <ul>
                    <li>Planejamento estratégico personalizado;</li>
                    <li>Gestão financeira eficiente para aumentar seus lucros;</li>
                    <li>Consultoria contábil e fiscal para reduzir riscos tributários;</li>
                    <li>Suporte em recursos humanos e conformidade trabalhista;</li>
                    <li>Apoio na implementação de inovações tecnológicas.</li>
                </ul>
                <p>Com nossa assessoria, você terá uma visão clara do seu negócio, facilitando decisões estratégicas e mantendo sua empresa competitiva.</p>
                <a href="<?= whatsapp('Olá, estou entrando em contato pelo site!') ?>" class="btn btn-default rounded-pill py-3 px-5 shadow-btn mt-5">Venha fazer parte do <?= $escritorio ?></a>
            </div>
            <div class="col-lg-5 col-xl-4 order-lg-1">
                <div class="box-picture" style="--bs-color: var(--bs-primary)">
                    <div class="box-picture-image" style="--bs-background: url(../images/group.jpg)"></div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include('footer.php'); ?>