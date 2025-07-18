<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">
<?php require_once("dados.php"); ?>
<?php $json = (isset($url_json)) ? get_materias($url_json) : NULL; ?>
<?php $json_ler = (isset($url_json_ler)) ? get_materias($url_json_ler) : NULL; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?= $escritorio; ?> - <?= $titulo_pagina; ?></title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- SEO META TAGS -->
    <meta property="og:title" content="<?= $titulo_pagina; ?>" />
    <meta property="og:description" content="<?= $descricao_pagina; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $escritorio; ?>" />
    <meta property="og:image" content="assets/images/og-img.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-BR" />
    <meta name="author" content="<?= $escritorio; ?>" />
    <meta name="contact" content="<?= $email; ?>" />
    <meta name="copyright" content="Copyright (c) <?= date("Y"); ?> - <?= $escritorio; ?>." />
    <meta name="description" content="<?= $descricao; ?>" />
    <meta name="keywords" content="<?= $keywords; ?>" />
    <meta name="resource-type" content="website" />

    <!-- ARQUIVOS CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery-confirm.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css?v=<?= time() ?>">

    <!-- ARQUIVOS JS -->
    <script src="assets/js/jquery.min.js"> </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer> </script>

</head>

<body class="bg-abstract">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="offcanvas-body">
        </div>
    </div>

    <div class="container-toggle">
        <button class="btn-toggle rounded-pill">
            <i class="fa-regular fa-moon"></i>
            <i class="fa-regular fa-sun"></i>
            <span></span>
        </button>
    </div>

    <header class="pt-4">
        <div class="container position-relative py-4">
            <div class="row align-items-center">
                <div class="col-8 col-lg-auto">
                    <a href="index.php" target="_self">
                        <img src="assets/images/logo.png" width="260" height="65" alt="<?= $escritorio; ?>" class="img-fluid img-logo">
                    </a>
                </div>
                <div class="col-4 col-lg-auto ms-auto">
                    <div class="text-end d-lg-none">
                        <button class="btn btn-open rounded-pill px-4" type="button" id="open" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                    <nav class="d-none d-lg-block">
                        <ul class="nav align-items-center">
                            <li class="nav-item"><a href="index.php" target="_self" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="institucional.php" target="_self" class="nav-link">Institucional</a></li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Serviços</a>
                                <ul class="dropdown-menu">
                                    <?php
                                    include('contents/servicos.php');
                                    foreach ($servicos as $itens):
                                    ?>
                                        <li><a href="<?= $itens['link'] ?>" target="_self" class="dropdown-item"><?= $itens['titulo'] ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </li>
                            <!-- <li class="nav-item"><a href="requisicao" target="_blank" class="nav-link">Requisição de Serviços</a></li> -->
                            <!-- <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Galerias</a>
                                <ul class="dropdown-menu">
                                    <li><a href="fotos" target="_blank" class="dropdown-item">Fotos</a></li>
                                    <li><a href="videos" target="_blank" class="dropdown-item">Vídeos</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item"><a href="https://sitecontabil.com.br/periodicos/sitecontabil/webmagazine" target="_blank" class="nav-link">Informativo</a></li>
                            <li class="nav-item"><a href="contato.php" target="_self" class="nav-link">Contato</a></li>
                            <!-- <li class="nav-item"><a href="https://mpmsistema.com.br/cliente" target="_blank" class="btn btn-user rounded-pill py-3 px-4">Área Restrita</a></li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>