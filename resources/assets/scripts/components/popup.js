const CONFIG = {
    TRIGGER: '[data-toggle-popup]',
    ELEM: '[data-popup]',
    CLASS: '-is-active',
};

const popup = {
    init() {
        const { TRIGGER, ELEM, CLASS } = CONFIG;

        this.$trigger = document.querySelectorAll(TRIGGER);
        this.$elem = document.querySelector(ELEM);
        this.$class = CLASS;

        this.addEvent();
    },

    addEvent() {
        const toggleElem = () => this.toggleElem();

        this.$trigger.forEach(element => {
            element.addEventListener('click', (event) => {
                event.preventDefault();
                
                toggleElem();
            });
        });
    },

    toggleElem() {
        this.$elem.classList.toggle(this.$class);
    },
};

export default popup;