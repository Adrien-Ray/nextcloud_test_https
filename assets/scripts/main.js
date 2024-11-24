function correctMenuScroll() {
    console.log(document.querySelectorAll('a.nav__child'));
    for (let index = 0; index < document.querySelectorAll('a.nav__child').length; index++) {
        const element = document.querySelectorAll('a.nav__child')[index];
        element.addEventListener('click', () => {
            console.log('coucou click');
            
        })
    }
}