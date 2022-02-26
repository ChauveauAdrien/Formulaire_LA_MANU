
function scroll() {
    const header = document.querySelector('.header-wrapper');

    window.addEventListener('scroll', () => {
        if(window.scrollY > 100) {
            header.classList.add('scroll');
        }else{
            header.classList.remove('scroll');
        }
    });
}   
scroll();


const prevBtns = document.querySelectorAll('.prev');
const nextBtns = document.querySelectorAll('.next');
const progress = document.querySelector('.progress');
const steps = document.querySelectorAll('.step');
const progressSteps = document.querySelectorAll('.progress-step')
let counter = 0;

for (const btn of nextBtns) {
    btn.addEventListener('click', () => {
        steps[counter].classList.remove('step-active')
        progressSteps[counter].classList.add('progress-step-check')
        counter++;
        progressSteps[counter].classList.add('progress-step-active')
        steps[counter].classList.add('step-active')
        
    })
}

for (const btn of prevBtns) {
    btn.addEventListener('click', () => {
        steps[counter].classList.remove('step-active')
        progressSteps[counter].classList.remove('progress-step-active')
        counter--;
        progressSteps[counter].classList.remove('progress-step-check')
        progressSteps[counter].classList.add('progress-step-active')
        steps[counter].classList.add('step-active')
        progressBar()
    })
}









