import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

import sofaBG from '../../resources/assets/images/sofa-bg.jpg';
import sofa from '../../resources/assets/images/sofa.jpg';

const productBlock = `<div class="product-block" href="">
<a class="product-block__header">
    <h3 class="product-block__title subtitle light">
        Sofa white
    </h3>
    <span class="title bold">
        976<span class="subtitle bold">.75 </span>
    </span>
</a>
<img class="product-block__image" src="${sofa}" alt="Title">
<div class="product-block__footer">
    <a href="">
        <span class="icon icon--plus icon--dark"></span>
    </a>
</div>
</div>`;

storiesOf('Layouts', module)
  .add('Hero', () => `
    <h2 class="subtitle bold">Hero</h2>
    <hr>
    <br>
    <br>
    <section class="hero">
        <div class="container">
            <header class="hero__header">
                <h2 class="headline bold">
                    <a class="link" href="/sofa">Sofa</a>
                    Place 
                    <br>
                    in your home
                </h2>
            </header>
            <ul class="hero__products">
                <li>
                    ${productBlock}
                </li>
                <li>
                    ${productBlock}
                </li>
                <li>
                    ${productBlock}
                </li>
            </ul>
        </div>
        <img class="hero__image" src="${sofaBG}"> 
    </section>
    <br>
    <br>
    <xmp>
        
    </xmp>

  `);
