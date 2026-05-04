<?php 
$titulo_pagina = 'Nossos Serviços';
require_once 'header.php'; 
?>

<!-- Breadcrumb -->
<section class="bg-light pb-5 border-bottom pt-header" style="background: var(--bg-secondary) !important; border-color: var(--border-color) !important; padding-top: 150px;">
    <div class="container text-center pt-4" data-aos="fade-down">
        <h1 class="fw-bolder mb-2" style="color: var(--text-main);">Nossos <span class="text-accent">Serviços</span></h1>
        <p class="text-muted-custom small">Soluções completas e personalizadas para o seu negócio.</p>
    </div>
</section>

<section class="py-5" data-aos="fade-up">
    <div class="container">
        <div class="row g-4">
            <?php if (isset($servicos)): foreach ($servicos as $servico): ?>
                <div class="col-lg-6">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100" style="background: var(--bg-card); transition: transform 0.3s ease;">
                        <div class="row g-0 h-100">
                            <div class="col-sm-5">
                                <div class="h-100" style="background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('<?= base_url($servico['imagem']); ?>') center/cover no-repeat; min-height: 250px;">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body p-4 d-flex flex-column h-100">
                                    <h3 class="fw-bold mb-3 h4" style="color: var(--text-main);"><?= $servico['titulo']; ?></h3>
                                    <p class="text-muted-custom mb-4 flex-grow-1" style="font-size: 0.95rem; line-height: 1.6;">
                                        <?= $servico['intro']; ?>. Nossa equipe está preparada para oferecer o suporte técnico necessário para sua empresa.
                                    </p>
                                    <div>
                                        <a href="<?= base_url($servico['link']); ?>" class="btn btn-outline-primary rounded-pill px-4 btn-sm">Saiba Mais <i class="fa-solid fa-chevron-right ms-1 small"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-dark">
    <div class="container text-center py-4" data-aos="zoom-in">
        <h2 class="fw-bold mb-4">Ainda tem dúvidas sobre qual serviço escolher?</h2>
        <p class="text-muted-custom mb-5 mx-auto" style="max-width: 700px;">Nossos especialistas estão prontos para analisar o perfil da sua empresa e indicar as melhores soluções contábeis e fiscais.</p>
        <a href="<?= base_url('contato'); ?>" class="btn btn-primary btn-lg rounded-pill px-5">Consultoria Gratuita</a>
    </div>
</section>

<?php require_once 'footer.php'; ?>
