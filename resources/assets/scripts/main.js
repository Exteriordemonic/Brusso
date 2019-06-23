// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

//Woocommerce
import priceFormat from './woocommerce/price-format';

//Components
import gallery from './components/gallery';
import slider from './components/slider';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  priceFormat.init();
  gallery.init();
  slider.init();
});

setTimeout(()=>{slider.resize()}, 3000);
setTimeout(()=>{slider.resize()}, 5000);
setInterval(()=>{slider.resize()}, 5000);

