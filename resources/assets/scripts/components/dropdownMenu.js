const CONFIG = {
    TRIGGER: '[data-dropdown]',
    ELEM: '[data-toggle-button]',
    CLASS: '-is-active',
};

const dropdown = {
    init(){
        const { TRIGGER, ELEM } = CONFIG;
        this.$trigger = document.querySelectorAll(TRIGGER);
        this.$elem = document.querySelectorAll(ELEM);
        this.addEvent();
    },

    addEvent(){
        const { CLASS } = CONFIG;
        this.$trigger.addEventListener('click', (event) => {
            const $this = event.currentTarget;
            $this.classList.toggle(CLASS);
            this.toggleElem(CLASS);
           console.log('fap')
        });
    },

    toggleElem(CLASS) {
        this.$elem.classList.toggle(CLASS);
    },
};

export default dropdown;