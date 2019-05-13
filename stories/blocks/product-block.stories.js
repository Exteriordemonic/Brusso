import { storiesOf } from '@storybook/html';

import '../../resources/assets/styles/main.scss';

import sofa from '../../resources/assets/images/sofa.jpg'

storiesOf('Blocks', module)
  .add('Product block', () => `
    <h2 class="subtitle bold">Product block</h2>
    <hr>
    <br>
    <br>
    <div class="product-block" href="">
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
    </div>
    <br>
    <br>
    <xmp>
        <div class="product-block" href="">
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
        </div>
    </xmp>

  `);
