<?php include('header.php'); ?>
<div class="container py-8 position-relative">
    <div class="row gy-4 gy-lg-0 justify-content-between">
        <div class="col-lg-6">
            <p class="text-tag mb-5">Escolha nosso escritório</p>
            <h1 class="fw-bolder display-3">Descomplicamos a vida da sua empresa.</h1>
            <p class="my-5">Conquiste e fidelize seus clientes com estratégias inteligentes, em uma época em que a confiança está em primeiro lugar. Encontre tudo o que precisa em um escritório de Contabilidade!</p>
            <a href="abrir-empresa.php" class="btn btn-default rounded-pill py-3 px-5 shadow-btn">Abrir empresa</a>
            <a href="trocar-de-contador.php" class="btn fw-bold"><i class="fa-solid fa-repeat p-3 rounded-pill icon-btn"></i> Trocar de contador</a>
        </div>
        <div class="col-lg-4">
            <div class="box-picture" style="--bs-color: var(--bs-primary)">
                <div class="box-picture-image" style="--bs-background: url(../images/businesswoman-working-with-her-laptop.jpg)"></div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-4 pb-8 position-relative">
    <div class="row gy-4 gy-lg-0 align-items-center">
        <div class="col-lg-4">
            <h2 class="h4 mb-4 fw-bolder">Contabilidade digital completa e pensada para sua empresa.</h2>
            <p class="small mb-0">Temos uma equipe totalmente dedicada a contabilidade da sua empresa que trabalha com rapidez e agilidade.</p>
        </div>
        <div class="col-lg-4">
            <div class="box-solutions">
                <i class="fa-solid fa-check icon-solutions bg-primary"></i>
                <h2 class="h5 mb-4 fw-bolder">Com Simplicidade</h2>
                <p class="small">Com dinamismo e praticidade, fazemos todo o trabalho duro por você de forma simples, rápida e interativa.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box-solutions">
                <i class="fa-solid fa-user-plus icon-solutions bg-tertiary"></i>
                <h2 class="h5 mb-4 fw-bolder">Mais Praticidade</h2>
                <p class="small">Somos um Escritório de Contabilidade com profissionais capacitados para facilitar sua vida e de sua empresa.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-solid position-relative">
    <div class="container py-8">
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-6 col-xl-7 order-lg-2">
                <h2 class="fw-bold display-5">Venha para Escritório Contábil</h2>
                <h3 class="fw-bold my-5">Escolha nosso escritório e dê adeus às preocupações com contabilidade.</h3>
                <p>Traga já a sua empresa para o nosso escritório e você aproveitará todos os benefícios de uma boa contabilidade. Atenderemos todas as suas necessidades contábeis com muita agilidade, presteza e de forma econômica para sua empresa.</p>
                <div class="row gy-4 mt-5">
                    <div class="col-md-6">
                        <a href="abrir-empresa.php" target="_self" class="d-block">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-align-left icon-solutions bg-primary me-3"></i>
                                <h2 class="h5 mb-4 fw-bold">Abrir Empresa</h2>
                            </div>
                            <p class="small">Como abrir uma empresa? Passo a passo para tirar as ideias do papel</p>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="trocar-contador.php" target="_self" class="d-block">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-people-arrows icon-solutions bg-tertiary me-3"></i>
                                <h2 class="h5 mb-4 fw-bold">Trocar de Contador</h2>
                            </div>
                            <p class="small">Conosco você aproveitará todos os benefícios do melhor escritório de contabilidade.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4 order-lg-1">
                <div class="box-picture" style="--bs-color: var(--bs-secondary)">
                    <div class="box-picture-image" style="--bs-background: url(../images/woman.jpg)"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-8 position-relative">
    <div class="row gy-4 gy-lg-0 justify-content-between align-items-center">
        <div class="col-lg-5">
            <p class="text-tag mb-5">Conheça nossas soluções</p>
            <h2 class="fw-bold display-5">Uma solução sob medida para o seu negócio!</h2>
            <h3 class="fw-bold my-5">Descomplicamos a vida da sua empresa e a sua.</h3>
            <p class="mb-5">Somos uma empresa de contabilidade que chegou para descomplicar sua vida e economizar seu tempo e dinheiro.</p>
            <a href="<?= whatsapp('Olá, Quero saber mais sobre suas soluções!') ?>" class="btn btn-default rounded-pill py-3 px-5 shadow-btn">Conheça nossas soluções</a>
        </div>
        <div class="col-lg-6">
            <div class="row gy-4 align-items-stretch">
                <?php
                $index = 0;
                $numeros = [0, 3];
                foreach ($servicos as $itens):
                    if (in_array($index, $numeros)) {
                        $classeCol = 'col-lg-5';
                    } else {
                        $classeCol = 'col-lg-7';
                    }
                ?>
                    <div class="col-md-6 <?= $classeCol ?>">
                        <a href="<?= $itens['link'] ?>" class="box-solutions_transparent h-100 d-block">
                            <i class="fa-solid fa-chart-pie icon-solutions <?= $itens['bg'] ?>"></i>
                            <h2 class="h5 mb-4 fw-bolder"><?= $itens['titulo'] ?></h2>
                            <p class="small"><?= $itens['descricao'] ?></p>
                        </a>
                    </div>
                <?php
                    if ($index == 3) {
                        $index = 0;
                    } else {
                        $index++;
                    }
                endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="bg-solid position-relative">
    <div class="container py-8">
        <div class="row">
            <div class="col-lg-5">
                <div class="mb-5">
                    <p class="text-tag mb-5">Fique sempre atualizado</p>
                    <h2 class="fw-bold display-5">Notícias Empresariais</h2>
                    <h3 class="fw-bold my-5">Atualize-se com os principais acontecimentos do mundo contábil!</h3>
                    <p class="mb-5">Acompanhe em nosso site as últimas e principais notícias sobre contabilidade e negócios. Entrevistas, análises, destaques, opiniões e muito mais.</p>
                    <a href="noticias.php" class="btn btn-default rounded-pill py-3 px-5 shadow-btn">Veja mais notícias</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="box-news-container">
                    <?php $dados = get_materias('https://sitecontabil.com.br/json/?db=sc_noticias&limite=4'); ?>
                    <?php foreach ($dados as $item): ?>
                        <a href="noticias-ler.php?id=<?= $item->id ?>" class="box-news mb-2">
                            <div class="d-flex">
                                <div class="bg-primary p-3 text-center me-3">
                                    <p class="text-white small mb-0 d-flex flex-column">
                                        <span><?= mostra_data($item->pubdate, '%d'); ?></span>
                                        <span class="border-top border-bottom border-white"><?= mostra_data($item->pubdate, '%m'); ?></span>
                                        <span><?= mostra_data($item->pubdate, '%y'); ?></span>
                                    </p>
                                </div>
                                <div>
                                    <h2 class="h5 fw-semibold"> <?= limitar_texto($item->titulo, 100) ?> </h2>
                                    <p class="small mb-0"> <?= limitar_texto($item->descricao, 150) ?> </p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container py-8">
    <div class="row gy-4 justify-content-between align-items-center">
        <div class="col-lg-5 col-xl-4">
            <div class="box-picture" style="--bs-color: var(--bs-tertiary)">
                <div class="box-picture-image" style="--bs-background: url(../images/group.jpg)"></div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-7 position-relative">
            <p class="text-tag mb-5">Passo a passo</p>
            <h2 class="fw-bolder display-5 mb-5">Conheça o fluxo de trabalho e da otimização</h2>
            <?php
            include('contents/steps.php');
            foreach ($steps as $step => $data):
            ?>
                <div class="d-md-flex align-items-center mb-4">
                    <div class="mb-5 mb-md-0 me-md-3 text-center">
                        <div class="icon-solutions <?= $data['background'] ?>">
                            <i class="fa-solid <?= $data['icon'] ?>"></i>
                        </div>
                    </div>
                    <div class="text-center text-md-start">
                        <h3 class="h5 fw-semibold mb-0"><?= $step ?></h3>
                        <p class="small"><?= $data['description'] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<div class="bg-solid position-relative">
    <div class="container py-8">
        <div class="row gy-4 gy-lg-0">
            <div class="col-lg-5">
                <p class="text-tag mb-5">Dúvidas</p>
                <h2 class="fw-bold display-5">Como Funciona</h2>
                <h3 class="fw-bold mt-5">Veja com funciona os processos do Escritório Contábil</h3>
                <p class=" my-5">Reunimos abaixo as perguntas mais comuns que recebemos sobre abertura de empresas, documentos necessários e outras dúvidas legais. Confira para esclarecer suas dúvidas rapidamente!</p>
                <a href="<?= whatsapp('Olá, estou entrando em contato pelo site!') ?>" class="btn btn-default rounded-pill py-3 px-5 shadow-btn">Alguma dúvida? Fale conosco</a>
            </div>
            <div class="col-lg-7">
                <?php
                $index = 0;
                include('contents/duvidas.php');
                ?>
                <div class="accordion" id="accordionExample">
                    <?php foreach ($faq as $item): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?= $index; ?>">
                                <button class="accordion-button h5 fw-semibold mb-0 <?= $index !== 0 ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index; ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="collapse<?= $index; ?>">
                                    <?= $item['pergunta'] ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $index; ?>" class="accordion-collapse collapse  <?= $index === 0 ? 'show' : '' ?>" aria-labelledby="heading<?= $index; ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?= $item['resposta'] ?>
                                </div>
                            </div>
                        </div>
                        <?php $index++ ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-8">
        <div class="row gy-4 gy-lg-0 align-items-center">
            <div class="col-lg-5">
                <p class="text-tag mb-5">Parceiros</p>
                <h2 class="fw-bold display-5">Conheça nossos parceiros</h2>
                <h3 class="fw-bold mt-5">Empresas e pessoas que acreditam em nossos valores</h3>
                <p class=" my-5">Reunimos aqui alguns de nossos parceiros que acreditam e confiam em nossos serviços.</p>
            </div>
            <div class="col-lg-5 mx-auto">
                <div class="swiper parceiros">
                    <div class="swiper-wrapper">
                        <?php
                        $images = glob('assets/images/parceiros/*.png');
                        foreach ($images as $parceiro):
                        ?>
                            <div class="swiper-slide">
                                <div class="box text-center p-3">
                                    <img src="<?= $parceiro ?>" width="115" height="115" alt="" class="img-fluid">
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="mt-8">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>