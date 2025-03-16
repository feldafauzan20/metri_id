import Swiper from "swiper";
import "swiper/css";

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

import Lenis from "lenis";

gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.normalizeScroll(true);

// Lenis smooth scroll setup
const lenis = new Lenis();
lenis.on("scroll", ScrollTrigger.update);
gsap.ticker.add((time) => lenis.raf(time * 1000));
gsap.ticker.lagSmoothing(0);

// Parallax animation
const handleParallax = () => {
    const parallaxContainer = document.querySelector(".parallax-container");

    if (window.innerWidth >= 1024) {
        console.log("Parallax mode aktif");

        // Pastikan parallax hanya di-inisialisasi sekali
        if (!parallaxContainer.dataset.parallaxInitialized) {
            parallaxContainer.dataset.parallaxInitialized = true;

            gsap.timeline({
                scrollTrigger: {
                    trigger: ".parallax-container",
                    start: "top top",
                    end: "500% top",
                    scrub: 1.5, // Ubah scrub jadi lebih kecil agar lebih smooth
                    pin: true,
                },
            })
                .to("#scroll", {
                    opacity: 0,
                    duration: 0.5,
                    ease: "power2.inOut",
                })
                .fromTo(
                    "#sun",
                    { y: "20vh" },
                    { y: "-3vh", duration: 3, ease: "power2.inOut" }
                )
                .to(
                    "#plant1",
                    { duration: 5, left: "70vw", ease: "power2.inOut" },
                    "<"
                )
                .to(
                    "#plant2",
                    { duration: 5, left: "-50vw", ease: "power2.inOut" },
                    "<"
                )
                .to(
                    "#bird1",
                    { duration: 5, left: "50vw", ease: "power2.inOut" },
                    "<"
                )
                .to(
                    "#bird2",
                    { duration: 5, left: "-50vw", ease: "power2.inOut" },
                    "<"
                )
                .to("#tree", { scale: 5, duration: 6, ease: "power2.inOut" })
                .to("#overlay", {
                    opacity: 1,
                    duration: 1,
                    ease: "power2.inOut",
                }) // Fade Out
                .to(
                    ".parallax-container",
                    { opacity: 0, duration: 0.5 },
                    "-=0.5"
                ) // Hilangkan parallax
                .to("#overlay", {
                    opacity: 0,
                    duration: 1,
                    ease: "power2.inOut",
                }) // Fade In ke section berikutnya
                .to(
                    ".mysteps",
                    { opacity: 1, duration: 1.5, ease: "power2.out" },
                    "-=1"
                );

            // Pastikan gambar terlihat kembali di mode desktop
            document
                .querySelectorAll(".parallax-container img")
                .forEach((img) => {
                    img.style.display = "block";
                });
        }
    } else {
        console.log("Mobile mode aktif");

        // Hapus animasi dan reset parallax
        ScrollTrigger.getAll().forEach((trigger) => {
            if (
                trigger.trigger &&
                trigger.trigger.classList.contains("parallax-container")
            ) {
                trigger.kill(); // Hentikan ScrollTrigger pada parallax-container
            }
        });

        gsap.globalTimeline.getChildren().forEach((animation) => {
            if (
                animation.vars.scrollTrigger &&
                animation.vars.scrollTrigger.trigger === ".parallax-container"
            ) {
                animation.kill(); // Hentikan animasi yang terhubung ke parallax-container
            }
        });

        gsap.set(".parallax-container", { clearProps: "all" }); // Hapus properti GSAP yang diterapkan sebelumnya
        gsap.set(
            [
                "#scroll",
                "#sun",
                "#plant1",
                "#plant2",
                "#bird1",
                "#bird2",
                "#tree",
                "#overlay",
            ],
            { clearProps: "all" }
        );

        // Hapus inisialisasi parallax saat kembali ke mobile
        if (parallaxContainer.dataset.parallaxInitialized) {
            delete parallaxContainer.dataset.parallaxInitialized;
        }
    }
};

// Jalankan saat halaman pertama kali dimuat
handleParallax();

let previousWidth = window.innerWidth;

// Jalankan ulang ketika layar di-resize
window.addEventListener("resize", () => {
    const currentWidth = window.innerWidth;

    if (previousWidth < 1024 && currentWidth >= 1024) {
        console.log("Berpindah ke mode desktop, reset parallax");
        location.reload(); // Paksa reload halaman agar parallax dimuat ulang
    }

    previousWidth = currentWidth;
    handleParallax();
});

// mysteps cards animation
gsap.from(".mysteps div", {
    opacity: 0,
    duration: 1,
    ease: "power2.inOut",
    scrollTrigger: {
        trigger: ".mysteps",
        start: "top top",
        end: "bottom top",
        scrub: 3,
    },
});

