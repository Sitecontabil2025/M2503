<?php
$titulo_pagina = "Institucional";
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
                <h2 class="fw-bold mb-5">Conheça mais sobre nós</h2>
                <p>Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.</p>
                <p>As consultorias abrangem todas as áreas acima citadas. O planejamento tributário também faz parte de nosso currículo empresarial, analisamos a tributação que mais se adequa a sua empresa. Trabalhamos para poder servi-lo sempre com qualidade.</p>
                <p>O mundo econômico atual, tão complexo e instável em que temos de atuar e a rapidez das informações exigem de nós, administradores um esforço para adaptarmos a esse ritmo e principalmente para obtermos nosso objetivo maior, o sucesso. Para isso a capacidade de uma organização é o que determinará uma trajetória de vitórias ou de fracasso.</p>
                <p>Neste contexto, contando com uma equipe extremamente capacitada e preocupada em buscar constantemente o que há de mais novo no mercado, nos preocupamos em trazer um trabalho sério e competente com o intuito de agregar valores e aumentar o capital intelectual de seus parceiros (clientes), fazendo com que estas organizações se tornem bem sucedidas e preparadas para prosseguir neste caminho de conquistas e vitórias. Nosso intuito é estabelecer estratégias e operacionalizar o conjunto de ações para os nossos clientes, capaz de fazê-los sobreviver, crescer e se perpetuar no mercado.</p>
            </div>
            <div class="col-lg-5 col-xl-4 order-lg-1">
                <div class="box-picture" style="--bs-color: var(--bs-primary)">
                    <div class="box-picture-image" style="--bs-background: url(../images/woman.jpg)"></div>
                </div>
            </div>
        </div>
    </main>

    <div class="container position-relative pb-8">
        <div class="row gy-4 gy-lg-0 align-items-stretch">
            <?php
            include('contents/valores.php');
            foreach ($valores as $itens):
            ?>
                <div class="col-lg-4">
                    <div class="box p-4 h-100">
                        <i class="fas <?= $itens['icon'] ?> icon-solutions <?= $itens['bg'] ?>"></i>
                        <h2 class="h5 mb-4 fw-bolder"><?= $itens['titulo'] ?></h2>
                        <p class="small"><?= $itens['descricao'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>