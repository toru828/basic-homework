function scrollToTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}
// Refactor to reuse at another place
function toggleScrollButton() {
    const lastPosition = window.scrollY;
    const scrollBtn = document.getElementById('scroll');

    if (lastPosition !== 0) {
        scrollBtn.setAttribute('style', 'display: block;');
    } else {
        scrollBtn.setAttribute('style', 'display: none;');
    }
}

window.addEventListener('scroll', function() {
    toggleScrollButton();
});

window.addEventListener('load', function() {
    toggleScrollButton();
});

function showLoginForm () {
    const form = document.getElementById('login');
    if (!form) {return;}
    form.style.display = form.style.display ? '' : 'block';
}

document.addEventListener('click', function(event) {
    const form1 = document.getElementById('form1');
    const form2 = document.getElementById('login0');
    const form3 = document.getElementById('login');
    const form4 = document.getElementById('login1');
    const form5 = document.getElementById('login2');
    const form6 = document.getElementById('login3');
    const form7 = document.getElementById('login4');
    const form8 = document.getElementById('passwordIcon');
    if (event.target !== form1 && event.target !== form2 && event.target !== form3 && event.target !== form4 && event.target !== form5 && event.target !== form6 && event.target !== form7 && event.target !== form8) {
        form3.style.display = form3.style.display ? '' : 'none';
    }
});

function hidePassword () {
    const click1 = document.getElementById('login2');
    if (!click1) {return;}
    if (click1.type === 'text') {
        click1.type = 'password';
    } else {
        click1.type = 'text';
    }
}
