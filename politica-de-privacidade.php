<?php $titulo_pagina = "Política de Privacidade"; require_once 'header.php'; ?>

<!-- Breadcrumb / Cabeçalho da Página -->
<section class="bg-light pb-5 border-bottom pt-header" style="background: var(--bg-secondary) !important; border-color: var(--border-color) !important; padding-top: 150px;">
    <div class="container text-center pt-4" data-aos="fade-down">
        <span class="text-accent subheading">Segurança & Conformidade</span>
        <h1 class="fw-bolder mb-2 mt-2" style="color: var(--text-main);">Política de <span class="text-accent">Privacidade & Cookies</span></h1>
        <p class="text-muted-custom small">Entenda como protegemos seus dados e garantimos sua privacidade em nosso portal.</p>
    </div>
</</section>

<!-- Conteúdo Principal -->
<section class="py-6" style="background-color: var(--bg-main);">
    <div class="container">
        <div class="row g-5 justify-content-center">
            
            <!-- Menu de Navegação Rápida Lateral -->
            <div class="col-lg-3 d-none d-lg-block" data-aos="fade-right">
                <div class="sticky-top" style="top: 100px; z-index: 10;">
                    <div class="p-4 rounded-4 shadow-sm" style="background: var(--bg-card); border: 1px solid var(--border-color);">
                        <h5 class="fw-bold mb-3 text-accent" style="font-size: 0.95rem; text-transform: uppercase; letter-spacing: 1px;">Índice</h5>
                        <ul class="nav flex-column gap-2" style="font-size: 0.9rem;">
                            <li><a href="#introducao" class="text-muted-custom hover-primary d-block py-1"><i class="fa-solid fa-chevron-right me-2 text-accent" style="font-size: 0.7rem;"></i>1. Introdução</a></li>
                            <li><a href="#coleta-dados" class="text-muted-custom hover-primary d-block py-1"><i class="fa-solid fa-chevron-right me-2 text-accent" style="font-size: 0.7rem;"></i>2. Coleta de Dados</a></li>
                            <li><a href="#uso-cookies" class="text-muted-custom hover-primary d-block py-1"><i class="fa-solid fa-chevron-right me-2 text-accent" style="font-size: 0.7rem;"></i>3. O que são Cookies?</a></li>
                            <li><a href="#gerenciamento-cookies" class="text-muted-custom hover-primary d-block py-1"><i class="fa-solid fa-chevron-right me-2 text-accent" style="font-size: 0.7rem;"></i>4. Gestão de Cookies</a></li>
                            <li><a href="#direitos-lgpd" class="text-muted-custom hover-primary d-block py-1"><i class="fa-solid fa-chevron-right me-2 text-accent" style="font-size: 0.7rem;"></i>5. Direitos (LGPD)</a></li>
                            <li><a href="#seguranca" class="text-muted-custom hover-primary d-block py-1"><i class="fa-solid fa-chevron-right me-2 text-accent" style="font-size: 0.7rem;"></i>6. Segurança dos Dados</a></li>
                            <li><a href="#contato" class="text-muted-custom hover-primary d-block py-1"><i class="fa-solid fa-chevron-right me-2 text-accent" style="font-size: 0.7rem;"></i>7. Fale Conosco</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Texto da Política -->
            <div class="col-lg-9" data-aos="fade-up">
                
                <!-- 1. Introdução -->
                <div class="p-4 p-md-5 rounded-4 shadow-sm mb-4" id="introducao" style="background: var(--bg-card); border: 1px solid var(--border-color);">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: var(--accent-color); min-width: 50px;">
                            <i class="fa-solid fa-shield-halved fs-5"></i>
                        </div>
                        <h3 class="fw-bold mb-0" style="color: var(--text-main); font-size: 1.5rem;">1. Introdução</h3>
                    </div>
                    <p class="text-muted-custom mb-3" style="line-height: 1.8;">
                        Para nós, do <strong><?= $escritorio; ?></strong>, a sua privacidade e a segurança de seus dados pessoais são prioridades absolutas. Elaboramos este documento para demonstrar nosso compromisso firme com a transparência e as boas práticas de privacidade, detalhando como coletamos, tratamos e protegemos suas informações quando você navega em nosso site ou contrata nossos serviços.
                    </p>
                    <p class="text-muted-custom mb-0" style="line-height: 1.8;">
                        Ao utilizar nosso site, você compreende que coletamos e usamos suas informações pessoais conforme descrito nesta Política, em absoluta conformidade com a <strong>Lei Geral de Proteção de Dados (LGPD) - Lei nº 13.709/2018</strong> e as demais normas do ordenamento jurídico brasileiro.
                    </p>
                </div>

                <!-- 2. Coleta de Dados -->
                <div class="p-4 p-md-5 rounded-4 shadow-sm mb-4" id="coleta-dados" style="background: var(--bg-card); border: 1px solid var(--border-color);">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: var(--accent-color); min-width: 50px;">
                            <i class="fa-solid fa-database fs-5"></i>
                        </div>
                        <h3 class="fw-bold mb-0" style="color: var(--text-main); font-size: 1.5rem;">2. Coleta de Dados Pessoais</h3>
                    </div>
                    <p class="text-muted-custom mb-4" style="line-height: 1.8;">
                        Coletamos o mínimo de dados possível, estritamente necessários para prestar nossos serviços e melhorar a experiência de navegação do usuário:
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-3 rounded-3" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                                <h5 class="fw-bold mb-2 text-accent" style="font-size: 1rem;"><i class="fa-solid fa-file-signature me-2"></i>Formulários de Contato</h5>
                                <p class="text-muted-custom small mb-0" style="line-height: 1.6;">Quando você entra em contato conosco pelos formulários, coletamos: <strong>Nome, E-mail, Celular e a Mensagem enviada</strong>. Usamos esses dados exclusivamente para responder ao seu contato.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 rounded-3" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                                <h5 class="fw-bold mb-2 text-accent" style="font-size: 1rem;"><i class="fa-solid fa-chart-line me-2"></i>Navegação e Métricas</h5>
                                <p class="text-muted-custom small mb-0" style="line-height: 1.6;">Através de ferramentas analíticas e cookies, podemos coletar informações sobre o seu dispositivo (endereço IP, navegador utilizado, tempo de permanência e páginas visitadas).</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Uso de Cookies -->
                <div class="p-4 p-md-5 rounded-4 shadow-sm mb-4" id="uso-cookies" style="background: var(--bg-card); border: 1px solid var(--border-color);">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: var(--accent-color); min-width: 50px;">
                            <i class="fa-solid fa-cookie-bite fs-5"></i>
                        </div>
                        <h3 class="fw-bold mb-0" style="color: var(--text-main); font-size: 1.5rem;">3. O que são Cookies e Como os Usamos</h3>
                    </div>
                    <p class="text-muted-custom mb-4" style="line-height: 1.8;">
                        Cookies são pequenos arquivos de texto salvos em seu dispositivo pelo seu navegador de internet para guardar preferências e dados de navegação. Nosso portal utiliza as seguintes categorias de cookies:
                    </p>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li class="p-3 rounded-3" style="background: var(--bg-secondary);">
                            <strong class="text-accent d-block mb-1"><i class="fa-solid fa-circle-exclamation me-2"></i>Cookies Necessários (Essenciais)</strong>
                            <span class="text-muted-custom small d-block" style="line-height: 1.6;">Fundamentais para que o site funcione corretamente. Garantem a segurança e a navegação básica, não podendo ser desativados.</span>
                        </li>
                        <li class="p-3 rounded-3" style="background: var(--bg-secondary);">
                            <strong class="text-accent d-block mb-1"><i class="fa-solid fa-sliders me-2"></i>Cookies Funcionais</strong>
                            <span class="text-muted-custom small d-block" style="line-height: 1.6;">Lembram as preferências selecionadas pelo usuário, como o idioma padrão ou dados preenchidos anteriormente, evitando que você precise reconfigurá-los.</span>
                        </li>
                        <li class="p-3 rounded-3" style="background: var(--bg-secondary);">
                            <strong class="text-accent d-block mb-1"><i class="fa-solid fa-chart-pie me-2"></i>Cookies de Desempenho e Medição</strong>
                            <span class="text-muted-custom small d-block" style="line-height: 1.6;">Fornecem relatórios estatísticos anônimos sobre o comportamento dos visitantes no site, nos ajudando a identificar falhas de design e melhorar o conteúdo.</span>
                        </li>
                        <li class="p-3 rounded-3" style="background: var(--bg-secondary);">
                            <strong class="text-accent d-block mb-1"><i class="fa-solid fa-bullseye me-2"></i>Cookies de Publicidade</strong>
                            <span class="text-muted-custom small d-block" style="line-height: 1.6;">Utilizados para exibir anúncios relevantes de acordo com seu perfil de navegação e hábitos na internet.</span>
                        </li>
                    </ul>
                </div>

                <!-- 4. Gerenciamento de Cookies -->
                <div class="p-4 p-md-5 rounded-4 shadow-sm mb-4" id="gerenciamento-cookies" style="background: var(--bg-card); border: 1px solid var(--border-color);">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: var(--accent-color); min-width: 50px;">
                            <i class="fa-solid fa-gear fs-5"></i>
                        </div>
                        <h3 class="fw-bold mb-0" style="color: var(--text-main); font-size: 1.5rem;">4. Como Gerenciar Seus Cookies</h3>
                    </div>
                    <p class="text-muted-custom mb-4" style="line-height: 1.8;">
                        Você tem controle total sobre quais cookies deseja autorizar em nosso site. Você pode gerenciar suas escolhas de duas formas:
                    </p>
                    <div class="row g-4 align-items-center">
                        <div class="col-md-7">
                            <h5 class="fw-bold mb-2 text-accent" style="font-size: 1rem;"><i class="fa-solid fa-sliders me-2"></i>Centro de Preferências do Site</h5>
                            <p class="text-muted-custom small mb-0" style="line-height: 1.6;">Você pode alterar seu consentimento a qualquer momento usando nosso Painel de Consentimento de Cookies nativo. Clique no botão abaixo para reabrir as configurações de preferências.</p>
                        </div>
                        <div class="col-md-5 text-md-end">
                            <button type="button" class="btn btn-accent rounded-pill w-100 justify-content-center" onclick="preferencesCookieConsent();">
                                <i class="fa-solid fa-cookie-bite me-2"></i>Configurar Cookies
                            </button>
                        </div>
                    </div>
                    <hr class="my-4" style="border-color: var(--border-color);">
                    <h5 class="fw-bold mb-2 text-accent" style="font-size: 1rem;"><i class="fa-solid fa-window-restore me-2"></i>Configurações do Navegador</h5>
                    <p class="text-muted-custom small mb-0" style="line-height: 1.6;">
                        Se desejar, você pode configurar seu navegador de internet para recusar todos os cookies ou para alertá-lo quando um cookie for enviado. Consulte o menu "Ajuda" do seu navegador de preferência para saber como realizar essas configurações.
                    </p>
                </div>

                <!-- 5. Direitos do Usuário sob a LGPD -->
                <div class="p-4 p-md-5 rounded-4 shadow-sm mb-4" id="direitos-lgpd" style="background: var(--bg-card); border: 1px solid var(--border-color);">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: var(--accent-color); min-width: 50px;">
                            <i class="fa-solid fa-user-shield fs-5"></i>
                        </div>
                        <h3 class="fw-bold mb-0" style="color: var(--text-main); font-size: 1.5rem;">5. Seus Direitos (LGPD)</h3>
                    </div>
                    <p class="text-muted-custom mb-4" style="line-height: 1.8;">
                        A LGPD confere aos titulares de dados uma série de direitos que podem ser exercidos mediante requisição direta a nós:
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-4">
                            <div class="p-3 rounded-3 text-center h-100" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                                <i class="fa-solid fa-circle-check text-accent fs-4 mb-2"></i>
                                <h6 class="fw-bold mb-1 text-white">Confirmação</h6>
                                <p class="text-muted-custom small mb-0">Confirmar a existência do tratamento dos seus dados.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="p-3 rounded-3 text-center h-100" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                                <i class="fa-solid fa-eye text-accent fs-4 mb-2"></i>
                                <h6 class="fw-bold mb-1 text-white">Acesso</h6>
                                <p class="text-muted-custom small mb-0">Acessar livremente os dados mantidos sob nossa guarda.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="p-3 rounded-3 text-center h-100" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                                <i class="fa-solid fa-pen-to-square text-accent fs-4 mb-2"></i>
                                <h6 class="fw-bold mb-1 text-white">Correção</h6>
                                <p class="text-muted-custom small mb-0">Solicitar a correção de dados incompletos ou inexatos.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="p-3 rounded-3 text-center h-100" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                                <i class="fa-solid fa-trash-can text-accent fs-4 mb-2"></i>
                                <h6 class="fw-bold mb-1 text-white">Eliminação</h6>
                                <p class="text-muted-custom small mb-0">Solicitar exclusão de dados pessoais tratados com o seu consentimento.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="p-3 rounded-3 text-center h-100" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                                <i class="fa-solid fa-ban text-accent fs-4 mb-2"></i>
                                <h6 class="fw-bold mb-1 text-white">Revogação</h6>
                                <p class="text-muted-custom small mb-0">Revogar o consentimento fornecido para o tratamento de dados.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="p-3 rounded-3 text-center h-100" style="background: var(--bg-secondary); border: 1px solid var(--border-color);">
                                <i class="fa-solid fa-circle-info text-accent fs-4 mb-2"></i>
                                <h6 class="fw-bold mb-1 text-white">Informação</h6>
                                <p class="text-muted-custom small mb-0">Saber com quais entidades compartilhamos seus dados.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. Segurança -->
                <div class="p-4 p-md-5 rounded-4 shadow-sm mb-4" id="seguranca" style="background: var(--bg-card); border: 1px solid var(--border-color);">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: var(--accent-color); min-width: 50px;">
                            <i class="fa-solid fa-lock fs-5"></i>
                        </div>
                        <h3 class="fw-bold mb-0" style="color: var(--text-main); font-size: 1.5rem;">6. Segurança e Proteção de Dados</h3>
                    </div>
                    <p class="text-muted-custom mb-0" style="line-height: 1.8;">
                        Empregamos medidas técnicas e administrativas altamente robustas de segurança da informação para proteger seus dados pessoais contra acessos não autorizados, perdas, destruições, alterações ou difusões indevidas. Entre as principais medidas de segurança que aplicamos estão: <strong>Criptografia SSL/HTTPS</strong> em todas as conexões, uso de firewalls modernos, controle restrito de acesso aos sistemas de dados e monitoramento contínuo de vulnerabilidades técnicas.
                    </p>
                </div>

                <!-- 7. Contato -->
                <div class="p-4 p-md-5 rounded-4 shadow-sm" id="contato" style="background: var(--bg-card); border: 1px solid var(--border-color);">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-accent text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background-color: var(--accent-color); min-width: 50px;">
                            <i class="fa-solid fa-envelope fs-5"></i>
                        </div>
                        <h3 class="fw-bold mb-0" style="color: var(--text-main); font-size: 1.5rem;">7. Fale Conosco</h3>
                    </div>
                    <p class="text-muted-custom mb-4" style="line-height: 1.8;">
                        Se você tiver alguma dúvida sobre esta Política, sobre como tratamos seus dados pessoais, ou se deseja exercer seus direitos previstos pela LGPD, entre em contato diretamente com o nosso Encarregado de Proteção de Dados (DPO):
                    </p>
                    <div class="p-4 rounded-3 text-center text-md-start" style="background: var(--bg-secondary); border-left: 4px solid var(--accent-color);">
                        <h5 class="fw-bold mb-3 text-white" style="font-size: 1.05rem;"><?= $escritorio; ?></h5>
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small">
                            <li><a href="mailto:<?= $email; ?>" class="text-muted-custom hover-primary"><i class="fa-solid fa-envelope pe-2 text-accent"></i> <strong>E-mail de DPO/Contato:</strong> <?= $email; ?></a></li>
                            <li><a href="<?= phone_link($telefone); ?>" class="text-muted-custom hover-primary"><i class="fa-solid fa-phone pe-2 text-accent"></i> <strong>Telefone:</strong> <?= $telefone; ?></a></li>
                            <li><a href="<?= whatsapp('Olá, gostaria de esclarecimentos sobre a Política de Privacidade.'); ?>" class="text-muted-custom hover-primary"><i class="fa-brands fa-whatsapp pe-2 text-accent"></i> <strong>WhatsApp:</strong> <?= $whatsapp; ?></a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
