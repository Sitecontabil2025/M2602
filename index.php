<?php $titulo_pagina = "Bem-vindo"; require_once('header.php'); ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <h1 class="hero-title">Conquiste e fidelize seus clientes com estratégias inteligentes</h1>
            <p class="hero-subtitle">Em uma época em que a confiança está em primeiro lugar. Encontre tudo o que precisa em um escritório de Contabilidade!</p>
            <a href="<?= whatsapp('Olá, gostaria de conhecer a empresa!'); ?>" class="btn btn-primary rounded-pill px-4 py-2" target="_blank">
                Conheça nossa empresa <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Intro Section (Sobre Nós) -->
<section id="sobre" class="intro-section">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="exp-box">
                    <div class="exp-number">25</div>
                    <div class="exp-text">Anos de<br>Experiência<br>Contábil</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="intro-text-block">
                    <span class="text-accent subheading">Sobre Nós</span>
                    <h2>Chegamos para descomplicar sua vida</h2>
                    <p>Somos uma empresa de contabilidade que chegou para descomplicar sua vida. Acreditamos que lidar com números, impostos e burocracias não precisa ser complicado nem cansativo.</p>
                    <p>Nosso objetivo é economizar seu tempo e dinheiro com soluções práticas, personalizadas e que cabem na sua rotina. Deixe a parte contábil com a gente e foque no que realmente importa: o crescimento do seu negócio.</p>
                    <a href="<?= whatsapp('Olá, gostaria de conhecer seus serviços!'); ?>" class="btn btn-outline-primary rounded-pill px-4 py-2 mt-3" target="_blank">Conheça nossos serviços</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Cards (Grid of 4) -->
<section id="servicos" class="services-section">
    <div class="container pt-8" data-aos="fade-up">
        <div class="row g-4">
            <?php if (isset($servicos)): foreach ($servicos as $servico): ?>
                <div class="col-md-6 col-lg-3">
                    <a href="<?= whatsapp($servico['whatsapp_msg']); ?>" class="service-card" target="_blank">
                        <div class="service-bg" style="background: linear-gradient(135deg, rgba(0,0,0,0.4), rgba(0,0,0,0.8)), url('<?= base_url($servico['imagem']); ?>') center/cover no-repeat;"></div>
                        <div class="service-content">
                            <h3><?= $servico['titulo']; ?></h3>
                            <p><?= $servico['intro']; ?> <i class="fa-solid fa-arrow-right text-accent"></i></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>

<!-- Advantages / Process Section -->
<section class="advantages-section">
    <div class="container" data-aos="fade-up">
        <div class="text-center mb-5">
            <span class="text-accent subheading">Nosso Método</span>
            <h2 class="adv-title">Parceria sólida com transparência e eficiência</h2>
        </div>
        <div class="row g-4">
            <?php if (isset($metodos)): foreach ($metodos as $index => $metodo): ?>
                <div class="col-md-6 col-lg-3 adv-item">
                    <div class="adv-icon"><i class="<?= $metodo['icone']; ?>"></i></div>
                    <h4><?= $index + 1; ?>. <?= $metodo['titulo']; ?></h4>
                    <p><?= $metodo['descricao']; ?></p>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="cta-banner">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6 cta-banner-content">
                <span class="text-accent subheading">Sua Empresa Segura</span>
                <h2>Traga já a sua empresa para o nosso escritório</h2>
                <p class="mb-4 text-muted-custom">Atenderemos todas as suas necessidades contábeis com muita agilidade, presteza e de forma econômica para sua empresa. Aproveite todos os benefícios de uma boa contabilidade.</p>
                <a href="<?= whatsapp('Olá, gostaria de saber mais!'); ?>" class="btn btn-primary rounded-pill px-4 py-2" target="_blank">Fale com um Especialista</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="faq-section">
    <div class="container" data-aos="fade-up">
        <div class="text-center mb-5">
            <span class="text-accent subheading">Dúvidas Frequentes</span>
            <h2>Reunimos as perguntas mais comuns</h2>
            <p class="text-muted-custom">Tudo o que você precisa saber sobre abertura e manutenção de empresas.</p>
        </div>
        
        <div class="row g-4">
            <?php if (isset($faqs)): foreach ($faqs as $faq): ?>
                <div class="col-lg-6">
                    <div class="faq-card">
                        <h4><?= $faq['pergunta']; ?></h4>
                        <p><?= $faq['resposta']; ?></p>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>

