const CONFIG = {
  CLOSE: '[data-close-mini-card]',
  OPEN: '[data-open-mini-card]',
  ELEM: '[data-mini-card]',
  CLASS: '-is-active',
};

const miniCard = {
  init() {
    const { CLOSE, OPEN, ELEM } = CONFIG;
    this.$close = document.querySelector(CLOSE);
    this.$open = document.querySelector(OPEN);
    this.$elem = document.querySelector(ELEM);

    this.addEvent();
  },

  addEvent() {
    const { CLASS } = CONFIG;
    this.$close.addEventListener('click', () => {
      this.toggleElem(CLASS);
    });

    this.$open.addEventListener('click', (event) => {
      event.preventDefault();
      this.toggleElem(CLASS);
    });
  },


  toggleElem(CLASS) {
    this.$elem.classList.toggle(CLASS);
  },
};

export default miniCard;
