<?php 
$titulo_pagina = 'Contabilidade Completa';
require_once 'header.php'; 
?>

<!-- Breadcrumb -->
<section class="bg-light pb-5 border-bottom pt-header" style="background: var(--bg-secondary) !important; border-color: var(--border-color) !important; padding-top: 150px;">
    <div class="container text-center pt-4" data-aos="fade-down">
        <h1 class="fw-bolder mb-2" style="color: var(--text-main);"><?= $titulo_pagina; ?></h1>
        <p class="text-muted-custom small">Tranquilidade e precisão para a sua gestão contábil.</p>
    </div>
</section>

<section class="py-5" data-aos="fade-up">
    <div class="container" style="color: var(--text-muted); line-height: 1.8;">
        <p>Nossa empresa oferece Contabilidade Completa, um serviço abrangente que cuida de todos os aspectos financeiros e fiscais da sua empresa. Além de garantir o cumprimento de todas as obrigações tributárias e contábeis, proporcionamos uma visão detalhada da saúde financeira do seu negócio.</p>
        <p>Com a nossa Contabilidade Completa, você terá:</p>

        <ul class="mb-4">
            <li>Relatórios contábeis precisos (balanço patrimonial, DRE, etc.);</li>
            <li>Apuração e pagamento de impostos;</li>
            <li>Controle de fluxo de caixa;</li>
            <li>Gestão de folha de pagamento e encargos trabalhistas;</li>
            <li>Planejamento tributário para redução de impostos.</li>
        </ul>
        
        <p>Deixe que nossa equipe de especialistas cuide dessa parte, enquanto você foca no crescimento do seu negócio.</p>

        <div class="mt-5 text-center">
            <a href="<?= whatsapp('Olá, gostaria de saber mais sobre ' . $titulo_pagina); ?>" class="btn btn-primary rounded-pill px-4 py-2" target="_blank">Falar com um Especialista</a>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>