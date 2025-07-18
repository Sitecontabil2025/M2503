<?php
$titulo_pagina = "Notícias Empresariais"
?>

<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 1;
$regiao_url = (isset($_GET["regiao"])) ? $_GET["regiao"] : 'brasil';

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

$url_json = "https://sitecontabil.com.br/json/?db=sc_noticias&id=$id";
?>

<?php include('header.php'); ?>
<div class="bg-solid position-relative">
    <main class="container py-8">
        <?php if (array_key_exists("error", $json)): ?>
            <h1 class="fw-bolder mb-7"><?= $titulo_pagina; ?></h1>
            <p><?= $json->error; ?></p>
        <?php else: ?>
            <?php foreach ($json as $item): ?>
                <h1 class="fw-bolder mb-7"><?= $item->titulo; ?></h1>
                <div class="row small my-2 text-primary">
                    <div class="col-auto">
                        <p><i class="fas fa-fw fa-calendar mr-1"></i> <?= mostra_data($item->pubdate); ?></p>
                    </div>
                    <div class="col-auto">
                        <p><i class="fas fa-fw fa-map-marker mr-1"></i> <a href="noticias.php?regiao=<?= $item->regiao ?>"><?= $regiao[$item->regiao]; ?></a></p>
                    </div>
                    <div class="col-auto">
                        <p><i class="fas fa-fw fa-newspaper mr-1"></i> <?= $item->fonte; ?></p>
                    </div>
                </div>
                <?= html_entity_decode($item->texto) ?>
            <?php endforeach; ?>
            <a href="noticias.php?p=<?= $p ?>&regiao=<?= $regiao_url ?>" class="btn btn-default rounded-pill py-3 px-5 shadow-btn"><i class="fas mr-1 fa-inbox"></i> Voltar para a listagem de notícias</a>
        <?php endif; ?>
    </main>
</div>

<?php include('footer.php'); ?>