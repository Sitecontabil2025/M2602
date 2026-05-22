<?php
$limite = 10;
$max = 100;
$p = (isset($_GET["p"]) && $_GET["p"] >= 1) ? $_GET["p"] : 1;
if ($p > 10) $p = 10;

// URL para o header.php processar
$url_json = "https://sitecontabil.com.br/json/?db=sc_noticias&limite=$max";

$titulo_pagina = "Notícias Empresariais";
require_once 'header.php';

// O header.php já carregou $json via get_materias($url_json)
$i = ($p - 1) * $limite;
$j = $i + $limite;
?>

<!-- BREADCRUMB / PAGE TITLE -->
<section class="pt-8 pb-5 border-bottom">
    <div class="container text-center pt-4" data-aos="fade-down">
        <h1 class="fw-bolder mb-2">Notícias <span class="text-primary">Empresariais</span></h1>
        <p class="text-muted small">Fique por dentro das principais atualizações do mundo contábil e corporativo.</p>
    </div>
</section>

<main class="container py-5">
    <?php if (!$json || (is_object($json) && property_exists($json, 'error'))): ?>
        <div class="alert alert-info rounded-4 border-0 shadow-sm p-4 text-center">
            <i class="fa-solid fa-circle-info fs-1 text-primary d-block mb-3"></i>
            <p class="mb-0"><?= is_object($json) ? $json->error : 'Nenhuma notícia encontrada no momento.'; ?></p>
        </div>
    <?php else: ?>
        <div class="row g-4 mb-5">
            <?php for ($k = $i; $k < $j; $k++): ?>
                <?php if (isset($json[$k])): $item = $json[$k]; ?>
                    <div class="col-12" data-aos="fade-up">
                        <div class="card border-0 shadow-sm rounded-4 card-hover overflow-hidden">
                            <div class="card-body p-4 p-md-5">
                                <h2 class="h3 fw-bold mb-3">
                                    <a href="noticias-ler.php?id=<?= $item->id ?>&p=<?= $p ?>" class="text-decoration-none hover-primary">
                                        <?= $item->titulo; ?>
                                    </a>
                                </h2>
                                
                                <div class="d-flex flex-wrap gap-3 small text-muted mb-4 opacity-75">
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
                                        <?= $item->fonte; ?>
                                    </span>
                                </div>
                                
                                <p class="text-muted mb-4">
                                    <?= limitar_texto(strip_tags(html_entity_decode($item->texto)), 300); ?>
                                </p>
                                
                                <a href="noticias-ler.php?id=<?= $item->id ?>&p=<?= $p ?>" class="btn btn-outline-primary rounded-pill px-4 fw-bold small">
                                    Leia na íntegra
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>

        <!-- PAGINAÇÃO -->
        <nav aria-label="Navegação de notícias" data-aos="fade-up">
            <div class="d-flex justify-content-center gap-2 flex-wrap">
                <?php
                $maxpag = ceil($max / $limite);
                for ($num = 1; $num <= $maxpag; $num++):
                ?>
                    <a href="noticias.php?p=<?= $num ?>" class="btn <?= $p == $num ? 'btn-primary' : 'btn-outline-light' ?> rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 45px; height: 45px;">
                        <?= $num ?>
                    </a>
                <?php endfor; ?>
            </div>
        </nav>
    <?php endif; ?>
</main>

<?php require_once 'footer.php'; ?>