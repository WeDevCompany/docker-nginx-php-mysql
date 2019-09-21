// import css
import './scss/style.scss';

import {
    add
} from './js/mathFunctions';

const y = add(2, 2);
console.log(y);

// Real code to execute
document.getElementById('btn-alert').addEventListener('click', () => {
    const x = add(2, 2);
    alert(x);
});
