<?php 
$titulo_pagina = 'Contabilidade para MEI';
require_once 'header.php'; 
?>

<!-- Breadcrumb -->
<section class="bg-light pb-5 border-bottom pt-header" style="background: var(--bg-secondary) !important; border-color: var(--border-color) !important; padding-top: 150px;">
    <div class="container text-center pt-4" data-aos="fade-down">
        <h1 class="fw-bolder mb-2" style="color: var(--text-main);"><?= $titulo_pagina; ?></h1>
        <p class="text-muted-custom small">Suporte ágil e simplificado para o Microempreendedor.</p>
    </div>
</section>

<section class="py-5" data-aos="fade-up">
    <div class="container" style="color: var(--text-muted); line-height: 1.8;">
        <p>Ser Microempreendedor Individual (MEI) é uma excelente forma de formalizar seu negócio, ter acesso a benefícios previdenciários e emitir notas fiscais. Porém, mesmo sendo um modelo simplificado de empresa, o MEI também possui obrigações que precisam ser cumpridas corretamente.</p>
        <p>Nossa contabilidade oferece suporte completo para MEIs, ajudando você a manter seu negócio regularizado, evitar problemas com o governo e focar no crescimento da sua atividade.</p>
        <p>Cuidamos de todas as orientações necessárias, como emissão de DAS, declaração anual do MEI, regularização de pendências, orientações fiscais e suporte para dúvidas do dia a dia.</p>
        <p>Com nosso apoio, você tem mais tranquilidade para empreender, sabendo que sua empresa está organizada e em conformidade com a legislação.</p>
        
        <div class="mt-5 text-center">
            <a href="<?= whatsapp('Olá, gostaria de saber mais sobre ' . $titulo_pagina); ?>" class="btn btn-primary rounded-pill px-4 py-2" target="_blank">Falar com um Especialista</a>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>