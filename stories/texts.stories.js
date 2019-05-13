import { storiesOf } from '@storybook/html';

import '../resources/assets/styles/main.scss';

storiesOf('Texts', module)
  .add('Headline', () => '<h1 class="headline">Headline</h1>')
  .add('Title', () => '<h2 class="title">Headline</h1>');
