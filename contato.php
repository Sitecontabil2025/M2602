<?php $titulo_pagina = "Contato"; require_once 'header.php'; ?>

<!-- Breadcrumb -->
<section class="bg-light pb-5 border-bottom pt-header" style="background: var(--bg-secondary) !important; border-color: var(--border-color) !important; padding-top: 150px;">
    <div class="container text-center pt-4" data-aos="fade-down">
        <h1 class="fw-bolder mb-2" style="color: var(--text-main);">Fale <span class="text-primary">Conosco</span></h1>
        <p class="text-muted-custom small">Estamos prontos para atender você e sua empresa.</p>
    </div>
</section>

<section class="py-5" data-aos="fade-up">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 mx-auto">
                <div class="p-5 rounded-4 shadow-sm h-100" style="background: var(--bg-card);">
                    <h3 class="fw-bold mb-4">Informações de Contato</h3>
                    <p class="text-muted-custom mb-5">Tire todas as suas dúvidas entrando em contato pelas informações abaixo.</p>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; background-color: var(--accent-color);">
                            <i class="fa-solid fa-location-dot fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Localização</h6>
                            <p class="text-muted-custom mb-0 small"><?= $endereco; ?>, <?= $numero; ?> <?= $complemento; ?><br><?= $bairro; ?> - <?= $cidade; ?></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; background-color: var(--accent-color);">
                            <i class="fa-solid fa-envelope fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">E-mail</h6>
                            <p class="text-muted-custom mb-0 small"><?= $email; ?></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center">
                        <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px; background-color: var(--accent-color);">
                            <i class="fa-solid fa-phone fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Telefones</h6>
                            <p class="text-muted-custom mb-0 small"><?= $telefone; ?> <br> <?= $whatsapp; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Mapa -->
<section class="m-0 p-0" data-aos="fade-up">
    <?php if(!empty($mapa_iframe)): ?>
        <div class="ratio ratio-21x9" style="min-height: 400px;">
            <?= $mapa_iframe; ?>
        </div>
    <?php endif; ?>
</section>

<?php require_once 'footer.php'; ?>
