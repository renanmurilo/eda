// Toggle Menu
let openMenu = document.querySelector('.open__menu');
let ico = document.querySelector('.hamburguer-line')
let menu = document.querySelector('.menu')
let closeMenu = document.querySelector('.close__menu')
let language = document.querySelector('.language')
let logo = document.querySelector('.logo__mobile')

openMenu.addEventListener('click', (e) => {
    e.preventDefault();

    closeMenu.classList.toggle('active')
    language.classList.toggle('active');
    openMenu.classList.toggle('active')
    menu.classList.toggle('active')
    logo.classList.toggle('active')
});

closeMenu.addEventListener('click', (e) => {
    e.preventDefault();

    openMenu.classList.toggle('active')
    language.classList.toggle('active');
    closeMenu.classList.toggle('active')
    menu.classList.toggle('active');
    logo.classList.toggle('active')
})

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