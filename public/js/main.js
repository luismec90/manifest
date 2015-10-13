$('form.validate-form').submit(function () {

    var invalidForm = false;

    $(':input[required]').popover('destroy');

    if (!invalidForm) {
        var regexpDate = /^\d{4}-\d{2}-\d{2}$/;
        $('.date:input[required]', $(this)).each(function () {
            var check = this.value.trim();
            if (!check.match(regexpDate)) {
                $(this).focus().popover({
                    'trigger': 'manual',
                    'placement': 'bottom',
                    'content': 'Fecha inválida'
                }).popover('show').focus();
                invalidForm = true;
                return false;
            }
        });
    }

    if (!invalidForm) {
        var regexpEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        $('.email:input[required]', $(this)).each(function () {
            var check = this.value.trim();
            if (!check.match(regexpEmail)) {
                $(this).focus().popover({
                    'trigger': 'manual',
                    'placement': 'bottom',
                    'content': 'Correo electrónico inválido'
                }).popover('show').focus();
                invalidForm = true;
                return false;
            }
        });
    }

    if (invalidForm) {
        return false;
    }

    coverOn();
});

function coverOn() {
    $("#cover-display").css({
        "opacity": "1",
        "width": "100%",
        "height": "100%"
    });
}

function coverOff() {
    $("#cover-display").css({
        "opacity": "0",
        "width": "0",
        "height": "0"
    });
}