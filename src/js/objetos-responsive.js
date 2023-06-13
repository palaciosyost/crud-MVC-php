const d = document;
const w = window;

function responseMedia(id, mq, contenidoMovil, contenidoEscritorio) {
    let media = w.matchMedia(mq);
    const responsive = (e) => {
        if (e.matches) {
            d.getElementById(id).innerHTML = contenidoEscritorio;
        } else {
            d.getElementById(id).innerHTML = contenidoMovil;
        }


    }

    media.addListener(responsive);
    responsive(media);
}

function responseTester(form) {
    let $ventana;
    $formulario = d.getElementById(form);

    d.addEventListener('submit', e => {
        if (e.target === $formulario) {
            e.preventDefault();
            $ventana = w.open($formulario.url.value,
                'ventana',
                `innerWidth=${$formulario.ancho.value},
                innerHeight=${$formulario.alto.value}`)

        }
        d.addEventListener('click', e => {
            if (e.target === $formulario.cerrar) {
                e.preventDefault();
                $ventana.close();
            }
        })
    })

}
//LLAMADA A LA FUNCION DEL RESPONSE TESTER
responseTester('form');

function alerta (btn){
    $formulario2 = d.getElementById(btn);
    d.addEventListener('DOMContentLoaded', () =>{
        d.addEventListener('submit', e=>{
            if(e.target === $formulario2){
                alert('estas cambiando un registro');
                history.go(-2)
            }

        })

    })
}

alerta('formeditar')


//FUNCION DEL RESPONSE contenido de video
// responseMedia(
//     'video',
//     '(min-width:1024px)',
//     '<a target="_blank" href="https://youtu.be/99fyjn3r9VY"> enlace del video</a>',
//     `<iframe width="560"
//          height="315" src="https://www.youtube.com/embed/99fyjn3r9VY"
//           title="YouTube video player" frameborder="0"
//            allow="accelerometer; autoplay; clipboard-write;
//             encrypted-media; gyroscope; picture-in-picture;
//              web-share" allowfullscreen></iframe>`);

//FUNCION DE RESPONSE contenido de un mapa
// responseMedia(
//     'mapa',
//     '(min-width:1024px)',
//     `<a target="_blank" href="https://goo.gl/maps/TRdUhSxkAgurhnAW6">enlace del mapa</a>`,
//     `<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15662.88534752781!2d-75.32954560000002!3d-11.059506800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1678718719745!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`);