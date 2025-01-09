document.addEventListener("DOMContentLoaded", function () {
    const navbarTop = document.querySelector(".navbar-top");
    const navbarMain = document.querySelector(".navbar-main");
    let lastScrollTop = 0;

    navbarTop.style.transition = "transform 0.3s ease-in-out";
    navbarMain.style.transition = "transform 0.3s ease-in-out";

    window.addEventListener("scroll", function () {
        let scrollTop =
            window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scroll ke bawah
            navbarTop.style.transform = "translateY(-100%)";
            navbarMain.style.transform =
                "translateY(-" + navbarTop.offsetHeight + "px)";
        } else {
            // Scroll ke atas
            navbarTop.style.transform = "translateY(0)";
            navbarMain.style.transform = "translateY(0)";
        }

        lastScrollTop = scrollTop;
    });
});
