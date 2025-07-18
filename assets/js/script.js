const myItem = (el) => document.querySelector(el);
const myArray = (el) => document.querySelectorAll(el);

const btnToggle = myItem('.btn-toggle');
const iconToggle = myItem('.btn-toggle span');
const html = myItem('html');
const btnMenu = myItem('#open');
const btnClose = myItem('.btn-close');
const backDrop = myItem('.offcanvas-backdrop');
const menuContainer = myItem('.offcanvas-body');

// Carrega tema salvo e aplica
function loadTheme() {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        html.setAttribute('data-bs-theme', savedTheme);
        iconToggle.style.transform = savedTheme === 'dark' ? "translateX(20px)" : "translateX(0)";
    }
}
loadTheme();

// Alterna tema ao clicar no botão
btnToggle.addEventListener('click', () => {
    const currentTheme = html.getAttribute('data-bs-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';

    html.setAttribute('data-bs-theme', newTheme);
    iconToggle.style.transform = newTheme === 'dark' ? "translateX(20px)" : "translateX(0)";
    localStorage.setItem('theme', newTheme);
});

// Gera menu mobile apenas uma vez
btnMenu.addEventListener('click', () => {
    let existingMenu = menuContainer.querySelector('.navbar-nav');
    if (!existingMenu) {
        let menu = myItem('.nav');
        if (!menu) return;

        let createMenu = document.createElement('ul');
        createMenu.className = 'navbar-nav';

        let clonedItems = menu.cloneNode(true).children;
        for (let item of clonedItems) {
            createMenu.appendChild(item.cloneNode(true));
        }

        menuContainer.appendChild(createMenu);
    }
});

// Fecha o menu e remove itens após transição
function closeMenu() {
    setTimeout(() => {
        let existingMenu = menuContainer.querySelector('.navbar-nav');
        if (existingMenu) {
            existingMenu.remove();
        }
    }, 300);
}
btnClose.addEventListener('click', closeMenu);

var swiper = new Swiper(".parceiros", {
    slidesPerView: 2,
    spaceBetween: 10,
    autoHeight: true,
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    // breakpoints: {
    //     '768': {
    //         slidesPerView: 2,
    //     },
    //     '1024': {
    //         slidesPerView: 3,
    //     },
    //     '1140': {
    //         slidesPerView: 4,
    //     }
    // }
});

$(document).ready(function () {
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
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
                            location.href = "https://dominiocliente.com.br"
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