// Sticky cards setup
const stickySection = document.querySelector(".mysteps");
const stickyHeight = window.innerHeight * 7; // Tambah sedikit agar animasi tidak terlalu pendek
const cards = document.querySelectorAll(".card");
const totalCards = cards.length;

ScrollTrigger.create({
    trigger: stickySection,
    start: "top top",
    end: `+=${stickyHeight}px`,
    pin: true,
    pinSpacing: true,
    onUpdate: (self) => positionCards(self.progress),
});

// Cards positioning helper functions
const getRadius = () => window.innerHeight * 2.5;

const arcAngle = Math.PI * 0.6;
const startAngle = Math.PI / 2 - arcAngle / 2;

const getCardSpacing = () => arcAngle / Math.max(3, totalCards - 1);

function getCardSize() {
    const baseHeight = window.innerHeight * 0.65;
    const aspectRatio = 500 / 550;
    const width = baseHeight * aspectRatio;

    return {
        width: Math.min(width, 400),
        height: baseHeight,
    };
}

function positionCards(progress = 0) {
    const radius = getRadius();
    const totalTravel = 1 + totalCards / 7.5;
    const adjustedProgress = (progress * totalTravel - 1) * 0.75;
    const cardSize = getCardSize();
    const cardSpacing = getCardSpacing();

    cards.forEach((card, i) => {
        const angle =
            startAngle + cardSpacing * i + arcAngle * adjustedProgress;
        const x = Math.cos(angle) * radius;
        const y = Math.sin(angle) * radius;
        const rotation = (angle - Math.PI / 2) * (180 / Math.PI);

        gsap.set(card, {
            x: x,
            y: -y + radius,
            rotation: -rotation,
            transformOrigin: "center center",
            width: cardSize.width,
            height: cardSize.height,
            scale: 1,
        });
    });

    adjustCardsMargin();
}

// Inisialisasi posisi kartu
positionCards(0);

// Update saat window diresize
window.addEventListener("resize", () => positionCards(0));

/**
 * Fungsi untuk menyesuaikan margin-top kartu di berbagai layar landscape
 */
function adjustCardsMargin() {
    const cardsContainer = document.querySelector(".cards");
    const screenWidth = window.innerWidth;
    const screenHeight = window.innerHeight;
    const isLandscape = screenWidth > screenHeight;

    if (isLandscape) {
        if (screenWidth >= 768 && screenWidth <= 1024) {
            // Medium landscape (tablet)
            cardsContainer.style.marginTop = "50%";
        } else if (screenWidth < 768) {
            // Mobile landscape
            cardsContainer.style.marginTop = "25%";
        } else {
            // Default landscape (di atas 1024px)
            cardsContainer.style.marginTop = "30%";
        }
    } else {
        // Normal portrait mode
        cardsContainer.style.marginTop = "70%";
    }
}

// Panggil saat pertama kali halaman dimuat
adjustCardsMargin();

// Update saat window diresize
window.addEventListener("resize", adjustCardsMargin);

// Swiper slider setup
const swiper = new Swiper(".swiper", {
    slidesPerView: 1,
    grid: {
        rows: 2, // Membuat dua baris dalam satu slide
    },
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
});

document.querySelector(".button-prev").addEventListener("click", () => {
    swiper.slidePrev();
});

document.querySelector(".button-next").addEventListener("click", () => {
    swiper.slideNext();
});

// === To Top Button Feature ===
const toTopBtn = document.createElement("button");
toTopBtn.id = "toTopBtn";
toTopBtn.textContent = "↑";
toTopBtn.style.cssText = `
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 10px 15px;
    border-radius: 50%;
    border: none;
    cursor: pointer;
    font-size: 20px;
    opacity: 0;
    transition: opacity 0.3s;
    z-index: 1000;
`;
document.body.appendChild(toTopBtn);

// Handle scroll event
window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
        toTopBtn.style.opacity = "1";
    } else {
        toTopBtn.style.opacity = "0";
    }
});

// Scroll to top on click
toTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");
const ourServicesBtn = document.querySelector("#our-services-btn");
const servicesMenu = document.querySelector("#services-menu");
const serviceDropdownSimbol = document.querySelector("#dropdownSimbol");

// Toggle Navbar (Mobile)
hamburger.addEventListener("click", function () {
    this.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

// Toggle Our Services (Mobile)
ourServicesBtn.addEventListener("click", function () {
    if (window.innerWidth < 1024) {
        serviceDropdownSimbol.classList.toggle("rotate-180");
        servicesMenu.classList.toggle("hidden");
    }
});

// Klik di luar akan menutup menu
document.addEventListener("click", function (e) {
    if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) {
        navMenu.classList.add("hidden");
        hamburger.classList.remove("hamburger-active");
    }
});
