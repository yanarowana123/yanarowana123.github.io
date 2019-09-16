let questions = document.querySelector('.faq-list');
let modal = document.querySelector('.modal');
let modalBtn = document.querySelector('.header-phone-btn');
let modalClose = document.querySelector('.modal__close');

modalBtn.addEventListener('click', function() {
    modal.style.display = 'block';
})

modalClose.addEventListener('click', function() {
    modal.style.display = "none";
})

window.addEventListener('click', function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
})

questions.addEventListener('click', function(e) {
    if (e.target.classList.contains('faq-list__text')) {
        if (e.target.parentNode.querySelector('.faq-list__answer').style.maxHeight) {
            e.target.parentNode.querySelector('.faq-list__answer').style.maxHeight = null;
            e.target.parentNode.querySelector('.faq-list__answer').classList.toggle('block');
        } else {
            e.target.parentNode.querySelector('.faq-list__answer').classList.toggle('block');
            e.target.parentNode.querySelector('.faq-list__answer').style.maxHeight = e.target.parentNode.querySelector('.faq-list__answer').scrollHeight + 'px';
        }


    }
})