<?php get_template('blog/header'); ?>

<div class="container my-5">
    <?php if (!empty($conteudo)) : ?>
        <div class="row">
        <?php foreach ($conteudo as $k => $s) : ?>
            <?php if (!empty($s->thumbnail)) : ?>
                <div class="col-md-5 my-3">
                    <img src="<?= $s->thumbnail ?>" class="img-fluid rounded" alt="<?= $s->title ?>">
                </div>
            <?php endif ?>
            <div class="col-md my-3">
                <h1 class="m-0"><?= $s->title ?></h1>

                <div class="py-3 my-3 border-top border-bottom">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-share-nodes fa-fw"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(base_url($s->slug)) ?>" target="_blank"><i class="fab fa-fw fa-facebook-square"></i> Facebook</a>
                                    <a class="dropdown-item" href="https://api.whatsapp.com/send?text=<?= urlencode(base_url($s->slug)) ?>" target="_blank"><i class="fab fa-fw fa-whatsapp-square"></i> Whatsapp</a>
                                    <a class="dropdown-item" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode(base_url($s->slug)) ?>&title=<?= urlencode($s->title) ?>" target="_blank"><i class="fab fa-fw fa-linkedin"></i> Linkedin</a>
                                    <a class="dropdown-item" href="https://twitter.com/intent/tweet?url=<?= urlencode(base_url($s->slug)) ?>&text=<?= urlencode($s->title) ?>" target="_blank"><i class="fab fa-fw fa-twitter-square"></i> Twitter</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <p class="small text-muted m-0"><i class="fa-solid fa-calendar fa-fw"></i> <?= date('d/m/Y', strtotime($s->pubdate)) ?></p>
                        </div>
                        <div class="col-auto">
                            <p class="small text-muted m-0"><i class="fa-solid fa-clock fa-fw"></i> <?= date('H:i', strtotime($s->pubdate)) ?></p>
                        </div>
                    </div>
                </div>

                <div class="text-justify"><?= html_entity_decode($s->content) ?></div>
            </div>
        <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p class="alert alert-warning">Nenhuma postagem até o momento.</p>
    <?php endif ?>
</div>

<?php get_template('blog/scripts'); ?>
<?php get_template('blog/footer'); ?>