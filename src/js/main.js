import $ from 'cash-dom';

const placeholder = $('.placeholder');
const input = $('#newsletter-input');
input.on({
  focus: () => {
    placeholder.addClass('hidden');
  },
  blur: () => {
    if (input.val() !== '') return;
    placeholder.removeClass('hidden');
  },
});

const padLeft = input => ('00' + input).slice(-2);

const time = new Date();
let timeString = padLeft(time.getDay());
timeString += '/' + padLeft(time.getMonth());
timeString += '/' + time.getFullYear();
timeString += '/' + padLeft(time.getHours());
timeString += ':' + padLeft(time.getMinutes());

$('#container-time').text(timeString);
