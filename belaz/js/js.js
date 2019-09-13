let questions = document.querySelectorAll('.faq-list li p');

let answers = document.querySelectorAll('.faq-list__answer');

for (let i = 0; i < questions.length; i++) {
    questions[i].addEventListener('click', function() {
        this.classList.toggle('active');
        answers[i].classList.toggle('block');


    })
}