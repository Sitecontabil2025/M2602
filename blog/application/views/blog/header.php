<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Sitecontabil">
<title><?= $escritorio; ?> - <?= $titulo; ?></title>

<!-- Bootstrap core CSS -->
<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?= base_url('assets/css/jquery-confirm.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/css/style.min.css') ?>" rel="stylesheet">

<!-- SEO metaTags -->
<link rel="shortcut icon" href="<?= $icone ?>" type="image/png">
<meta property="og:title" content="<?= $titulo; ?>" />
<meta property="og:description" content="<?= $descricao; ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?= $escritorio; ?>" />
<meta property="og:image" content="<?= (isset($conteudo) && !empty($conteudo[0]->thumbnail)) ? $conteudo[0]->thumbnail : base_url('assets/imgs/thumbnail.png'); ?>">
<meta property="og:url" content="<?= current_url(); ?>">
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="pt-BR" />
<meta https-equiv="content-language" content="pt-BR" />
<meta name="author" content="<?= $escritorio; ?>" />
<meta name="contact" content="<?= $email; ?>" />
<meta name="copyright" content="<?= $escritorio; ?>" />
<meta name="description" content="<?= $descricao; ?>" />
<meta name="keywords" content="<?= (isset($conteudo)) ? $conteudo[0]->title : $descricao; ?>" />
<meta name="resource-type" content="website" />
<link rel="canonical" href="<?= current_url() ?>" />
<meta name="apple-mobile-web-app-title" content="<?= $escritorio ?>">
<meta name="application-name" content="<?= $escritorio ?>">
<meta name="msapplication-TileColor" content="<?= $cor ?>">
<meta name="theme-color" content="<?= $cor ?>">

<style>
:root {
    --bs-primary: <?= $cor ?>;
    --bs-primary-rgb: <?= hex2rgba($cor) ?>;
    --bs-link-color: var(--bs-primary);
    --bs-link-hover-color: <?= adjustColor($cor, 1.5) ?>;
    --bs-btn-custom-color: <?= getContrastColor($cor) ?>;
    --bs-btn-hover-custom-color: <?= getContrastColor(adjustColor($cor, 1.5)) ?>;
}

::-moz-selection {
    color: white;
    background: var(--bs-primary);
}

::-webkit-selection {
    color: white;
    background: var(--bs-primary);
}

::selection {
    color: white;
    background: var(--bs-primary);
}

.pagination {
    --bs-pagination-active-bg: var(--bs-primary);
    --bs-pagination-active-border-color: var(--bs-primary);
    --bs-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-primary-rgb), 0.25);
}

.btn-primary {
    --bs-btn-color: var(--bs-btn-custom-color);
    --bs-btn-bg: var(--bs-primary);
    --bs-btn-border-color: var(--bs-primary);
    --bs-btn-hover-color: var(--bs-btn-hover-custom-color);
    --bs-btn-hover-bg: var(--bs-link-hover-color);
    --bs-btn-hover-border-color: var(--bs-link-hover-color);
    --bs-btn-active-color: var(--bs-btn-custom-color);
    --bs-btn-active-bg: var(--bs-link-hover-color);
    --bs-btn-active-border-color: var(--bs-link-hover-color);
    --bs-btn-disabled-color: var(--bs-btn-custom-color);
    --bs-btn-disabled-bg: var(--bs-primary);
    --bs-btn-disabled-border-color: var(--bs-primary);
}
</style>
</head>

<body>
<div class="d-flex vh-100 flex-column">
<div class="bg-<?= ($theme == 'light') ? 'white' : 'dark' ?> text-<?= ($theme == 'light') ? 'dark' : 'light' ?> header py-4 shadow">
    <div class="container">
        <div class="row align-items-end justify-content-center justify-content-md-between">
            <div class="col-md-4 col-lg-4 col-xl-3 mb-3 mb-md-0 text-center">
                <a href="<?= base_url() ?>"><img src="<?= $logo ?>" class="img-fluid" alt="<?= $escritorio ?>"></a>
            </div>
            <div class="col-md">
                <p class="text-end d-none d-md-block m-0"><?= $endereco ?> <?= $bairro ?></p>
                <p class="text-end d-none d-md-block"><?= $cidade ?> - <?= $cep ?></p>

                <div class="row justify-content-center justify-content-md-end gx-1">
                    <?php if (!empty($site)) : ?>
                        <div class="col-auto"><a href="<?= $site ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa-solid fa-laptop fa-fw"></i></a></div>
                    <?php endif ?>

                    <?php if (!empty($telefone)) : ?>
                        <div class="col-auto"><a href="<?= telefone_link($telefone) ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa-solid fa-phone fa-fw"></i></a></div>
                    <?php endif ?>

                    <?php if (!empty($whatsapp)) : ?>
                        <div class="col-auto"><a href="<?= whats_link($whatsapp) ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa-brands fa-whatsapp fa-fw"></i></a></div>
                    <?php endif ?>

                    <?php if (!empty($email)) : ?>
                        <div class="col-auto"><a href="mailto:<?= $email ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa-solid fa-envelope fa-fw"></i></a></div>
                    <?php endif ?>

                    <?php if (!empty($mapa)) : ?>
                        <div class="col-auto"><a href="<?= $mapa ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa-solid fa-map-marker fa-fw"></i></a></div>
                    <?php endif ?>
                    
                    <?php if (!empty($facebook)) : ?>
                        <div class="col-auto"><a href="<?= $facebook ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa-brands fa-facebook-square fa-fw"></i></a></div>
                    <?php endif ?>
                    
                    <?php if (!empty($instagram)) : ?>
                        <div class="col-auto"><a href="<?= $instagram ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa-brands fa-instagram fa-fw"></i></a></div>
                    <?php endif ?>
                    
                    <?php if (!empty($linkedin)) : ?>
                        <div class="col-auto"><a href="<?= $linkedin ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa-brands fa-linkedin fa-fw"></i></a></div>
                    <?php endif ?>
                    
                    <?php if (!empty($twitter)) : ?>
                        <div class="col-auto"><a href="<?= $twitter ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa-brands fa-twitter-square fa-fw"></i></a></div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-cotennt" style="flex:1">