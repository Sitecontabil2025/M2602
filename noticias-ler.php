<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 1;
$p = (isset($_GET["p"])) ? $_GET["p"] : 1;
$regiao_url = (isset($_GET["regiao"])) ? $_GET["regiao"] : 'brasil';

// URL para o header.php processar
$url_json_ler = "https://sitecontabil.com.br/json/?db=sc_noticias&id=$id";

$titulo_pagina = "Notícias Empresariais";
require_once 'header.php';

// O header.php já carregou $json_ler via get_materias($url_json_ler)
?>

<!-- BREADCRUMB / PAGE TITLE -->
<section class="pt-8 pb-5 border-bottom">
    <div class="container text-center pt-4" data-aos="fade-down">
        <h1 class="fw-bolder mb-2"><?= (is_array($json_ler) && isset($json_ler[0])) ? $json_ler[0]->titulo : 'Notícia'; ?></h1>
        <p class="text-muted small">Conteúdo detalhado para sua gestão e conhecimento.</p>
    </div>
</section>

<main class="container py-5 my-md-4">
    <?php if (!$json_ler || (is_object($json_ler) && property_exists($json_ler, 'error'))): ?>
        <div class="alert alert-info rounded-4 border-0 shadow-sm p-4 text-center" data-aos="zoom-in">
            <i class="fa-solid fa-circle-exclamation fs-1 text-primary d-block mb-3"></i>
            <p class="mb-4"><?= is_object($json_ler) ? $json_ler->error : 'Notícia não encontrada.'; ?></p>
            <a href="noticias.php?p=<?= $p ?>" class="btn btn-dark rounded-pill px-4">Voltar para notícias</a>
        </div>
    <?php else: ?>
                <?php foreach ($json_ler as $item): ?>
                    <div class="mb-5" data-aos="fade-up">
                        <div class="d-flex flex-wrap gap-4 py-3 border-bottom small text-muted">
                            <span class="d-flex align-items-center">
                                <i class="fa-regular fa-calendar text-primary me-2"></i> 
                                <?= mostra_data($item->pubdate); ?>
                            </span>
                            <span class="d-flex align-items-center">
                                <i class="fa-solid fa-location-dot text-primary me-2"></i> 
                                <a href="noticias.php?regiao=<?= $item->regiao ?>" class="text-muted text-decoration-none hover-primary">
                                    <?= $regiao[$item->regiao]; ?>
                                </a>
                            </span>
                            <span class="d-flex align-items-center">
                                <i class="fa-regular fa-newspaper text-primary me-2"></i> 
                                <span class="fw-bold">Fonte:</span> <?= $item->fonte; ?>
                            </span>
                        </div>
                </div>

                    <section class="news-content mb-5 lh-lg  text-muted" data-aos="fade-up" data-aos-delay="100">
                        <?= html_entity_decode($item->texto) ?>
                    </section>
                <?php endforeach; ?>

                <div class="pt-4 border-top" data-aos="fade-up">
                    <a href="noticias.php?p=<?= $p ?>&regiao=<?= $regiao_url ?>" class="btn btn-light rounded-pill px-5">
                        <i class="fa-solid fa-arrow-left me-2"></i> Voltar para a listagem
                    </a>
                </div>
    <?php endif; ?>
</main>

<?php require_once 'footer.php'; ?>