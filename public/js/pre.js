window.addEventListener("load", function () {
    var img = document.getElementById("myImage");
    var preloader = document.querySelector(".preloader");

    img.onload = function () {
        preloader.style.display = "none";
        img.style.display = "block";
    };
});
