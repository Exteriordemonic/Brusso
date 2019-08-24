import miniCart from './mini-card';
import 'jquery';


const CONFIG = {
  ELEM: '[data-add-to-basket]',
  QAN: '[data-basket-count]',
  VARBTN: '.single_variation_wrap button.single_add_to_cart_button',
};

const addToCart = {
  init() {
    const { ELEM, QAN, VARBTN } = CONFIG;

    this.$elem = document.querySelectorAll(ELEM);
    this.$varBtn = document.querySelectorAll(VARBTN);
    this.$qan = document.querySelector(QAN);

    this.addEvent();
    this.$allow = true;
  },

  addEvent() {
    this.$elem.forEach((element) => {
      element.addEventListener('click', (event) => {
        event.preventDefault();

        if (this.$allow) {
          this.$allow = false;
          const link = element.getAttribute('href');

          this.loadBasket(element, link);
        }
      });
    });
  },

  loadBasket(link) {
    const $this = this;
    $('#mini-card').load(`${link} #mini-card > *`, function () {
      $('#basket-count').load(`${window.location.href} #basket-count > *`);

      miniCart.init();
      miniCart.show();

      $this.$allow = true;

    });
  },
};

export default addToCart;
