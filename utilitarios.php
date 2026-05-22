<?php
require_once("dados.php");

// Captura o nome da URL (ex: utilitarios-certidoes.php)
$pagina = basename($_SERVER['REQUEST_URI'], '.php');

// Extrai o slug (ex: certidoes)
$slug = str_replace('utilitarios-', '', $pagina);

$utilitarioSelecionado = null;

// Procura no array onde o final do link corresponde ao slug
foreach ($utilitarios as $utilitario) {
    $arquivo = basename($utilitario['link'], '.php');
    if ($arquivo === "utilitarios-$slug") {
        $utilitarioSelecionado = $utilitario;
        break;
    }
}

if (!$utilitarioSelecionado) {
    $titulo_pagina = "Não Encontrado";
    include('header.php');
    echo "<main class='container py-8 text-center'><h1 class='text-main'>Utilitário não encontrado.</h1></main>";
    include('footer.php');
    exit;
}

// Normaliza o título
function normalizarSetor($string)
{
    $string = mb_strtolower($string, 'UTF-8');
    $string = str_replace(
        ['á', 'à', 'ã', 'â', 'é', 'ê', 'í', 'ó', 'ô', 'õ', 'ú', 'ç'],
        ['a', 'a', 'a', 'a', 'e', 'e', 'i', 'o', 'o', 'o', 'u', 'c'],
        $string
    );
    $string = preg_replace('/[^a-z0-9 ]/i', '', $string);
    $string = str_replace(' e ', ' E ', ucwords($string));
    return trim($string);
}

$tituloNormalizado = normalizarSetor($utilitarioSelecionado['titulo']);
$titulo_pagina = $utilitarioSelecionado['titulo'];
$descricao_pagina = "Informações e utilitários para facilitar o seu dia a dia empresarial.";

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
            <?php
            // Remove o prefixo "utilitarios-" do nome do arquivo antes de incluir
            $arquivo = 'paginas/' . str_replace('utilitarios-', '', $utilitarioSelecionado['link']);

            if (file_exists($arquivo)) {
                include_once($arquivo);
            } else {
                echo "<div class='alert alert-warning border-0 rounded-4 p-4'><i class='fa-solid fa-circle-exclamation me-2'></i> Arquivo de conteúdo não encontrado ($arquivo).</div>";
            }
            ?>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>