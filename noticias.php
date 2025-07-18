<?php
$titulo_pagina = "Notícias Empresariais";
$descricao_pagina = "Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.";
include('header.php');
?>

<?php
$limite = 10;
$max = 100;
if (isset($_GET["p"])):
    if ($_GET["p"] < 1) :
        $p = 1;
    elseif ($_GET["p"] > 10) :
        $p = $max / $limite;
    else :
        $p = $_GET["p"];
    endif;
else :
    $p = 1;
endif;
$i = ($p - 1) * $limite;
$j = $i + $limite;

$json = json_decode(get_json("https://sitecontabil.com.br/json/?db=sc_noticias&limite=$max"));
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
        <?php if (array_key_exists("error", $json)): ?>
            <p><?= $json->error; ?></p>
        <?php else: ?>
            <?php for ($i; $i < $j; $i++): ?>
                <?php if (isset($json[$i])) : ?>
                    <div class="mb-7">
                        <h2 class="fw-bolder"><?= $json[$i]->titulo; ?></h2>
                        <div class="row small my-4">
                            <div class="col-auto">
                                <p><i class="fas fa-fw fa-calendar mr-1"></i> <?= mostra_data($json[$i]->pubdate); ?></p>
                            </div>
                            <div class="col-auto">
                                <p><i class="fas fa-fw fa-map-marker mr-1"></i> <a href="noticias.php?regiao=<?= $json[$i]->regiao ?>"><?= $regiao[$json[$i]->regiao]; ?></a></p>
                            </div>
                            <div class="col-auto">
                                <p><i class="fas fa-fw fa-newspaper mr-1"></i> <?= $json[$i]->fonte; ?></p>
                            </div>
                        </div>
                        <p><?= limitar_texto(strip_tags(html_entity_decode($json[$i]->texto)), 350); ?></p>
                        <a href="noticias-ler.php?id=<?= $json[$i]->id ?>&p=<?= $p ?>" class="btn btn-default rounded-pill py-3 px-5 shadow-btn">Leia na integra</a>
                    </div>
                <?php endif ?>
            <?php endfor; ?>
            <div class="paginacao">
                <?php
                $num = 1;
                $maxpag = $max / $limite;
                ?>
                <div class="text-center">
                    <?php for ($num; $num <= $maxpag; $num++): ?>
                        <a href="noticias.php?p=<?= $num ?>" class="btn btn-default rounded-pill px-3 shadow-btn"><?= $num ?></a>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endif; ?>
    </main>
</div>

<?php include('footer.php'); ?>