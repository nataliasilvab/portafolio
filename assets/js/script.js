

$(document).ready(function () {
    $("a").click(function () {
        var gato = this.hash
        $("html, body").animate(
            {
                scrollTop: $gato.offset().top - 70
            },
            800
        )
    })
})

function btnClick() {
    Swal.fire(
        'Mensaje enviado correctamente',
        '!Me contactar√© contigo pronto!',
        'success'
    )
}