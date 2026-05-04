<!-- Footer -->
    <footer id="contato" class="footer">
        <div class="container">
            <div class="row gy-4 gy-lg-0 justify-content-between">
                <div class="col-md-6 col-lg-auto text-center text-md-start">
                    <h4>Navegação</h4>
                    <ul class="footer-links">
                        <li><a href="<?= base_url(''); ?>">Home</a></li>
                        <li><a href="<?= base_url('sobre'); ?>">Sobre Nós</a></li>
                        <li><a href="<?= base_url('servicos'); ?>">Serviços</a></li>
                        <li><a href="<?= base_url('noticias'); ?>">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-auto text-center text-md-start">
                    <h4>Utilitários</h4>
                    <ul class="footer-links footer-2-columns" id="utilitarios">
                        <?php if (isset($utilitarios)): foreach ($utilitarios as $item): ?>
                            <li><a href="<?= base_url($item['link']); ?>"><?= $item['titulo']; ?></a></li>
                        <?php endforeach; endif; ?>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-auto text-center text-md-start">
                    <h4>Contato</h4>
                    <ul class="footer-links">
                        <li><a href="<?= phone_link($telefone); ?>"><i class="fa-solid fa-phone pe-2 text-accent"></i> <?= $telefone; ?></a></li>
                        <li><a href="<?= whatsapp('Olá!'); ?>"><i class="fa-brands fa-whatsapp pe-2 text-accent"></i> <?= $whatsapp; ?></a></li>
                        <li><a href="mailto:<?= $email; ?>"><i class="fa-solid fa-envelope pe-2 text-accent"></i> <?= $email; ?></a></li>
                    </ul>
                </div>
                 <div class="col-md-6 col-lg-auto text-center text-md-start">
                    <h4>Redes Sociais</h4>
                    <div class="social-links mt-4">
                        <?php if(!empty($instagram)): ?><a href="<?= $instagram; ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a><?php endif; ?>
                        <?php if(!empty($facebook)): ?><a href="<?= $facebook; ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a><?php endif; ?>
                        <?php if(!empty($linkedin)): ?><a href="<?= $linkedin; ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a><?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-4 border-top" style="border-color: var(--border-color) !important;">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-muted-custom">&copy; <?= date('Y'); ?> <?= $escritorio ?? 'Sitecontabil'; ?>. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0 text-muted-custom">Desenvolvido por <a href="https://www.sitecontabil.com.br" target="_blank">Sitecontabil®</a></p>
                </div>
            </div>
        </div>
    </footer>

<a id="whatsapp" class="btn-whatsapp shadow" href="<?= whatsapp('Estou entrando em contato pelo site!') ?>" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v7.1.0/css/all.css">
<script src="<?= base_url('assets/js/cookie.min.js') ?>" data-position="left" data-hide="true" data-cor="var(--bs-primary)"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.mask.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-confirm.min.js') ?>"></script>
<script src="<?= base_url('assets/js/aos.js') ?>"></script>
<script src="<?= base_url('assets/js/scripts.min.js') ?>"></script>

</body>
</html>