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
                        <li><a href="<?= base_url('politica-de-privacidade'); ?>">Política de Privacidade</a></li>
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
                    <p class="mb-0 text-muted-custom">&copy; <?= date('Y'); ?> <?= $escritorio ?? 'Sitecontabil'; ?>. Todos os direitos reservados. &bull; <a href="<?= base_url('politica-de-privacidade'); ?>" class="hover-primary">Privacidade & Cookies</a></p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0 text-muted-custom">Desenvolvido por <a href="https://www.sitecontabil.com.br" target="_blank">Sitecontabil®</a></p>
                </div>
            </div>
        </div>
    </footer>

<!-- Custom Cookie Consent Banner -->
<div id="cookieBanner" class="cookie-banner-custom" style="display: none;">
    <div class="cookie-banner-container">
        <div class="cookie-banner-text">
            <h5 class="fw-bold mb-1"><i class="fa-solid fa-cookie-bite text-accent me-2"></i>Controle de Privacidade</h5>
            <p class="mb-0">Utilizamos cookies essenciais e tecnologias semelhantes para fornecer uma experiência melhor e mais segura de acordo com a nossa <a href="<?= base_url('politica-de-privacidade'); ?>" class="text-accent text-decoration-underline">Política de Privacidade</a>. Ao navegar no site, você concorda com o uso de cookies.</p>
        </div>
        <div class="cookie-banner-actions">
            <button type="button" class="btn btn-outline-custom btn-sm py-2 px-3" id="btnCookiePreferences">Preferências</button>
            <button type="button" class="btn btn-outline-custom btn-sm py-2 px-3" id="btnCookieReject">Recusar</button>
            <button type="button" class="btn btn-accent btn-sm py-2 px-3" id="btnCookieAccept">Aceitar Todos</button>
        </div>
    </div>
</div>

<!-- Custom Cookie Preferences Modal -->
<div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-modal-content">
            <div class="modal-header custom-modal-header">
                <h5 class="modal-title fw-bold text-white fs-5" id="cookieModalLabel"><i class="fa-solid fa-gear text-accent me-2"></i>Preferências de Cookies</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-modal-body">
                <p class="text-muted-custom small mb-4" style="line-height: 1.6;">Escolha quais tipos de cookies você autoriza o funcionamento em nosso portal. Os cookies estritamente necessários são ativados por padrão para garantir a estabilidade e segurança do site.</p>
                
                <div class="d-flex flex-column gap-3">
                    <div class="p-3 rounded-3" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-bold small text-white"><i class="fa-solid fa-shield-halved text-accent me-2"></i>1. Cookies Necessários</span>
                            <div class="form-check form-switch">
                                <input class="form-check-input custom-switch" type="checkbox" role="switch" id="cookieNecessary" checked disabled>
                            </div>
                        </div>
                        <p class="text-muted-custom mb-0" style="font-size: 0.8rem; line-height: 1.5;">Essenciais para o funcionamento básico do site. Garantem segurança e acessibilidade, e não podem ser desativados.</p>
                    </div>
                    
                    <div class="p-3 rounded-3" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-bold small text-white"><i class="fa-solid fa-chart-pie text-accent me-2"></i>2. Estatísticas e Desempenho</span>
                            <div class="form-check form-switch">
                                <input class="form-check-input custom-switch" type="checkbox" role="switch" id="cookieAnalytics" checked>
                            </div>
                        </div>
                        <p class="text-muted-custom mb-0" style="font-size: 0.8rem; line-height: 1.5;">Ajudam-nos a entender como os usuários interagem com as páginas, coletando informações estatísticas de forma totalmente anônima.</p>
                    </div>
                    
                    <div class="p-3 rounded-3" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-bold small text-white"><i class="fa-solid fa-bullseye text-accent me-2"></i>3. Marketing e Publicidade</span>
                            <div class="form-check form-switch">
                                <input class="form-check-input custom-switch" type="checkbox" role="switch" id="cookieMarketing">
                            </div>
                        </div>
                        <p class="text-muted-custom mb-0" style="font-size: 0.8rem; line-height: 1.5;">Permitem que anúncios sejam exibidos de maneira mais personalizada e de acordo com seus interesses de navegação.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer custom-modal-footer">
                <button type="button" class="btn btn-outline-custom btn-sm py-2 px-3" data-bs-dismiss="modal">Voltar</button>
                <button type="button" class="btn btn-accent btn-sm py-2 px-3" id="btnSaveCookiePreferences">Salvar Opções</button>
            </div>
        </div>
    </div>
</div>

<!-- Persistent Cookie Settings Button -->
<button type="button" id="cookieSettingsBtn" class="cookie-settings-btn" title="Preferências de Cookies">
    <i class="fa-solid fa-cookie"></i>
</button>

<a id="whatsapp" class="btn-whatsapp shadow" href="<?= whatsapp('Estou entrando em contato pelo site!') ?>" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v7.1.0/css/all.css">
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.mask.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-confirm.min.js') ?>"></script>
<script src="<?= base_url('assets/js/aos.js') ?>"></script>
<script src="<?= base_url('assets/js/cookie-consent.js') ?>"></script>
<script src="<?= base_url('assets/js/scripts.min.js') ?>"></script>

</body>
</html>