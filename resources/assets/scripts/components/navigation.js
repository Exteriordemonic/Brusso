const CONFIG = {
    ELEM: '[data-navigation]',
    CONTAINER: '[data-main]',
    REV_ELEM: '[data-rev-nav]',
    CLASS: {
        special: 'list__elem--special',
        reverse: 'list__elem--reverse',
    },
};

const Navigation = {
    init() {
        console.log('Init Navigation');

        const { ELEM, CONTAINER, REV_ELEM, CLASS } = CONFIG;

        //Static elements
        this.$elem = document.querySelector(ELEM);
        this.$elements = this.$elem.querySelectorAll('li');
        this.$scrollContainer = document.querySelector(CONTAINER);
        this.$revElem = document.querySelector(REV_ELEM);

        //Values
        this.$revElemPosition;
        this.$class = CLASS;

        //Set values
        this.setRevElemPosition();

        //Functions on init 
        this.addEvents();
    },

    addEvents() {
        console.log('events');

        this.$scrollContainer.addEventListener('scroll', () => {

            //Set values
            this.setRevElemPosition();

            const scrollTop = this.$scrollContainer.scrollTop;
            const revPosVal = this.$revElemPosition - scrollTop;

            console.log('Rev Elem Position', revPosVal);

            this.$elements.forEach(element => {
                const elementTop = element.offsetTop;

                if (elementTop > revPosVal) {
                    element.classList.add(this.$class.reverse);
                }

                else {
                    element.classList.remove(this.$class.reverse);
                }
            });
        })
    },

    setRevElemPosition() {
        this.$revElemPosition = this.$revElem.offsetTop;
    },
};

export default Navigation;