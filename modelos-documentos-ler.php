<?php
require_once("dados.php");
$titulo_pagina = "Modelos de Documentos";
$descricao_pagina = "Informações e modelos de documentos para facilitar sua gestão empresarial.";
include('header.php');
?>

<!-- Hero / Breadcrumb -->
<section class="bg-light pb-5 border-bottom pt-header" style="background: var(--bg-secondary) !important; border-color: var(--border-color) !important; padding-top: 150px;">
    <div class="container text-center pt-4" data-aos="fade-down">
        <h1 class="fw-bolder mb-2" style="color: var(--text-main);"><?= $titulo_pagina; ?></h1>
        <p class="text-muted-custom small"><?= $descricao_pagina; ?></p>
    </div>
</section>

<main class="py-5 my-md-4">
    <div class="container" data-aos="fade-up">
        <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5" style="background: var(--bg-card); color: var(--text-muted); line-height: 1.8;">
            <?php include_once('paginas/modelos-documentos-ler.php'); ?>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>