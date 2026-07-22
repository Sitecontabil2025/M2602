<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<?php require_once("dados.php"); ?>
<?php $json = (isset($url_json)) ? get_materias($url_json) : NULL; ?>
<?php $json_ler = (isset($url_json_ler)) ? get_materias($url_json_ler) : NULL; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $escritorio; ?> - <?= $titulo_pagina; ?></title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?= link_site('assets/images/favicon.png') ?>" type="image/x-icon">

    <!-- SEO META TAGS -->
    <meta property="og:title" content="<?= $titulo_pagina; ?>" />
    <meta property="og:description" content="<?= $descricao_pagina; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $escritorio; ?>" />
    <meta property="og:image" content="<?= link_site('assets/images/og-img.jpg') ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-BR" />
    <meta name="author" content="<?= $escritorio; ?>" />
    <meta name="contact" content="<?= $email; ?>" />
    <meta name="copyright" content="Copyright (c) <?= date("Y"); ?> - <?= $escritorio; ?>." />
    <meta name="description" content="<?= $descricao; ?>" />
    <meta name="keywords" content="<?= $keywords; ?>" />
    <meta name="resource-type" content="website" />

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- ARQUIVOS CSS -->
    <link rel="stylesheet" href="<?= link_site('assets/css/jquery-confirm.min.css') ?>">
    <link rel="stylesheet" href="<?= link_site('assets/css/aos.css') ?>">
    <link rel="stylesheet" href="<?= link_site('assets/css/swiper-bundle.min.css') ?>">
    <link rel="stylesheet" href="<?= link_site('assets/css/style.min.css?v=' . time()) ?>">

    <!-- ARQUIVOS JS -->
    <script src="<?= link_site('assets/js/jquery.min.js') ?>"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
    
</head>
<body>


    <!-- Header -->
    <nav class="navbar navbar-expand-lg sticky-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?= link_site('index.php'); ?>">
                <img src="<?= link_site('assets/images/logo.png'); ?>" alt="<?= $escritorio; ?>" height="50" class="logo-light">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-white fs-2"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= link_site('index.php'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= link_site('sobre.php'); ?>">Sobre Nós</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark border-0 shadow" aria-labelledby="servicosDropdown" style="background-color: var(--bg-card);">
                            <li><a class="dropdown-item py-2" href="<?= link_site('servicos-assessoria-empresarial.php'); ?>">Assessoria Empresarial</a></li>
                            <li><a class="dropdown-item py-2" href="<?= link_site('servicos-contabilidade.php'); ?>">Contabilidade Completa</a></li>
                            <li><a class="dropdown-item py-2" href="<?= link_site('servicos-trabalhista.php'); ?>">Departamento Trabalhista</a></li>
                            <li><a class="dropdown-item py-2" href="<?= link_site('servicos-mei.php'); ?>">Contabilidade para MEI</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#utilitarios">Links Úteis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= link_site('blog'); ?>" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="<?= link_site('contato.php'); ?>" class="btn btn-outline-primary rounded-pill btn-sm py-2 px-4">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>