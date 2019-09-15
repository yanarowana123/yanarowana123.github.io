let questions = document.querySelector('.faq-list');

if(questions!==null){
	questions.addEventListener('click', function(e) {
    if (e.target.classList.contains('faq-list__text')) {
        e.target.parentNode.querySelector('.faq-list__answer').classList.toggle('block');
    }
})

}
