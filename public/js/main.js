document.addEventListener("DOMContentLoaded", () => {
    const menuBtn = document.getElementById("menu-btn");
    const navLinks = document.getElementById("nav-links");
    const menuBtnIcon = menuBtn.querySelector("i");

    menuBtn.addEventListener("click", () => {
        navLinks.classList.toggle("open");
        const isOpen = navLinks.classList.contains("open");
        menuBtnIcon.setAttribute(
            "class",
            isOpen ? "ri-close-line" : "ri-menu-line"
        );
    });

    navLinks.addEventListener("click", () => {
        navLinks.classList.remove("open");
        menuBtnIcon.setAttribute("class", "ri-menu-line");
    });

    const scrollRevealOption = {
        distance: "50px",
        origin: "bottom",
        duration: 1000,
    };

    ScrollReveal().reveal(".header__container p", {
        ...scrollRevealOption,
    });
    ScrollReveal().reveal(".header__container h1", {
        ...scrollRevealOption,
        delay: 500,
    });
    ScrollReveal().reveal(".header__container .header__flex", {
        ...scrollRevealOption,
        delay: 1000,
    });

    const faq = document.querySelector(".faq__grid");
    if (faq) {
        faq.addEventListener("click", (e) => {
            const target = e.target;
            const faqCard = target.closest(".faq__card");
            if (
                faqCard &&
                (target.closest(".faq__header") ||
                    target.classList.contains("ri-arrow-down-s-line"))
            ) {
                if (faqCard.classList.contains("active")) {
                    faqCard.classList.remove("active");
                } else {
                    Array.from(faq.children).forEach((item) => {
                        item.classList.remove("active");
                    });
                    faqCard.classList.add("active");
                }
            }
        });
    }

    ScrollReveal().reveal(".faq__image img", {
        ...scrollRevealOption,
        origin: "left",
    });

    ScrollReveal().reveal(".article__card", {
        ...scrollRevealOption,
        interval: 500,
    });

    ScrollReveal().reveal(".mgm__card", {
        interval: 200,
        distance: "50px",
        duration: 1000,
        origin: "bottom",
        easing: "ease-in-out",
        rotate: { x: 10, y: 10, z: 0 },
    });

    const swiper = new Swiper(".swiper", {
        loop: true,
        slidesPerView: 1,
        centeredSlides: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    ScrollReveal().reveal(".feature-card", {
        ...scrollRevealOption,
        interval: 200,
    });

    ScrollReveal().reveal(".trust__card", {
        ...scrollRevealOption,
        interval: 300,
    });

    const bantuanGrid = document.querySelector(".bantuan__grid");
    if (bantuanGrid) {
        bantuanGrid.addEventListener("click", (e) => {
            const target = e.target;
            const card = target.closest(".bantuan__card");
            if (
                card &&
                (target.closest(".bantuan__header") ||
                    target.classList.contains("ri-arrow-down-s-line"))
            ) {
                if (card.classList.contains("active")) {
                    card.classList.remove("active");
                } else {
                    Array.from(bantuanGrid.children).forEach((item) => {
                        item.classList.remove("active");
                    });
                    card.classList.add("active");
                }
            }
        });
    }
});
