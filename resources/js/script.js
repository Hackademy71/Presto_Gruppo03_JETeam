const img=document.querySelector("#imgNav2");

document.addEventListener('scroll', () => {
    if (window.scrollY > 70) {
      img.classList.remove('d-none')
      img.style.transition = ".4s"
    } else {
      img.classList.add('d-none')
    }
  });

const faqQuestions = document.querySelectorAll('.faq-question');
const faqAnswers = document.querySelectorAll('.faq-answer');

// Aggiungo un listener di eventi per ogni domanda
faqQuestions.forEach(question => {
  question.addEventListener('click', () => {
    // Rimuovo la classe "active" da tutte le risposte
    faqAnswers.forEach(answer => answer.classList.remove('active'));
    
    // Aggiungo la classe "active" alla risposta corretta
    question.nextElementSibling.classList.add('active');
  });
});