<!-- Split Section -->
<section class="split-section">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="split-img d-flex align-items-center justify-content-center" style="background: url('<?= base_url('assets/images/split_specialized.png'); ?>') center/cover no-repeat;">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 split-content">
                <i class="fa-solid fa-shield-halved text-accent fs-1 mb-3 d-block"></i>
                <h2>Contabilidade Simplificada & Especializada</h2>
                <p class="text-muted-custom mb-4">Seja você um profissional da saúde, um prestador de serviços, comerciante ou produtor rural. Nossa equipe mantém suas finanças organizadas e em conformidade.</p>
                <a href="<?= whatsapp('Olá, quero conhecer as soluções!'); ?>" class="btn btn-primary rounded-pill px-4 py-2" target="_blank">Quero conhecer as soluções</a>
            </div>
        </div>
    </div>
</section>

<!-- Counters Section -->
<section class="counters-section">
    <div class="container" data-aos="fade-up">
        <div class="row text-center g-4">
            <?php if (isset($counters)): foreach ($counters as $counter): ?>
                <div class="col-6 col-lg-3 counter-item">
                    <h3><?= $counter['valor']; ?></h3>
                    <p><?= $counter['titulo']; ?></p>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section id="blog" class="blog-section">
    <div class="container" data-aos="fade-up">
        <div class="text-center mb-5">
            <span class="text-accent subheading">Notícias</span>
            <h2>Acompanhe as novidades empresariais</h2>
        </div>
        
        <div class="row g-4">
            <?php 
            $dados = get_materias('https://sitecontabil.com.br/json/?db=sc_noticias&limite=3'); 
            if ($dados && !isset($dados->error)):
                foreach ($dados as $item): 
            ?>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 feature-card shadow-sm rounded-4 px-3 py-4" style="background-color: var(--bg-secondary);">
                        <div class="card-body">
                            <small class="text-primary fw-bold mb-3 d-block"><i class="fa-regular fa-calendar-days me-1"></i> <?= mostra_data($item->pubdate, '%d de %B de %y'); ?></small>
                            <h5 class="fw-bold mb-3">
                                <a href="<?= base_url('noticias-ler.php?id=' . $item->id); ?>" class="text-decoration-none text-white" onmouseover="this.style.color='var(--accent-color)'" onmouseout="this.style.color='white'">
                                    <?= limitar_texto($item->titulo, 100) ?>
                                </a>
                            </h5>
                            <p class="text-muted-custom small mb-4 opacity-75"><?= limitar_texto($item->descricao, 150) ?></p>
                            <a href="<?= base_url('noticias-ler.php?id=' . $item->id); ?>" class="text-primary fw-bold text-decoration-none small">Leia Mais <i class="fa-solid fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; else: ?>
                <div class="col-12 text-center"><p class="text-muted-custom">Ocorreu um erro ao carregar as notícias. Tente novamente mais tarde.</p></div>
            <?php endif; ?>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center text-md-end">
                <a href="<?= base_url('noticias.php'); ?>" class="btn btn-outline-primary rounded-pill px-4 py-2">Ver Todas as Notícias <i class="fa-solid fa-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Pre-footer CTA -->
<section class="cta-footer">
    <div class="container" data-aos="fade-up">
        <span class="text-accent subheading mb-2 d-block">Faça parte você também</span>
        <h2>Quero fazer meu negócio crescer de verdade</h2>
        <a href="<?= whatsapp('Olá, quero abrir minha empresa!'); ?>" class="btn btn-primary rounded-pill px-4 py-2" target="_blank">Quero abrir minha empresa</a>
    </div>
</section>

<?php require_once('footer.php'); ?>
