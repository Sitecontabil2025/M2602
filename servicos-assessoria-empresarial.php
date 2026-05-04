<?php 
$titulo_pagina = 'Assessoria Empresarial';
require_once 'header.php'; 
?>

<!-- Breadcrumb -->
<section class="bg-light pb-5 border-bottom pt-header" style="background: var(--bg-secondary) !important; border-color: var(--border-color) !important; padding-top: 150px;">
    <div class="container text-center pt-4" data-aos="fade-down">
        <h1 class="fw-bolder mb-2" style="color: var(--text-main);"><?= $titulo_pagina; ?></h1>
        <p class="text-muted-custom small">Planejamento focado no sucesso corporativo.</p>
    </div>
</section>

<section class="py-5" data-aos="fade-up">
    <div class="container" style="color: var(--text-muted); line-height: 1.8;">
        <p>Nossa empresa oferece assessoria empresarial completa, ajudando sua empresa a melhorar sua gestão, otimizar processos e alcançar resultados mais expressivos. Atuamos em diversas áreas, garantindo que seu negócio esteja em conformidade com as leis e preparado para crescer.</p>
        <p>Oferecemos:</p>
        
        <ul class="mb-4">
            <li>Planejamento estratégico personalizado;</li>
            <li>Gestão financeira eficiente para aumentar seus lucros;</li>
            <li>Consultoria contábil e fiscal para reduzir riscos tributários;</li>
            <li>Suporte em recursos humanos e conformidade trabalhista;</li>
            <li>Apoio na implementação de inovações tecnológicas.</li>
        </ul>

        <p>Com nossa assessoria, você terá uma visão clara do seu negócio, facilitando decisões estratégicas e mantendo sua empresa competitiva.</p>

        <div class="mt-5 text-center">
            <a href="<?= whatsapp('Olá, gostaria de saber mais sobre ' . $titulo_pagina); ?>" class="btn btn-primary rounded-pill px-4 py-2" target="_blank">Falar com um Especialista</a>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>