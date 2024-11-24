function correctMenuScroll() {
    console.log(document.querySelectorAll('a.nav__child'));
    for (let index = 0; index < document.querySelectorAll('a.nav__child').length; index++) {
        const element = document.querySelectorAll('a.nav__child')[index];
        element.addEventListener('click', (element) => {
            console.log(element);
            const elementTarget = document.querySelector('#azerty');
            if (elementTarget) {
                elementTarget.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                });
                window.scrollBy(0, -50);
            }
        })
    }
}