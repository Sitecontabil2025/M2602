$(document).ready(function () {
    var SPMaskBehavior = function (val) {
        return val.replace(/D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
        spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };
    $('.celular-mask').mask(SPMaskBehavior, spOptions);
});

$loading = $.dialog({
    content: "Enviando sua mensagem",
    title: false,
    type: "green",
    theme: "modern",
    lazyOpen: true,
    closeIcon: false,
    icon: "fas fa-circle-notch fa-spin",
    buttons: false,
});

$('#formcontato').on('submit', function (e) {
    e.preventDefault();
    var dados = $(this).serialize();

    $.ajax({
        type: "POST",
        url: "enviar.php",
        data: dados,
        dataType: 'json',
        beforeSend: function () {
            $loading.open();
        },
        success: function (resposta) {
            if (resposta.tipo == "green") {
                $icone = "far fa-check-circle";
            } else {
                $icone = "fas fa-times";
            }
            $.alert({
                content: resposta.mensagem,
                title: false,
                type: resposta.tipo,
                theme: "modern",
                closeIcon: false,
                icon: $icone,
                buttons: {
                    ok: function (okButton) {
                        if (resposta.tipo == "green") {
                            location.href = "https://dominio.com.br"
                        }
                    }
                }
            });
        },
        error: function (resposta) {
            $.alert({
                content: "Um erro desconhecido aconteceu e sua mensagem não pode ser enviada",
                title: false,
                type: "red",
                theme: "modern",
                closeIcon: true,
                icon: "fas fa-times",
                buttons: {
                    ok: function () {
                    }
                }
            });
        },
        complete: function () {
            $loading.close()
        }
    });
    return false;
});
