<?php 
$titulo_pagina = 'Departamento Trabalhista';
require_once 'header.php'; 
?>

<!-- Breadcrumb -->
<section class="bg-light pb-5 border-bottom pt-header" style="background: var(--bg-secondary) !important; border-color: var(--border-color) !important; padding-top: 150px;">
    <div class="container text-center pt-4" data-aos="fade-down">
        <h1 class="fw-bolder mb-2" style="color: var(--text-main);"><?= $titulo_pagina; ?></h1>
        <p class="text-muted-custom small">Gestão segura dos talentos e obrigações da sua equipe.</p>
    </div>
</section>

<section class="py-5" data-aos="fade-up">
    <div class="container"style="color: var(--text-muted); line-height: 1.8;">
        <p>Sabemos como as obrigações trabalhistas podem ser desafiadoras, por isso oferecemos suporte completo para garantir que sua empresa esteja sempre em conformidade com a legislação. Cuidamos de todos os aspectos, desde o registro de funcionários até o recolhimento de encargos sociais, como FGTS e INSS.</p>
        <p>Entre nossos serviços, estão:</p>

        <ul class="mb-4">
            <li>Registro de funcionários e elaboração da folha de pagamento;</li>
            <li>Cálculo de férias, 13º salário e rescisões;</li>
            <li>Recolhimento correto de impostos trabalhistas;</li>
            <li>Cumprimento das normas de saúde e segurança do trabalho.</li>
        </ul>

        <p>Com nosso serviço de assessoria trabalhista, você evita multas e problemas judiciais, mantendo sua equipe motivada e sua empresa segura.</p>
        
        <div class="mt-5 text-center">
            <a href="<?= whatsapp('Olá, gostaria de saber mais sobre ' . $titulo_pagina); ?>" class="btn btn-primary rounded-pill px-4 py-2" target="_blank">Falar com um Especialista</a>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>