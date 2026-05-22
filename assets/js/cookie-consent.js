document.addEventListener('DOMContentLoaded', function () {
    const banner = document.getElementById('cookieBanner');
    const modalEl = document.getElementById('cookieModal');
    const settingsBtn = document.getElementById('cookieSettingsBtn');
    
    const btnAccept = document.getElementById('btnCookieAccept');
    const btnReject = document.getElementById('btnCookieReject');
    const btnPreferences = document.getElementById('btnCookiePreferences');
    const btnSavePref = document.getElementById('btnSaveCookiePreferences');

    const switchAnalytics = document.getElementById('cookieAnalytics');
    const switchMarketing = document.getElementById('cookieMarketing');

    // Inicializa a instância do Modal Bootstrap 5
    let cookieModal = null;
    if (typeof bootstrap !== 'undefined' && modalEl) {
        cookieModal = new bootstrap.Modal(modalEl);
    }

    // Função para recuperar o consentimento do localStorage
    function getConsent() {
        const consent = localStorage.getItem('custom_cookie_consent');
        return consent ? JSON.parse(consent) : null;
    }

    // Função para salvar o consentimento
    function saveConsent(analyticsVal, marketingVal) {
        const consentData = {
            accepted: true,
            analytics: analyticsVal,
            marketing: marketingVal,
            timestamp: new Date().getTime()
        };
        localStorage.setItem('custom_cookie_consent', JSON.stringify(consentData));
        hideBanner();
    }

    // Mostrar o banner com animação suave
    function showBanner() {
        if (banner) {
            banner.style.display = 'block';
            setTimeout(() => {
                banner.classList.add('cookie-banner-visible');
            }, 100);
        }
    }

    // Esconder o banner com animação suave
    function hideBanner() {
        if (banner) {
            banner.classList.remove('cookie-banner-visible');
            setTimeout(() => {
                banner.style.display = 'none';
            }, 600); // tempo correspondente à transição css
        }
    }

    // Sincronizar os switches do modal com as preferências salvas
    function syncSwitches() {
        const consent = getConsent();
        if (consent && switchAnalytics && switchMarketing) {
            switchAnalytics.checked = consent.analytics;
            switchMarketing.checked = consent.marketing;
        }
    }

    // Verificação inicial de consentimento
    const currentConsent = getConsent();
    if (!currentConsent) {
        // Exibe o banner após um pequeno delay elegante de 800ms
        setTimeout(showBanner, 800);
    } else {
        // Deixa o botão flutuante de configurações ativo
        if (settingsBtn) {
            settingsBtn.classList.add('cookie-settings-visible');
        }
    }

    // Ações dos botões do Banner Principal
    if (btnAccept) {
        btnAccept.addEventListener('click', function () {
            saveConsent(true, true);
            if (settingsBtn) settingsBtn.classList.add('cookie-settings-visible');
        });
    }

    if (btnReject) {
        btnReject.addEventListener('click', function () {
            saveConsent(false, false);
            if (settingsBtn) settingsBtn.classList.add('cookie-settings-visible');
        });
    }

    if (btnPreferences) {
        btnPreferences.addEventListener('click', function () {
            if (cookieModal) {
                syncSwitches();
                cookieModal.show();
            }
        });
    }

    // Salvar preferências no Modal
    if (btnSavePref) {
        btnSavePref.addEventListener('click', function () {
            const analyticsConsent = switchAnalytics ? switchAnalytics.checked : false;
            const marketingConsent = switchMarketing ? switchMarketing.checked : false;
            saveConsent(analyticsConsent, marketingConsent);
            
            if (cookieModal) {
                cookieModal.hide();
            }
            if (settingsBtn) settingsBtn.classList.add('cookie-settings-visible');
        });
    }

    // Botão flutuante persistente para reabrir configurações
    if (settingsBtn) {
        settingsBtn.addEventListener('click', function () {
            if (cookieModal) {
                syncSwitches();
                cookieModal.show();
            }
        });
    }
});
