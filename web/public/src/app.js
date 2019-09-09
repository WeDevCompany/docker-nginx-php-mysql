// import css
import './scss/style.scss';

import { add } from './js/mathFunctions';

function showCount() {
  const x = add(2 + 2);
  console.log(x);
}
// Real code to execute
document.getElementById('btn-alert').addEventListener('click', showCount);
