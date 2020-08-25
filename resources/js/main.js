window.onscroll = function () {
    if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
        document.getElementById('nav').classList.add('nav-scroll');
    } else {
        document.getElementById('nav').classList.remove('nav-scroll');
    }
};
