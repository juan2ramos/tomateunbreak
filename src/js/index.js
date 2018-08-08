import '../scss/index.scss';
import zoomMap from './ZoomMap';
import flatpickr from "flatpickr";
import animateScrollTo from 'animated-scroll-to';
import {Spanish} from "flatpickr/dist/l10n/es.js"


if (document.querySelector('#svg-id'))
    zoomMap('#svg-id');
if (document.querySelector('#Choachi')) {
    const choachi = document.querySelector('#Choachi');
    console.log(choachi);
    choachi.addEventListener('click', function () {
        console.log('raro');
    });
}
flatpickr(".datePicker", {"locale": Spanish});

document.querySelector('.contactID').addEventListener('click', function () {
    animateScrollTo(document.querySelector('footer'));
});

