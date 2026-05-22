<?php
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;
?>
<?php $json = json_decode(file_get_contents("https://sitecontabil.com.br/json/?db=sc_mod_documentos")); ?>
<?php $json_ler = json_decode(file_get_contents("https://sitecontabil.com.br/json/?db=sc_mod_documentos&id=$id")); ?>

<?php if (array_key_exists("error", $json)): ?>
    <p><?= $json->error; ?></p>
<?php else: ?>
    <div class="mb-4 d-flex">
        <?php foreach ($json as $item): ?>
            <p class="btn btn-primary rounded-pill me-3"><a href="modelos-documentos-ler.php?id=<?= $item->id; ?>"><?= $item->titulo; ?></a></p>
        <?php endforeach; ?>
    </div>
    <?php if (array_key_exists("error", $json_ler)): ?>
        <p><?= $json_ler->error; ?></p>
    <?php else: ?>
        <?php foreach ($json_ler as $ler): ?>
            <h2 class="fw-bolder"><?= $ler->titulo; ?></h2>
            <?= html_entity_decode($ler->texto) ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>