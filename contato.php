<?php
$titulo_pagina = "Contato";
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
        <div class="row gy-6 gy-lg-0 justify-content-between">
            <div class="col-lg-4">
                <div class="w-100 box p-5">
                    <p class="text-tag">Tem alguma dúvida?</p>
                    <h2 class="fw-bold display-6">Fale consoco agora mesmo</h2>
                    <p class="my-5">
                        <a href="<?= $mapa_link ?>" target="_blank"><?= $endereco; ?>, <?= $bairro; ?> - <?= $cidade; ?><br> <?= $cep; ?></a>
                        <a href="mailto:<?= $email; ?>" target="_blank"><?= $email; ?></a>
                    </p>
                    <p>
                        <a href="tel:<?= phone_link($telefone) ?>" target="_blank" class="btn btn-default rounded-pill shadow-btn"><i class="fa-solid fa-phone"></i> <?= $telefone; ?></a>
                        <a href="<?= whatsapp('Estou entrando em contato pelo site!') ?>" target="_blank" class="btn btn-default rounded-pill shadow-btn"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <h2 class="fw-bolder h3">Entre em contato e faça uma parceria de sucesso! Interessado em nossos serviços?</h2>
                <form action="" class="form-contact" id="formcontato">
                    <div class="row gy-3">
                        <div class="col-12">
                            <input type="text" name="nome" id="formnome" class="form-control p-3 box" placeholder="Nome*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" id="formemail" class="form-control p-3 box" placeholder="E-mail*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="celular" id="formcelular" class="form-control celular-mask p-3 box" placeholder="Telefone*" required>
                        </div>
                        <div class="col-12">
                            <textarea name="mensagem" id="formmensagem" cols="30" rows="5" class="form-control p-3 box" placeholder="Mensagem*" required></textarea>
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-between mt-4">
                        <div class="g-recaptcha mb-4" data-sitekey="6Ler6RUqAAAAABXvmUozo4faj8BtQkj6NoccM7fn"></div>
                        <div>
                            <button type="submit" class="btn btn-default rounded-pill py-3 px-5 shadow-btn">Enviar mensagem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
<?php include('footer.php'); ?>