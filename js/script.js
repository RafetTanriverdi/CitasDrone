window.onscroll = function () {
    const navbar = document.getElementById("navbar");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.style.backgroundColor = "#212121";
        navbar.style.height = "55px";
        navbar.style.display = "flex";
        navbar.style.alignItems = "center";

    } else {
        navbar.style.backgroundColor = "";
        navbar.style.transition = "all .6s";
        navbar.style.height = "";

    }
};

//video speed slowly

document.addEventListener("DOMContentLoaded", function() {
    var videos = document.getElementsByClassName("slow-video");
    for (var i = 0; i < videos.length; i++) {
        videos[i].playbackRate = 0.5; // Oynatma hızını yarıya indirir.
    }
});
