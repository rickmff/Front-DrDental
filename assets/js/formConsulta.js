$("a.open-consulta-window").click(function (event) {
    $(".open-formConsulta").show();
    event.preventDefault();
});

$(".open-formConsulta .close-window").click(function (event) {
    $(".open-formConsulta").hide();
    event.preventDefault();
});

const validaFormConsultaWindow = () => {
    let $form = $("#formConsultaWindow")

    if (
        !validaVazio($form.find(".nome"), "Nome")
        || !validaVazio($form.find(".email"), "Email")
        || !validaVazio($form.find(".celular"), "Celular")
        || !validaVazio($form.find(".produto"), "Produto")
        || !validaEmail($form.find(".email"))
    ) {
        return false
    }

    return true;
}

const enviaConsultaWindow = () => {
    if (validaFormConsultaWindow()) {
        getLoading();
        let $form = $("#formConsultaWindow");

        $.post({
            url: "./ajax.php?act=sendConsultaWindow",
            data: {
                nome: $form.find(".nome").val(),
                email: $form.find(".email").val(),
                celular: $form.find(".celular").val(),
                produto: $form.find(".produto").val(),
                session: "<?= session_id() ?>"
            },
            dataType: "json",
            success: function (data) {
                if (!data.ErroEnvio) {
                    /*ga('send', 'event', 'envio-contato');*/
                    let msg_retorno = data.nome + ', recebemos a sua solicitação de consulta! Retornaremos em breve.';
                    alert(msg_retorno);
                    // $('#retorno_msg_consulta_rodape').html('<div class="alert alert-success">' + msg_retorno + '</div>');
                    $(".open-formConsulta").hide();
                    $form.find("input").val("");
                } else {
                    let msg_retorno = 'Erro: ' + data.ErroEnvio;
                    alert(msg_retorno);
                    // $('#retorno_msg_consulta_rodape').html('<div class="alert alert-warning">' + msg_retorno + '</div>');
                }
            },
        });
        delLoading();
    }
};