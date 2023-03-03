// Toggle Menu
let openMenu = document.querySelector('.open__menu');
let menu = document.querySelector('.menu')
let closeMenu = document.querySelector('.close__menu')
let logo = document.querySelector('.logo__mobile')

openMenu.addEventListener('click', (e) => {
    e.preventDefault();

    closeMenu.classList.toggle('active')
    openMenu.classList.toggle('active')
    menu.classList.toggle('active')
    logo.classList.toggle('active')
});

closeMenu.addEventListener('click', (e) => {
    e.preventDefault();

    openMenu.classList.toggle('active')
    closeMenu.classList.toggle('active')
    menu.classList.toggle('active');
    logo.classList.toggle('active')
});

$(document).ready(function() {
    let openProducts = document.getElementById('openProducts');
    let contentModelos = document.querySelector('.content__modelos');

    openProducts.addEventListener('click', (e) => {
        e.preventDefault()

        contentModelos.classList.toggle('active')
    });
});

$('[data-group]').each(function () {
    var $allTarget = $(this).find('[data-target]'),
        $allClick = $(this).find('[data-click]'),
        activeClass = 'active';

    $allTarget.first().addClass(activeClass);
    $allClick.first().addClass(activeClass);
    

    $allClick.click(function (e) {
        e.preventDefault();

        $allTarget.removeClass(activeClass);
        $allClick.removeClass(activeClass);

        var id = $(this).data('click'),
            $target = $('[data-target="' + id + '"]');

        $target.addClass(activeClass);
        $(this).addClass(activeClass)
    });
});

$('[data-grupo]').each(function () {
    var $allTarget = $(this).find('[data-target]'),
        $allClick = $(this).find('[data-click]'),
        $viewForm = $(this).find('[data-form]'),
        $click = $(this).find('[data-open]'),
        activeClass = 'active';
    
    $allClick.click(function (e) {
        e.preventDefault();

        $allTarget.removeClass(activeClass);
        $allClick.removeClass(activeClass);
        $viewForm.removeClass(activeClass);
        $click.removeClass(activeClass);

        var id = $(this).data('click'),
            $target = $('[data-target="' + id + '"]');

        $target.addClass(activeClass);
        $(this).addClass(activeClass)
    });

    $click.click(function(e) {
        e.preventDefault();

        $viewForm.removeClass(activeClass);
        $click.removeClass(activeClass);

        var i = $(this).data('open'),
            $teste = $('[data-form="' + i + '"]');

        $teste.addClass(activeClass);
        $(this).addClass(activeClass)
    });
});

$(document).ready(function() {
    const main = document.querySelector('[data-grupo="contato"]')
    const btnFerramentas =document.querySelector('[data-click="ferramentas"]')
    const btnRepresentante =document.querySelector('[data-open="representante-ferramentas"]')

    if (main.classList.contains('contact')) {
        let url = location.search
        
        if(url) {
            $(btnFerramentas).trigger('click');
            $(btnRepresentante).trigger('click');
        }
    }
});

$(document).ready(function() {
    const btnOrdenar = document.querySelector('.order__by form input[type="submit"]')
    const formOrdenar =  document.getElementById('orderby');

    $(formOrdenar).on('change', function() {
        $(btnOrdenar).trigger('click')
    })
});

$(document).ready(function() {
    const current = document.querySelector('#current');
    const imgs = document.querySelectorAll('.thumbs img');
    const opacity = 0.4;

    imgs[0].style.opacity = opacity;

    imgs.forEach(img => img.addEventListener('click', imgClick));

    function imgClick(e) {
        imgs.forEach(img => (img.style.opacity = 1));
        current.src = e.target.src;
        current.classList.add('fade-in');
        setTimeout(() => current.classList.remove('fade-in'), 500);
        e.target.style.opacity = opacity;
    }
});

(() => {
    if (!localStorage.pureJavaScriptCookies) {
        document.querySelector(".box-cookies").classList.remove('hide');
    }

    const acceptCookies = () => {
        document.querySelector(".box-cookies").classList.add('hide');
        localStorage.setItem("pureJavaScriptCookies", "accept");
    };

    const btnCookies = document.querySelector(".btn-cookies");

    btnCookies.addEventListener('click', acceptCookies);
})();
// $(document).ready(function(){
//     $('.row__wrapper__slide .btn__wrapper').click(function(){
//         $('.btn__wrapper').removeClass("active");
//         $(this).addClass("active");
//     });
// });