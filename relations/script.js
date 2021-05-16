/*

const h = document.getElementById('header');
console.log(header);

let c = 1;

h.addEventListener('mouseleave', () => {
    if (!c == 1) {
        h.classList.add('animation-header-second')
    }
    console.log(c)
})

h.addEventListener('mouseenter', () => {
    h.classList.add('animation-header-frist')
    c++
    console.log(c)
})



















/*




h.addEventListener('mouseenter', () => {
    h.classList.add(animation-header-frist)
    h.classList.remove(animation-header-second)
})

h.removeEventListener('mouseleave', () => {
    h.classList.add(animation-header-second)
    h.classList.remove(animation-header-frist)
})
1. 
// header.classList.add('header-unfolded') 
//header.classList.remove('header-folded')

2.
// h.classList.add('header-unfolded')
// h.classList.remove('header-folded')

header.addEventListener('animationstart', () => {
        
    })


a = 1;

function oneAnimationAtATime() {
    if (a == 1) {
        h.addEventListener('mouseenter', () => {
            h.style.animation = "header-onselect 0.7s ease-in-out"
            setTimeout(() => {
                h.classList.add('header-unfolded')
                h.classList.remove('header-folded')
                a = 2
                oneAnimationAtATime()
            }, 700)
            console.log(a)
        })

        h.removeEventListener('mouseleave', () => {
            h.style.animation = "header-onselect 0.7s ease-in-out"
            setTimeout(() => {
                h.classList.add('header-unfolded')
                h.classList.remove('header-folded')
                a = 2
                oneAnimationAtATime()
            }, 700)
            console.log(a)
        })
    }

    if (a == 2) {
        h.addEventListener('mouseleave', () => {
            h.style.animation = "header-onselect-after 0.7s ease-in-out"
            setTimeout(() => {
                h.classList.add('header-folded')
                h.classList.remove('header-unfolded')
                a = 1
                oneAnimationAtATime()
        }, 700)
            console.log(a)
        })
    }
    h.removeEventListener('mouseenter', () => {
        h.style.animation = "header-onselect 0.7s ease-in-out"
        setTimeout(() => {
            h.classList.add('header-unfolded')
            h.classList.remove('header-folded')
            a = 2
        }, 700)
        console.log(a)
    })

}

oneAnimationAtATime()

// enableAnimation();

/*h.addEventListener('mouseover', function exclusiveAnimation() {
    h.classList.add('animation-header')

})

/* h.addEventListener('blur', function exclusiveAnimation() {
    h.classList.remove('animation-header-hov')
    setTimeout(() => {
        h.classList.add('animation-header-hov')
        h.classList.remove('animation-header')},
        700)

})

/*

Esta idea la saque del siguiente post de stackoverflow. Estoy intentando rehacerlo de una forma mas sencilla para que sea mas 'adecuado' a mi forma novata de programar

https://stackoverflow.com/questions/27938900/how-to-prevent-css-keyframe-animation-to-run-on-page-load

*/