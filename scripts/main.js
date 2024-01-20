document.addEventListener('DOMContentLoaded', function() {
    const hero = new HeroSlider('.swiper');
    hero.start();

    
    const _textAnimation = function (el, inview) {
        if(inview) {
            const ta = new TweenTextAnimation(el);
            ta.animate();
        }
    }

    const so = new ScrollObserver('.tween-animate-title', _textAnimation);


    const _inviewAnimation = function (el, inview) {
        if(inview) {
            el.classList.add('inview');
        } else {
            el.classList.remove('inview');
        }
    }

    const so2 = new ScrollObserver('.cover-slide', _inviewAnimation);


    // スクロールした時にヘッダーの背景に色を付ける
    const header = document.querySelector('.header');
    const _navAnimation = function (el, inview) {
        if(inview) {
            header.classList.remove('triggered');
        } else {
            header.classList.add('triggered');
        }
    }

    const so3 = new ScrollObserver('.nav-trigger', _navAnimation, { once: false });

    new MobileMenu;

});

// class Main {
//     constructor() {

//     }
// }

