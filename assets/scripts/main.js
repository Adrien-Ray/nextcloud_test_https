function closeNavMenuMobile() {
    // cette fonction referme le menu mobile au click sur un item
    elementsItems = document.querySelectorAll('a.nav__child');
    console.log(elementsItems);
    for (let index = 0; index < elementsItems.length; index++) {
        const element = elementsItems[index];
        element.addEventListener('click', () => {
            if (window.innerWidth <= 560) {
                // console.log("Le viewport est inférieur ou égal à 35rem.");
                console.log(element);
                document.querySelector('#burger').click();
            }
        })
    }
}