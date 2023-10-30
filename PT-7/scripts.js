// Toggle class active
const navbarNav = document.querySelector('.navbar-nav');

// Ketika Menu Di click
document.querySelector('#menu').onclick = () => {
    navbarNav.classList.toggle('active');
}

// Klik di luar sidebar untuk menghilangkan nav
const hamburger = document.querySelector('#menu');

document.addEventListener('click', function(e) {
    if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active')
    }
});

var lightmode = document.getElementById("lightmode");

lightmode.onclick = function(){
    document.body.classList.toggle("light-theme");
    if(document.body.classList.contains("light-theme")){
        lightmode.src = "icon/moon.png";
    } else {
        lightmode.src = "icon/sun.png"
    }
};

function message(){
    var Name = document.getElementById('nama');
    var email = document.getElementById('email');
    var nohp = document.getElementById('noHp');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger')

    if(Name.value === '' || email.value === '' || nohp.value === ''){
        danger.style.display = 'block';
    } else {
        setTimeout(() => {
            Name.value = '';
            email.value = '';
            nohp.value = ''
        }, 2000);

        success.style.display = 'block';
    }

    setTimeout(() => {
        danger.style.display = 'none';
        success.style.display = 'none';
    }, 4000);
}


