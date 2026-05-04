document.addEventListener('DOMContentLoaded', function () {
    // Initialize AOS animations
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 50
        });
    }

    // Navbar scroll effect
    const navbar = document.getElementById('mainNav');

    if (navbar) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                e.preventDefault();

                // Adjust for fixed navbar
                const headerOffset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // jQuery Dependent Initializations
    if (typeof jQuery !== 'undefined') {
        const $ = jQuery;

        // Phone Mask (Landline and Mobile)
        if ($('.mask-telefone').length) {
            const SPMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            };
            const spOptions = {
                onKeyPress: function (val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };
            $('.mask-telefone').mask(SPMaskBehavior, spOptions);
        }

        // AJAX Form Submission
        if ($('#formcontato').length) {
            const $loading = $.dialog({
                content: "Enviando sua mensagem",
                title: false,
                type: "blue",
                theme: "modern",
                lazyOpen: true,
                closeIcon: false,
                icon: "fas fa-circle-notch fa-spin",
                buttons: false,
            });

            $('#formcontato').on('submit', function (e) {
                e.preventDefault();
                const $form = $(this);
                const dados = $form.serialize();

                $.ajax({
                    type: "POST",
                    url: $form.attr('action') || "enviar.php",
                    data: dados,
                    dataType: 'json',
                    beforeSend: function () {
                        $loading.open();
                    },
                    success: function (resposta) {
                        let $icone = resposta.tipo == "green" ? "far fa-check-circle" : "fas fa-times";

                        $.alert({
                            content: resposta.mensagem,
                            title: false,
                            type: resposta.tipo,
                            theme: "modern",
                            closeIcon: false,
                            icon: $icone,
                            buttons: {
                                ok: function () {
                                    if (resposta.tipo == "green") {
                                        location.reload();
                                    }
                                }
                            }
                        });
                    },
                    error: function () {
                        $.alert({
                            content: "Um erro desconhecido aconteceu e sua mensagem não pôde ser enviada.",
                            title: false,
                            type: "red",
                            theme: "modern",
                            closeIcon: true,
                            icon: "fas fa-times"
                        });
                    },
                    complete: function () {
                        $loading.close();
                    }
                });
                return false;
            });
        }
    }
});
