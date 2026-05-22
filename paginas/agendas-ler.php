<?php $pagina_agenda = true; ?>
<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;

$json = json_decode(get_json("https://sitecontabil.com.br/json/?db=sc_agendas&id=$id"));
?>

<?php if(array_key_exists("error", $json)): ?>
    <p><?= $json->error; ?></p>
<?php else: ?>
    <?php foreach($json as $item): ?>
        <h2><?= $item->titulo; ?></h2>
        <?= html_entity_decode($item->texto) ?>
    <?php endforeach; ?>
    <div class="mt-5 pt-4 border-top">
        <a class="btn btn-outline-primary rounded-pill px-4 py-2" href="agendas.php?cat=<?= $_GET["cat"] ?>"><i class="fa-solid fa-arrow-left me-2"></i> Voltar para as agendas</a>
    </div>
<?php endif; ?>