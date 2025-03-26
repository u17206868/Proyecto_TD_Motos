window.addEventListener("scroll", function () {
    const container = document.querySelector(".noti-contain");
    const noti1 = document.querySelector(".noti-1");
    const noti2 = document.querySelector(".noti-2");
    const noti3 = document.querySelector(".noti-3");
    const position = container.getBoundingClientRect();

    // Verifica si el elemento está en la vista (cuando el top del elemento está en la parte inferior de la pantalla)
    if (position.top < window.innerHeight) {

        noti1.classList.add("noti-animated");

        this.setTimeout(() => {
            noti2.classList.add("noti-animated");
        }, 500);

        this.setTimeout(() => {
            noti3.classList.add("noti-animated");
        }, 1000);
    }
});

const card_noti = document.querySelectorAll('.card-noti');

card_noti.forEach((noticia) => {

    const wsspBtn = noticia.querySelector('.bi-whatsapp');
    const xBtn = noticia.querySelector('.bi-twitter-x');
    const title = noticia.querySelector('.card-title');
    const descripcion = noticia.querySelector('.card-text');
    const date = noticia.querySelector('.card-title > small');
    const link = noticia.querySelector('a').href;

    wsspBtn.addEventListener('click', () => {
        const date_format = date.innerHTML.replace(/\s+/g, ' ');
        const title_f = title.textContent.replace(/\s+/g, ' ').replace(date_format, '');
        const title_format = title_f.substring(0, title_f.length - 1);
        const descripcion_format = descripcion.innerHTML.replace(/\s+/g, ' ');
        const hashtags = title_format.split(' ').map((hash) => { return `#${hash}` }).join(' ');
        const mensaje = `🚗 *${title_format}* 🚗 %0D${descripcion_format} %0D%0D📆 ${date_format} %0D%0DLink: ${link}`;

        console.log(mensaje);

        window.open(
            `https://api.whatsapp.com/send?text=${mensaje}`,
            "_blank"
        );
    });

    xBtn.addEventListener('click', () => {
        const date_format = date.innerHTML.replace(/\s+/g, ' ');
        const title_f = title.textContent.replace(/\s+/g, ' ').replace(date_format, '');
        const title_format = title_f.substring(0, title_f.length - 1);
        const descripcion_format = descripcion.innerHTML.replace(/\s+/g, ' ');
        const hashtags = title_format.split(' ').map((hash) => { return `%23${hash}` }).join(' ');
        const mensaje = `🚗 *${title_format}* 🚗 %0D${descripcion_format} %0D%0D📆 ${date_format} %0D%0DLink: ${link} %0D%0D${hashtags}`;

        // const mensajeCodificado = encodeURIComponent(mensaje);

        console.log(mensaje);
        window.open(
            `https://x.com/intent/post?text=${mensaje}`,
            "_blank"
        );
    });

})
