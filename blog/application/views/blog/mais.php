<?php if (!empty($periodicos_mais)) : ?>
    <?php foreach ($periodicos_mais as $k => $b) : ?>
        <div class="col-md-4 blog-col" data-key="<?= $_POST['pagina'] ?>">
            <div class="blog-post rounded border h-100 d-flex flex-wrap align-items-start">
                <div class="content">
                    <?php if (!empty($b->thumbnail)) : ?>
                        <div class="blog-img d-block overflow-hidden position-relative w-100">
                            <a href="<?= base_url($b->slug) ?>"><img src="<?= $b->thumbnail ?>" class="img-fluid rounded-top" alt="<?= $b->title ?>"></a>
                        </div>
                    <?php else : ?>
                        <div class="blog-img d-block overflow-hidden position-relative w-100">
                            <a href="<?= base_url($b->slug) ?>"><img src="<?= base_url('assets/imgs/thumbnail.png') ?>" class="img-fluid bg-light rounded-top" alt="<?= $b->title ?>"></a>
                        </div>
                    <?php endif ?>
                    <div class="p-3 w-100">
                        <div class="row justify-content-between">
                            <div class="col-auto"><p class="small text-muted m-0"><i class="fa-solid fa-calendar fa-fw"></i> <?= date('d/m/Y', strtotime($b->pubdate)) ?></p></div>
                            <div class="col-auto"><p class="small text-muted m-0"><i class="fa-solid fa-clock fa-fw"></i> <?= date('H:i', strtotime($b->pubdate)) ?></p></div>
                        </div>
                        <h2 class="h5 mt-2"><?= $b->title ?></h2>
                        <p class="text-muted mt-2 mb-0"><?= $b->content ?></p>
                    </div>
                </div>
                <div class="px-3 pb-3 w-100 align-self-end">
                    <div class="pt-3 border-top">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-share-nodes fa-fw"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(base_url($b->slug)) ?>" target="_blank"><i class="fab fa-fw fa-facebook-square"></i> Facebook</a>
                                        <a class="dropdown-item" href="https://api.whatsapp.com/send?text=<?= urlencode(base_url($b->slug)) ?>" target="_blank"><i class="fab fa-fw fa-whatsapp-square"></i> Whatsapp</a>
                                        <a class="dropdown-item" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode(base_url($b->slug)) ?>&title=<?= urlencode($b->title) ?>" target="_blank"><i class="fab fa-fw fa-linkedin"></i> Linkedin</a>
                                        <a class="dropdown-item" href="https://twitter.com/intent/tweet?url=<?= urlencode(base_url($b->slug)) ?>&text=<?= urlencode($b->title) ?>" target="_blank"><i class="fab fa-fw fa-twitter-square"></i> Twitter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="<?= base_url($b->slug) ?>" class="btn btn-sm btn-primary">LEIA MAIS <i class="fa-solid fa-angle-right ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <div class="col-12 blog-col" data-key="fim"><p class="alert alert-warning">Você chegou ao fim das publicações. Volte amanhã para mais novidades.</p></div>
<?php endif ?>