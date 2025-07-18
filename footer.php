   <footer class="position-relative">
       <div class="container py-8">
           <div class="row gy-8 gy-lg-0 justify-content-between">
               <div class="col-lg-auto text-center text-lg-start">
                   <h2 class="h5 fw-semibold mb-4">Utilitários</h2>
                   <ul class="nav-footer">
                       <li><a href="agendas.php" target="_self">Agendas de obrigações</a></li>
                       <li><a href="modelos-documentos.php" target="_self">Modelos de Documentos</a></li>
                       <li><a href="certidoes.php" target="_self">Certidões Negativas</a></li>
                       <li><a href="facilitador.php" target="_self">Facilitador Contábil</a></li>
                       <li><a href="formularios.php" target="_self">Formulários Diversos</a></li>
                       <li><a href="tabelas.php" target="_self">Tabelas Práticas</a></li>
                       <li><a href="links.php" target="_self">Links Úteis</a></li>
                       <li><a href="http://www.sintegra.gov.br/" target="_blank">Sintegra</a></li>
                       <li><a href="https://www.gov.br/receitafederal/pt-br" target="_blank">Receita Federal</a></li>
                       <li><a href="https://www.gov.br/trabalho-e-emprego/pt-br" target="_blank">Ministério do Trabalho</a></li>
                       <li><a href="https://www.gov.br/previdencia/pt-br" target="_blank">Previdência Social</a></li>
                       <li><a href="https://www8.receita.fazenda.gov.br/simplesnacional/" target="_blank">Simples Nacional</a></li>
                       <li><a href="https://www.gov.br/pt-br" target="_blank">Portal Brasil</a></li>
                       <li><a href="https://sebrae.com.br/sites/PortalSebrae/" target="_blank">Sebrae</a></li>
                       <li><a href="https://goias.gov.br/procuradoria/" target="_blank">Procuradoria Geral</a></li>
                       <li><a href="http://sped.rfb.gov.br/" target="_blank">SPED</a></li>
                   </ul>
               </div>
               <div class="col-lg-auto text-center text-lg-start">
                   <h2 class="h5 fw-semibold mb-4">Contato</h2>
                   <p class="small"><i class="fa-brands fa-whatsapp"></i> <a href="<?= whatsapp('Estou entrando em contato pelo site!') ?>"><?= $whatsapp; ?></a></p>
                   <p class="small"><i class="fa-solid fa-phone"></i> <a href="tel:<?= phone_link($telefone) ?>"><?= $telefone; ?></a></p>
                   <p class="small"><i class="fa-regular fa-envelope"></i> <a href="mailto:<?= $email; ?>"><?= $email; ?></a></p>
               </div>
               <div class="col-lg-auto text-center text-lg-start">
                   <h2 class="h5 fw-semibold mb-4">Redes Sociais</h2>
                   <a href="<?= $facbook; ?>" target="_blank" class="icon-socialMedia">
                       <i class="fa-brands fa-square-facebook fa-2x"></i>
                   </a>
                   <a href="<?= $instagram; ?>" target="_blank" class="icon-socialMedia">
                       <i class="fa-brands fa-square-instagram fa-2x"></i>
                   </a>
               </div>
           </div>
       </div>

       <div class="container text-center pb-3 position-relative">
           <p class="small mb-0">Copyright <i class="fa-regular fa-copyright"></i> <?= ano_copy(2025) ?> <a href="https://sitecontabil.com.br/modelos" target="_blank"> <img src="https://sitecontabil.com.br/imgs/logo-sc-b.png" width="20" alt="" class="position-relative"> Design e desenvolvimento </a> | <strong> <?= $escritorio; ?> </strong> - <a href="lgpd.php" target="_self">Política de Privacidade</a> <!--| <a href="https://mpmsistema.com.br/painel" target="_blank"> <i class="fas fa-key"></i> Administrador</a>--></p>
       </div>
   </footer>

   <a class="btn-whatsapp shadow" href="<?= whatsapp('Estou entrando em contato pelo site!') ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.1/css/all.css">
   <script src="assets/js/cookie.min.js" data-position="left" data-hide="true" data-cor="var(--bs-primary)"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/swiper-bundle.min.js"></script>
   <script src="assets/js/aos.js"></script>
   <script src="assets/js/jquery.mask.min.js"></script>
   <script src="assets/js/jquery-confirm.min.js"></script>
   <script src="assets/js/script.min.js"></script>

   </body>

   </html>