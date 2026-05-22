<?php $titulo_pagina = "Sobre Nós"; require_once 'header.php'; ?>

<!-- Breadcrumb -->
<section class="bg-light pb-5 border-bottom pt-header" style="background: var(--bg-secondary) !important; border-color: var(--border-color) !important; padding-top: 150px;">
    <div class="container text-center pt-4" data-aos="fade-down">
        <h1 class="fw-bolder mb-2" style="color: var(--text-main);">Sobre <span class="text-accent">Nós</span></h1>
        <p class="text-muted-custom small">Conhecemos suas necessidades e descomplicamos sua vida.</p>
    </div>
</section>

<!-- Institutional Content -->
<section class="py-5" data-aos="fade-up">
    <div class="container overflow-hidden">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="pe-lg-5">
                    <span class="text-accent subheading">Quem Somos</span>
                    <h2 class="fw-bold mb-4" style="color: var(--text-main);">Excelência e Compromisso com seu Sucesso</h2>
                    <p class="text-muted-custom mb-4" style="line-height: 1.8;">Atuamos no mercado auxiliando as empresas, quanto a sua constituição, administração, consultorias e quando necessário, no encerramento das mesmas. Possuímos uma equipe de profissionais gabaritados nas áreas contábil, fiscal, trabalhista e de assessoria.</p>
                    <p class="text-muted-custom mb-4" style="line-height: 1.8;">As consultorias abrangem todas as áreas acima citadas. O planejamento tributário também faz parte de nosso currículo empresarial, analisamos a tributação que mais se adequa a sua empresa. Trabalhamos para poder servi-lo sempre com qualidade.</p>
                    <a href="servicos" class="btn btn-primary rounded-pill px-4 py-2">Conhecer Nossos Serviços</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-5 rounded-4 shadow-sm" style="background: var(--bg-card); border: 1px solid var(--border-color);">
                    <p class="text-muted-custom mb-4" style="line-height: 1.8; font-style: italic;">"O mundo econômico atual, tão complexo e instável em que temos de atuar e a rapidez das informações exigem de nós, administradores um esforço para adaptarmos a esse ritmo e principalmente para obtermos nosso objetivo maior, o sucesso."</p>
                    <p class="text-muted-custom mb-0" style="line-height: 1.8;">Neste contexto, contando com uma equipe extremamente capacitada e preocupada em buscar constantemente o que há de mais novo no mercado, nos preocupamos em trazer um trabalho sério e competente com o intuito de agregar valores e aumentar o capital intelectual de seus parceiros (clientes), fazendo com que estas organizações se tornem bem sucedidas e preparadas para prosseguir neste caminho de conquistas e vitórias.</p>
                </div>
            </div>
        </div>
        
        <div class="mt-5 p-4 rounded-4 text-center" style="background: var(--bg-secondary); border-left: 4px solid var(--accent-color);">
             <p class="text-muted-custom mb-0" style="line-height: 1.8;">Nosso intuito é estabelecer estratégias e operacionalizar o conjunto de ações para os nossos clientes, capaz de fazê-los sobreviver, crescer e se perpetuar no mercado.</p>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values Section -->
<section class="py-5 bg-dark-subtle">
    <div class="container">
        <div class="row g-4">
            <?php if (isset($mvv)): foreach ($mvv as $item): ?>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="card h-100 border-0 rounded-4 p-4 shadow-sm" style="background: var(--bg-card);">
                        <div class="card-body text-center">
                            <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 70px; height: 70px; background-color: var(--accent-color);">
                                <i class="<?= $item['icone']; ?> fs-3"></i>
                            </div>
                            <h3 class="fw-bold mb-3" style="color: var(--text-main);"><?= $item['titulo']; ?></h3>
                            <p class="text-muted-custom mb-0" style="line-height: 1.7; font-size: 0.95rem;"><?= $item['descricao']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>

<!-- Counters Section -->
<section class="counters-section">
    <div class="container" data-aos="fade-up">
        <div class="row text-center g-4">
            <?php if (isset($counters)): foreach ($counters as $counter): ?>
                <div class="col-6 col-md-3 counter-item">
                    <h3><?= $counter['valor']; ?></h3>
                    <p><?= $counter['titulo']; ?></p>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
