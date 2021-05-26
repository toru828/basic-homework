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
    const form1 = document.getElementById('passwordIcon');
    const form2 = document.getElementById('login');
    if (!form1) {return;}
    if (!form2) {return;}
    if(event.target.className !== 'hide' && event.target !== form1) {
        form2.style.display = form2.style.display ? '' : 'none';
    }
});

function hidePassword () {
    const click1 = document.getElementById('login1');
    if (!click1) {return;}
    if (click1.type === 'text') {
        click1.type = 'password';
    } else {
        click1.type = 'text';
    }
}
