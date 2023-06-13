import responseMedia from "objetos-responsive";

document.addEventListener('DOMContentLoaded', () => {
    //contenido de video
    responseMedia(
        'video',
        '(min-width:1024px)',
        'contenidoMovil',
        'contenidoEscritorio');
    //contenido de un mapa
    responseMedia(
        'mapa',
        '(min-width:1024px)',
        'contenidoMovil',
        'contenidoEscritorio');
})