<?php
require_once("dados.php");
$titulo_pagina = "Agendas de Obrigações";
require_once 'header.php';
?>

<!-- Breadcrumb / Hero Section -->
<section class="bg-light pb-5 border-bottom pt-header" style="background: var(--bg-secondary) !important; border-color: var(--border-color) !important; padding-top: 150px;">
    <div class="container text-center pt-4" data-aos="fade-down">
        <h1 class="fw-bolder mb-2" style="color: var(--text-main);"><?= $titulo_pagina; ?></h1>
        <p class="text-muted-custom small">Mantenha-se em dia com os prazos e obrigações fiscais.</p>
    </div>
</section>

<main class="container py-5 my-md-4" data-aos="fade-up">
    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5" style="background: var(--bg-card); color: var(--text-muted); line-height: 1.8;">
        <?php include_once('paginas/agendas.php'); ?>
    </div>
</main>

<?php require_once 'footer.php'; ?>