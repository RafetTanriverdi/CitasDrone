window.onscroll = function () {
    const navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.style.backgroundColor = "#212121";
        navbar.style.height = "50px";

    } else {
        navbar.style.backgroundColor = "";
        navbar.style.transition = "all .6s";
        navbar.style.height = "";

    }
};


