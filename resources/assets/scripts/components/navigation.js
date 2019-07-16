const CONFIG = {
    ELEM: '[data-navigation]',
    CONTAINER: '[data-main]',
};

const Navigation = {
    init() {
        const { ELEM, CONTAINER } = CONFIG;

        this.$elem = document.querySelector(ELEM);
        this.$elements = this.$elem.querySelectorAll('li');
        this.$scrollContainer = document.querySelector(CONTAINER);

        console.log('Init Navigation');

        this.addEvents();
    },

    addEvents() {
        console.log('events');

        this.$scrollContainer.addEventListener('scroll', () => {
            const scrollTop = window.innerHeight + this.$scrollContainer.scrollTop;
            console.log('scrollTop', scrollTop);

            this.$elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                console.log('elementTop: ', elementTop);
            });
        })
    },
};

export default Navigation;