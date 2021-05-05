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
